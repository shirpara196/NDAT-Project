<?php
session_start(); // Ensure session is started at the very top for OTP and verification flags
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Apply Now Ndat</title>
   
</head>
<body>
    <div class="container1">
        <!--<h2>Begin Your Journey Here</h2>-->

        <!--<form id="mainApplicationForm">-->
        
        
       <form id="mainApplicationForm" action="api.php?utm=" method="POST"> <input type="hidden" name="oid" value="00DO300000Ep5FK">
            <input type="hidden" name="oid" value="00DO300000Ep5FK">
            <input type="hidden" name="retURL" value="https://www.salesforce.com/thankyou">

            <div class="formDiv models_formDiv__xNk0h">
                
                
                 <p style="font-weight:bold;color:#dc3545; text-align:center;">Begin Your Journey Here</p>
                
                <input type="hidden" id="UTM_Source__c" name="UTM_Source__c" value="<?php echo isset($_GET['utm_source']) ? htmlspecialchars(@$_GET['utm_source']): ''; ?>" />
                <input type="hidden" id="UTM_Medium__c" name="UTM_Medium__c" value="<?php echo isset($_GET['utm_medium']) ? htmlspecialchars($_GET['utm_medium']) : ''; ?>" />
                <input type="hidden" id="UTM_Campaign_Name__c" name="UTM_Campaign_Name__c" value="<?php echo isset($_GET['utm_campaign']) ? htmlspecialchars(@$_GET['utm_campaign']): ''; ?>" />
                <input type="hidden" id="UTM_Keyword__c" name="UTM_Keyword__c" value="<?php echo isset($_GET['utm_keyword']) ? htmlspecialchars(@$_GET['utm_keyword']): ''; ?>" />
                <input type="hidden" id="UTM_Ad_Content__c" name="UTM_Ad_Content__c" value="<?php echo isset($_GET['utm_content']) ? htmlspecialchars(@$_GET['utm_content']): ''; ?>" />
                <input type="hidden" id="GCLID__c" name="GCLID__c" value="<?php echo isset($_GET['gclid']) ?  htmlspecialchars(@$_GET['gclid']): ''; ?>" />
                <input type="hidden" id="Campaign_ID__c" name="Campaign_ID__c" value="<?php echo isset($_GET['utm_campaignid']) ? htmlspecialchars(@$_GET['utm_campaignid']): ''; ?>" />
                <input type="hidden" id="UTM_Ad_group_ID__c" name="UTM_Ad_group_ID__c" value="<?php echo isset($_GET['utm_adgroupid']) ? htmlspecialchars(@$_GET['utm_adgroupid']): ''; ?>"  />
                <input type="hidden" id="UTM_Ad_group_name__c" name="UTM_Ad_group_name__c" value="<?php echo isset($_GET['utm_adgroup']) ? htmlspecialchars(@$_GET['utm_adgroup']): ''; ?>"  />
                <input type="hidden" id="UTM_Creative__c" name="UTM_Creative__c" value="<?php echo isset($_GET['creative']) ? htmlspecialchars(@$_GET['creative']): ''; ?>"  />
                <input type="hidden" id="Placement__c" name="Placement__c" value="<?php echo isset($_GET['utm_placement']) ? htmlspecialchars(@$_GET['utm_placement']): ''; ?>" />
                <input type="hidden" id="UTM_Network__c" name="UTM_Network__c" value="<?php echo  isset($_GET['utm_network']) ? htmlspecialchars(@$_GET['utm_network']): ''; ?>" />
                <input type="hidden" id="UTM_Device__c" name="UTM_Device__c" value="<?php echo  isset($_GET['utm_device']) ? htmlspecialchars(@$_GET['utm_device']): ''; ?>" />
                <input type="hidden" id="Creative_ID_Ad_ID__c" name="Creative_ID_Ad_ID__c" value="<?php echo  isset($_GET['utm_creativeid']) ? htmlspecialchars(@$_GET['utm_creativeid']): ''; ?>" />
                <input type="hidden" id="Match_Type__c" name="Match_Type__c" value="<?php echo  isset($_GET['utm_matchtype']) ? htmlspecialchars(@$_GET['utm_matchtype']): ''; ?>" />
               
                
                
                
                <div class="row g-3 models_formCont__g0yzh">
                    <div class="col-md-6 col-12 px-md-2">
                        <div class="models_fieldGroup__C0awJ">
                            <input class="models_field__K89L6 input_inputBox__Wf8vH" type="text" id="fname" name="FirstName" placeholder="First Name*" maxlength="150" pattern="(?=^.{2,25}$)(?![.\n])(?=.*[a-zA-Z]).*$" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 px-md-2">
                        <div class="models_fieldGroup__C0awJ">
                            <input class="models_field__K89L6 input_inputBox__Wf8vH" type="text" id="lname" name="LastName" placeholder="Last Name*" maxlength="150" pattern="(?=^.{2,25}$)(?![.\n])(?=.*[a-zA-Z]).*$" required>
                        </div>
                    </div>

                    <div class="col-md-12 px-md-2">
                        <div class="models_fieldGroup__C0awJ">
                            <input class="models_field__K89L6 input_inputBox__Wf8vH" type="email" id="email" name="Email" placeholder="Email ID*" maxlength="150" pattern="[a-zA-Z0-9.!#$%&amp;’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 px-md-2">
                        <div class="models_fieldGroup__C0awJ ">
                            <div class="mobile-input-group">
                                <input type="text" id="countryCodeInput" class="country-code-input models_field__K89L6 input_inputBox__Wf8vH" value="+91" readonly>
                                <input class="models_field__K89L6 input_inputBox__Wf8vH phone-number-input" type="number" id="mobile" name="MobilePhone" placeholder="Mobile No.* (10 digits)" maxlength="10" pattern="[0-9]{10}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 px-md-2">
                        <div class="models_OTPButton__osVob item-align position-relative">
                            <button type="button" id="genarteOTP" class="genarteOTPBtn">Generate OTP</button>
                            <input type="text" class="otpInput_enquirey_form" id="otpInput_enquirey_form" disabled placeholder="Enter OTP" maxlength="6">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div id="feedback" class="message" style="display:none;"></div>
                    </div>

                    <div class="col-md-12">
                        <div class="row g-3">
                            <div class="col-md-6 col-12 px-md-2">
                                <div class="models_fieldGroup__C0awJ">
                                    <select class="models_field__K89L6 input_inputBox__Wf8vH" id="inputState" name="State" required>
                                        <option value="">Select State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="West Bengal">West Bengal</option>
                                        <option disabled="" style="background-color:#aaa; color:#fff">UNION Territories</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                        
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Ladakh">Ladakh</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                         
                                       
                                        <option value="Puducherry">Puducherry</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 px-md-2">
                                <div class="models_fieldGroup__C0awJ">
                                    <select class="models_field__K89L6 input_inputBox__Wf8vH" id="inputDistrict" name="City" required>
                                        <option value="">-- select City --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4" id="applicationFields" style="pointer-events: none; opacity: 0.6;">
                                <div class="models_fieldGroup__C0awJ form-check">
                                    <input class="form-check-input models_checkInput__Ch2Vx" type="checkbox" id="defaultCheck1" name="Consent__c" value="true" required>
                                    <label class="form-check-label" for="defaultCheck1">
                                     I authorise NMIMS and/or their representatives to contact me via Phone, SMS, WhatsApp, and/or email. This will override registry on DND/NDNC.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" id="submitApplicationButton" class="btn PopfornBtn models_PopfornBtn__QP7jo disabled" disabled>SUBMIT</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

   <!--sales force Lead form script start 08-07-2025-->
  <!--sales force Lead form script start 08-07-2025-->
       <script>
    // Global variable to manage OTP verification state
    let isOtpVerified = false;
    // Variable to store the mobile number for which OTP was sent
    let sentOtpMobileNumber = '';
    // Variable to store if the consent checkbox is checked
    let isConsentChecked = false; // New variable for consent state

    // Get DOM elements
    const mainApplicationForm = document.getElementById('mainApplicationForm');
    const fnameInput = document.getElementById('fname');
    const lnameInput = document.getElementById('lname');
    const emailInput = document.getElementById('email');
    const mobileInput = document.getElementById('mobile'); // This is the 10-digit mobile input
    const countryCodeInput = document.getElementById('countryCodeInput'); // This is the fixed +91 input
    const genarteOTPButton = document.getElementById('genarteOTP'); // Your "Generate OTP" button
    const otpInput = document.getElementById('otpInput_enquirey_form'); // Your "Enter OTP" input
    const applicationFields = document.getElementById('applicationFields'); // Container for other form fields
    const submitApplicationButton = document.getElementById('submitApplicationButton'); // Your "Submit" button
    const feedback = document.getElementById('feedback'); // Single feedback area
    const defaultCheck1 = document.getElementById('defaultCheck1'); // Consent checkbox
    const stateDropdown = document.getElementById('inputState'); // State dropdown
    const cityDropdown = document.getElementById('inputDistrict'); // City dropdown
    
    const utmSource = document.getElementById('UTM_Source__c');
    const utmMedium = document.getElementById('UTM_Medium__c');
    const utmCampaignName = document.getElementById('UTM_Campaign_Name__c');
    const utmKeyword = document.getElementById('UTM_Keyword__c');
    const utmAdContent = document.getElementById('UTM_Ad_Content__c');
    const gclid = document.getElementById('GCLID__c');
    const campaignId = document.getElementById('Campaign_ID__c');
    const utmAdgroupId = document.getElementById('UTM_Ad_group_ID__c');
    const utmAdgroupName = document.getElementById('UTM_Ad_group_name__c');
    const utmCreative = document.getElementById('UTM_Creative__c');
    const placement = document.getElementById('Placement__c');
    const utmNetwork = document.getElementById('UTM_Network__c');
    const utmDevice = document.getElementById('UTM_Device__c');
    const creativeIdAdId = document.getElementById('Creative_ID_Ad_ID__c');
    const matchTypec = document.getElementById('Match_Type__c')
    

    
    
    

    // Define your backend PHP API base URL
    const BACKEND_API_URL = 'api.php'; // Single entry point for all API actions

    // Variables for auto-verification
    let countdownInterval;
    const AUTO_VERIFY_DELAY = 180; // seconds

    // City data based on State
 /*   const citiesByState = {
        "Andhra Pradesh": ["Visakhapatnam", "Vijayawada", "Guntur", "Nellore", "Kurnool"],
        "Arunachal Pradesh": ["Itanagar", "Naharlagun", "Pasighat"],
        "Assam": ["Guwahati", "Jorhat", "Dibrugarh", "Silchar"],
        "Bihar": ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur"],
        "Chhattisgarh": ["Raipur", "Bhilai", "Bilaspur", "Korba"],
        "Goa": ["Panaji", "Margao", "Vasco da Gama"],
        "Gujarat": ["Ahmedabad", "Surat", "Vadodara", "Rajkot"],
        "Haryana": ["Faridabad", "Gurugram", "Panipat", "Ambala"],
        "Himachal Pradesh": ["Shimla", "Dharamshala", "Mandi"],
        "Jharkhand": ["Ranchi", "Jamshedpur", "Dhanbad", "Bokaro"],
        "Karnataka": ["Bengaluru", "Mysuru", "Hubballi", "Mangaluru"],
        "Kerala": ["Thiruvananthapuram", "Kochi", "Kozhikode", "Thrissur"],
        "Madhya Pradesh": ["Bhopal", "Indore", "Jabalpur", "Gwalior"],
        "Maharashtra": ["Mumbai", "Pune", "Nagpur", "Nashik", "Aurangabad"],
        "Manipur": ["Imphal", "Thoubal"],
        "Meghalaya": ["Shillong", "Tura"],
        "Mizoram": ["Aizawl", "Lunglei"],
        "Nagaland": ["Kohima", "Dimapur"],
        "Odisha": ["Bhubaneswar", "Cuttack", "Rourkela", "Berhampur"],
        "Punjab": ["Ludhiana", "Amritsar", "Jalandhar", "Patiala"],
        "Rajasthan": ["Jaipur", "Jodhpur", "Udaipur", "Kota"],
        "Sikkim": ["Gangtok", "Namchi"],
        "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli"],
        "Telangana": ["Hyderabad", "Warangal", "Nizamabad", "Karimnagar"],
        "Tripura": ["Agartala", "Udaipur"],
        "Uttarakhand": ["Dehradun", "Haridwar", "Rishikesh", "Nainital"],
        "Uttar Pradesh": ["Lucknow", "Kanpur", "Ghaziabad", "Agra", "Varanasi"],
        "West Bengal": ["Kolkata", "Howrah", "Durgapur", "Asansol"],
        "Andaman and Nicobar Islands": ["Port Blair"],
        "Chandigarh": ["Chandigarh"],
        "Dadar and Nagar Haveli": ["Silvassa"],
        "Daman and Diu": ["Daman", "Diu"],
        "Delhi": ["New Delhi", "Delhi"],
        "Lakshadweep": ["Kavaratti"],
        "Puducherry": ["Puducherry"]
    };
*/

