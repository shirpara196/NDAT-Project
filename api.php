<?php
// api.php
// This script handles OTP sending and verification, and Salesforce lead submission.
// It implements a two-factor identification flow where mobile number verification
// via OTP is required before the main form data is submitted to Salesforce.

// --- TEMPORARY DEBUGGING: Enable all error reporting (REMOVE IN PRODUCTION!) ---
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// --- END TEMPORARY DEBUGGING ---

session_start(); // Start the session to store OTP and verification status.
                 // This must be at the very top of the script.

header('Content-Type: application/json'); // Set content type to JSON for API responses.

// --- IMPORTANT: Salesforce API Credentials (Placeholder - SECURE THESE IN PRODUCTION!) ---
// In a production environment, use environment variables, a secure configuration file, or a secrets management service.
define('SF_CLIENT_ID', '3MVG9SnjeJhUwbWEaBsCSNs4xWGA9R0u7.xCdnOTtOrgnjUwzzK3tMGEN.BER6k5KNmZwWy3XZA58ek28vI0h'); // Salesforce Connected App Consumer Key
define('SF_CLIENT_SECRET', 'E813852605203109F47BFAECFE306B49A81110ACC92818F7C5DC198C0F7A1ABB'); // Salesforce Connected App Consumer Secret
define('SF_USERNAME', 'nmimsintegrationuser@nmims.com.dev'); // Salesforce Integration User Username
define('SF_PASSWORD', 'Connect#1'); // Salesforce Integration User Password + Security Token (if applicable, appended directly)
define('SF_LOGIN_URL', 'https://test.salesforce.com/services/oauth2/token'); // Salesforce OAuth token endpoint (use 'https://login.salesforce.com/services/oauth2/token' for production)
define('SF_APEX_REST_URL_SUFFIX', '/services/apexrest/LeadCreation'); // Your custom Apex REST endpoint path in Salesforce

// --- IMPORTANT: Gupshup SMS API Credentials (Placeholder - SECURE THESE IN PRODUCTION!) ---
define('GUPSHUP_USERNAME', '2000257703'); // Your Gupshup Login User ID
define('GUPSHUP_PASSWORD', 'RGncUV5d');    // Your Gupshup Password
define('GUPSHUP_SMS_URL', 'https://enterprise.smsgupshup.com/GatewayAPI/rest'); // Gupshup Enterprise REST API endpoint

// Initialize response array
$response = ['success' => false, 'message' => 'An unknown error occurred.'];

// Decode JSON input from the frontend (POST requests)
$input = json_decode(file_get_contents('php://input'), true);

// Log raw input for debugging
error_log("DEBUG: Raw JSON Input: " . file_get_contents('php://input'));
error_log("DEBUG: Decoded Input Array: " . print_r($input, true));


// Get the requested action from URL query parameter (e.g., api.php?action=send_otp)
$action = $_GET['action'] ?? '';
error_log("DEBUG: Action requested: {$action}");