//Start cities

 const citiesByState = {
        "Andhra Pradesh" : ["A.Konduru", "Aalamuru", "Achampet", "Achanta", "Addanki", "Addateegala", "Adoni", "Agali", "Agiripalli", "Ainavilli", "Akividu", "Akkurthi", "Akunuru", "Alamanda", "Alamuru", "Allagadda", "Allavaram", "Alluru", "Amadagur", "Amadalavalasa", "Amarapuram", "Amaravathi", "Ambajipeta", "Ambavaram", "Anakapalle", "Anamasamudrampeta", "Anandapuram", "Anantapur", "Ananthagiri", "Ananthasagaram", "Ananthavaram", "Anaparthy", "Anemadugu", "Angalakuduru", "Annavaram", "Appikatla", "Araku", "Ardhaveedu", "Atchutapuram", "Atisurikaviti", "Atlur", "Atmakur", "Atreyapuram", "Attili", "Avanigadda", "B.Kothakota", "B.N. Kandriga", "B.P.Rachapalli", "Bachannapet", "Badangi", "Badvel", "Balapanur", "Balayapalli", "Balijipeta", "Banaganapalli", "Bandi Atmakuru", "Bangarupalem", "Bapatla", "Bathalapalle", "Bellamkonda", "Beluguppa", "Bestavaripeta", "Betamcherla", "Bhakarapet", "Bhamini", "Bhattiprolu", "Bheemunipatnam", "Bhimadole", "Bhimavaram", "Bhogapuram", "Bikkavolu", "Billanapalli", "Bitragunta", "Bobbili", "Bokkasam Palem", "Bollapalle", "Bommireddy Cheruvu", "Bonangi", "Bondapalli", "Brahmadevam", "Brahmasamudram", "Buchireddypalem", "Bukkapatnam", "Bukkaraya Samudram", "Burja", "Butteyagudem", "C. Belagal", "C.Rajupalem", "Chagallu", "Chakalakonda", "Chakrayapet", "Challapalli", "Challapeta", "Chandole", "Chandragiri", "Chandralapadu", "Chataparru", "Chatrai", "Chebrolu", "Cheedikada", "Cheepurupalli", "Chejerla", "Chennekothapalli", "Chennur", "Cherukupalli", "Cheruvu Madhavaram", "Chilakaluripet", "Chilakapalem", "Chilamathur", "Chillakur", "Chinna Dornala", "Chinna Gotti Gallu", "Chinnajonnavalasa", "Chinnamandem", "Chintalapudi", "Chintapalle", "Chinthakommadinne", "Chirala", "Chittamuru", "Chittecherla", "Chittoor", "Chitvel", "Chodavaram", "Chodayapalem", "Chowdepalle", "Cumbum", "D.Hirehal", "D.Tallavalasa", "Dachepalle", "Dagadarthi", "Dakkili", "Damalcheruvu", "Damavaram", "Darbhagudem", "Denduluru", "Denkada", "Devanakonda", "Deverapalli", "Devipatnam", "Dharmaji Gudem", "Dharmavaram", "Dhone", "Dhulipudi", "Donakonda", "Donnikota", "Doravarichatram", "Dornipadu", "Duggirala", "Durgi", "Duttalur", "Duvvuru", "Dwaraka Tirumala", "East Godavari", "Edlapadu", "Eluru", "Emani", "Etcherla", "Folkspeta", "Gadi Lanka", "Gadivemula", "Gajapatinagaram", "Galiveedu", "Gampalagudem", "Ganapavaram", "Gandavaram", "Gandepalli", "Gandipalem", "Gandlapenta", "Gandupalle", "Gangadhara Nellore", "Gangavaram", "Ganguvarisigadam", "Gannavaram", "Gantyada", "Garividi", "Garladinne", "Garugubilli", "Ghantasala", "Giddalur", "Gokavaram", "Gollaprollu", "Golugonda", "Gonegandla", "Gooty", "Gopalapatnam Rural", "Gopannapalem", "Gopavaram", "Gorantla", "Gospadu", "Gudibanda", "Gudipala", "Gudivada", "Gudlavalleru", "Gudur", "Gummagatta", "Gummalaxmipuram", "Gumparlapadu", "Gundalammapalem", "Gundugolanu", "Guntakal", "Guntur", "Gurazala", "Gurla", "Gurram Konda", "Hanuman Junction", "Herial", "Hindupur", "Hiramandalam", "Ibrahimpatnam", "Ichchapuram", "Inturu", "Ipur", "Iragavaram", "Irala", "Jaggampeta", "Jaggayyapet", "Jaggisetti Gudem", "Jaladanki", "Jalumuru", "Jammalamadugu", "Janapadu", "Jangareddigudem", "Jeelugumilli", "Jiyyammavalasa", "Joduru", "Kadapa", "Kadiam", "Kadiri", "Kaikaluru", "Kaikaram", "Kajuluru", "Kakinada", "Kakulapadu", "Kakumanu", "Kalakada", "Kalasapadu", "Kalidindi", "Kaligiri", "Kalikiri", "Kalla", "Kaluvaya", "Kalyandurg", "Kamalapuram", "Kamavarapu Kota", "Kambadur", "Kambhamvaripalle", "Kammavari Palli", "Kanagala", "Kanaganapalli", "Kandukur", "Kanekal", "Kanigiri", "Kanipakam", "Kankipadu", "Kannapuram", "Kapileswarapuram", "Karapa", "Karatampadu", "Karempudi", "Karlapalem", "Karveti Nagar", "Kasibugga", "Katrenikona", "Katuru", "Kavali", "Kaviti", "Khajipet Sunkesula", "Kirlampudi", "Kodavalur", "Kodumur", "Koduru", "Koilkuntla", "Kolakaluru", "Kolimigundla", "Kollipara", "Kolluru", "Komarada", "Komarolu", "Konada", "Kondapalli", "Kondapuram", "Kondareddy Palle", "Korukonda", "Kotabommali", "Kotagandredu", "Kotananduru", "Kothacheruvu", "Kothapalli", "Kothapeta", "Kothavalasa", "Kotturu", "Kovur", "Kovvali", "Kovvur", "Koyyalagudem", "Krishna", "Krosur", "Kruthivennu", "Kuchinapudi", "Kuchipudi", "Kudair", "Kuderu", "Kundurpi", "Kuppam", "Kurichedu", "Kurnool", "Kurupam", "Lakkavaram", "Lakkavarapu Kota", "Lakkireddipalli", "Lankapalli", "Lavanuru", "Laveru", "Lemalle", "Lepakshi", "Lingala", "Loddalapeta", "Machavaram", "Macherla", "Machilipatnam", "Madakasira", "Madanapalle", "Madanapuram", "Maddikera", "Maddikera East", "Maduru", "Majjigudem", "Makkuva", "Malameedi Kambala Dinne", "Malikipuram", "Malkapuram", "Mamidikududru", "Manchili", "Mandapeta", "Mandasa", "Mandavalli", "Manepalli", "Mangalagiri", "Mantralayam", "Manubolu", "Maredumilli", "Markapur", "Marripadu", "Martur", "Maruteru", "Medikonduru", "Meliaputti", "Mentada", "Merakamudidam", "Mogalturu", "Mopidevi", "Movva", "Moyyeru", "Muddanur", "Mudigubba", "Mudinepalli", "Mulakalacheruvu", "Mummidivaram", "Muppalla", "Murukambattu", "Musunuru", "Muthukur", "Muttukuru", "Mutyala Cheruvu", "Mydukur", "Mylavaram", "Mypadu", "Nadendla", "Nagamambapuram", "Nagayalanka", "Naidupeta", "Nallacheruvu", "Nallaguttapalle", "Nallajerla", "Nallamada", "Nambula Pulakunta", "Namburu", "Nandalur", "Nandavaram", "Nandigama", "Nandikotkur", "Nandimandalam", "Nandipadu", "Nandivada", "Nandivelugu", "Nandyal", "Narampeta", "Narapala", "Narasannapeta", "Narasaraopet", "Narayanavanam", "Narsapur", "Narsipatnam", "Nathavaram", "Nekarikallu", "Nelapattu", "Nellimarla", "Nellore", "Nidadavolu", "Nindra", "Nizampatnam", "North Mopuru", "North Rajupalem", "Nutakki", "Nuzendla", "Nuzividu", "Obuladevaracheruvu", "Obulavaripalli", "Ongole", "Owk", "Pachipenta", "Padapadu", "Paderu", "Pagidyala", "Pakala", "Palakoderu", "Palakollu", "Palakonda", "Palamaner", "Palasa", "Palasamudram", "Palligandredu", "Palugurallapalle Part IV", "Pamarru", "Pamidi", "Pamulapadu", "Pannur", "Panyam", "Parchoor", "Parigi", "Parvathipuram", "Patchalatadiparru", "Patha Gannavaram", "Pathapatnam", "Pathrapada", "Pattikonda", "Pedakakani", "Pedakurapadu", "Pedamajjipalem", "Pedamanapuram", "Pedana", "Pedanandipadu", "Pedapadu", "Pedapalem", "Pedaparupudi", "Pedapudi", "Pedavadlapudi", "Pedda Aravidu", "Pedda Panjani", "Peddamogalai Palli", "Peddapappuru", "Peddapuram", "Pellakuru", "Penagalur Agraharam", "Penagaluru", "Penamaluru", "Pendlimarri", "Pentapadu", "Penuganchiprolu", "Penugolanu", "Penugonda", "Penukonda", "Penumantra", "Penumur", "Peravali", "Phirangipuram", "Pichatur", "Piduguralla", "Pileru", "Pithapuram", "Podalakur", "Podili", "Polaki", "Polavaram", "Pondicherry", "Ponduru", "Ponnekallu", "Ponnur", "Porumamilla", "Pragadavaram", "Prakasam", "Prathipadu", "Proddatur", "Pulicherla", "Pulivendula", "Pulla", "Pullala Cheruvu", "Pullampet", "Punganur", "Pusapatirega", "Putalapattu", "Putluru", "Puttaparthi", "Puttur", "Pydipaka", "Racherla", "Rajahmundry", "Rajampet", "Rajanagaram", "Rajapuram", "Rajavommangi", "Rajupalem", "Ramabhadrapuram", "Ramachandrapuram", "Ramagiri", "Ramakuppam", "Ramannamodi", "Ramasamudram", "Ramatheertham", "Rampachodavaram", "Ranastalam", "Rangampeta", "Rapthadu", "Rapur", "Ravulapalem", "Rayachoty", "Rayadurgam", "Rayavaram", "Razam", "Razole", "Reddigudem", "Reddypalem", "Renigunta", "Rentachintala", "Repalle", "Roddam", "Rolla", "Rompicherla", "S.Mydukur", "Sakhinetipalli", "Salihundam", "Salur", "Samarlakota", "Sambepalli", "Sangam Jagarlamudi", "Sanjamala", "Sankhavaram", "Santhabommali", "Saravakota", "Sarubujjili", "Sarvepalli", "Sathyavedu", "Sattenapalle", "Satyavedu", "Savalyapuram", "Seethampeta", "Seethanagaram", "Seetharamapuram", "Setturu", "Shanthipuram", "Siddanakonduru", "Sidhout", "Sigadam", "Simhadri Puram", "Singanamala", "Singarayakonda", "Sirusuvada", "Sirvella", "Sithanagaram", "Somandepalli", "Somarajuillindalaparru", "Sompeta", "Sreekanthapuram Rural", "Sreerangarajapuram", "Srikakulam", "Srikalahasti", "Srirangarajapuram", "Srisailam", "Srungavarapu kota", "Sullurupeta", "Sumitrapuram", "Surapuram", "Sydapuram", "T. Sundupalli", "T.narasapuram", "Tada", "Tada Khandrika", "Tadepalle", "Tadepalli", "Tadepalligudem", "Tadikalapudi", "Tadikonda", "Tadimarri", "Tadipatri", "Tallapudi", "Tallarevu", "Talupula", "Tanakallu", "Tanguturu", "Tanuku", "Tarlupadu", "Tatipaka", "Tekkali", "Telaprolu", "Tenali", "Therlam", "Thondamanadu", "Thondur", "Thotapalli Gudur", "Thotlavalluru", "Thullur", "Tirupati", "Tiruvuru", "Tondangi", "Torredu", "Tripuranthakam", "Tsunduru", "Tuggali", "Tuni", "Turakapalem", "Turumella", "Udayagiri", "Undarajavaram", "Undi", "Unguturu", "Uppalaguptam", "Uravakonda", "Vaadaparru", "Vadamalapet", "Vajrakarur", "Vajrapukotturu", "Vakadu", "Vallur", "Vandrangi", "Vangara", "Varadaiahpalem", "Varikuntapadu", "Vatsavai", "Vayalpadu", "Vedullakunta", "Vedurukuppam", "Veeraballi", "Veeraghattam", "Veeravalli", "Veeravasaram", "Veerullapadu", "Veldhurthy", "Veldurthi", "Velivennu", "Vellaturu", "Velugodu", "Vempalli", "Vemuru", "Venkata Krishna Puram", "Venkata Rangaraya Puram", "Venkatachalam", "Venkatagiri", "Venkatagirikota", "Venkatakrishnaraja Puram", "Vepada", "Vetapalem", "Vidapanakal", "Vidavalur", "Vijayapuram", "Vijayarai", "Vijayawada", "Vinjamur", "Vinukonda", "Viroor", "Visakhapatnam", "Visakhapatnam Port", "Vissannapetaa", "Vizianagaram", "Voletivaripalem", "Vontimitta", "Vuyyuru", "West Godavari", "Y .ramavaram", "Yadamari", "Yadiki", "Yearraguntla", "Yeleswaram", "Yellamanchili", "Yellanur", "Yemmiganur", "Yerpadu", "Yerragondapalem", "Yerraguntla", "Yerravaripalem"],
        "Arunachal Pradesh": ["Alinye", "Anelih", "Anini", "Anjaw", "Bagra", "Bagra Higi", "Balijan", "Balijan Nishi", "Bandardewa", "Bame", "Basar", "Bene", "Bhalukpong", "Bhimadole", "Bogia Siyum", "Bomdila", "Bordumsa", "Bordumsa Circle", "Bubang", "Chambang", "Changlang", "Chowkham", "Dali", "Damin", "Daporijo", "Darak", "Daring", "Darka", "Deomali", "Diomukh", "Dirang", "Dumporijo", "Giba", "Gumgong", "Hayuliang", "Hayuliang", "Itanagar", "Jairampur", "Jang", "Kalaktang", "Kambang", "Kamlang Nagar", "Kanubari", "Kanubari Town", "Kaying", "Khellong", "Khemiyong", "Kherem Bisa", "Khonsa", "Kimin", "Kokila", "Koloriang", "Kombo Monku", "Kra Daadi", "Lallung", "Lemiking", "Lepajaring", "Likabali", "Liromoba", "Lish", "Lohit", "Longding", "Lower Siang", "Lumla", "Mahadevpur", "Maro", "Mebo", "Mechuka", "Medo", "Miao", "Momong", "Monigong", "Munna Camp", "Muri", "Nacho", "Nafra", "Naharlagun", "Namdang", "Nampong", "Namsai", "Namsang", "Namsang Mukh", "Namtok", "Narottam Nagar", "Nikte", "Nirjuli", "Nyapin", "Palin", "Papum Pare", "Pasighat", "Payum", "Rajanagar", "Ranglum", "Roing", "Rupa", "Sagalee", "Salari", "Sangti", "Seijosa", "Senge", "Seppa", "Shannan", "Siang", "Sippi", "Siyum", "Soha", "Sonajuli", "Sunpura", "Tabarijo", "Taksing", "Tali", "Taliha", "Tang", "Tawang", "Tenga Market", "Tezu", "Tippi", "Tirap", "Tirbin", "Tuting", "Vijoynagar", "Vijoypur", "Vivek Nagar", "Wakro", "Yangkang", "Yazali", "Yingkiong", "Yoji Yora", "Yomcha", "Yupia", "Ziro"],
   
           "Assam": ["Abhayapuri", "Adalbari", "Agomani", "Ahopa", "Alisinga", "Amguri", "Amtala", "Arearjhar Pt.I", "Arikuchi", "Atherikhat Jangle", "Aujuri No.3", "Baganpara", "Bagribari", "Bagulamari", "Baharihat", "Bajali", "Bakola", "Bakrapara Pt-II", "Baksa", "Bakuajari", "Bala Bhitha", "Balijana", "Balikaria", "Balikuchi", "Balipara", "Balizar", "Bamunbari", "Bandarmari", "Baramchari", "Barangabari", "Barbang", "Barbari", "Bargandubi", "Barimakha", "Barkhetri", "Barnadi Par", "Barpathar", "Barpeta", "Barpeta Road", "Bedeti T.E. 318/494", "Behali", "Belsor", "Bengtol Kumguri", "Bennabari", "Bezera", "Bhairabkunda", "Bhakatpara", "Bhawanipur", "Bhella", "Bhera", "Bhojkuchi", "Bhowanipur", "Bhowraguri", "Bhowraguri Mandarpara", "Bhowraguri-Satbil-II", "Bhuragaon", "Bidyapara II Part Pt", "Bihaguri", "Bihpuria", "Bijni", "Bilasipara", "Bindukuri T.E.", "Biswanath", "Biswanath Charali", "Biswanathghat", "Boginadi", "Bogribari", "Boitamari", "Bokajan", "Bokakhat", "Boko", "Bongaigaon", "Bongaon", "Bor Baruah", "Bordoloni", "Borsola", "Borthekerabari", "Bosa Gaon", "Buri Nagar", "Cachar", "Chabua", "Chaibari", "Chamaria Pam", "Chamaria Satra", "Chamata",
        "Chanbarikhuti", "Chandrapur Bagicha", "Changsari", "Chapakhowa", "Charagaon", "Charaideo", "Chariali", "Chariduar", "Charingia Gaon", "Chaudhuritop", "Chechapani", "Chhaygaon", "Chirang", "Dalbari", "Dalgaon", "Dalu Grant", "Dangarmakha", "Darangamela", "Darrang", "Debitola", "Dekargaon", "Deomornoi", "Deulguri Pt-II", "Dhakuakhana", "Dhalpur", "Dhanbil", "Dhaniagog", "Dhekiajuli", "Dhemaji", "Dhubri", "Dhula", "Dibrugarh", "Dicial Dhulia Gaon", "Dighali Gaon", "Dihingia Gaon", "Dihira", "Dikrong", "Dima Hasao (North Cachar Hills)", "Dimakuchi", "Diphu", "Dirpaisantipur Gaon", "Dirua", "Dispur", "Doboka Town", "Dongkamukam", "Donkamokam", "Doom Dooma", "Doomni", "Dudhnoi", "Duliajan", "Duni", "Fekamari", "Gerua", "Geruapara", "Ghilamora", "Ghoramari", "Goalpara", "Godabahar Gaon", "Gogamukh", "Gohpur", "Golaghat", "Golakganj", "Gorbil", "Goreswar Block", "Goroimari", "Gossaigaon", "Guakuchi", "Guwahati", "Haflong", "Hailakandi", "Hajo", "Halem T.E. 270/442 Grant", "Hamren", "Hanapara", "Haribhanga", "Harisinga", "Hatibandha", "Hatidhura", "Hattigarh", "Hojai", "Howly", "Jagiroad", "Jalkhana", "Jaloni Naohalia",
        "Jamugurihat", "Jonai", "Jorhat", "Joy Mangla", "Jutlibari Borhula", "Kacharigaon", "Kachugaon", "Kaithalkuchi", "Kakaya", "Kalabari", "Kalaigaon", "Kalgachia", "Kaliabor", "Kaljar", "Kamarkuchi", "Kampur Town", "Kamrup", "Kamrup Metropolitan", "Karbi Anglong", "Karemura", "Karimganj", "Kaslatari Pt.I", "Kendukuchi", "Ketekibari", "Khagrabari", "Khalihamari", "Kharsitha", "Kharupetia", "Kharupetiaghat", "Khatikuchi", "Khelmati", "Khoirabari", "Khowang", "Kokilabari", "Kokrajhar", "Kopati", "Kumarikata", "Lahowal", "Lakhimi Pathar", "Lakhimpur", "Lakhipur", "Lalpool", "Laluk", "Luki ( Boko Block)", "Lunpuria", "Machkhowa Chariali", "Majuli", "Mandia", "Mandia Gaon", "Mangaldoi", "Mankachar", "Margherita", "Margherita Kumar Potty", "Marowa", "Mayanbari", "Mazbat", "Mijikajan T.E. 281/321", "Mikir Para Chakardoi", "Milanpur", "Missamari", "Moa Mari Kachari", "Mohon Deodhai", "Moinapara", "Moranhat Town", "Morigaon", "Mugkuchi", "Muhimari Bilar Pathar", "Mukalmua", "Mukta Pur", "Mushalpur", "N.C.Angarkata", "Na-Ali Bhatia", "Na-Pam Gaon", "Nag-Sankar Gaon", "Nagaon", "Nagarbera", "Naharkatia", "Nalbari", "Namrup", "Nankar Bhaira", "Narsingpur Pt II", "Nikashi", "Niz Namati", "Niz-Bahjani", "Niz-Barigog",
        "Niz-Madartola", "No.1 Barchala", "No.1 Chandana T.E.", "No.1 Gorali T.E.", "No.1.Kaplabari", "No.1.Kekan Kuchi", "No.1.Paharpur", "No.3 Goreswar", "No.4 Barangajuli", "North Lakhimpur", "Pabhoi", "Pachim Jinjia", "Pachim Sualani", "Pakribari", "Palashbari", "Panchgram", "Parakuchi", "Patacharkuchi", "Pathali Pahar", "Pathali Pam Grant 314/51", "Patharughat", "Pathsala", "Patkijuli",
        "Phakum Kumar Phodia", "Pub Kathal Muri", "Pub Khagra Bari", "Pub Paneri", "Raghunandanpur Pt II", "Rakhaltila", "Rampur Agagara", "Rampur No.3", "Ranga Chakua", "Ranga Pothar", "Rangamati Gaon", "Rangapara", "Rangia", "Rangjuli", "Rewa N.C.", "Rowta", "Rupshi Part IV", "Sadiya", "Salkocha", "Salmara", "Sandheli", "Sanekuchi", "Sarthebari", "Sarupathar", "Sarupeta",
        "Saualkuchi", "Saukuchi", "Sepon Chah Bagicha 107/110 Nlr", "Shamugaon", "Sidli", "Silapathar", "Silchar", "Simen Chapori", "Simlaguri", "Sipajhar", "Sirajuli", "Sissiborgaon", "Sivasagar", "Sonapur Block", "Sonitpur", "Sootea", "Sorbhog", "South Salamara-Mankachar", "Suradi", "Tamulpur",
        "Tangla", "Teghakhat", "Teloijan Darkhsta No.25", "Tengakhat", "Terechia", "Tetenbari", "Tezpur",
        "Thamna", "Thanguri", "Thelamara", "Tihu", "Tingkhong", "Tinsukia", "Tipling", "Titabor", "Tumni Lawkhowa", "Udalguri", "Ulabari", "West Karbi Anglong"],
        
        "Bihar": ["Adhaura", "Agiaon", "Akbarpur Barari", "Akorhi", "Akorhi Gola", "Alahdadpur", "Aliganj", "Amas", "Amnour", "Andar", "Andhra Tharhi", "Araria", "Areraj", "Ariari", "Ariyari", "Arrah", "Arwal", "Asharganj", "Asthawan", "Athmal Gola", "Aurangabad", "Babubarhi", "Bagaha", "Bagaha-1", "Bairgania", "Baisi", "Bakhtiyarpur", "Baniapur", "Banka", "Bankatwa", "Bankey Bazar", "Banmankhi", "Bansi Chhapra", "Barachatti", "Barahat", "Barahra", "Barauni", "Barbigha", "Barh", "Barhat", "Bariarpur", "Barun", "Basopatti", "Bathani", "Bathnaha", "Bazpatti", "Begusarai", "Behea", "Bela Dih", "Belchi", "Beldour", "Belhar", "Belsand", "Belsar", "Benipatti", "Benipur", "Bettiah", "Bhabua", "Bhagahar", "Bhagalpur", "Bhagwani Chhapra", "Bhagwanpur Hat", "Bharhan", "Bharwara", "Bhojpur", "Bibhutipur", "Bidupur", "Bihar Sharif", "Bihariganj", "Bihpur", "Bikram", "Bikramganj", "Biraul", "Birnackpur", "Birpur", "Bishunpur Dhodhni", "Bochaha", "Bodha Chhapra", "Bodhgaya", "Bokhra", "Bounsi", "Brahiya", "Buxar", "Chainpur", "Chakai", "Chakia", "Chamghara", "Chandadih", "Chauradano", "Chausa", "Chehra Kalan Urf Mohammadpur", "Chenari", "Chewara", "Chhapra", "Chhatapur", "Chichmhi", "Chiraia", "Choraut", "Chousa", "Dalsingh Sarai", "Danapur", "Daniawan", "Darbhanga", "Daudnagar", "Dawath", "Dehri", "Derbandhe", "Desari", "Dhaka", "Dhanarua", "Dharhara", "Dighwara", "Dinara", "Dobhi", "Dulhin Bazar", "Dumraon", "Duraundha", "East Champaran", "Ekangar Sarai", "Ekhatha", "Ekma", "Faridpur", "Fatuha", "Gamharia", "Garh Nokha", "Garhani", "Garkha", "Gaya", "Ghoghardiha", "Ghorasahan", "Ghoshi", "Ghoswari", "Gidhaur", "Giriak", "Gobardhanpur Kanap", "Gobindpur Urf Qanungo Bigha", "Gopalganj", "Goradeeh", "Goraul", "Goraul Bhagwanpur", "Guraru", "Gurua", "Guthani", "Hajipur", "Halsi", "Harlakhi", "Harnaut", "Harshidhi", "Hasanpur Buzurg", "Hasanpura", "Haspura", "Hathiyawan", "Hathwa", "Hazrat Jandaha", "Hilsa", "Hisua", "Hulasganj", "Hulashganj", "Imamganj", "Ishupur", "Islam Nagar", "Itarhi", "Jagdishpur", "Jalalpur", "Jamhore", "Jamui", "Jaynagar", "Jehanabad", "Jhajha", "Jhanjharpur", "Kahalgaon", "Kaimur (Bhabua)", "Kako", "Kalaua Kalan", "Kaler", "Kaluahi", "Kan Maniari", "Kanth Chhapra", "Karakat", "Kargahar", "Karpi", "Kashi Chak", "Katihar", "Katoria", "Katraul", "Kawakol", "Kesariya", "Kesath", "Khagaria", "Khajauli", "Khanarda", "Kharagpur", "Khararahia", "Kharik", "Kharka Basant", "Khiara", "Khizersarai", "Khusrupur", "Khutauna", "Kiratpur Raja Ram", "Kishanganj", "Kochas", "Koilwar", "Koriapatti", "Kuangarhi", "Kuari Madan", "Kudra", "Kumarkhand", "Kurhani", "Kursela", "Kurtha", "Kutumba", "Ladania", "Lahladpur", "Lahuara", "Lakat Chhapra", "Lakhisarai", "Lalganj", "Laukaha", "Laukahi", "Madan Chhapra", "Madhepur", "Madhepura", "Madhubani", "Mahendia", "Mahesia", "Mahishi", "Mahnar", "Maikhand Milik", "Mairwa", "Maker", "Makhdumpur", "Maner", "Maniari", "Manjhi", "Marhowrah", "Marouna", "Marwan", "Masaurhi", "Mashrakh", "Maudiha", "Mehsi", "Mehus", "Meskaur", "Minapur", "Misraulia", "Mohania", "Mohiuddin Nagar", "Mokameh Khas", "Motihari", "Motipur", "Munger", "Muradpur Bharath", "Murliganj", "Muzaffarpur", "Nabiganj", "Nabinagar", "Nagar Nausa", "Najari", "Nalanda", "Nanpur", "Nardiganj", "Narhat", "Nasriganj", "Naubatpur", "Naugachia", "Nauhatta", "Navanagar", "Nawada", "Nawada Govindganj", "Nirmali", "Noma", "Noorsarai", "Nuaon", "Obra", "Pachrukhi", "Pakri", "Pakribarwan", "Pakridayal", "Paliganj", "Panapur", "Pandaul", "Paraiya", "Parbatta", "Parihar", "Paroo", "Parora", "Parsa", "Parsauni", "Parwalpur", "Patahi", "Patarghat", "Patepur", "Patna", "Patori", "Phenhara", "Phulparas", "Phulwari", "Pipra Kothi", "Piprahi", "Piro", "Pirpainti", "Pota urf Tajpur Phaksia Bharthi", "Pratapganj", "Pundarakh", "Pupri", "Puraini", "Purnea", "Rafiganj", "Raghopur", "Rahui", "Rajapakar", "Rajauli", "Rajaun", "Rajgir", "Rajnagar", "Rajoun", "Ramgarhwa", "Rangra", "Ratni", "Ratnifaridpur", "Raunakabad", "Raxaul", "Revelganj", "Riga", "Rohtas", "Rosera", "Runi Saidpur", "Rupauli", "Rupauli Chausima", "Sadar Madhubani", "Sadikpur Moraul", "Saharsa", "Sahdai Buzurg", "Sahebganj", "Sahsaul", "Saidpur Salha Barari", "Salkhua", "Samastipur", "Samho", "Sandesh", "Sangrampur", "Sanjhauli", "Saraigarh", "Saraiya", "Saran", "Sarmera", "Sasaram", "Satar Kataiya", "Saur Bazar", "Sembhu Chhapra", "Shambhuganj", "Sheikhpura", "Shekhopur", "Shekhwa Tola", "Shekupur Sarai", "Sheohar", "Sherghati", "shilowri", "Sihpur", "Silao", "Simariya", "Simri", "Simri Bakhtiarpur", "Singheshwar", "Singhwara", "Sirdala", "Sitamarhi", "Siwan", "Sobhan Chhapra", "Sonahula", "Sonbarsa", "Sondiha", "Sugauli", "Sugia", "Sultanganj", "Supaul", "Surahatha Dharampur", "Surajgarha", "Sursand", "Taraiya", "Tarari", "Teghra", "Tekari", "Tekniwas", "Telhara", "Teoth", "Tetaria", "Tharthari", "Tikari", "Tilauthu", "Triveniganj", "Turkaulia", "Udakishanganj", "Vaishali", "Warisaliganj", "Ziradei"],
        "Chhattisgarh": ["Abhanpur", "Adbhar", "Akaltara", "Amatoli", "Ambagarh Chowki", "Ambikapur", "Antagarh", "Awari", "Bagbahara", "Bagicha", "Baikunth", "Baikunthpur", "Balconagar", "Balod", "Baloda Bazar", "Balrampur", "Bamhni Bazar", "Bango", "Bankimongra", "Baradwar", "Barauda", "Bastar", "Belgahna", "Bemetera", "Bhairamgarh", "Bhaisma", "Bhaiyathan", "Bhanupratappur", "Bhilai", "Bhopalpatnam", "Bijapur", "Bilaigarh", "Bilaspur", "Bilha", "Bindranawagarh", "Birgaon", "Birra", "Bsna", "Champa", "Charama", "Chhuikhadan", "Chhura", "Chhuriya", "Chirimiri", "Dabhara", "Dantewada", "Deobhog", "Deori", "Dhamdha", "Dhamtari", "Dharmajaigarh", "Dharsiwa", "Dondi", "Dondi Awari", "Dondi Lohara", "Dongargaon", "Durg", "Fingeshwar", "Gandai Pandaria", "Ganiyari", "Gariaband", "Gaurella", "Gharghoda", "Gopalnagar", "Gunderdehi", "Hardi Bazar", "Hathbandh", "Hathibahra", "Hirmi", "Hirri Mines", "Jagdalpur", "Jaijaipur", "Jairamnagar", "Jamnipali", "Janakpur", "Janjgir", "Janjgir-Champa", "Jashpur", "Jashpurnagar", "Kamta", "Kanker", "Kargi Road", "Kasdol", "Kaskera", "Katghora", "Katgi", "Kawardha", "Keshkal", "Keskal", "Khairagarh", "Kharod", "Kharora", "Kharsia", "Komakhan of Mahasa", "Kondagaon", "Konta", "Korba", "Koriya", "Kosanga", "Kumarra Chhuriya", "Kunkuri", "Kurud", "Kusmi", "Kusmunda", "Lakhanpur", "Lawan", "Lormi", "Mahasamund", "Malkharoda", "Mana Camp", "Manddar Cement Factory", "Mandir Hasod", "Manendragarh", "Manikpur", "Marwahi", "Masturi", "Mohala", "Mungeli", "Nagri", "Nandghat", "Narayanpur", "Nariyara", "Narra", "Nawagarh", "Naya Baradwar", "Neora", "Pakhanjore", "Palari", "Pamgarh", "Pandaria", "Pandewar", "Panduka", "Parsada", "Patah", "Pathalgaon", "Patharia", "Pendra", "Phingeshwar", "Pithora", "Pratppur", "Raigarh", "Raipur", "Rajim", "Rajnandgaon", "Ramanuj Ganj", "Ratanpur", "Rawan", "Rudri", "Saja", "Sakti", "Salhebhata", "Sanjaribalod", "Sankra", "Saraipali", "Saria", "Sarnagarh", "Sarsiwa", "Shivrinarayan", "Simga", "Sipat", "Sukma", "Surajpur", "Surguja", "Takhatpur", "Tamnar", "Tilda Newra", "Waidhan", "Watgan"],
        "Goa": ["Aradi Socorro", "Bardez", "Bicholim", "Canacona", "Curchorem", "Mapusa", "Margao", "Mormugao", "Old Goa", "Panjim", "Pernem", "Ponda", "Quepem", "Salcete", "Salvador do Mundo", "Sanguem", "Sanquelim", "Satari", "Tiswadi", "Vasco Da Gama", "Vodlemol Cacora"],
        "Gujarat": ["Abdasan", "Ahmedabad", "Ahwa", "Ajabpura", "Ambaji", "Amirgadh", "Amod", "Amreli", "Anand", "Anjar", "Anklav", "Ankleshwar", "Aravalli", "Babra", "Babri", "Bagasara", "Bahecharpura", "Bakod", "Balasinor", "Banaskantha", "Bansda", "Bardoli", "Barwala", "Bavla", "Bayad", "Becharaji", "Bhabhar", "Bhachau", "Bhanvad", "Bharuch", "Bhatiya", "Bhavnagar", "Bhesan", "Bhiloda", "Bhuj", "Bilimora", "Birpur", "Bodeli", "Borsad", "Botad", "Chanasma", "Chhota Udepur", "Chikhli", "Choryasi", "Chotila", "Dabhoi", "Dahegam", "Dahej", "Dahisara", "Dahod", "Dakor", "Dangs (Ahwa)", "Danta", "Dantiwada", "Dasada", "Daskroi", "Dediapada", "Deesa", "Demai", "Deodar", "Detroj", "Devbhoomi Dwarka", "Devgadh Baria", "Dhandhuka", "Dhanera", "Dhanpur", "Dhansura", "Dharampur", "Dhari", "Dharoi", "Dhasa", "Dholka", "Dhoraji", "Dhrangadhra", "Dhrol", "Disa", "Diyodar", "Dohad", "Dungri", "Fatepura", "Gadhada", "Gandevi", "Gandhidham", "Gandhinagar", "Garbada", "Gariyadhar", "Ghogha", "Ghoghamba", "Gir Somnath", "Godhra", "Gondal", "Halol", "Halvad", "Hansot", "Hazira", "Himatnagar", "Idar", "Jafrabad", "Jahlod", "Jalalpore", "Jambughoda", "Jambusar", "Jamjodhpur", "Jamkalyanpur", "Jamkandorana", "Jamnagar", "Jasdan", "Jesar", "Jetholi", "Jetpur", "Jetpur Navagadh", "Jhagadia", "Jhalod", "Jodiya", "Junagadh", "Kachchh", "Kadana", "Kadi", "Kahbhalia", "Kalavad", "Kalawad Simani", "Kalol", "Kalyanpur", "Kamar Kotda", "Kamrej", "Kandla", "Kapadvanj", "Kaprada", "Karjan", "Kathlal", "Kavant", "Keshod", "Khajurada", "Khambha", "Khambhalia", "Khambhat", "Khanpur", "Kheda", "Khedbrahma", "Kheralu", "Khirasara", "Killa-pardi", "Kodinar", "Kotda Sangani", "Kothara", "Kutch", "Kutiyana", "Lajpur", "Lakhatar", "Lakhpat", "Lalpur", "Lathi", "Liliya", "Limbdi", "Limkheda", "Lodhika", "Lunawada", "Mahisagar", "Mahudha", "Mahuva", "Makrej", "Malia", "Malpur", "Manavadar", "Mandal", "Mandvi", "Mandvi Rural", "Mangrol", "Matar", "Meghraj", "Mehmedabad", "Mehsana", "Mendarda", "Mewada", "Modasa", "Morana", "Morbi", "Morva Hadaf", "Morvi", "Mota Dahisara", "Mota Miya Mangrol", "Muli", "Mundra", "Nadiad", "Nakhatrana", "Naliya", "Nandod", "Nar", "Naranpar", "Narmada", "Narmada (Rajpipla)", "Nasvadi", "Navapara", "Navsari", "Nijhar", "Nizar", "Okha", "Okhamandal", "Olpad", "Padadhari", "Padra", "Palanpur", "Palitana", "Palsana", "Panch Mahudi", "Panchmahal (Godhra)", "Pardi", "Patan", "Patdi", "Pavijetpur", "Petlad", "Porbandar", "Prantij", "Pratappara", "Radhanpur", "Rajkot", "Rajpipla", "Rajula", "Ranavav", "Ranpur", "Rapar", "Rusela", "Sabarkantha (Himmatnagar)", "Sagbara", "Sami", "Sanand", "Sankheda", "Santalpur", "Santrampur", "Sardhar", "Sathamba", "Satlasana", "Satsan", "Savar Kundla", "Savli", "Sayan", "Sayla", "Shehera", "Shihori", "Shri Amirgadh", "Siddhpur", "Sihor", "Sinor", "Sojitra", "Songadh", "Surat", "Surendranagar", "Sutrapada", "Talaja", "Talala", "Talod", "Tankara", "Tapi", "Tarapur", "Tharad", "Thasra", "Tilakvada", "Uchchhal", "Udhna", "Umargam", "Umarpada", "Umbergaon", "Umrala", "Umreth", "Unjha", "Unreth", "Upleta", "Vadagam", "Vadal", "Vadali", "Vadgam", "Vadnagar", "Vadodara", "Vagara", "Vaghodia", "Vaghodia INA", "Valia", "Vallabhipur", "Valod", "Valsad", "Vankal", "Vansda", "Vanthli", "Vapi", "Variav", "Vav", "Velachha", "Veraval", "Vijapur", "Vijaynagar", "Viramgam", "Virpur", "Visavadar", "Visnagar", "Vyara", "Wankaner", "Zankhvav"],
        "Haryana": ["Achina", "Ahrod", "Akbarpur", "Akoda", "Ambala", "Arjun Nagar", "Assandh", "Ateli", "Babain", "Badhra", "Badshahpur", "Baghot", "Baghthala", "Bahadurgarh", "Banipur", "Bara Gudha", "Barara", "Barda", "Barkoda", "Bas Dooda", "Basai", "Basbatori", "Basduda", "Bashirpur", "Bassai", "Baund Kalan", "Bawal", "Bawana", "Bawani Khera", "Bawania", "Bawwa", "Bayal", "Behali", "Beri", "Beri Dopana", "Bewal", "Bhainswal Kalan", "Bhakli", "Bharaf", "Bhatsana", "Bhaungerka", "Bhiwani", "Bhojawas", "Bhondsi", "Bhorakalan", "Bhotwas Ahir", "Bhungarka", "Bhushan Kalan", "Biran", "Bisowa", "Bithwana", "Boria Kamalpur", "Buddin", "Budhpur", "Budhwa", "Buroli", "Charkhi Dadri", "Cheeta Dungra", "Chhachhrauli", "Chillro", "Chitrauli", "Dabwali", "Dadri", "Dahina", "Dakhora", "Dalanwas", "Dammunpur Bara", "Daroli", "Dehlawas", "Deroli Ahir", "Dhadhot", "Dhador", "Dhana", "Dhanaunda", "Dhani Kolana", "Dhanonda", "Dhanota", "Dharan", "Dharson", "Dharuhera", "Dhawana", "Dholera", "Dhor Kalan", "Didoli", "Digrota", "Dochana", "Dongra Ahir", "Dulana", "Duloth Ahir", "Dunderwas", "Faridabad", "Farrukh Nagar", "Fatehabad", "Firozpur Jhirka", "Ganiar", "Gannaur", "Garhi Alawalpur", "Garhi Bolni", "Garhi Harsaru", "Gharaunda", "Gohana", "Gokal Pur", "Gokalgarh", "Golwa", "Gothra", "Gudha", "Gudiyani", "Gugodh", "Guhla", "Gujar Majra", "Gujarwas", "Guraora", "Gurgaon Rural", "Gurha", "Guriani", "Gurugram", "Haillymandi", "Hamidpur", "Hansi", "Hathin", "Hisar", "Hodal", "Hodal Rural", "Hudina", "Indri", "Ismaila", "Jagadhri", "Jai Singhpur Khera", "Jakhala", "Jakhauli", "Jano", "Jarwa", "Jatusana", "Jhabuwa", "Jhagroli", "Jhajjar", "Jhal", "Jhamri", "Jhanswa", "Jharli", "Jharoda", "Jholri", "Jhook", "Jind", "Jitpur Istamrar", "Jondhi", "Juddi", "Jundla", "Kaithal", "Kakrola", "Kalanwali", "Kalayat", "Kalka", "Kamania", "Kanina", "Kannaura", "Kanti", "Kanwali", "Kanwi", "Karawara Manakpur", "Karnal", "Karnawas", "Karoli", "Karota", "Khaleta", "Khaliawas", "Khalilpur", "Khandora", "Kharkhoda", "Khatod", "Kheri", "Khol", "Khor", "Khori", "Khudana", "Kohrar", "Kolana", "Koriawas", "Kosli", "Kothal Khurd", "Kotia", "Krishan Nagar", "Kultajpur", "Kund", "Kunjpura", "Kurukshetra", "Laad", "Ladwa", "Lawan", "Lilodh", "Lisan", "Loharu", "Lookhi", "Madana Kalan", "Madhogarh", "Maduban", "Mahendragarh", "Maheshwari", "Majra Gurdas", "Majra Sheoraj", "Mamaria Ahir", "Mandi Dabwali", "Mandola", "Manesar", "Mangali", "Masani", "Mastapur", "Mayan", "Meham", "Mewat", "Mohanpur", "Mohindergarh", "Mundhal", "Mundi", "Mundlana", "Musepur", "Nagal Jamalpur", "Nagal Katha", "Nagina", "Nahar", "Nahri", "Naichana", "Naigawan", "Nandrampur Bass", "Nangal Dargu", "Nangal Jamalpur", "Nangal Katha", "Nangal Mala", "Nangal Pathani", "Nangal Sirohi", "Nangal Teju", "Nangli Godha", "Nangli Godha Village", "Nanukalan", "Naraingarh", "Narnaul", "Narwana", "Nautana", "Nawan", "Neerpur", "Nehrugarh", "Nehrugarh-N", "Niamatpur", "Nigdhu", "Nihalawas", "Nilokheri", "Nimbi", "Nimoth", "Nissing", "Nizampur", "Nuh", "Nuni Awal", "Odhan", "Pabnera", "Palam Road", "Palam Vihar", "Palhawas", "Palripanihara", "Palwal", "Panchkula", "Panipat", "Pataudi", "Pathera", "Pehowa", "Pinjore", "Pota", "Pranpura", "Pundri", "Punhana", "Punsika", "Purkhas", "Rajaund", "Rajound", "Raliawas", "Rambas", "Rampuri", "Rania", "Rasoolpur", "Rathanthal", "Ratia", "Rattanthal", "Rattia", "Rewari", "Rohrai", "Rohtak", "Sadat Nagar", "Safidon", "Saharanwas", "Sahibzada Ajit Singh Nagar", "Sangwari", "Sankhol", "Sareli", "Satnali", "Sehlang", "Sehma", "Shadat Nagar -N", "Shahabad", "Shahbaad Markanda", "Shahpur", "Shayam Nagar", "Shivaji Nagar", "Shobhapur", "Shyampura", "Siana", "Siha", "Sihore", "Sirohi Bahali", "Sirsa", "Siwani", "Sohna", "Sonipat", "Sulkha", "Sundrah", "Surethi", "Suthana", "Tajpur", "Tankri", "Tauru", "Thanesar", "Thanwas", "Tint", "Tohana", "Tosham", "Tosham Rural", "Tumna", "Yamuna Nagar", "Zainabad"],
        "Himachal Pradesh": ["Amb", "Anni", "Arki", "Aut", "Bahrmour", "Baijnath", "Balah", "Baldwara", "Bali Chowki", "Baloh", "Ban Khandi", "Bangana", "Banjar", "Baroh", "Barsar", "Barwi", "Beri", "Bhalai", "Bhaoranj", "Bharmour", "Bharwain", "Bhatehr", "Bhatiyat", "Bhoranj", "Bijhri", "Bilaspur", "Budhan Upper", "Chachyot", "Chamba", "Charna", "Chhatar Khas", "Chirgaon", "Chopal", "Churah", "Dalhousie", "Dangoh", "Daulatpur", "Dehra Gopipur", "Dhaliara", "Dhamla", "Dhar Chhochhodun", "Dharampur", "Dharamshala", "Diyara", "Dodra Kawar", "Dolra", "Ghumarwin", "Hamirpur", "Hangrang", "Harchakian", "Haroli", "Holi", "Indora", "Jachh", "Jaisinghpur", "Jawali", "Jhanduta", "Joginder Nagar", "Jubbal", "Junga", "Kala Amb", "Kalpa", "Kamand", "Kandaghat", "Kangra", "Karsog", "Kasauli", "Khundian", "Kinnaur", "Kotkhai", "Kotli", "Kullu", "Kumarsain", "Lad Bharol", "Lahaul and Spiti", "Lahul", "Manali", "Mandi", "Mehre", "Moorang", "Nadaun", "Naggar", "Nahan", "Naina Devi", "Nalagarh", "Nankhari", "Nichar", "Nihri", "Nirmand", "Nohra", "Nurpur", "Pachhad", "Padhar", "Pajhota", "Palampur", "Pandoh", "Pangi", "Paonta Sahib", "Pooh", "Rakkar", "Rampur Bushahr", "Ramshehar", "Reckong Peo", "Reserve Jangal Rakkar", "Rohru", "Sadar", "Sadoh", "Sainj", "Salooni", "Sandhol", "Sangla", "Sangrah", "Sarahan Khurd", "Sarkaghat", "Shahpur", "Shillai", "Shimla", "Sihunta", "Sirmaur (Sirmour)", "Slooni", "Solan", "Spiti", "Sujanpur Tira", "Sundernagar", "Suni", "Tahliwal", "Theog", "Thunag", "Una"],
        "Jharkhand": ["Akashi", "Amda", "Amrapara", "Amwar", "Angara", "Azadnagar", "Bachra", "Bagnocha", "Bagodar", "Baharagora", "Bakaspura", "Balumath", "Bandgaon", "Bano", "Bara Amda", "Barajamda", "Barhait", "Barharwa", "Barhi", "Barkagaon", "Barkhatha", "Barwadih", "Basia", "Bengabad", "Beniadih", "Berhait", "Bermo", "Bero", "Bhandra", "Bharno", "Bhawanathpur", "Birni", "Bishungarh", "Bishunpur", "Bisrampur", "Bnarayanpur", "Bokaro", "Bokaro Steel City", "Bolba", "Borrio", "Bundu", "Burmu", "Chaibasa", "Chainpur", "Chakradharpur", "Chakulia", "Chandil", "Chandwa", "Chandwara", "Chanho", "Chas", "Chatra", "Chawlibasa", "Chhota Gobindpur", "Chinpur", "Chiria", "Chitarpur", "Chopa", "Chouparan", "Chowka", "Churchu", "Dakra", "Daltonganj", "Damkarabarwa", "Dangoaposi", "Debipur", "Deoghar", "Deori", "Devipur", "Dhalbhumgarh", "Dhanbad", "Dibipur", "Djanwar", "Doghar", "Dumarghati", "Dumaria", "Dumka", "Dumri", "East Singhbhum", "Forest Block", "Gamharia", "Ganwan", "Garhwa", "Ghatshila", "Gidhaur", "Ginjo Thakurgaon", "Giridih", "Gobindpur", "Godda", "Goilkera", "Gola", "Golmuri", "Gomia", "Gopikandar", "Gouraijore", "Gua", "Guira", "Gumla", "Hariharganj", "Hatgamaria", "Hazaribag", "Hazaribagh", "Hiranpur", "Hunterganj", "Ichak", "Indranagar", "Itki", "Itkori", "Jadugora", "Jagannathpur", "Jainagar", "Jama", "Jamshedpur", "Jamtara", "Jamua", "Jamuagiridih", "Japla", "Jarmundi", "Jhinkpani", "Jorapokhar", "Jori", "Jugsalai", "Kadma", "Kamdara", "Kandra", "Kanke", "Karma", "Karon", "Karra", "Kasmar", "Kathikund", "Katkamsandi", "Khalari", "Kharsawangarh", "Khunti", "Kiriburu", "Koderma", "Kolebira", "Konardam", "Kundahit", "Kurdeg", "Kuru", "Lalbathan", "Lapla", "Lapung", "Latehar", "Lesliganj", "Litipara", "Lohardaga", "Madhupur", "Mahagama", "Maheshpur", "Mahulia", "Malumath", "Mandar", "Mandro", "Mandu", "Mango", "Manoharpur", "Markacho", "Masalia", "Meghahatuburu", "Mehrma", "Meral", "Mohanpur", "Moubhandar", "Muhammadganj", "Murhu", "Musabani", "Nagar Untari", "Nala", "Namkum", "Narainpur", "Nawadih", "Nawagarh", "Noadih", "Noamundi", "Ormanjhi", "Padma", "Pahargama", "Pakur", "Palamu", "Palkot", "Palojori", "Panki", "Pareya Hat", "Partabpura", "Patamda", "Pathardih", "Pathargama", "Pathna Land", "Patratu", "Peterbar", "Phulwartanr", "Pirtand", "Pratappur", "Rahargora", "Rajdhanwar", "Rajmahal", "Rajnagar", "Ramgarh", "Ranchi", "Rania", "Ranishwar", "Rehla", "Rohini", "Sahibganj", "Sakchi", "Saliburu", "Saraikela", "Saraiyahat", "Sarath", "Sarawan", "Sarth", "Sarwan", "Satbarwa", "Satgawan", "Seraikela", "Shikaripara", "Silli", "Simaria", "Simaria Khurd", "Simdega", "Sini", "Sirkadih", "Sisai", "Sonua", "Sunadar Pahari", "Sundarnagar", "Taljhari", "Tamar", "Tandwa", "Tatanagar", "Tenughat", "Thethaitanagar", "Tilaiya", "Tiruldih", "Tisri", "Torpa", "Toto", "Turguru", "Udhua", "Udhwa", "West Singhbhum"],
        "Karnataka": ["Afzalpur", "Aidanhal", "Alahalli", "Aland", "Alur", "Alur Rural", "Anegola", "Anekal", "Ankola", "Arakalagud", "Arsikere", "Athani", "Aurad", "B.Shettigeri", "Bachareddyhalli", "Badamanavarthekaval", "Badami", "Bagalkot", "Bagepalli", "Bailhongal", "Balige", "Ballari", "Bangarapet", "Bantwal", "Basavakalyan", "Basavana Bagewadi", "Basthihalli", "Bedkihal", "Belagavi", "Belgaum", "Belladamaradi", "Belthangady", "Belur", "Bengaluru", "Bengaluru Rural", "Bengaluru Urban", "Bhadravati", "Bhalki", "Bhatkal", "Bidar", "Bilgi", "Bilgi Rural", "Bilinandi", "Byadagi", "Challakere", "Chamarajanagar", "Chandrapura -Chatrakane", "Channagiri", "Channapatna", "Channarayapattana", "Cheelammanahalli", "Chickmagaluru", "Chikkaballapura", "Chikkakrimanahalli", "Chikkanayakanahalli", "Chikodi", "Chilkaragi", "Chincholi", "Chincholi H", "Chinnenahalli", "Chintamani", "Chitradurga", "Chittapur", "Coorg", "Dakshina Kannada", "Davangere", "Devadurga", "Devanahalli", "Dharwad", "Doddaballapura", "Doddagummanahalli", "Gadag", "Gadag-Betigeri", "Gangavathi", "Gauribidanur", "Gokak", "Gotlakunte", "Gubbi", "Guddethota", "Gudibanda", "Gulbarga", "Gundlupete", "Guribidanur", "Hadagalli", "Hagaribommanahalli", "Haliyal", "Hallur", "Halsur", "Hampi", "Hangal", "Hanumana Halli", "Harapanahalli", "Harihara", "Harpanahalli", "Hassan", "Haveri", "Heggadadevankote", "Hillikere", "Hirekerur", "Hiriyur", "Holalkere", "Holalkere Rural", "Holenarasipur", "Honnali", "Honnavar", "Hoovina Hadagali", "Hosa Neeralgi-M-Karadgi New", "Hosadurga", "Hosakote", "Hosali", "Hosanagar", "Hosapete", "Hoskote", "Hubali-Dharwad", "Hubballi", "Hukkeri", "Hulikal", "Humnabad", "Hungund", "Hunsur", "Indi", "Ivarahalli", "Jamkhandi", "Jangangaddi", "Jeerigepete", "Jevargi", "Joida", "Kadabeesanahalli", "Kadur", "Kalaburagi", "Kalaburagi (Gulbarga)", "Kalghatgi", "Kanakapura", "Kanchikai", "Karkala", "Karwar", "Kemminje Rural", "Khanapur", "Kolar", "Kolar Gold Fields", "Kollegal", "Kolur", "Koppa", "Koppa Rural", "Koppal", "Koratagere", "Koujageri", "Krishnarajanagara", "Krishnarajpete", "Kudligi", "Kukshtagi", "Kumta", "Kundapura", "Kundgol", "Kundgol Rural", "Kundpaura", "Kunigal", "Kurekanhal", "Kushtagi", "Ladwanti", "Lingsugur", "Londa", "Madanamatti", "Madduru", "Madhugiri", "Madikeri", "Magadi", "Malavalli", "Malur", "Mandya", "Mangaluru", "Manipal", "Manvi", "Mavinsur", "Modahalli", "Molakalmuru", "Moodubelle", "Mookanahalli", "Mudargi", "Muddalahalli", "Muddebihal", "Mudhol", "Mudigere", "Mulbagal", "Mundargi", "Mundgod", "Mutmurd", "Mysuru", "Nagamangala", "Nanjanagudu", "Narasimharajapura", "Nargund", "Navalgund", "Navunda", "Nelamangala", "Pandavapura", "Parasgad", "Pavagada", "Periyapatna", "Puttur", "Rabindranath Tagore Nagar", "Raibag", "Raichur", "Ramanagara", "Ramdurg", "Ranebennur", "Rona", "Sakleshpur", "Sampgaon", "Sandur", "Saundatti", "Saundatti-Yellamma", "Savanur", "Sedam", "Shahapur", "Shiggaon", "Shikaripur", "Shimoga", "Shirahatti", "Shivamogga", "Shorapur", "Shrirangapattana", "Siddapur", "Sidlaghatta", "Sindagi", "Sindhanur", "Sira", "Sira Rural", "Sirsi", "Siruguppa", "Somwarpet", "Soraba", "Southegowdanahalli", "Sringeri", "Srinivasapura", "Srinivaspur", "Srirangapatna", "Sullia", "Supa", "Tarikere", "Thirthahalli", "Tiptur", "Tirumakudalu Narasipura", "Tumakuru", "Turuvekere", "Udupi", "Vijayapura", "Virajpet", "Yadgir", "Yelandur", "Yelburga", "Yellapur", "Yenigadale"],
        "Kerala": ["Adichanallur", "Adoor", "Adur", "Alappuzha", "Alathur", "Aluva", "Ambalappuzha", "Angamaly", "Arikkulam", "Changanassery", "Chavakkad", "Chemmad", "Chengannur", "Chennithala", "Cherpulassery", "Cherthala", "Chirayinkeezhu", "Chirayinkil", "Chithara", "Chittur-Thathamangalam", "Devikulam", "Eranad", "Ernakulam", "Hosdurg", "Idukki", "Irinjalakuda", "Kadappuram", "Kaduthuruthy", "Kaiparambu", "Kalady", "Kambil", "Kanayannur", "Kandalloor", "Kanhangad", "Kanjirapally", "Kanjirappally", "Kannur", "Karthikappally", "Karunagappally", "Kasaragod", "Kayamkulam", "Kochi", "Kodungallur", "Kollam", "Koonammavu", "Koovappally", "Kothamangalam", "Kottarakkara", "Kottayam", "Kottuvally", "Kovalam", "Koyilandy", "Kozhencherry", "Kozhikode", "Kozhinjampara", "Kulanada", "Kumarapuram", "Kunnathunadu", "Kunnathur", "Kuravilangad", "Kuttanadu", "Mala", "Malampuzha-II", "Malappuram", "Mallappally", "Mananthavady", "Manjeri", "Mannarkad-I", "Mannarkad-II", "Mararikulam", "Mavelikkara", "Mayyil", "Meenachil", "Meenachil part", "Melukavumattam", "Mevada", "Moodadi", "Mukundapuram", "Muthukulam", "Muvattupuzha", "Nedumangad", "Neyyattinkara", "Nilambur", "Nooranad", "North Paravur", "Ottpalam", "Palakkad", "Panackapalam", "Paravoor", "Pathanamthitta", "Pathanapuram", "Payyanur", "Pazhayangadi", "Peermade", "Perintalmanna", "Perumbaikad", "Pilathara", "Pinnakkanad", "Piravom", "Ponnani", "Pravithanam", "Pulpatta", "Quilandy", "Ramanattukara", "Ranni", "Sultan Bathery", "Taliparamba", "Thalapilly", "Thalassery", "Thalavoor", "Thalayazham", "Thalayolaparambu", "Thekkekara", "Thenhipalam", "Thiruvalla", "Thiruvananthapuram", "Thodupuzha", "Thrissur", "Tirur", "Tirurangadi", "Trivandrum", "Udumbanchola", "Vadakara", "Vaikom", "Vaniyamkulam-I", "Vannappuram", "Vazhoor", "Vythiri", "Vythiti", "Wadakkanchery", "Wayanad"],
        "Madhya Pradesh": ["Abhayapuri", "Adalbari", "Agomani", "Ahopa", "Alisinga", "Amguri", "Amtala", "Arearjhar Pt.I", "Arikuchi", "Atherikhat Jangle", "Aujuri No.3", "Baganpara", "Bagribari", "Bagulamari", "Baharihat", "Bajali", "Bakola", "Bakrapara Pt-II", "Baksa", "Bakuajari", "Bala Bhitha", "Balijana", "Balikaria", "Balikuchi", "Balipara", "Balizar", "Bamunbari", "Bandarmari", "Baramchari", "Barangabari", "Barbang", "Barbari", "Bargandubi", "Barimakha", "Barkhetri", "Barnadi Par", "Barpathar", "Barpeta", "Barpeta Road", "Bedeti T.E. 318/494", "Behali", "Belsor", "Bengtol Kumguri", "Bennabari", "Bezera", "Bhairabkunda", "Bhakatpara", "Bhawanipur", "Bhella", "Bhera", "Bhojkuchi", "Bhowanipur", "Bhowraguri", "Bhowraguri Mandarpara", "Bhowraguri-Satbil-II", "Bhuragaon", "Bidyapara II Part Pt", "Bihaguri", "Bihpuria", "Bijni", "Bilasipara", "Bindukuri T.E.", "Biswanath", "Biswanath Charali", "Biswanathghat", "Boginadi", "Bogribari", "Boitamari", "Bokajan", "Bokakhat", "Boko", "Bongaigaon", "Bongaon", "Bor Baruah", "Bordoloni", "Borsola", "Borthekerabari", "Bosa Gaon", "Buri Nagar", "Cachar", "Chabua", "Chaibari", "Chamaria Pam", "Chamaria Satra", "Chamata", "Chanbarikhuti", "Chandrapur Bagicha", "Changsari", "Chapakhowa", "Charagaon", "Charaideo", "Chariali", "Chariduar", "Charingia Gaon", "Chaudhuritop", "Chechapani", "Chhaygaon", "Chirang", "Dalbari", "Dalgaon", "Dalu Grant", "Dangarmakha", "Darangamela", "Darrang", "Debitola", "Dekargaon", "Deomornoi", "Deulguri Pt-II", "Dhakuakhana", "Dhalpur", "Dhanbil", "Dhaniagog", "Dhekiajuli", "Dhemaji", "Dhubri", "Dhula", "Dibrugarh", "Dicial Dhulia Gaon", "Dighali Gaon", "Dihingia Gaon", "Dihira", "Dikrong", "Dima Hasao (North Cachar Hills)", "Dimakuchi", "Diphu", "Dirpaisantipur Gaon", "Dirua", "Dispur", "Doboka Town", "Dongkamukam", "Donkamokam", "Doom Dooma", "Doomni", "Dudhnoi", "Duliajan", "Duni", "Fekamari", "Gerua", "Geruapara", "Ghilamora", "Ghoramari", "Goalpara", "Godabahar Gaon", "Gogamukh", "Gohpur", "Golaghat", "Golakganj", "Gorbil", "Goreswar Block", "Goroimari", "Gossaigaon", "Guakuchi", "Guwahati", "Haflong", "Hailakandi", "Hajo", "Halem T.E. 270/442 Grant", "Hamren", "Hanapara", "Haribhanga", "Harisinga", "Hatibandha", "Hatidhura", "Hattigarh", "Hojai", "Howly", "Jagiroad", "Jalkhana", "Jaloni Naohalia", "Jamugurihat", "Jonai", "Jorhat", "Joy Mangla", "Jutlibari Borhula", "Kacharigaon", "Kachugaon", "Kaithalkuchi", "Kakaya", "Kalabari", "Kalaigaon", "Kalgachia", "Kaliabor", "Kaljar", "Kamarkuchi", "Kampur Town", "Kamrup", "Kamrup Metropolitan", "Karbi Anglong", "Karemura", "Karimganj", "Kaslatari Pt.I", "Kendukuchi", "Ketekibari", "Khagrabari", "Khalihamari", "Kharsitha", "Kharupetia", "Kharupetiaghat", "Khatikuchi", "Khelmati", "Khoirabari", "Khowang", "Kokilabari", "Kokrajhar", "Kopati", "Kumarikata", "Lahowal", "Lakhimi Pathar", "Lakhimpur", "Lakhipur", "Lalpool", "Laluk", "Luki ( Boko Block)", "Lunpuria", "Machkhowa Chariali", "Majuli", "Mandia", "Mandia Gaon", "Mangaldoi", "Mankachar", "Margherita", "Margherita Kumar Potty", "Marowa", "Mayanbari", "Mazbat", "Mijikajan T.E. 281/321", "Mikir Para Chakardoi", "Milanpur", "Missamari", "Moa Mari Kachari", "Mohon Deodhai", "Moinapara", "Moranhat Town", "Morigaon", "Mugkuchi", "Muhimari Bilar Pathar", "Mukalmua", "Mukta Pur", "Mushalpur", "N.C.Angarkata", "Na-Ali Bhatia", "Na-Pam Gaon", "Nag-Sankar Gaon", "Nagaon", "Nagarbera", "Naharkatia", "Nalbari", "Namrup", "Nankar Bhaira", "Narsingpur Pt II", "Nikashi", "Niz Namati", "Niz-Bahjani", "Niz-Barigog", "Niz-Madartola", "No.1 Barchala", "No.1 Chandana T.E.", "No.1 Gorali T.E.", "No.1.Kaplabari", "No.1.Kekan Kuchi", "No.1.Paharpur", "No.3 Goreswar", "No.4 Barangajuli", "North Lakhimpur", "Pabhoi", "Pachim Jinjia", "Pachim Sualani", "Pakribari", "Palashbari", "Panchgram", "Parakuchi", "Patacharkuchi", "Pathali Pahar", "Pathali Pam Grant 314/51", "Patharughat", "Pathsala", "Patkijuli", "Phakum Kumar Phodia", "Pub Kathal Muri", "Pub Khagra Bari", "Pub Paneri", "Raghunandanpur Pt II", "Rakhaltila", "Rampur Agagara", "Rampur No.3", "Ranga Chakua", "Ranga Pothar", "Rangamati Gaon", "Rangapara", "Rangia", "Rangjuli", "Rewa N.C.", "Rowta", "Rupshi Part IV", "Sadiya", "Salkocha", "Salmara", "Sandheli", "Sanekuchi", "Sarthebari", "Sarupathar", "Sarupeta", "Saualkuchi", "Saukuchi", "Sepon Chah Bagicha 107/110 Nlr", "Shamugaon", "Sidli", "Silapathar", "Silchar", "Simen Chapori", "Simlaguri", "Sipajhar", "Sirajuli", "Sissiborgaon", "Sivasagar", "Sonapur Block", "Sonitpur", "Sootea", "Sorbhog", "South Salamara-Mankachar", "Suradi", "Tamulpur", "Tangla", "Teghakhat", "Teloijan Darkhsta No.25", "Tengakhat", "Terechia", "Tetenbari", "Tezpur", "Thamna", "Thanguri", "Thelamara", "Tihu", "Tingkhong", "Tinsukia", "Tipling", "Titabor", "Tumni Lawkhowa", "Udalguri", "Ulabari", "West Karbi Anglong"],
        "Maharashtra": ["Achalpur", "Aheri", "Ahmednagar", "Ahmedpur", "Ajara", "Akkalkot", "Akkalkuva", "Akluj", "Akola", "Akole", "Akot", "Alibag", "Amalner", "Ambad", "Ambajogai", "Ambegaon", "Ambernath", "Ambewadgaon", "Amgaon", "Amravati", "Anjaneri", "Anjangaon", "Ardhapur", "Arjuni", "Armori", "Arvi", "Ashti", "Atpadi", "Aundha Nagnath", "Aurangabad", "Ausa", "Babhulgaon", "Badnapur", "Balapur", "Balharshah", "Baramati", "Barshi", "Barsi Takli", "Basmat", "Bavada", "Beed", "Bhadgaon", "Bhadravati", "Bhamragarh", "Bhandara", "Bhatkuli", "Bhavaninagar", "Bhikarkheda", "Bhiwandi", "Bhiwapur", "Bhokar", "Bhokardan", "Bhoom", "Bhusawal", "Bhuye", "Biloli", "Bodwad", "Buldhana", "Chakur", "Chalisgaon", "Chamorshi", "Chandgad", "Chandrapur", "Chandsaili", "Chandur", "Chandur Bazar", "Chandur Railway", "Chandwad", "Chikhaldara", "Chikhli", "Chimur", "Chiplun", "Chopda", "Dahanu", "Dahiwadi", "Dapoli", "Darwha", "Daryapur Banosa", "Daund", "Deaulgaon Raja", "Degloor", "Deoni", "Desaiganj", "Deulgaon Mahi", "Devgad", "Dhadgaon", "Dhamangaon", "Dharangaon", "Dharmabad", "Dharni", "Dharur", "Dholagarwadi", "Dhondewadi", "Dhule", "Digras", "Dodamarg", "Dombivli", "Erandol", "Etapalli", "Gadchiroli", "Gadhinglaj", "Gaganbavada", "Gaganbawda", "Gangakhed", "Georai", "Ghansawangi", "Ghatanji", "Ghera Sudhagad", "Gherapurandhar", "Godhani", "Gondia", "Gondpipri", "Goregaon", "Gorewasti", "Guhagar", "Hadgaon", "Harat Kheda", "Hatkanangale", "Himayatnagar", "Hinganghat", "Hingna", "Hingoli", "Indapur", "Jalgaon", "Jalgaon Jamod", "Jalkot", "Jalna", "Jamkhed", "Jath", "Javali", "Jawhar", "Jayakochiwadi", "Jintur", "Jiwati", "Junnar", "Kadegaon", "Kagal", "Kahanapur", "Kahatav", "Kaij", "Kalamb", "Kalameshwar", "Kalamnuri", "Kallam", "Kalyan", "Kamptee", "Kandhar", "Kankavali", "Kannad", "Karad", "Karanja", "Karanja (Ghadge)", "Karanjali", "Karjat", "Karmala", "Karmala Rural", "Katol", "Kavathe Mahankal", "Kelapur", "Khalapur", "Khamgaon", "Khanapur", "Khandala", "Kharghar", "Khatav", "Khopoli", "Khuldabad", "Kikali", "Kinwat", "Kiwat", "Kodgaon Ambad", "Kolgaon", "Kolhapur", "Kopargaon", "Korchi", "Koregaon", "Korpana", "Kudal", "Kudnur", "Kuhi", "Kurduwadi", "Kurkheda", "Lakhandur", "Lakhni", "Lanja", "Latur", "Lohara", "Lonar", "Lonavala", "Madha", "Mahabaleshwar", "Mahad", "Mahagaon", "Malegaon", "Malegaon Bk", "Malegaon Kannad", "Malkapur", "Malshiras", "Malvan", "Manchar", "Mandangad", "Mandur", "Mangalwedha", "Mangaon", "Mangrulpir", "Mantha", "Manwath", "Maregaon", "Matheran", "Mauda", "Mawalgaon", "Mehkar", "Mhasala", "Mhase", "Mira Bhayandar", "Miraj", "Mohadi", "Mohdal Bhanguda", "Mohol", "Mohopada", "Mokhada", "Morshi", "Motala", "Mudkhed", "Mukhed", "Muktainagar", "Mulchera", "Mulshi", "Mumbai", "Mumbai City", "Mumbai Suburban", "Mundhe Tarf Chiplun", "Murbad", "Murtizapur", "Murud", "Murud rural", "Nagbhid", "Nagbhir", "Nagpur", "Naigaon", "Nala Sopara", "Nanded", "Nandgaon Khandeshwar", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navapur", "Navi Mumbai", "Naygaon", "Newasa", "Nilanga", "Niphad", "Omerga", "Oros", "Osmanabad", "Pachora", "Paithan", "Palghar", "Palus", "Pandharpur", "Panhala", "Panumbre Tarf Shirala", "Panvel", "Paranda", "Paratwada", "Parbhani", "Parli", "Parner", "Parola", "Parsamal", "Parshivni", "Partur", "Pathardi", "Patoda", "Pauni", "Peint", "Pen", "Peth", "Peth Umri", "Phaltan", "Phulambri", "Pimpalgaon Tarf Khed", "Pimpri Ashti", "Pimpri Bk.Pr.Pachora", "Pimpri-Chinchwad", "Poladpur", "Pombhurna", "Pulgaon", "Pune", "Purna", "Pusad", "Radhanagari", "Rahata", "Rahta Pimplas", "Rahuri", "Raigad", "Rajapur", "Rajgurunagar", "Rajura", "Ralegaon", "Ramkheda", "Ramtek", "Ranala", "Ranewadi", "Ratnagiri", "Raver", "Risod", "Roha", "Sadak Arjuni", "Sakoli", "Sakri", "Salekasa", "Samudrapur", "Sangameshwar", "Sangamner", "Sangli", "Sangola", "Sangrampur", "Saoli", "Saswad", "Satana", "Satara", "Savner", "Sawali", "Sawantwadi", "Seloo", "Selu", "Sengaon", "Shahada", "Shahade", "Shahapur", "Shahuwadi", "Shegaon", "Shekhmirewadi", "Shevgaon", "Shirala", "Shirol", "Shirpur", "Shirur", "Shirur Anantpal", "Shirwal", "Shrigonda", "Shrirampur", "Shrivardhan", "Sillod", "Sindewahi", "Sindhudurg", "Sindkhed Raja", "Sindkheda", "Sinnar", "Sironcha", "Sironcha Ry.", "Solapur", "Sonpeth", "Soygaon", "Surgana", "Takali Ambad", "Talasari", "Taloda", "Talvat Khed", "Talvat Pal", "Tambale", "Tasgaon", "Telhara", "Tembhari", "Teosa", "Thane", "Tirora", "Trimbak", "Tuljapur", "Tumsar", "Udgir", "Umarkhed", "Umred", "Vadgaon", "Vaibhavwadi", "Vaijapur", "Varvand", "Vasai", "Velhe", "Vengurla", "Vikramgad", "Virar", "Wada", "Wadhe", "Wadwani", "Wai", "Walwa", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yeola"],
        "Manipur": ["Bishnupur", "Chandel", "Churachandpur", "Imphal", "Imphal East", "Imphal West", "Jiribam", "Kakching", "Kamjong", "Kangpokpi", "Mandop Yumpham", "Noney", "Pherzawl", "Senapati", "Tamenglong", "Tengnoupal", "Thoubal", "Ukhrul"],
        "Meghalaya": ["Amlarem", "Ampati", "Araimile", "Baghmara", "Balat", "Barengapara", "Bholaganj Bazar", "Byrnihat", "Cherrabazar", "Cherrapunjee", "Dambo Rongjeng", "Dawki", "Dobasipara", "Dudnai", "East Khasi Hills", "Fulbari", "Garobadha", "Jowai", "Khliehriat", "Laban", "Lad Rymbai", "Laitkor Peak", "Madanriting", "Mahendraganj", "Mairang", "Mawkynrew", "Mawkyrwat", "Mawlai", "Mawpat", "Mawphlang", "Mawsynram", "Mendipathar", "Nangwalbibra", "Nonglyer", "Nongpoh", "Nongstoin", "North Garo Hills", "Phulbari", "Pynursla", "Resubelpara", "Rongjeng", "Rongra", "Rynjah", "Shella", "Shillong", "Smit", "South West Garo Hills", "South West Khasi Hills", "Sumer", "Synrang Kaban", "Tikrikilla", "Tura", "UCC", "Umiam", "Umsaw", "Umsning", "West Khasi Hills", "Williamnagar"],
        "Mizoram": ["Aibawk", "Aizawl", "Bawngkawn", "Bilkhawthlir", "Bunghmun", "Champhai", "Chawngte", "Darlawn", "Demagiri", "East Lungdar", "Hanhthial", "Kawnpui", "Khawbung", "Khawzawl", "Kolasib", "Kulikawn", "Lawngtlai", "Lengpui", "Lunglei", "Lungsen", "Mamit", "N.Kawnpui", "Ngopa", "North Thingdawl", "Phaileng", "Phullen", "Reiek", "S.khawbung", "Sairang", "Saitual", "Sangau", "Serchhip", "Siaha", "Sialsuk", "Sihphir", "Thingsai", "Thingsulthliah", "Tlabung", "Tuipang", "Vairengte", "W.Bunghmun", "Zawlnuam", "Zemabawk", "Zotlang"],
        "Nagaland": ["Aghunato", "Akuluto", "Artc", "Atoizu", "Bhandari", "Champang", "Changtongya", "Chiechama", "Chizami", "Chozuba", "Chuchulang", "Chuchuyimlang", "Chumukedima", "Dimapur", "Doyang Hydro Project", "Ghathashi", "Imphal", "Impur", "Jalukie", "Kiphire", "Kohima", "Longkhim", "Longleng", "Mangkolemba", "Medziphema", "Meluri", "Mokokchung", "Mon", "Naginimora", "Noklak", "Ongpang Kong", "Peren", "Pfutsero", "Phek", "Tizit", "Tseminyu", "Tuensang", "Tuli", "Wokha", "Zakhama", "Zalukie", "Zunheboto"],
        "Odisha": ["Adava", "Agalpur", "Ambabhona", "Anandapur", "Angargan", "Angul", "Ankush Pur", "Asika", "Athagarh", "Athmallik", "Attabira", "Aul", "Badamba", "Badasahi", "Badmal", "Badnuagaon", "Baghiabahal", "Bahalda", "Balangir", "Balasore", "Balianta", "Baliapal", "Balikuda", "Balimi", "Balipatna", "Balisankara", "Balliguda", "Bamunigaon", "Banaharapali", "Banapur", "Banarpal", "Banei", "Bangomunda", "Banki", "Banspal", "Barakhama", "Barang", "Barapali Town", "Barasahi", "Barbil", "Bargarh", "Baripada", "Barkote", "Barpali", "Barsahi", "Basudebpur", "Baunsuni", "Begunia", "Belpada", "Belpahar", "Betnoti", "Bhadrak", "Bhadrak Rural", "Bhairabsingipur", "Bhalumunda", "Bhandari Pokhari", "Bhanjanagar", "Bhapur", "Bharchhan", "Bhasma", "Bhatli", "Bhawanipatna", "Bheden", "Bhishmagiri", "Bhograi", "Bhuban", "Bhubaneswar", "Bhubanpur", "Bidyadharpur", "Bijepur", "Binjharpur", "Binka", "Biranarasinghpur", "Biridi", "Biripali", "Birmaharajpur", "Birmitrapur", "Bishama Katek", "Bissamcuttack", "Boden", "Boipariguda", "Bolagarh", "Bonaigarh", "Borigumma", "Boudh", "Bounsuni", "Brahmagiri", "Brahmapur", "Budhi Padar", "Buguda", "Burla", "Chakapada", "Champua", "Chandaka", "Chandbali", "Chandikhol", "Chatrapur", "Chaudwar", "Chhendipada", "Chikiti", "Chilika", "Chitrakonda", "Chudapali", "Colliery", "Cuttack", "Dabugaon", "Damanjodi", "Daringbadi", "Dasmanthpur", "Daspalla", "Debagarh", "Deogaon", "Deogarh", "Dhamanagar", "Dharmagarh", "Dharmasala", "Dhaurapali", "Dhenkanal", "Dhenkanal Sadar", "Digapahandi", "Duajhar", "Dumerpali", "Ersama", "Fulaalasa", "G Udayagiri", "Gaisilat", "Gajapati", "Gandia", "Ganjam", "Garabandha", "Ghantapada", "Ghatgaon", "Girisola", "Gobindanagar", "Gobindapur", "Golamunda", "Gudari", "Gunderpur", "Gunupur", "Gurundia", "Harabhanga", "Hasanabad chaka badachana", "Hatadihi", "Hatibari", "Hemgir", "Hinjillikatu", "Hirakud", "Iswarpur", "Jagatsinghpur", "Jaipatna", "Jajapur", "Jajpur", "Jajpur Road", "Jaleswar", "Jamankira", "Jarada", "Jatni", "Jeypore", "Jhadabai", "Jhadrajing", "Jhagrahi", "Jharbandh", "Jharigaon", "Jharsuguda", "Joketa", "Jujumura", "Junagarh", "Kakatpur", "Kalahandi", "Kalampur", "Kalimela", "Kalinga", "Kalosihiria", "Kalyansingpur", "Kamakhyanagar", "Kandhamal", "Kaniha", "Kantabanji", "Kantamal", "Karanjia", "Karlamunda", "Kashinagar", "Katarbaga", "Kavisuryanagar", "Kendrapara", "Kendujhar", "Keonjhar", "Kesannagar", "Kesinga", "Khajuripada", "Khallikot", "Khandapada", "Khandapra", "Khaprakhol", "Khariar", "Khariar Road", "Khatiguda", "Khinimung", "Khordha", "Khunta", "Khuntagaon", "Khurdha", "Kinjirkela", "Kirmira", "Kisinda", "Kodala", "Kodinga", "Koira", "Kolabira", "Konark", "Koraput", "Korua", "Kotagad", "Kotapad", "Kothagarh", "Krafadgang", "Krishnaprasad", "Krushnaprasad", "Kuanrmunda", "Kuchinda", "Kujang", "Kundheigola", "Kundura", "Kupari", "Kurtamgarh", "Kutra", "Kutra", "Lahunipara", "Laikera", "Lanjigarh", "Lanjigarh Road", "Lathikata", "Lephripara", "Line Pada", "Loisingha", "Machh kund", "Madanpur Rampur", "Mahulpada", "Mahulpali", "Malkangiri", "Manamunda", "Maneswar", "Mankha", "Markona", "Marshaghai", "Mathili", "Mauliberena", "Melchhamunda", "Mohana", "Motunga", "Mundali", "Muniguda", "Nabarangapur", "Nachhipur", "Naktideul", "Nandapur", "Nandipada", "Narasinghpur", "Narayanpatna", "Narla", "Nayagarh", "Niali", "Nilagiri", "Nimapada", "Nisankapur", "Nizigarh", "Nowrangpur", "Nuagam", "Nuagaon", "Nuapara", "Odagaon", "Orkel", "Paburia", "Padmapur", "Padmapur Town", "Paduwa", "Paikamal", "Paikmal", "Palasahi", "Pallahara", "Palsada", "Pappadahandi", "Paradeep", "Paralakhemundi", "Parjang", "Parmanandapur", "Patkura", "Patnagarh", "Patrapali", "Pattamundai", "Phiringia", "Phulbani", "Phulnakhara", "Pindapadar", "Pipili", "Pottangi", "Puranakatak", "Puri", "Purusandha", "Purushottampur", "Purusottampur", "R.udayagiri", "Raghunathapali", "Raghurajpur", "Raibania", "Raighar", "Raikia", "Rairangpur", "Raj-Ranpur", "Rajgangpur", "Rajkanika", "Rajnagar", "Rambha", "Randia", "Ranjagola", "Rasgovindpur", "Rasol", "Rayagada", "Reamal", "Redhakhol", "Remuna", "Rengali", "Rengali Dam Projectship", "Rengali Project Town", "Rondapali", "Rourkela", "Rupsa", "S.rampur", "Saintala", "Sakhigopal", "Salapada", "Salipur", "Samal Barrage", "Sambalpur", "samkona", "Sankarakhole", "Sarangada", "Sarsara", "Satmile", "Similia", "Similiguda", "Simulia", "Sinapali", "Sindhekela", "Sohela", "Sonepur", "Soro", "Subarnapur", "Subdega", "Sukhabandh", "Sunabeda", "Sundargarh", "Sunguda", "Surada", "Surajapur", "Takadida", "Talasara", "Talcher", "Tangarpali", "Tangi", "Tarbha", "Telkoi", "Tentulikhunti", "Thakurgarh", "Thuamul Rampur", "Tigiria", "Tihidi", "Tikabali", "Tikkaballi", "Tileibani", "Tirtol", "Titilagarh", "Tumudibandh", "Tumusingha", "Turekela", "Tushra", "Tusura", "Udala", "Ulunda", "Umerkote", "Uparadiha", "Urali"],
        "Punjab": ["Abohar", "Ajnala", "Amloh", "Amritsar", "Amritsar Cantt.", "Anandpur Sahib", "Attari", "Baba Bakala", "Bagha Purana", "Balachaur", "Banawala", "Bandala", "Banga Rural", "Bareta", "Barnala", "Bassi Pathana", "Batala", "Bathinda", "Bazidpur", "Beas", "Bela", "Bhagta Bhai Ka", "Bhai Rupa", "Bhaini Bagha", "Bhanopli", "Bharatgarh", "Bhikhiwind", "Bholath", "Bhucho Mandi", "Bhulath", "Bihala", "Boha", "Budhlada", "Bundala", "Butala", "Chabal Kalan", "Chabhal", "Chak", "Chamiari", "Chamkaur Sahib", "Chamyari", "Chetanpura", "Chhajli", "Chogawan", "Chohla Sahib", "Dasuya", "Dera Baba Nanak", "Dera Bassi", "Dhar Kalan", "Dharamkot", "Dhariwal", "Dhilwan", "Dhotian", "Dhuri", "Doraha", "Faridkot", "Fatehgarh Sahib", "Fatehpur Rajputan", "Fazilka", "Ferozepur", "Firozpur", "Garhshankar", "Gazipur", "Gidderbaha", "Gobindgarh", "Goindwal", "Goniana", "Gurdaspur", "Harike", "Hoshiarpur", "Husnar", "Jagraon", "Jaito", "Jalalabad", "Jalandhar", "Jandiala Guru", "Jhela Amda Gurdaspur", "Kacha Pakka", "Kairon", "Kang", "Kapurthala", "Kathu Nangal", "Khadur Sahib", "Khalra", "Khamanon", "Khanna", "Kharar", "Khasa", "Khem Karan", "Khilchian", "Khizrabad", "Kiratpur Sahib", "Kot Kapura", "Kothe Kehar Singh", "Kurali", "Ladda", "Lambi", "Langroya", "Lasara", "Lehragaga", "Ludhiana", "Lutheri", "Majitha", "Malerkotla", "Malout", "Mansa", "Maur", "Mehta Chowk", "Moga", "Mohali", "Moonak", "Mukerian", "Muktsar", "Mullanpur", "Mullanpur Garibdass", "Nabha", "Nakodar", "Naushehra Pannuan", "Nawanshahr", "Nawanshahr (Shahid Bhagat Singh Nagar)", "Nihal Singh Wala", "Pathankot", "Patiala", "Patti", "Payal", "Phagwara", "Phillaur", "Phul", "Preet Nagar", "Raikot", "Raja Sansi", "Rajpura", "Rampura Phul", "Rayya", "Rupnagar", "Sahauran", "Sahibzada Ajit Singh Nagar", "Samana", "Samrala", "Sangat", "Sangrur", "Sarai Amanat Khan", "Sardulgarh", "Sarhali", "Sarhali Kalan", "Sathiala", "Shaheed Bhagat Singh Nagar", "Shahkot", "Shehzada Nangal", "Sialba Majri", "Sirhind", "Sri Muktsar Sahib", "Sultanpur Lodhi", "Sunam", "Sur Singh", "Talwandi Sabo", "Tarn Taran", "Tarsikka", "Verka", "Zira", "Zirakpur"],
        "Rajasthan": ["Aau", "Abu Road", "Ahore", "Ajmer", "Alawara", "Alsisar", "Alwar", "Amet", "Anupgarh", "Arnaud", "Arnod", "Asop", "Aspur", "Bachhren", "Bagoda", "Bagora", "Bagra", "Balesar", "Bali", "Baloti", "Balotra", "Bamanwas", "Bansur", "Banswara", "Banwala", "Baran", "Bari", "Bari Sadri", "Barmer", "Barwali", "Baseri", "Bassi", "Bayana", "Baytu", "Beawar", "Begun", "Behror", "Bewar", "Bhadesar", "Bhadra", "Bhainsrorgarh", "Bharatpur", "Bhilwara", "Bhinai", "Bhinder", "Bhinmal", "Bhiwadi", "Bhopalgarh", "Bhupalsagar", "Bijainagar", "Bikaner", "Bilara", "Bishala", "Bonli", "Borunda", "Buhana", "Bundi", "Chadi", "Chak Jaitaran", "Chauth Ka Barwara", "Chhattargarh", "Chhoti Sadri", "Chirawa", "Chittorgarh", "Chohtan", "Churu", "Danta Ramgarh", "Dausa", "Dechu", "Deeg", "Degana", "Deogarh", "Desuri", "Dhamotar", "Dholpur", "Dhorimana", "Didwana", "Digod", "Doonglai", "Dungarpur", "Dungla", "Fateh Garh", "Fatehpur", "Gadra Road", "Gajsinghpur", "Gajsinghpura", "Gandav", "Gangapur City", "Gangarar", "Gharsana", "Gilund", "Girwas", "Gogunda", "Gordhan Vilas Rural", "Gosundi", "Gudamalani", "Hanawant Nagar", "Hanumangarh", "Hanumangarh Town", "Hindaun City", "Jaipur", "Jaisalmer", "Jaitaran", "Jalore", "Janoothar", "Jetaran", "Jhalawar", "Jharol", "Jhunjhunu", "Jodhpur", "Kaman", "Kankroli", "Kanore", "Kapasan", "Karauli", "Kathoomar", "Kawas", "Kekri", "Kerwali", "Kesrisinghpur", "Khajuwala", "Khamnore", "Khandar", "Kherwara", "Kherwara Chhaoni", "Khetri", "Khetri Nagar", "Khichan", "Khimsar", "Kishangarh Bas", "Kolayat", "Kota", "Kotra", "Kuchaman City", "Kumbhalgarh", "Kumher", "Kuraj", "Ladnun", "LALSOT", "Lasadiya", "Laxmangarh", "Lohawat", "Luni", "Lunkaransar", "Makrana", "Makri Fatak", "Malarna Dungar", "Malsisar", "Mandalgarh", "Mandawar", "Mandrayal", "Mangrol", "Marwar Junction", "Masuda", "Mathania", "Mavli", "Merta", "Mewa Nagar", "Mokalsar", "Mount Abu", "Mundawar", "Mundwa", "Nadbai", "Nadoti", "Nagar", "Nagaur", "Nasirabad", "Nathdwara", "Navania", "Nawalgarh", "Neem Ka Thana", "Neemrana", "Nimbahera", "Niwai", "Nohar", "Nokha", "Osian", "Pachpadra", "Padampura", "Padru", "Pahari", "Pali", "Parbatsar", "Padamsingh"
],
        "Sikkim": ["Chungthang", "Dikchu", "Gangtok", "Geyzing", "Gyalshing", "Jorethang", "Mangan", "Melli", "Namchi", "Pakyong", "Pelling", "Rangpo", "Ranipool", "Ravangla", "Rhenock", "Rongli", "Singtam"],
        "Tamil Nadu": ["Agasteeswaram", "Alangudi", "Alangulam", "Ambasamudram", "Anaimalai", "Andipatti", "Andippatti", "Annavasal", "Arakkonam", "Arani", "Aranthangi", "Aravakurichi", "Arcot", "Ariyalur", "Aruppukkottai", "Attur", "Avadi", "Avinashi", "Avudaiyarkoil", "Bargur", "Bhavani", "Bodinayakanur", "Chengalpattu", "Chengam", "Chennai", "Cherangode", "Cheyur", "Cheyyar", "Chidambaram", "Chidambaram North", "Chinnasalem", "Coimbatore", "Coimbatore North", "Coimbatore South", "Coonoor", "Cuddalore", "Denkanikottai", "Devakottai", "Dharapuram", "Dharmapuri", "Dindigul", "Dusi", "Erode", "Ettaiyapuram", "Gandarvakkottai", "Gangavalli", "Gingee", "Gobichettipalayam", "Gudalur", "Gudiyattam", "Gummudipoondi", "Gunambadi", "Harur", "Hosur", "Idappadi", "Ilayangudi", "Illuppur", "Jayamkondacholapuram", "Kadaladi", "Kadambarayapatti", "Kadambur", "Kalkulam", "Kallakurichi", "Kamudi", "Kamuthi", "Kanchipuram", "Kangayam", "Kanyakumari", "Karaikudi", "Karaipudur", "Kariapatti", "Karur", "Katpadi", "Kattumannarkoil", "Kattuputhur", "Kaveripattinam", "Kilvelur", "Kodaikanal", "Koradacheri", "Kotagiri", "Kothamangalam North", "Kovilpatti", "Krishnagiri", "Krishnarayapuram", "Kudavasal", "Kulathur", "Kulithalai", "Kumarapuram", "Kumbakonam", "Kundah", "Kuttalam", "Kuzhithurai", "Lalgudi", "Madhavapuram", "Madurai", "Madurai North", "Madurai South", "Madurantakam", "Mallapuram", "Mallasamudram", "Manamadurai", "Manamelkudi", "Manapparai", "Mannachanallur", "Mannargudi", "Marakkanam", "Mayiladuthurai", "Melur", "Mettupalayam", "Mettur", "Moongilpatti", "Musiri", "Muthukulathur", "Naduppati", "Nagapattinam", "Nagercoil", "Nallampalli", "Namakkal", "Nanguneri", "Nannilam", "Natham", "Nidamangalam", "Nilakottai", "Nilgiris", "Oddanchatram", "Omalur", "Ooty", "Orathanadu", "Ottapidaram", "Padapai", "Palacode", "Palani", "Palayamkottai", "Palayanur", "Palladam", "Pallipalayam", "Pallipattu", "Pandalur", "Panruti", "Papanasam", "Pappireddipatti", "Paramakudi", "Paramathi", "Pattukkottai", "Pauparapatti", "Pavithiram", "Pennagaram", "Pennathur", "Peraiyur", "Perambalur", "Peravurani", "Periyakulam", "Perundurai", "PillaPalayam", "Pochampalli", "Pollachi", "Polur", "Ponneri", "Pudukkottai", "Puliampatti", "Pullagoundampatti", "Radhapuram", "Rajapalayam", "Ramanathapuram", "Ramapuram", "Rameswaram", "Rasipuram", "Rayagiri", "S Ramachandrapuram", "Sakkottai", "Salem", "Sankarankovil", "Sankarapuram", "Sankari", "Sathankulam", "Sathyamangalam", "Sattur", "Sendurai", "Sengaluneer Thottam", "Shenkottai", "Sholavandan", "Sholayar Dam City", "Singampunari", "Sirkazhi", "Sivaganga", "Sivagiri", "Sivakasi", "Soodamani", "Sriperumbudur", "Srivaikuntam", "Srivilliputhur", "Tenkasi", "Thandalai", "Thandrambattu", "Thandrampattu", "Thanjavur", "Tharangambadi", "Theni", "Thirukkuvalai", "Thirukoilure", "Thirumakkottai -II", "Thirumayam", "Thirupananthal", "Thiruthani", "Thiruthuraipoondi", "Thiruvadanai", "Thiruvaiyaru", "Thiruvarur", "Thiruvidaimaruthur", "Thoothukudi", "Thoothukudi (Tuticorin)", "Thottiyam", "Thovalai", "Thuraikkadu", "Thuraiyur", "Tindivanam", "Tiruchendur", "Tiruchengode", "Tiruchirappalli", "Tiruchuli", "Tirukazhukundram", "Tirumangalam", "Tirunelveli", "Tirupattur", "Tiruppur", "Tiruppuvanam", "Tiruvallur", "Tiruvannamalai", "Tiruvarur", "Tittagudi", "Turaiyur", "Udayarpalayam", "Udumalpet", "Ullar", "Ulundurpet", "Usilampatti", "Uthamapalayam", "Uthangarai", "Uthukkottai", "Uttangarai", "Uttiramerur", "Vadipatti", "Vairavanpatti", "Valangaiman", "Valappadi", "Valparai", "Vanadirayanpatti", "Vandalur R.F.", "Vandavasi", "Vaniyambadi", "Vanur", "Vedaranyam", "Vedasandur", "Veerakeralampudur", "Vellalore", "Vellore", "Velur", "Vennangupattu", "Veppanthattai", "Vilathikulam", "Vilavancode", "Villupuram", "Viriyur", "Virudhachalam", "Virudhunagar", "Walajapet", "Wallajah", "Yercaud", "Z.Devarkulam"
],
        "Telangana": ["Achampet", "Adilabad", "Aler", "Alladurg", "Alugunur", "Amangal", "Amrabad", "Andole", "Anumula", "Armoor", "Asifabad", "Aswapuram", "Aswaraopeta", "Atmakur", "Bachannapet", "Balanagar", "Balaraju Gudem", "Balmur", "Banswada", "Bayyaram", "Bazarhathnoor", "Bejjanki", "Bejjur", "Bhadrachalam", "Bhadradri Kothagudem", "Bheemadevarpalle", "Bheemgal", "Bhiknoor", "Bhoodan Pochampally", "Bhoorgampahad", "Bhootpur", "Bhupalpally", "Bhuthpur", "Bhuvanagiri", "Bibinagar", "Bichkunda", "Bijnapalli", "Boath", "Bodhan", "Bodhan Rural", "Bommakal", "Bonakal", "Boothpur", "Chandrugonda", "Chandurthi", "Cheeturu", "Chelpur", "Chennaraopet", "Cherial", "Cheruvumadharam", "Chigurumamidi", "Chinna Chintha Kunta", "Chinnur", "Chintakani", "Chityal", "Choppadandi", "Choutuppal", "Dammapeta", "Devarakonda", "Devarkadra", "Devaruppal", "Dharmaram", "Dharmasagar", "Dharur", "Dichpally", "Dornakal", "Dubbak", "Duggondi", "Dummugudem", "Ellantakunta", "Enkoor", "Eturnagaram", "Farooqnagar", "Gadwal", "Gambhiraopet", "Gangadhara", "Garla", "Gavicherla", "Gdpeta", "Geesugonda", "Ghanpur", "Ghanpur(m)", "Ghatkesar", "Gokinepalli", "Gollapalli", "Gopalpet", "Govindaraopet", "Gudur", "Hanamkonda", "Hasanparthy", "Hayathnagar", "Husnabad", "Huzur Nagar", "Huzurabad", "Hyderabad", "Ibrahimpatnam", "Jadcherla", "Jagtial", "Jainoor", "Jammikunta", "Jangaon", "Jangedu", "Jayashankar Bhoopalpally", "Jogipet", "Jogulamba Gadwal", "Julapalle", "Julapalli", "Julurpad", "Kallur", "Kalva Srirampur", "Kalwakurthy", "Kamanpur", "Kamareddy", "Kamareddy Gudem", "Kanchanapally", "Kandukur", "Karepalli", "Karimnagar", "Kataram", "Kathlapoor", "Kerimeri", "Kesamudram", "Kesavapatnam", "Keshampet", "Khammam", "Khanapur", "Kodad", "Kodair", "Kodakandla", "Kodangal", "Kodimial", "Koheda", "Kollapur", "Komaram Bheem Asifabad", "Konaraopet", "Kondapur", "Kondur", "Kondurg", "Korutla", "Kosigi", "Kothagudem", "Kothakota", "Kothur", "kottakkal", "Kuravi", "Kusumanchi", "Lingal", "Lingal Ghanpur", "Lingala", "Lingampet", "Luxettipet", "Machareddi", "Maddur", "Madgul", "Madhira", "Madhira D", "Madnoor", "Mahabubabad", "Mahbubnagar", "Maheshwaram", "Maheswaram", "Mallayal", "Mallial", "Manakondur", "Mancherial", "Mandamarri", "Mangapet", "Manthani", "Manuguru", "Maripeda", "Marriguda", "Medak", "Medapalli", "Medchal", "Metpalle", "Metpalli", "Metpally", "Midjil", "Miryalaguda", "Mogula Pally", "Moinabad", "Mothkur", "Mothugudem", "Mudhole", "Mulug", "Mulugu", "Munugodu", "Mustabad", "Nagarkurnool", "Nakerakal", "Nalgonda", "Nallabelli", "Narayanapur", "Narayankhed", "Narayanpet", "Narmetta", "Narnoor", "Narsampet", "Narsapur", "Narsimhulapet", "Nawabpet", "Nekkonda", "Nellikudur", "Nellipaka", "Nirmal", "Nizamabad", "Nizamabad Village", "Padamati Narsapuram", "Palair", "Palakurthy", "Palem", "Palwancha", "Pangal", "Papannapet", "Parkal", "Parvathagiri", "Pebbair", "Pedda Adiserla Palle", "Peddakothapally", "Peddamandadi", "Peddapalli", "Peddavura", "Pegadapalli", "Pegadapally", "Penuballi", "Pindiprolu", "Pochampalle", "Qutubullapur", "Raikal", "Raiparthy", "Rajanna Sircilla", "Ramadugu", "Ramagundam", "Ramannapeta", "Ramanujapuram", "Rangareddy", "Rayaparthi", "Redlawada", "Regonda", "Sadashivpet", "Saidapur", "Samathsingaram", "Sangareddy", "Sangem", "Sarangapur", "Sarapaka", "Saroornagar", "Sathupally", "Satyanarayanapuram", "Secunderabad", "Seethampet", "Shabad", "Shadnagar", "Shankarampet", "Shankarampet (A)", "Shankarapatnam", "Shankarpally", "Shayampet", "Siddipet", "Singam Palle", "Sircilla", "Sircilla Rural", "Siripuram", "Sirpur-Kaghaznagar", "Station Ghanpur", "Subled", "Sujathanagar", "Sultanabad", "Suryapet", "Tadoor", "Tadvai", "Talakondapally", "Tallada", "Tamsi", "Tandur", "Telkapalle", "Telkapally", "Thadoor", "Thanikella", "Thimajipet", "Thimmapur", "Thorrur", "Thungathurthy", "Tirumalagiri", "Tiryani", "Tungaturthi", "Uppal", "Uppununthala", "Utnoor", "Utukur", "V.Venkatayapalem", "Valigonda", "Vangoor", "Varni", "Veenavanka", "Veepanagandla", "Veldanda", "Velgatur", "Vemsoor", "Vemulawada", "Venkatapur", "Vikarabad", "Wanaparthy", "Warangal", "Warangal (Urban)", "Wardannapet", "Wyra", "Yadadri Bhuvanagiri", "Yadagirigutta", "Yaragandla Pally", "Yedapally", "Yellandu", "Yellareddipet", "Yellareddy", "Yellareddypet", "Yerravalli", "Yerrupalem", "Zaffergadh", "Zaheerabad"],
        "Tripura": ["Agartala", "Ambassa", "Ampinagar", "Asharambari", "Bagafa", "Bagbasa", "Balidhum", "Banbazar", "Baruakandi", "Behalabari", "Belonia", "Betchhara", "Birchandranagar", "Birendra Nagar", "Bishalgarh", "Bishramganj", "Boxanagar", "Central Catchment R.F.", "Chailengta", "Chawmanu", "Chebri", "Chhantail", "Chulubari", "Churaibari", "Dakshin Padmabil", "Dakshin Promodenagar", "Dakshin Ramchandraghat", "Dalapatipara", "Damcherra", "Dasda", "Debendrachandranagar", "Dewanpasa", "Dhanbilash", "Dharmanagar", "Fatikchhara", "Fatikroy", "Fultali", "Gakulnagar", "Ganki", "Garji", "Ghilatali", "Gomati", "Halahali", "Halhuli", "Hrishyamukh", "Indurail", "Jampuii Hills", "Jatan Bari", "Jirania", "Jolaibari", "Jubarajnagar", "Kachucherra", "Kailashahar", "Kakraban", "Kameswar", "Kanchanbari", "Katalutma", "Kathalia", "Khedacherra", "Khowai", "Kuchainala", "Kulai Ghantachara", "Kumarghat", "Kurti", "Laljuri", "Longtarai R.F.", "Maharanipur", "Mainama", "Manik Bhandar", "Manu Bazar", "Matabari", "Melaghar", "Mohanpur", "Muhuripur", "Nabincherra", "Nalkata", "Nehalchandranagar", "Paglabari", "Panisagar", "Paschim Bachaibari", "Paschim Champachhara", "Paschim Kalyanpur", "Paschim Kanchanbari", "Paschim Manpai", "Paschim Simna part", "Pecharthal", "Pencharthal", "Promodenagar", "Purba Anandapur", "Purba Bachaibari", "Purba Chhamanu", "Purba Halflong", "Purba Masli", "Purba Nalichhara", "Purba Tilthai", "Radhakishorepur R.F.", "Radhanagar", "Ragna", "Rajkandi", "Rajnagar", "Ramdayalbari", "Rangauti", "Rangrung", "Ranipukur", "Ranirbazar", "Sabroom", "Sabual", "Sadar", "Samrurpar", "Santirbazar", "Sardu Karkari", "Satchand", "Satnala", "Sekerkote", "Sepahijala", "Sonaimuri", "Sonamura", "Sonatala", "South Tripura", "Teliamura", "Teliamura R.F. part", "Tuichama", "Tulabagan", "Unakoti", "Uptakhali", "Uttar Gakulnagar", "Uttar Machmara", "Uttar Padmabil part", "Uttar Ramchandraghat", "Vanghmun", "West Tripura"
],
        "Uttarakhand": ["Almora", "Bageshwar", "Barkinda", "Barkot", "Basikhet", "Bazpur", "Berinag", "Bhanoli", "Bhatwari", "Bhikia Sain", "Bhikiyasan", "Bhimtal", "Burkot", "Chakrata", "Chamoli", "Champawat", "Chaukhutiya", "Dehradun", "Devaprayag", "Dhanolti", "Dhanolti Lagga Goth", "Dharchula", "Dhumakot", "Didihat", "Dunda Range", "Dwarahat", "Gadarpur", "Gaja", "Gangolihat", "Garur", "Ghansali", "Ghat", "Haldwani", "Haridwar", "Jainti", "Jakhnidhar", "Jakholi", "Jakholi Badma", "Jaspur", "Joshimath", "Kaladhungi", "Kanda", "Kapkot", "Karnaprayag", "Kashipur", "Khadun Laga Gawali", "Khatima", "Kichha", "Kotdwara", "Laksar", "Lalkuan", "Lansdowne", "Lohaghat", "Maidhana Saimi", "Munsyari", "Mussoorie", "Muzaffarabad", "Nainital", "Narendra Nagar", "New Tehri", "Pauri", "Pauri Garhwal", "Pithoragarh", "Pokhari", "Purola", "Radu", "Rajgarhi", "Ramnagar", "Ranikhet", "Rishikesh", "Roorkee", "Rudraprayag", "Rudrapur", "Sigro", "Sitarganj", "Someshwar", "South Gola Range", "Takoli Challannsyun", "Tanakpur", "Tanda Range", "Tehri", "Tehri Garhwal", "Thali Sain", "Tharali", "Tiuni", "Udham Singh Nagar", "Ukhimath", "Veerbhadra", "Vikasnagar"
  ],
        "Uttar Pradesh": ["Aalapur", "Achheja", "Adalhat", "Agra", "Akbapur", "Akbarpur", "Akorha", "Alapur", "Alapur Uparhar", "Aliganj", "Aligarh", "Alipur Berjee", "Allahabad", "Allapur", "Amaria", "Amaur", "Ambedkar Nagar", "Amethi", "Amiliya Kala", "Amour", "Amraudha", "Amroha", "Amroha (J.P. Nagar)", "Anand Nagar", "Anapur", "Anpara", "Anupshahar", "Anwarganj", "Aonla", "Aranj Hami", "Armapur", "Arya Nagar", "Ashok Nagar", "Ator Nagla", "Atraith", "Atrampur", "Atrauli", "Auraiya", "Azamgarh", "Babu Patti", "Babura", "Badaun", "Badlapur", "Bagh Shahoman", "Baghpat", "Bah", "Baheri", "Bahraich", "Baikunthpur", "Bairia", "Balari", "Balkaranpur", "Ballia", "Balrampur", "Bamharavli", "Banda", "Bandha", "Bansdih", "Bansgaon", "Bansi", "Barabanki", "Barai Garh", "Baraut", "Bareilly", "Bargadi Magath", "Barhaj", "Bariya", "Barkhera", "Barna", "Basllia", "Basti", "Bausar", "Behat", "Behta Gambhirpur", "Belthara", "Belthara Road", "Bhadohi", "Bhadrsa", "Bhairam Pur", "Bhamora", "Bhanpur", "Bhanpur Rani", "Bharthana", "Bharu", "Bhatpar Rani", "Bhautipratappur", "Bheoli", "Bhimsen", "Bhinga", "Bhongaon", "Bhowapar", "Bidauri", "Bidhnu", "Bidhuna", "Bijnor", "Bikapur", "Bilari", "Bilgram", "Bilhaur", "Bilsi", "Binour", "Bisalpur", "Bisara", "Bisauli", "Bisayakpur", "Bishrakh", "Biswan", "Bithoor", "Bodarwar", "Brijmanganj", "Budaun", "Budhan Pur", "Budhana", "Bulandshahr", "Busauli", "Campirganj", "Chail", "Chakar Nagar", "Chakarpur", "Chakeri", "Chakia", "Chandauli", "Chandausi", "Chandpur", "Charwa", "Chaubepur", "Chaubepur Pankhan", "Chauraha", "Chaurai", "Chauri Chaura", "Chhapraula", "Chhata", "Chhata Rural", "Chipyana", "Chitrakoot", "Chunar", "Colonelganj", "Dadri", "Dalmau", "Dariya Pur", "Dataganj", "Daulat Pur", "Deoband", "Deoria", "Dhampur", "Dhan Ghata", "Dhanapur", "Dhanaura", "Dhanghata", "Dharauli", "Dhaulana", "Dhaurahara", "Dhaurehra", "Dhoom Manikpur", "Dhusah", "Dhusuriya", "Dibai", "Domariyaganj", "Dudhinagar", "Etah", "Etawah", "Etmadpur", "Fahimabad", "Faizabad", "Farenda", "Faridpur", "Faridpur Meghu Urf Tuwakpuri", "Farrashkhana", "Farrukhabad", "Fatahabad", "Fatehpur", "Fatehpur Roshanai", "Fazalganj", "Filkhana", "Firozabad", "Fridpur", "Gajraula", "Gambhir Patti Bisana", "Ganga Ganj", "Gangoh", "Garautha", "Garhmukteshwar", "Garholi", "Gauriganj", "Gazipur", "Ghatampur", "Ghaziabad", "Ghazipur", "Ghiyanagar", "Ghosi", "Godhan Pur", "Gola Bazar", "Gola Gokaran Nath", "Gonda", "Gopalpur", "Gopalpur Narwal", "Gorakhpur", "Govind Nagar", "Greater Noida", "Gunnaur", "Gyanpur", "Haidergarh", "Haliyapur", "Hamirpur", "Handia", "Hanuman Ganj", "Hapur", "Hapur (Panchsheel Nagar)", "Harchand Khera", "Hardauli", "Hardoi", "Harjinder Nagar", "Harraiya", "Hasanpur", "Hasanpur Soraon", "Hata", "Hathgaon", "Hathras", "Hatia", "Hithgaon", "Holagarh", "Ikauna", "Itaura Or Itraura", "Itra", "Itwa", "Jafrabad", "Jahana Ganj", "Jajauli", "Jajmau", "Jakhanian", "Jalal Kasim", "Jalalabad", "Jalalpur", "Jalalpur Chandhan Urfpirthipur", "Jalalpur Parsurampur", "Jalalpur Pikar", "Jalalpur Sahara", "Jalalpur Tekam Para", "Jalaun", "Jalesar", "Jamoo", "Jangal Agahi", "Janghai Bazar", "Jansath", "Jarkala", "Jasrana", "Jaswant Nagar", "Jaunpur", "Jawahar Nagar", "Jewar", "Jhansi", "Jhinjhak", "Jugrajpur", "Juhi", "Kadipur", "Kadri Champatpur", "Kahal", "Kaindha", "Kairana", "Kaisarganj", "Kakadeo", "Kakhania", "Kakori", "Kalpi", "Kalyanpur", "Kamalpur Narwal", "Kamlapur", "Kandarwal Kalan", "Kannauj", "Kanpur", "Kanpur Dehat", "Kanpur Nagar", "Kanshiram Nagar (Kasganj)", "Kanth", "Karahal", "Karari", "Karbigwan", "Karchana", "Karhal", "Kasba Sagri", "Kasganj", "Kasia", "Kasia Bazaar", "Kasigaon", "Katghar Sadar", "Kathara", "Katherua", "Kathongar", "Kauriram", "Kaushalpuri", "Kaushambi", "Kerakat", "Khadesar", "Khain", "KHAJANI", "Khalilabad", "Khan Jahanpur Chirkuan", "Khanjarpur", "Khapra Mohal", "Khatmepur", "Khekada", "Kheora", "Kheragarh", "Khiluai", "Khoria", "Khurja", "Kilak", "Kiraoli", "Kithore", "Konch", "Koraon", "Kotkadar", "Kotwalipur", "Kudani", "Kudna Pur", "Kudni", "Kulgaon", "Kunda", "Kushinagar", "Ladlapur", "Laharpur", "Lajpat Nagar", "Lakhimpur - Kheri", "Lakhraiya", "Lalganj", "Lalganj Ajhara", "Lalgopalganj", "Lalitpur", "Lambhua", "Lar", "Lohanipur", "Loni", "Lucknow", "Machhali Shahar", "Madanpur", "Madhogarh", "Madhuban", "Madria", "Maharajganj", "Maharajpur", "Maharani Paschim", "Mahauli", "Mahmoodabad", "Mahmudabad", "Mahoba", "Maholi", "Mahrauni", "Mahsi", "Mahua Gaon", "Mahuawa", "Maicha", "Mainpuri", "Mainuddinpur", "Majhawan", "Malihabad", "Malimanha Mustkaham", "Mallawan", "Manakpur", "Manapur", "Mandhana", "Mani Garhi Bangar", "Mani Garhi Khadar", "Maniha", "Manjhanpur", "Mankapur", "Mant", "Mardanpur", "Mariahu", "Marihan", "Mathura", "Mau", "Mau Aima", "Maunath Bhanjan", "Mauranipur", "Mawana", "Meerganj", "Meerpur", "Meerut", "Mehnagar", "Meja", "Menhdawal", "Milak", "Milkipur", "Mirazapur Sadar", "Mirganj", "Mirzapur", "Mishrikh", "Misir Patti", "Misrikh-cum-Neemsar", "Modinagar", "Mohammadabad", "Mohammadi", "Mohanlalganj", "Moor Ghat", "Moradabad", "Morta", "Moth", "Moth Rural", "Motijheel", "Motinagar", "Mrizapur", "Mungra Badshahpur", "Munshipurwa", "Muradnagar", "Musafirkhana", "Muzaffarabad", "Muzaffarnagar", "Nachulwa", "Nagal", "Nagina", "Najibabad", "Nakthar", "Nakur", "Nanauta", "Nangal", "Nanpara", "Naramau", "Narhar Patti", "Narwal", "Nasra", "Naubasta", "Naugarh", "Nautanwa", "Nawabganj", "Nayaganj", "New Kanpur City", "Nichlaul", "Nighasan", "Nigohi", "Nijamabad", "Nirala", "Nistoli", "Noida", "Oon", "Orai", "Pachor", "Padrauna", "Pakharauli", "Palhepur", "Palia", "Palia Kalan", "Palibhogipur", "Pallia", "Panki", "Parade", "Parsadepur", "Parsauli", "Pasonda", "Pathakpur Shivrajpur", "Patiyali", "Patiyali Dehat", "Patti", "Patwa Mutfarka", "Payagpur", "Pem", "Phaphamau", "Pharenda", "Phulpur", "Phuphuwarrajthok", "Pilibhit", "Pindra", "Pipergaon", "Piyaoli", "Pooranpur", "Powayan", "Pratapgarh", "Pratapgarh city", "Premnagar", "Pukhrayan", "Punwarka", "Pura", "Purana Kanpur", "Puranpur", "Pure Goliya", "Purwa", "Purwameer", "RaeBareli", "Railganj", "Raipur Kukhat", "Rajesultanpur", "Ram Sanehi Ghat", "Ramaipur", "Ramnagar", "Rampur", "Rampur Maniharan", "Rania", "Raniganj", "Rasra", "Rasulabad", "Rasulpur Umra", "Robertsganj", "Rooma", "Roorkee", "Roza Yakubpur", "Rudauli", "Rudrapur", "Rura", "Sachendi", "Sadabad", "Safipur", "Sagri", "Saharanpur", "Sahaswan", "Sahjanwa", "Sahson", "Saidabad", "Saidpur", "Saifai", "Saifpur", "Saiyan", "Sakaldiha", "Salarpur Kalan", "Salempur", "Salon", "Salon Bazar", "Sambhal", "Sambhal (Bhim Nagar)", "Sandila", "Sanigawan", "Sankalpa", "Sant Kabir Nagar", "Sapai", "Saraismail Urf Khagalpur", "Sarayindrawat", "Sardhana", "Sareni", "Sarh", "Sarsaul", "Sarsawa", "Sarvodaya Nagar", "Sawaijpur", "Sawayajpur", "Semarjhal", "Sewarhi", "Shahabad", "Shahganj", "Shahjahanpur", "Shajnwa", "Shamali (Prabuddh Nagar)", "Shamli", "Shankargarh", "Shanti Nagar", "Sheoli", "Shikarpur", "Shikohabad", "Shivaji Nagar", "Shivarajpur", "Shivli", "Shivrajpur", "Shohratgarh", "Shyam Nagar", "Siddharth Nagar", "Sidhauli", "Sikanderpur", "Sikarpur", "Simbhaoli", "Sirathu", "Sirauligauspur", "Sirhi Itara", "Sitapur", "Siyana", "Sobhadra", "Sohawal", "Sonbhadra", "Soraon", "Suar", "Subhauli", "Sultanpur", "Swaijpur", "Swarup Nagar", "Talbehat", "Tanda", "Tarabganj", "Tatiyaganj", "Taudhakpur", "Telia Kurmi", "Thakurdwara", "Thana", "Tikra", "Tikra Kanpur", "Tikri Ta.Kalmai", "Tilhar", "Tiloi", "Tilsahari", "Tulsipur", "Ugrasenpur", "Unchahar", "Unnao", "Utraula", "Uttaripura", "Varanasi", "Vijay Nagar", "Vikas Nagar", "Yashoda Nagar", "Zamania"

],
        "West Bengal": ["Adasimla", "Adhata", "Adra", "Ahiran", "Ajijnagar", "Ajodhyapur", "Akaipur", "Akanda Beria", "Akandakeshari", "Akpura", "Aktail", "Alal", "Alanggiri", "Alankarpur", "Alikhoja", "Alipurduar", "Amarshi", "Ambaria", "Ambigere", "Amdanga", "Amdobe", "Amla Kora", "Amodghata", "Amodpur", "Amta", "Amtalia", "Amudia", "Analberia", "Anandapally", "Andal", "Andhirampara", "Angrail", "Angua", "Anikola", "Arambagh", "Argara", "Arsha", "Asansol", "Asda", "Asharu", "Atbati", "Atghara", "Atpukur", "Aturia", "Ausgram", "Ayma Barbaria", "Aziznagar", "Babla", "Bachhurkhoyar", "Badalpur 2Nd Part", "Badkulla", "Baduria", "Bagband-Saiberia", "Bagdah", "Baghmundi", "Baguran Jalpai", "Baharampur", "Bahurupa", "Baidyapur", "Baikara", "Baikunthapur", "Baishnabnagar", "Bakhrabad", "Baksha", "Bakurpada", "Balagarh", "Balakdi", "Balarampur", "Baliadanga", "Balichak", "Balighai", "Balisai", "Balitora", "Ballabhpur", "Ballavpur", "Ballichak", "Balurghat", "Balyagobindapur", "Bamangachi", "Bamangola", "Bamanpukur", "Bamongola", "Bamunara", "Bamunia", "Bamunia Purba", "Bandel", "Bandhu Chak", "Baneswarpur", "Bangangram", "Bangaon", "Banglani", "Bankra Dobar", "Bankura", "Bankura - I", "Bankura - II", "Bansberia", "Bansh Kuti", "Bansihari", "Bara Bankra", "Bara Bari", "Bara Garania", "Bara Kalanki", "Bara Simulguri", "Barabani", "Barabantalia", "Barabatia", "Barabazar", "Barabhum", "Barangi", "Barasat", "Barasehana", "Baratala", "Baraudaypur", "Bardhaman", "Bargram", "Baribhanga Abad", "Barida", "Barjora", "Barrackpore", "Barrackpur Cantonment", "Barsul", "Bartana", "Baruipur", "Barunhat", "Basanti", "Basantia", "Basirhat", "Basudeb Berya", "Basudebpur", "Bathuari", "Beara", "Begunia", "Beharkhanda Nabagram", "Behrampore", "Belda", "Beldanga", "Belmula", "Benachakri", "Benadiha", "Benichak", "Berabari", "Beraberi", "Berhampore", "Bermajur", "Bethuadahari", "Bhabanipur", "Bhaduria", "Bhagabati", "Bhagatpur Tea Garden", "Bhagwangola-ii", "Bhagyamantapur", "Bhaja Chauli", "Bhandar khola", "Bhandarhati", "Bhandarkhali", "BHANDER KOLA BAZAR", "Bhangatushkhali", "Bhasila", "Bhastara", "Bhatar", "Bhatda", "Bhatpara", "Bhaudi", "Bhupati Nagar", "Bhupatinagar", "Bibhishananpur", "Billagram", "Binnaguri", "Binpur", "Biramnagar", "Biramput", "Birbhum", "Birpara Tea Garden", "Bishnpur", "Bishnuprosad", "Bishpur", "Biswanathpur", "Bithari", "Bodai", "Bodhra", "Boinchi", "Bolkushda", "Bolpur", "Bongabari", "Bongaon", "Borah", "Borai", "Bouthakurani", "Boyra", "Brajaballavpur", "Bulbulchandi", "Burdwan", "Canning", "Chaigharia", "Chaital", "Chak Bhabani", "Chak Patli", "Chakdaha", "Champahati", "Chanchal", "Chandabila", "Chandangar", "Chandannagar", "Chanddandaha", "Chandipur", "Chanditala", "Chandpara", "Chandrakona", "Chandrakona Road", "Chapari", "Chapra", "Charalkhali", "Charghat", "Chata Padmapur", "Chatla", "Chauhata", "Chauki Mirdadpur", "Chaulia", "Chaulkhola", "Chelyama", "Chhaigharia", "Chharrah", "Chhat Guzrimari", "Chhatna", "Chhorda", "Chhota Bagasthi", "Chhota Chaulkhola", "Chhota Jagulia", "Chhota Laukuthi", "Chhota Sehara", "Chikanpara", "Chingur Dania", "Chinsurah - Magra", "Chirulia", "Choralmani", "Chorpalia", "Chowberia", "Chowrashi", "Chunpara", "Contai", "Cooch Behar", "Daisai", "Dakshin Bagundi", "Dakshin Bayenda", "Dakshin Chatra", "Dakshin Darua", "Dakshin Kalamdan", "Dakshin Moyna", "Dalkhola", "Damaipur", "Dandirhat P", "Dangarpara", "Dankuni", "Darjeeling", "Darua", "Dasagram", "Dashin Akhratala", "Daspur", "Dattapara", "Dayal Thong Tea Garden", "Deara", "Debagram", "Debaipukur", "Debra", "Debsala", "Deganga", "Dekhali", "Deotala", "Deuli", "Deulia", "Deulpota", "Dhalbelun", "Dhaltitha P", "Dhanghara", "Dhania", "Dhaniakhali", "Dhanyakuria", "Dheknamari", "Dholmari", "Dhramatala", "Dhubulia", "Dhuliyan", "Dhupguri", "Dhuturdaha", "Diamond Harbour", "Digha", "Digha Danri", "Dihierench", "Dinhata", "Dobandi", "Dogachhi", "Dogachhi P", "Dogachia", "Dol Gram", "Domjur", "Domkal", "Dongaria", "Dubda", "Dubrajpur", "Durgamandap", "Durgapur", "Duria", "Durmut", "Duttapara", "Dwipchandrapur", "Egra", "Ekarukhi", "Englishbazar", "Eojnagar", "Erenda", "Falakata", "Falta", "Farakka", "Faridpur Durgapur", "Farrakka Barrage Township", "Gachaimari", "Gadpukuria", "Gaganeswar", "Gaighata", "Gaita", "Galdaha", "Galsi", "Gandharbbapur", "Gangadhar Chak", "Gangajalghati", "Gangarampur", "Gangatikuri", "Ganrapota", "Ganti", "Garakupi", "Garhbeta", "Garulia", "Gazipur Kismat", "Gazole", "Ghat Patila", "Ghatal", "Ghatihara", "Ghona", "Ghoom", "Ghoraghata", "Giria", "Goal Bathan", "Goaldaha", "Goalpokhar", "Goaltore", "Gobag", "Gobardanga", "Gobardhanpur", "Gobila", "Gobindapur", "Gobrapur", "Goghat", "Gograskottaluk", "Gokna", "Golgram", "Gomunda", "Gopal Chak", "Gopalnagar", "Gopi Chak", "Gopiballabpur", "Gorubathan", "Gosaba", "Guptipara", "Gurap", "Gushkara", "Guskhara", "Habra", "Haldia", "Haldia Municipality", "Haldibari", "Haludbari", "Hamiltonganj", "Handla", "Hansghara", "Hanskhali", "Haraipur", "Hardam Nagar", "Hariharpara", "Haringhata", "Haringhata Farm", "Haripal", "Harishchandrapur", "Haroa", "Harranamaldina", "Hasnabad", "Hatbaincha", "Hatgachha", "Hatiary", "Hatinda", "Hatisala", "Helencha", "Hemnagar", "Hemtabad", "Hili", "Hingalganj", "Hingli", "Hir Bandh", "Hirbandh", "Hisabi", "Hooghly", "Hoomgarh", "Howrah", "Humbirpara", "Hura", "Hutmura", "Ichapur", "Ichhabacha", "Ichhlampur", "Indas", "Indpur", "Ishwarigachha", "Iswarbati", "Itaberia", "Itachuna", "Itahar", "Itinda", "Jadupur", "Jadurhati", "Jagadishpur", "Jagannathpur", "Jagatballavpur", "Jagatnagar", "Jahalda", "Jalabaria", "Jalangi", "Jaleshwar", "Jalpaiguri", "Jamboni", "Jamuria", "Janaphul", "Jangalpur", "Jangipara", "Jangipur", "Jashaikati", "Jaynagar", "Jelepara", "Jerthan", "Jhalida", "Jhanjia Nankar", "Jhargram", "Jhawdanga", "Jhikra", "Jhowdanga", "Jiaganj", "Jiakhali", "Jiudaru", "Jogesganj", "Joygopalpur", "Joypul", "Joypur", "Juki", "Kachua Swarupnagar", "Kadambagachi", "Kadampukur", "Kadamtala", "Kahankia", "Kaijuri", "Kaipukharia", "Kaipukuria", "Kakdwip", "Kakrajit", "Kalapathar", "Kalchini", "Kalchini Tea Garden", "Kaliachak", "Kaliaganj", "Kaliani", "Kalimpong", "Kalinagar", "Kaliyaganj", "Kalma Pukhuria", "Kalna", "Kalyani", "Kamarda", "Kamdebpur", "Kamduni", "Kanaidighi", "Kanchrapara", "Kanda Gram", "Kanksa", "Kanmari", "Kantai", "Kanthalia", "Kanturka", "Kapileshwarpur", "Karandighi", "Karimpur 2", "Kartik Khali", "Kasaria", "Kasba Narayangarh", "Kasbagoas", "Kasbagola", "Kashimpur", "Kashinathpur", "Kasinathpur", "Katiahat", "Katkadebi Chak", "Katranka", "Katwa", "Katwa - I", "Kayemgeria", "Kekai", "Kenda", "Keshiary", "Keshpur", "Keshrambha", "Ketugram", "Khagda", "Khakurda", "Khalina", "Khalisabhanga", "Khalisadi", "Khalitpur", "Khamargachi", "Khamarpara", "Khanakul", "Khanati", "Khandaghosh", "Khanpur Hubaspur 165", "Kharagpur", "Kharampur", "Kharba", "Khargram", "Kharija Durganagar Dwitia Khanda", "Kharikamathani", "Kharua Rajapur", "Kharupala", "Khas Balandar", "Khejurda", "Khilkapur", "Khirpai", "Khodambari", "Kholapota", "Khoribari", "Khulna", "Khurutia", "Kirtankhola", "Kismat Bajkul", "Kolanda", "Kolkata", "Konarpur", "Kontai Jinagerya", "Korakati", "Kothabbari", "Kotpada", "Kotshila", "Kotulpur", "Krishnachandrapur", "Krishnaganj", "Krishnanagar", "Krishnapur Madanpur", "Kshirai", "Kuili Suta", "Kulanjara", "Kuldiha", "Kulpi", "Kultikri", "Kumarda", "Kumarganj", "Kumargram", "Kumarkhola", "Kumirda", "Kundipur", "Kunjapur", "Kurseong", "Kush Bashan", "Kushmandi", "Kusidha", "Kusumgram", "Labpur", "Labukhali", "Lakshan Chak", "Lakshipur", "Lalat", "Lalgola", "Lalkunri", "Lalua", "Laudaha", "Laudoha", "Lebukhali", "Lenga Mara", "Loha Baria", "Lohabaran Chak", "Lot No 126", "Machibhanga", "Madanmohanpur", "Madhabpur", "Madhubati", "Madhya Madarihat", "Magrahat - II", "Magurali", "Magurati Shrirampur", "Mahatpur", "Maheshtala", "Mahespur", "Mahisadal", "Mahisha Machhlandapur", "Mahishadal", "Maisali", "Makdumnagar", "Makhalgacha", "Makrampur", "Mal Bazar", "Mal Forest", "Malancha", "Malbari", "Malda", "Malekanghumti", "Malidah", "Malikapur", "Malior", "Maljamuna", "Mallikpur", "Malpara", "Manbazar", "Mangalkot", "Manglamaro", "Manguria", "Manihara", "Manikabasan", "Manikchak", "Manikjore", "Manteswar", "Marishda", "Matbari Abad", "Matelli", "Mathabari", "Mathabhanga", "Mathurapur", "Matiar Kuthi", "Matigara", "Mayna", "Maynaguri", "Mayureswar", "Medinipur", "Mejia", "Mekhliganj", "Memari", "Merudandi", "Minakhan", "Mirgoda", "Mirhati", "Mirik", "Mohati", "Mosat", "Mugberia", "Murabani", "Murarai", "Murardih", "Murarisah", "Murshidabad", "Murulahar", "Nabadwip", "Nabagram", "Nachhipur", "Nachinda", "Nadia", "Nagrakata", "Nagri Pada", "Naihati", "Nakashipara", "Nakpul", "Naksa", "Nalabara", "Nalhati", "Nalkora", "Namkhana", "Nandakumar", "Nandigram", "Nanoor", "Narandia", "Narayanchak", "Naskarpur", "Nata Talya", "Natabaria", "Natagram", "Naxalbari", "Nayagram", "Nayaput", "Nazat", "Nebadhai Duttapukur", "Nehalpur", "Nekrasole", "Neturia", "New Town", "Nimchi", "Nimdaria", "Nimna Tandu Forest", "Nimpith", "Nischintapur", "Nityananda Kati", "Nodakhali", "North 24 Parganas", "Nowda", "Old Malda", "Onda", "Pailachhanpur", "Palashipara", "Paldhui", "Palpara", "Palsanda", "Palsandapur", "Palta Beria", "Panapukur", "Panchanandapur", "Panchberia", "Panchet", "Panchita", "Panchla", "Panchpota", "Panchrol", "Panchuria", "Pandaveshwar", "Pandua", "Panitar", "Pankhai", "Panskura", "Parghumti", "Parpatna", "Paschim Madhyampur", "Paschim Manikpur", "Paschim Medinipur (West Medinipur)", "Paschim Memari", "Paschim Narayanpur", "Paschim Punropara", "Paschim Sarpai", "Pashchim Narayanpur", "Patashpur", "Pathar Pratima", "Patharghata", "Patrasayer", "Patshimulia", "Payradanga", "Payragachhi", "Petrapole", "Phandar", "Phultala", "Pingla", "Pipha", "Pipla Kasimpur", "Pirolgari More", "Pitha Pukuria", "Plashipara", "Plassey", "Pratap Dighi", "Prithiba", "Puinan", "Pukhuria", "Pulbazar", "Puncha", "Pundag", "Pundibari", "Purandarpur", "Purba Medinipur (East Medinipur)", "Purbasthali", "Purbba Chak", "Purbba Khejurbaria", "Purbba Radhapur", "Purulia", "Purunda", "Purusattampur", "Putia", "Putiamathbari", "Raghabpur", "Raghunathganj", "Raidighi", "Raiganj", "Raikhan", "Raipur Bazar", "Rajarhat", "Rajendrapur",
"Rajibpur", "Rajibpur Bira", "Rajnagar", "Rajpur Sonarpur", "Ram Chak", "Rameswarpur", "Ramkanali", "Ramkrishnapur", "Ramnathpur", "Ramnathpur K", "Rampurhat", "Ramshankarpur", "Ranaghat", "Rangabhita", "Rangli Rangliot", "Ranibandh", "Raniganj", "Ranihati", "Raninagar", "Ranisai", "Ratua", "Rautara", "Rautarapur", "Rayna", "Raynagar", "Renjura", "Rukushpur", "Rupmari", "Sabang", "Sagardighi", "Sahajalalpur", "Sahebkhali", "Sahebpur", "Sainthia", "Salanpur", "Salboni", "Saltora", "Salua", "Saluka", "Samudrapur", "Sandelerbil", "Sandeshkhali", "Sankardaha Abad", "Santaldih", "Santipur", "Santra Pur", "Santuri", "Saoradi", "Sarenga", "Saridaspur", "Sarisha", "Sarishaberya", "Sarpai", "Sartla", "Sat Bhaiya", "Sat Khanda Saheb Nagar", "Satashi", "Satbahini", "Satikeshwar", "Satilapur", "Satmile", "Sautia", "Sayestanagar", "Selmabad", "Sendanga", "Senhat", "Serampore", "Serampur Uttarpara", "Serkhan Chak", "Shalikota", "Shaljora", "Shasan", "Shibhati", "Shimulia", "Shimulia Bar", "Shipur", "Sholka Durgapur", "Shridhar Kati", "Shushunia", "Shutia", "Sikharpur", "Siliguri", "Simlapal", "Simulia", "Simulpur", "Sindrani", "Singur", "Sirkabad", "Sitai", "Sitalia", "Sitalkuchi", "Siyalsai", "Soladanga", "Sonakania", "Sonakhali", "Sonamukhi", "Sonarpur", "Soriang Khasmahal", "South 24 Parganas", "Sri Ram Pur", "Srikrishnapur", "Sriniketan", "Suarasatya", "Subdi", "Sukani", "Sukha Khola", "Suri", "Suria", "Susunia", "Sutahata", "Suti", "Sutia", "Swarupnagar", "Syamnagar", "Tagaria Gopalpur", "Taki", "Takla", "Talashur", "Talbangrua", "Taldangra", "Taldaratan Chak", "Talgachhi", "Tamluk", "Tanuya", "Tapan", "Tarakeswar", "Taranipur", "Teghari", "Tehatta", "Telami", "Tengnamari", "Tengunia", "Thakurnagar", "Tikashi", "Tilkhoja", "Titagarh", "Tota Nala", "Tufanganj", "Tukdah Forest", "Tulin", "Tulsihata", "Tushkhali", "Tutranga", "Uchildaha", "Uchudiha", "Udbadal", "Uludanga", "Urdhabpur", "Ururi", "Uttar Amtalia", "Uttar Asda", "Uttar Baliadanga", "Uttar Chara Sankarara", "Uttar Chhat Jaygir Chilakhana", "Uttar Gobindapur", "Uttar Kalamdan", "Uttar Kalsur", "Uttar Kamakhyaguri", "Uttar Kasipur", "Uttar Lakshmipur", "Uttar Laxmipur", "Uttar Madarihat", "Uttar Mokamberia", "Uttar-tajpur", "Uttarpara Kotrung", "West Medinipur"
 
  
],
        "Andaman and Nicobar Islands": ["Car Nicobar","Digipur","Diglipur","Ferrargunj","Hut Bay","Mayabunder","Nancowry","Port Blair","Rangat"],
        "Chandigarh": ["Chandigarh"],
        "Dadra and Nagar Haveli": ["Dadra and Nagar Haveli", "Dharampur", "Killa-pardi", "Silvassa"],
        "Daman and Diu": ["Daman", "Diu"],
        "Delhi": ["Central Delhi", "East Delhi", "New Delhi", "North Delhi", "North East Delhi", "North West Delhi", "Shahdara", "South Delhi", "South East Delhi", "South West Delhi", "West Delhi"],
         "Jammu and Kashmir": ["A K Pora", "Abhama", "Achabal", "Achan", "Aharbal", "Akhnoor", "Akura", "Anantnag", "Arath", "Aripal", "Aripanthan", "Awantipora", "Awenura", "Badran", "Badyar Balla", "Bagh Mehtab", "Baigund", "Bandipora", "Bandipore", "Bani", "Banihal", "Baramulla", "Barsoo", "Basholi", "Batagund", "Bathnoor", "Bathri", "Batpora", "Batrara", "Beerwah", "Behi Bagh", "Bhaderwah", "Bijbehara", "Billawar", "Bindoo Zalan Gam", "Birpur", "Bishnah", "Bouli", "Buchoo", "Budgam", "Chadoora", "Chattargam", "Chenani", "Chimar", "Damhal Hanji Pora", "Demidulla", "Dialgam", "Doda", "Dooru", "Drairi", "Frisal", "Ganderbal", "Gandoh Bhalessa", "Gool Gulab Garh", "Gopal Pora", "Gran Bayotran", "Gulmarg", "Gund", "Gurez", "Halsidar", "Handwara", "Hardudalwan", "Haripora", "Hiranagar", "Hutmarah", "Hyderpora", "Ichgam", "Jammu", "Jawahar Nagar", "Jawalapora", "Kachachakote", "Kachwari", "Kahleel", "Kalakot", "Kalarooch", "Kangan", "Kanidagan", "Kanihama", "Kaprin", "Karan Nagar", "Karipora", "Kathi Darwaza", "Kathua", "Katrasoo", "Katyara", "Khanabal", "Kharonti", "Khigogipora", "Khrew", "Khull", "Kishtwar", "Kokernag", "Kragsoo", "Krem Shora", "Kukarnag", "Kulgam", "Kullan", "Kund Bo", "Kupwara", "Lalgam", "Laram Jangi Pora", "Larnoo", "Later Chadoora", "Linglish", "Lorgam", "Lurgam", "Magam", "Mahore", "Mandoora", "Manjmoh", "Manzgam", "Martand", "Mattan", "Midroo", "Midru", "Nagam", "Nambal", "Nandi Marg", "Nandpora", "Nanil", "Nasnoor", "Natipora", "Nehama", "Nissu", "Noonmai", "Noushera", "Nowgam", "Nunmai", "Ompora", "Pahalgam", "Pakherpora", "Pampore", "Pantha Chowk", "Panzeth", "Parimpora", "Pastana", "Pattan", "Poonch", "Pulwama", "Qamar", "Qanmar", "Qazigund", "R H Hall", "Rainawari", "Raithan", "Rajouri", "Ramban", "Ramnagar", "Ranbir Pora", "Ranbir Singh Pura", "Rangar", "Reasi", "Reban Gund", "Reban Gund Bahram", "S Bala", "S R Gunj", "Sadinare", "Sagam", "Saibugh", "Saimoh", "Samba", "Samuh Kheti", "Sanat Nagar", "Sangam", "Sathu", "Satura", "Shajroo", "Sholi Pora", "Sholipora", "Shopian", "Shopin", "Sogam", "Sonawari", "Sopore", "Sorore", "Srinagar", "Sumbal", "Sunderbani", "Suraryan", "Tajoor", "Tangdhar", "Tangmarg", "Tarigam", "Tarigam Devsar", "Thathri", "Tral", "Udhampur", "Uri", "Verinag", "Wangat", "Wangund", "Wanpora", "Watakala", "Watergam", "Watrihaal", "Wussan", "Wuyan", "Y.K. Pora", "Yaripora", "Zainakote"],
         "Ladakh": ["Dras", "Hunder", "Kargil", "Khalsi", "Ladakh", "Leh", "Len", "Nobra", "Sankoo", "Zanskar"],
        "Lakshadweep": ["Kavaratti"],
        "Puducherry": ["Bahour", "Karaikal", "Kottucherry", "Mahe", "Nannilam", "Nedungadu", "Neravy", "Periyababu Samuthiram", "Puducherry", "Thiruvarur", "Tirumalairayan Pattinam", "Villianur", "Yanam"]
    };


// End Cities







    // Populate cities based on selected state
    stateDropdown.addEventListener('change', () => {
        const selectedState = stateDropdown.value;
        cityDropdown.innerHTML = '<option value="">-- select City --</option>'; // Reset city dropdown

        if (selectedState) {
            const cities = citiesByState[selectedState];
            if (cities) {
                cities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city;
                    option.textContent = city;
                    cityDropdown.appendChild(option);
                });
            }
        }
    });

    /**
     * Displays a feedback message to the user.
     * @param {string} message - The message to display.
     * @param {string} type - The type of message ('success', 'error', or 'info').
     */
    function showFeedback(message, type) {
        feedback.textContent = message;
        feedback.className = `message ${type}`;
        feedback.style.display = 'block';
    }

    /**
     * Updates the submit button's disabled state based on OTP verification and consent.
     */
    function updateSubmitButtonState() {
        if (isOtpVerified && isConsentChecked) {
            submitApplicationButton.disabled = false;
            submitApplicationButton.classList.remove('disabled');
        } else {
            submitApplicationButton.disabled = true;
            submitApplicationButton.classList.add('disabled');
        }
    }

    // Initial check for submit button state
    updateSubmitButtonState();


    /**
     * Handles the click event for the "Generate OTP" button.
     * Makes a request to the backend to send an OTP and initiates auto-verification countdown.
     */
    genarteOTPButton.addEventListener('click', async () => {
        const mobileNumberLocal = mobileInput.value.trim();

        // Clear any previous timers
        if (countdownInterval) clearInterval(countdownInterval);

        // Client-side validation for 10-digit mobile number
        if (!mobileNumberLocal || !/^[0-9]{10}$/.test(mobileNumberLocal)) {
            showFeedback('Please enter a valid 10-digit mobile number.', 'error');
            mobileInput.focus();
            return;
        }

        // Store the mobile number for which OTP was sent
        sentOtpMobileNumber = mobileNumberLocal;

        showFeedback('Sending OTP...', 'info');
        genarteOTPButton.disabled = true;
        genarteOTPButton.classList.add('disabled'); // Add disabled class
        mobileInput.disabled = true;
        fnameInput.disabled = true; // Disable other fields too
        lnameInput.disabled = true;
        emailInput.disabled = true;
        countryCodeInput.disabled = true; // Keep country code disabled
        otpInput.value = ''; // Clear any previous OTP

        try {
            // Send only the 10-digit number to backend, backend will prepend 91
            const response = await fetch(`${BACKEND_API_URL}?action=send_otp`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ mobile: mobileNumberLocal })
            });

            const result = await response.json();

            if (response.ok && result.success) {
                // showFeedback(`OTP sent. Enter it to verify instantly, or wait ${AUTO_VERIFY_DELAY} seconds for auto-verification.`, 'success');
                 showFeedback(`Otp sent successfully ${AUTO_VERIFY_DELAY} seconds for auto-verification.`, 'success');
                
                
                
                otpInput.disabled = false; // Enable OTP input for manual entry
                otpInput.focus();

                let timeLeft = AUTO_VERIFY_DELAY;
                countdownInterval = setInterval(() => {
                    // Only continue countdown if OTP is not yet verified
                    if (!isOtpVerified) {
                        timeLeft--;
                        if (timeLeft <= 0) {
                            clearInterval(countdownInterval); // Stop the countdown
                            showFeedback('Auto-verifying OTP...', 'info');
                            // Trigger verification with whatever is in the OTP input
                            autoVerifyOTP(sentOtpMobileNumber, otpInput.value.trim());
                        } else {
                            // Update message with remaining time
                            showFeedback(`OTP sent successfully. It will expire in ${timeLeft} seconds.`, 'success');
                        }
                    } else {
                        // OTP already verified manually, stop countdown
                        clearInterval(countdownInterval);
                    }
                }, 1000);

            } else {
                showFeedback(result.message || 'Failed to send OTP. Please try again.', 'error');
                // Re-enable inputs on failure to send OTP
                genarteOTPButton.disabled = false;
                genarteOTPButton.classList.remove('disabled'); // Remove disabled class
                mobileInput.disabled = false;
                fnameInput.disabled = false;
                lnameInput.disabled = false;
                emailInput.disabled = false;
                otpInput.disabled = true; // Keep OTP input disabled if OTP wasn't sent
            }
        } catch (error) {
            console.error('Error sending OTP:', error);
            showFeedback('An error occurred while trying to send OTP. Please try again later.', 'error');
            // Re-enable inputs on network/client error
            genarteOTPButton.disabled = false;
            genarteOTPButton.classList.remove('disabled'); // Remove disabled class
            mobileInput.disabled = false;
            fnameInput.disabled = false;
            lnameInput.disabled = false;
            emailInput.disabled = false;
            otpInput.disabled = true;
        }
    });

    /**
     * Handles instant OTP verification if user types 6 digits.
     */
    otpInput.addEventListener('input', () => {
        const userEnteredOtp = otpInput.value.trim();

        // If 6 digits are entered AND OTP is not yet verified, attempt instant verification
        if (userEnteredOtp.length === 6 && /^[0-9]{6}$/.test(userEnteredOtp) && !isOtpVerified) {
            // Clear countdown as user has manually entered
            if (countdownInterval) clearInterval(countdownInterval);
            // Use the stored mobile number for verification
            autoVerifyOTP(sentOtpMobileNumber, userEnteredOtp);
        }
    });


    /**
     * Handles the automatic OTP verification.
     * Makes a request to the backend to verify the OTP.
     * @param {string} mobileNumber - The 10-digit mobile number.
     * @param {string} otpValue - The OTP entered by the user (or empty if not entered).
     */
    async function autoVerifyOTP(mobileNumber, otpValue) {
        // Prevent re-verification if already verified or if no mobile number is available
        if (isOtpVerified || !mobileNumber) {
            return;
        }

        // Disable OTP input during verification attempt
        otpInput.disabled = true;

        showFeedback('Verifying OTP...', 'info');

        try {
            // Send only the 10-digit number to backend, backend will prepend 91 for session key
            const response = await fetch(`${BACKEND_API_URL}?action=verify_otp`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ mobile: mobileNumber, otp: otpValue })
            });

            const result = await response.json();

            if (response.ok && result.success) {
                isOtpVerified = true; // Set global flag to true
                showFeedback(result.message || 'Mobile number verified successfully! You can now fill the application.', 'success');

                // Disable all OTP related inputs/buttons
                genarteOTPButton.disabled = true;
                genarteOTPButton.classList.add('disabled');
                mobileInput.disabled = true;
                countryCodeInput.disabled = true;
                otpInput.disabled = true;
                otpInput.value = ''; // Clear OTP input after successful verification

                // Enable application fields
                applicationFields.style.pointerEvents = 'auto';
                applicationFields.style.opacity = '1';
                updateSubmitButtonState(); // Update the main submit button state

            } else {
                isOtpVerified = false; // Keep flag false
                showFeedback(result.message || 'Verification failed. Please re-generate OTP and try again.', 'error');
                // Re-enable inputs to allow user to try again
                mobileInput.disabled = false;
                fnameInput.disabled = false;
                lnameInput.disabled = false;
                emailInput.disabled = false;
                genarteOTPButton.disabled = false; // Allow generating new OTP
                genarteOTPButton.classList.remove('disabled');
                otpInput.disabled = false; // Keep OTP input enabled if verification fails
                updateSubmitButtonState(); // Update the main submit button state
            }
        } catch (error) {
            console.error('Error during verification:', error);
            showFeedback('An error occurred during verification. Please try again later.', 'error');
            // Re-enable inputs on network/client error
            mobileInput.disabled = false;
            fnameInput.disabled = false;
            lnameInput.disabled = false;
            emailInput.disabled = false;
            genarteOTPButton.disabled = false;
            genarteOTPButton.classList.remove('disabled');
            otpInput.disabled = false;
            updateSubmitButtonState();
        } finally {
            // Ensure any countdown interval is cleared, regardless of success/failure
            if (countdownInterval) {
                clearInterval(countdownInterval);
            }
        }
    }

    // Listener for consent checkbox
    defaultCheck1.addEventListener('change', () => {
        isConsentChecked = defaultCheck1.checked;
        updateSubmitButtonState(); // Update submit button state when consent changes
    });

    /**
     * Handles the main form submission.
     * Proceeds with submission to PHP backend only if OTP is verified and consent is given.
     */
    mainApplicationForm.addEventListener('submit', async (e) => {
        e.preventDefault(); // Prevent default browser form submission

        if (!isOtpVerified || !isConsentChecked) {
            showFeedback('Please verify your mobile number with OTP and agree to the terms before submitting.', 'error');
            return;
        }

        showFeedback('Submitting application...', 'info');
        submitApplicationButton.disabled = true; // Disable to prevent multiple submissions
        submitApplicationButton.classList.add('disabled'); // Add disabled class

        // Collect all form data using the 'name' attributes for Salesforce mapping
        const formData = {
            FirstName: fnameInput.value.trim(),
            LastName: lnameInput.value.trim(),
            Email: emailInput.value.trim(),
            MobilePhone: mobileInput.value.trim(), // Send only local number to backend, backend prepends 91
            State: stateDropdown.value.trim(), // Correctly get value from State dropdown
            City: cityDropdown.value.trim(), // Correctly get value from City dropdown
            Consent__c: defaultCheck1.checked, // Send boolean true/false for Consent__c
            
              UTM_Source__c: utmSource.value.trim(),
            UTM_Medium__c: utmMedium.value.trim(),
            UTM_Campaign_Name__c: utmCampaignName.value.trim(),
            UTM_Keyword__c: utmKeyword.value.trim(),
            UTM_Ad_Content__c: utmAdContent.value.trim(),
            GCLID__c: gclid.value.trim(),
            Campaign_ID__c: campaignId.value.trim(),
            UTM_Ad_group_ID__c: utmAdgroupId.value.trim(),
            UTM_Ad_group_name__c: utmAdgroupName.value.trim(),
            UTM_Creative__c: utmCreative.value.trim(),
            Placement__c: placement.value.trim(),
            UTM_Network__c: utmNetwork.value.trim(),
            UTM_Device__c: utmDevice.value.trim(),
            Creative_ID_Ad_ID__c: creativeIdAdId.value.trim(),
            Match_Type__c: matchTypec.value.trim(),
           
            
        };

        try {
            const response = await fetch(`${BACKEND_API_URL}?action=submit_form`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(formData)
            });

            const result = await response.json();

            if (response.ok && result.success) {
                
            parent.window.location.href = "https://ndat.nmims.edu/thankyou.php";
                
                showFeedback(result.message, 'success');
                mainApplicationForm.reset(); // Clear form fields

                // Reset OTP state and re-enable inputs for a new submission
                isOtpVerified = false;
                isConsentChecked = false; // Reset consent
                fnameInput.disabled = false;
                lnameInput.disabled = false;
                emailInput.disabled = false;
                mobileInput.disabled = false;
                countryCodeInput.disabled = false;
                genarteOTPButton.disabled = false;
                genarteOTPButton.classList.remove('disabled'); // Remove disabled class
                otpInput.disabled = true; // Keep OTP input disabled initially
                otpInput.value = ''; // Clear OTP input
                updateSubmitButtonState(); // Update submit button to be disabled

                // Disable application fields again
                applicationFields.style.pointerEvents = 'none';
                applicationFields.style.opacity = '0.6';

                // Reset dropdowns to their default state
                stateDropdown.value = ''; // Reset State dropdown
                cityDropdown.innerHTML = '<option value="" disabled selected>-- select City --</option>'; // Reset City dropdown
                defaultCheck1.checked = false; // Uncheck consent checkbox

            } else {
                showFeedback(result.message || 'Form submission failed. Please try again.', 'error');
                submitApplicationButton.disabled = false; // Re-enable for retry
                submitApplicationButton.classList.remove('disabled'); // Remove disabled class
            }
        } catch (err) {
            console.error('Form submission error:', err);
            showFeedback(`Submission error: ${err.message}`, 'error');
            submitApplicationButton.disabled = false; // Re-enable for retry
            submitApplicationButton.classList.remove('disabled'); // Remove disabled class
        }
    });
    </script>
      
      <!--sales force lead form script end 08-07-2025-->
      
</body>
</html>