// Handle different API actions based on the 'action' parameter
switch ($action) {
    case 'send_otp':
        // The frontend sends only the 10-digit mobile number. Prepend '91' for Gupshup.
        $localMobileNumber = filter_var($input['mobile'] ?? '', FILTER_SANITIZE_NUMBER_INT); // Sanitize input
        $localMobileNumber = substr($localMobileNumber, 0, 10); // Ensure it's max 10 digits
        $fullMobileNumber = '91' . $localMobileNumber; // Assuming India numbers based on your sample

        // Server-side validation for the 10-digit local mobile number.
        if (!preg_match('/^[0-9]{10}$/', $localMobileNumber)) {
            $response = ['success' => false, 'message' => 'Invalid mobile number format. Please enter a 10-digit number.'];
            break; // Exit switch case
        }

        // Generate a random 6-digit OTP
        $otp = rand(100000, 999999);

        // Store the generated OTP and its expiry time in the user's session.
        // Use the full mobile number (e.g., 919876543210) as part of the session key.
        $_SESSION['otp_mobile_' . $fullMobileNumber] = $otp;
        $_SESSION['otp_expiry_' . $fullMobileNumber] = time() + 180; // OTP valid for 5 minutes (300 seconds)

        // Log the generated OTP for debugging purposes. REMOVE THIS IN PRODUCTION!
        error_log("DEBUG: OTP generated for {$fullMobileNumber}: {$otp}");
        error_log("DEBUG: OTP stored in session for key: otp_mobile_{$fullMobileNumber} (Expires: " . date('Y-m-d H:i:s', $_SESSION['otp_expiry_' . $fullMobileNumber]) . ")");


        // --- Gupshup SMS API Integration (SendMessage method) ---
        // Use the exact message template from your provided URL, replacing placeholders.
        $otp_message_template = "Hello, @__123__@ is your One Time Password (OTP) for @__123__@ This OTP is valid till @__123__@ - Team NMIMS";

        // Replace placeholders:
        $current_time_readable = date('H:i', $_SESSION['otp_expiry_' . $fullMobileNumber]); // Format expiry time
        $otp_message = str_replace(
            ['@__123__@', '@__123__@', '@__123__@'], // Placeholders in order
            [$otp, 'your account verification', $current_time_readable], // Values to replace with
            $otp_message_template
        );

        // Prepare the parameters for the GET request, as per your provided sample URL.
        $gupshup_params = [
            'method'      => 'SendMessage', // Method as per your sample URL
            'send_to'     => $fullMobileNumber, // Full number with 91
            'msg'         => $otp_message,
            'userid'      => GUPSHUP_USERNAME,
            'password'    => GUPSHUP_PASSWORD,
            'v'           => '1.1',
            'msg_type'    => 'TEXT',
            'auth_scheme' => 'plain', // Authentication scheme as per your sample URL
            'format'      => 'text',  // Format as per your sample URL
        ];

        // Construct the full URL for the GET request
        $full_gupshup_url = GUPSHUP_SMS_URL . "?" . http_build_query($gupshup_params);

        // Initialize cURL session with the full URL
        $ch = curl_init($full_gupshup_url);

        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string instead of printing it
        curl_setopt($ch, CURLOPT_TIMEOUT, 180); // Set a maximum time in seconds for the cURL operation to execute
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow any 'Location:' headers that the server sends (redirects)

        // --- IMPORTANT SECURITY WARNING: SSL VERIFICATION BYPASS ---
        // These settings disable SSL certificate verification. While they might allow connections
        // to servers with self-signed certificates or misconfigured SSL, they severely compromise
        // the security of your connection by making it vulnerable to Man-in-the-Middle (MITM) attacks.
        // In a production environment, you should strive to configure your server's CA certificate bundle
        // correctly and remove these lines (or set them to 'true').
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        // --- END SECURITY WARNING ---

        // --- Debugging Additions (Crucial for troubleshooting network/cURL issues) ---
        // Enable verbose output for cURL, which will be written to the stream specified by CURLOPT_STDERR.
        // REMEMBER TO REMOVE OR DISABLE THIS IN PRODUCTION FOR SECURITY AND PERFORMANCE.
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        // Create a temporary in-memory stream to capture verbose cURL output.
        $fp = fopen('php://temp', 'w+');
        // Direct verbose output to the temporary stream.
        curl_setopt($ch, CURLOPT_STDERR, $fp);
        // --- End Debugging Additions ---

        // Execute the cURL request
        $gupshup_response = curl_exec($ch);

        // Get information about the cURL transfer
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_error = curl_error($ch); // Get any cURL error message (e.g., network issues)

        // Close the cURL session
        curl_close($ch);

        // Capture verbose output from the temporary stream and log it.
        rewind($fp); // Rewind stream pointer to the beginning
        $verbose_log = stream_get_contents($fp); // Read all contents from the stream
        fclose($fp); // Close the temporary stream
        error_log("Gupshup cURL VERBOSE LOG for {$fullMobileNumber} (SendMessage):\n{$verbose_log}");
        error_log("Gupshup Sent URL (for debug): " . $full_gupshup_url); // Log the full URL for debugging

        // --- Process Gupshup API Response ---
        // Gupshup's SendMessage API response format usually starts with "success" or "error".
        if ($gupshup_response === false) {
            // This is the error path you were previously hitting, where cURL itself failed.
            error_log("Gupshup SMS cURL ERROR: {$curl_error} | HTTP Code: {$http_code} | URL: " . $full_gupshup_url);
            $response = ['success' => false, 'message' => 'An internal server error occurred while sending OTP. Please try again. (cURL failed)'];
        } elseif ($http_code === 200) {
            // cURL connected successfully and received an HTTP 200 OK.
            // Now, we parse Gupshup's specific text-based response.
            if (strpos(strtolower($gupshup_response), 'success') !== false) {
                // Check for common failure reasons that might still be present in a "success" response string
                if (strpos(strtolower($gupshup_response), 'dnd activated') !== false) {
                    $response = ['success' => false, 'message' => 'OTP sent to Gupshup, but recipient is on DND.'];
                    error_log("Gupshup API Info: Message sent to DND number for {$fullMobileNumber}. Response: {$gupshup_response}");
                } elseif (strpos(strtolower($gupshup_response), 'invalid number') !== false || strpos(strtolower($gupshup_response), 'invalid phone_no') !== false) {
                    $response = ['success' => false, 'message' => 'OTP sent to NMIMS, but mobile number is invalid.'];
                    error_log("Gupshup API Info: Invalid number for {$fullMobileNumber}. Response: {$gupshup_response}");
                } elseif (strpos(strtolower($gupshup_response), 'insufficient balance') !== false) {
                    $response = ['success' => false, 'message' => 'OTP sent to NMIMS, but account has insufficient balance.'];
                    error_log("Gupshup API Info: Insufficient balance for {$fullMobileNumber}. Response: {$gupshup_response}");
                }
                // Add more specific checks if you identify other recurring "soft failures" from Gupshup in the future
                else {
                    $response = ['success' => true, 'message' => 'OTP sent successfully.'];
                }
            } else {
                // Gupshup API returned an error message within its 200 OK response, but not a recognized success.
                error_log("Gupshup API Error (HTTP 200 but no success indicator): Full Response: {$gupshup_response}");
                $response = ['success' => false, 'message' => 'Failed to send OTP. NMIMS response: ' . $gupshup_response];
            }
        } else {
            // HTTP status code was not 200 (e.g., 401 Unauthorized, 400 Bad Request, 500 Server Error).
            error_log("Gupshup API HTTP Error: {$http_code} | Response: {$gupshup_response} | cURL Error: {$curl_error}");
            $response = ['success' => false, 'message' => 'SMS service responded with an error (HTTP ' . $http_code . '). Please check your Gupshup username/password and account status.'];
        }

        break; // End of 'send_otp' case

    case 'verify_otp':
        // The frontend sends only the 10-digit mobile number. Prepend '91' for session key.
        $localMobileNumber = filter_var($input['mobile'] ?? '', FILTER_SANITIZE_NUMBER_INT);
        $localMobileNumber = substr($localMobileNumber, 0, 10);
        $fullMobileNumber = '91' . $localMobileNumber; // Match how it was stored in session

        $user_otp = filter_var($input['otp'] ?? '', FILTER_SANITIZE_NUMBER_INT); // Sanitize user input OTP

        // Verify OTP locally using session data
        $stored_otp = $_SESSION['otp_mobile_' . $fullMobileNumber] ?? null;
        $otp_expiry = $_SESSION['otp_expiry_' . $fullMobileNumber] ?? 0;

        // Debugging logs for verification - check your PHP error log!
        error_log("DEBUG VERIFY: Attempting to verify for mobile: {$fullMobileNumber}");
        error_log("DEBUG VERIFY: User entered OTP: '{$user_otp}'");
        error_log("DEBUG VERIFY: Stored OTP: '{$stored_otp}' (Type: " . gettype($stored_otp) . ")");
        error_log("DEBUG VERIFY: OTP Expiry: " . date('Y-m-d H:i:s', $otp_expiry) . ", Current Time: " . date('Y-m-d H:i:s', time()));


        if (!$stored_otp) {
            error_log("DEBUG VERIFY: Stored OTP not found in session for key otp_mobile_{$fullMobileNumber}. Session might be empty or expired.");
            $response = ['success' => false, 'message' => 'OTP not sent or session expired. Please request a new OTP.'];
        } elseif ($otp_expiry < time()) {
            error_log("DEBUG VERIFY: OTP for {$fullMobileNumber} expired.");
            $response = ['success' => false, 'message' => 'OTP expired. Please request a new OTP.'];
            // Clean up expired OTP from session
            unset($_SESSION['otp_mobile_' . $fullMobileNumber]);
            unset($_SESSION['otp_expiry_' . $fullMobileNumber]);
        } elseif ((string)$stored_otp === (string)$user_otp) { // Type-casting to string for strict comparison safety
            $response = ['success' => true, 'message' => 'Mobile number verified successfully.'];
            // Invalidate OTP after successful verification to prevent reuse
            unset($_SESSION['otp_mobile_' . $fullMobileNumber]);
            unset($_SESSION['otp_expiry_' . $fullMobileNumber]);
            // Set a flag in session that this mobile is verified for this session
            $_SESSION['mobile_verified_' . $fullMobileNumber] = true;
            error_log("DEBUG VERIFY: Mobile {$fullMobileNumber} successfully verified.");
        } else {
            error_log("DEBUG VERIFY: Invalid OTP for {$fullMobileNumber}. User entered '{$user_otp}', stored '{$stored_otp}'.");
            $response = ['success' => false, 'message' => 'Invalid OTP. Please try again.'];
        }
        break; // End of 'verify_otp' case

    case 'submit_form':
        // Sanitize all incoming data
$firstName = (string)($input['FirstName'] ?? '');
$lastName = (string)($input['LastName'] ?? '');
$email = (string)($input['Email'] ?? ''); // Note: Original code used FILTER_SANITIZE_EMAIL
$localMobileNumber = (string)($input['MobilePhone'] ?? ''); // Note: Original code used FILTER_SANITIZE_NUMBER_INT and substr
$localMobileNumber = substr($localMobileNumber, 0, 10); // Retaining the length trimming
$state = (string)($input['State'] ?? '');
$city = (string)($input['City'] ?? '');
$level = (string)($input['Level'] ?? '');
$program = (string)($input['Program'] ?? '');
$course = (string)($input['Course'] ?? '');
$utmSource = (string)($input['UTM_Source__c'] ?? '');
$utmAdgroupId = (string)($input['UTM_Ad_group_ID__c'] ?? '');
$utmAdgroupName = (string)($input['UTM_Ad_group_name__c'] ?? '');
$utmDevice = (string)($input['UTM_Device__c'] ?? '');
$utmKeyword = (string)($input['UTM_Keyword__c'] ?? '');
$utmNetwork = (string)($input['UTM_Network__c'] ?? '');
$utmMedium = (string)($input['UTM_Medium__c'] ?? '');
$utmCampaignName = (string)($input['UTM_Campaign_Name__c'] ?? '');
$campaignId = (string)($input['Campaign_ID__c'] ?? '');
$creativeIdAdId = (string)($input['Creative_ID_Ad_ID__c'] ?? '');
$placement = (string)($input['Placement__c'] ?? '');
$gclid = (string)($input['GCLID__c'] ?? '');
$matchTypec = (string)($input['Match_Type__c'] ?? '');
        
        
 
       
        
        
        // Removed Consent__c as it's not in the provided Salesforce API documentation for LeadCreation

        $fullMobileNumberForSalesforce = '91' . $localMobileNumber;

        // CRITICAL SECURITY CHECK: Ensure the mobile number was verified in this session.
        // This prevents users from submitting the form without completing OTP verification.
        if (!isset($_SESSION['mobile_verified_' . $fullMobileNumberForSalesforce]) || !$_SESSION['mobile_verified_' . $fullMobileNumberForSalesforce]) {
            error_log("DEBUG SUBMIT: Mobile {$fullMobileNumberForSalesforce} not marked as verified in session. Submission blocked.");
            $response = ['success' => false, 'message' => 'Mobile number not verified. Please complete OTP verification first.'];
            break;
        }

        // Gather all form data to send to Salesforce.
        // IMPORTANT: Added required fields from your Salesforce API guide.
        // If these values need to be dynamic, you must add corresponding fields
        // to your HTML form and retrieve them via $input.
        $data = [
            'FirstName'      => $firstName,
            'LastName'       => $lastName,
            'Email'          => $email,
            'MobilePhone'    => $fullMobileNumberForSalesforce, // Use the verified full international number
            'City'           => $city,
            'State'          => $state,
            'Program__c'     => $program,          // Hardcoded based on guide
            'Program_Level__c' => $level, // Hardcoded based on guide
            'Course__c'      => $course,                 // Hardcoded based on guide
            'LeadSource'     => 'Web',             // Hardcoded based on guide
            // 'LeadSource'     => $referrer_url,   
                
            'UTM_Source__c' => $utmSource,
            'UTM_Ad_group_ID__c' => $utmAdgroupId,
            'UTM_Ad_group_name__c' => $utmAdgroupName,
            'UTM_Device__c' => $utmDevice,
            'UTM_Keyword__c' => $utmKeyword,
            'UTM_Network__c' => $utmNetwork,
            'UTM_Medium__c' => $utmMedium,
            'UTM_Campaign_Name__c' => $utmCampaignName,
            'Campaign_ID__c' => $campaignId,
            'Creative_ID_Ad_ID__c' => $creativeIdAdId,
            'Placement__c' => $placement,
            'GCLID__c' => $gclid,
            'Match_Type__c' => $matchTypec,
            
            
        
            
            
        ];
        error_log("DEBUG SUBMIT: Data prepared for Salesforce: " . json_encode($data));

        // --- Salesforce Integration (Server-Side) ---
        try {
            // Step 1: Obtain OAuth token from Salesforce.
            $ch = curl_init(SF_LOGIN_URL);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
                'grant_type' => 'password',
                'client_id' => SF_CLIENT_ID,
                'client_secret' => SF_CLIENT_SECRET,
                'username' => SF_USERNAME,
                'password' => SF_PASSWORD
            ]));
            curl_setopt($ch, CURLOPT_TIMEOUT, 180); // Timeout for token request
            // --- IMPORTANT: REMOVE THESE LINES IN PRODUCTION FOR SECURITY! ---
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            // --- END SECURITY WARNING ---

            $token_response = curl_exec($ch);
            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $curl_error = curl_error($ch);
            curl_close($ch);

            error_log("DEBUG SUBMIT: Salesforce Token Raw Response: " . ($token_response === false ? "cURL Error: {$curl_error}" : $token_response));
            error_log("DEBUG SUBMIT: Salesforce Token HTTP Code: {$http_code}");


            if ($http_code !== 200) {
                // If token request fails, log and throw an exception.
                $error_data = json_decode($token_response, true) ?? ['message' => 'Failed to parse token error response.'];
                error_log("Salesforce Token Error: HTTP {$http_code} - " . ($error_data['error_description'] ?? $error_data['message'] ?? 'Unknown authentication error.') . " | Response: {$token_response} | cURL Error: {$curl_error}");
                throw new Exception("Salesforce Token request failed: HTTP {$http_code} - " . ($error_data['error_description'] ?? $error_data['message'] ?? 'Unknown authentication error.'));
            }
            $token_data = json_decode($token_response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                error_log("ERROR: json_decode error for Salesforce Token Response: " . json_last_error_msg());
                throw new Exception("Failed to decode Salesforce token response: " . json_last_error_msg());
            }

            $access_token = $token_data['access_token'];
            $instance_url = $token_data['instance_url'];
            error_log("DEBUG SUBMIT: Salesforce Token obtained. Instance URL: {$instance_url}");

            // Step 2: Send lead data to your Apex REST endpoint in Salesforce.
            $ch = curl_init($instance_url . SF_APEX_REST_URL_SUFFIX);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Send data as JSON
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $access_token
            ]);
            curl_setopt($ch, CURLOPT_TIMEOUT, 180); // Timeout for lead submission
            // --- IMPORTANT: REMOVE THESE LINES IN PRODUCTION FOR SECURITY! ---
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            // --- END SECURITY WARNING ---

            $lead_response = curl_exec($ch);
            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $curl_error = curl_error($ch);
            curl_close($ch);

            error_log("DEBUG SUBMIT: Salesforce Lead Raw Response: " . ($lead_response === false ? "cURL Error: {$curl_error}" : $lead_response));
            error_log("DEBUG SUBMIT: Salesforce Lead HTTP Code: {$http_code}");


            $lead_result = json_decode($lead_response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                error_log("ERROR: json_decode error for Salesforce Lead Response: " . json_last_error_msg());
                throw new Exception("Failed to decode Salesforce lead creation response: " . json_last_error_msg());
            }


            // Salesforce Apex REST typically returns 201 Created on successful record creation.
            // And based on your guide, success is {"success": true, "message": "..."}
            if ($http_code === 201 && ($lead_result['success'] ?? false)) {
                $response = ['success' => true, 'message' => $lead_result['message'] ?? 'Application submitted successfully!'];
                // Invalidate the mobile verification flag after successful form submission to prevent multiple submissions
                unset($_SESSION['mobile_verified_' . $fullMobileNumberForSalesforce]);
                error_log("DEBUG SUBMIT: Salesforce Lead created successfully for {$fullMobileNumberForSalesforce}.");
                 
            } else {
                // Handle Salesforce-specific errors returned by your Apex REST service.
                // Based on your guide, the error message is directly under the 'message' key.
                $sf_error_msg = $lead_result['message'] ?? "Unknown Salesforce API error.";
                error_log("Salesforce Lead Creation Error: HTTP {$http_code} - {$sf_error_msg} | Full Response: {$lead_response} | cURL Error: {$curl_error}");
                $response = ['success' => false, 'message' => 'Failed to submit application to NMIMS: ' . $sf_error_msg];
            }

        } catch (Exception $e) {
            // Catch any exceptions during Salesforce API calls.
            $response = ['success' => false, 'message' => 'Submission error: ' . $e->getMessage()];
            error_log("Form submission exception: " . $e->getMessage());
        }
        break; // End of 'submit_form' case

    default:
        // Handle invalid or missing 'action' parameter.
        $response = ['success' => false, 'message' => 'Invalid API action.'];
        http_response_code(400); // Set HTTP status code to 400 Bad Request
        break; // End of 'default' case
}

// Encode the final response array as JSON and output it.
echo json_encode($response);
exit(); // Terminate script execution.