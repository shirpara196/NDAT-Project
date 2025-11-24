<?php include 'Template/header.php'; ?>
<?php include 'Template/header-main.php'; ?>


<section class="hero-section">
    <div class="container-fluid">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img" style="background: url(assets/images/hero-img.png);"></div>
                </div>
                <div class="swiper-slide">
                    <div class="img" style="background: url(assets/images/hero-img.png);"></div>
                </div>
                <div class="swiper-slide">
                    <div class="img" style="background: url(assets/images/hero-img.png);"></div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="container">
            <div class="hero-inner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="hero-left" data-aos="fade-up">
                            <h2 class="main-title"><span>Build the Future</span> with Human Centered
                                <span>Design</span>
                            </h2>
                            <p>
                                Turn creativity into impact with NMIMS School of Design’s Bachelor’s Program,
                                where innovation meets empathy!
                            </p>
                            <div class="hero-btn">
                                <a href="#" title="Apply Now" class="btn btn-primary">Apply Now <span class="icon"><i
                                            class="n-icon" data-icon="i-msg"></i></span></a>
                                <a href="#" title="Download Brochure" class="btn btn-white">Download Brochure <span
                                        class="icon"><i class="n-icon" data-icon="i-herobook"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-wrap">
                            <!--<h2>Begin Your Journey Here</h2>-->

                            <!--<form id="mainApplicationForm">-->


                            <form id="mainApplicationForm" action="api.php?utm=" method="POST"> <input type="hidden"
                                    name="oid" value="00DO300000Ep5FK">
                                <input type="hidden" name="oid" value="00DO300000Ep5FK">
                                <input type="hidden" name="retURL" value="https://www.salesforce.com/thankyou">

                                <div class="formDiv models_formDiv__xNk0h">


                                    <h6 class="form-title">Begin Your Journey Here</h6>

                                    <input type="hidden" id="UTM_Source__c" name="UTM_Source__c"
                                        value="<?php echo isset($_GET['utm_source']) ? htmlspecialchars(@$_GET['utm_source']): ''; ?>" />
                                    <input type="hidden" id="UTM_Medium__c" name="UTM_Medium__c"
                                        value="<?php echo isset($_GET['utm_medium']) ? htmlspecialchars($_GET['utm_medium']) : ''; ?>" />
                                    <input type="hidden" id="UTM_Campaign_Name__c" name="UTM_Campaign_Name__c"
                                        value="<?php echo isset($_GET['utm_campaign']) ? htmlspecialchars(@$_GET['utm_campaign']): ''; ?>" />
                                    <input type="hidden" id="UTM_Keyword__c" name="UTM_Keyword__c"
                                        value="<?php echo isset($_GET['utm_keyword']) ? htmlspecialchars(@$_GET['utm_keyword']): ''; ?>" />
                                    <input type="hidden" id="UTM_Ad_Content__c" name="UTM_Ad_Content__c"
                                        value="<?php echo isset($_GET['utm_content']) ? htmlspecialchars(@$_GET['utm_content']): ''; ?>" />
                                    <input type="hidden" id="GCLID__c" name="GCLID__c"
                                        value="<?php echo isset($_GET['gclid']) ?  htmlspecialchars(@$_GET['gclid']): ''; ?>" />
                                    <input type="hidden" id="Campaign_ID__c" name="Campaign_ID__c"
                                        value="<?php echo isset($_GET['utm_campaignid']) ? htmlspecialchars(@$_GET['utm_campaignid']): ''; ?>" />
                                    <input type="hidden" id="UTM_Ad_group_ID__c" name="UTM_Ad_group_ID__c"
                                        value="<?php echo isset($_GET['utm_adgroupid']) ? htmlspecialchars(@$_GET['utm_adgroupid']): ''; ?>" />
                                    <input type="hidden" id="UTM_Ad_group_name__c" name="UTM_Ad_group_name__c"
                                        value="<?php echo isset($_GET['utm_adgroup']) ? htmlspecialchars(@$_GET['utm_adgroup']): ''; ?>" />
                                    <input type="hidden" id="UTM_Creative__c" name="UTM_Creative__c"
                                        value="<?php echo isset($_GET['creative']) ? htmlspecialchars(@$_GET['creative']): ''; ?>" />
                                    <input type="hidden" id="Placement__c" name="Placement__c"
                                        value="<?php echo isset($_GET['utm_placement']) ? htmlspecialchars(@$_GET['utm_placement']): ''; ?>" />
                                    <input type="hidden" id="UTM_Network__c" name="UTM_Network__c"
                                        value="<?php echo  isset($_GET['utm_network']) ? htmlspecialchars(@$_GET['utm_network']): ''; ?>" />
                                    <input type="hidden" id="UTM_Device__c" name="UTM_Device__c"
                                        value="<?php echo  isset($_GET['utm_device']) ? htmlspecialchars(@$_GET['utm_device']): ''; ?>" />
                                    <input type="hidden" id="Creative_ID_Ad_ID__c" name="Creative_ID_Ad_ID__c"
                                        value="<?php echo  isset($_GET['utm_creativeid']) ? htmlspecialchars(@$_GET['utm_creativeid']): ''; ?>" />
                                    <input type="hidden" id="Match_Type__c" name="Match_Type__c"
                                        value="<?php echo  isset($_GET['utm_matchtype']) ? htmlspecialchars(@$_GET['utm_matchtype']): ''; ?>" />




                                    <div class="row g models_formCont__g0yzh">
                                        <div class="col-md-6 col-12">
                                            <div class="models_fieldGroup__C0awJ form-group">
                                                <input class="models_field__K89L6 input_inputBox__Wf8vH form-control" type="text"
                                                    id="fname" name="FirstName" placeholder="First Name*"
                                                    maxlength="150" pattern="(?=^.{2,25}$)(?![.\n])(?=.*[a-zA-Z]).*$"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6 ">
                                            <div class="models_fieldGroup__C0awJ form-group">
                                                <input class="models_field__K89L6 input_inputBox__Wf8vH form-control" type="text"
                                                    id="lname" name="LastName" placeholder="Last Name*" maxlength="150"
                                                    pattern="(?=^.{2,25}$)(?![.\n])(?=.*[a-zA-Z]).*$" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="models_fieldGroup__C0awJ form-group">
                                                <input class="models_field__K89L6 input_inputBox__Wf8vH form-control" type="email"
                                                    id="email" name="Email" placeholder="Email ID*" maxlength="150"
                                                    pattern="[a-zA-Z0-9.!#$%&amp;’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 ">
                                            <div class="models_fieldGroup__C0awJ ">
                                                <div class="mobile-input-group">
                                                    <input type="text" id="countryCodeInput"
                                                        class="country-code-input models_field__K89L6 input_inputBox__Wf8vH"
                                                        value="+91" readonly>
                                                    <input
                                                        class="models_field__K89L6 input_inputBox__Wf8vH phone-number-input"
                                                        type="number" id="mobile" name="MobilePhone"
                                                        placeholder="Mobile No.* (10 digits)" maxlength="10"
                                                        pattern="[0-9]{10}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 ">
                                            <div class="models_OTPButton__osVob item-align position-relative">
                                                <button type="button" id="genarteOTP" class="genarteOTPBtn">Generate
                                                    OTP</button>
                                                <input type="text" class="otpInput_enquirey_form"
                                                    id="otpInput_enquirey_form" disabled placeholder="Enter OTP"
                                                    maxlength="6">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div id="feedback" class="message" style="display:none;"></div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row g-3">
                                                <div class="col-md-6 col-12 ">
                                                    <div class="models_fieldGroup__C0awJ">
                                                        <select class="models_field__K89L6 input_inputBox__Wf8vH"
                                                            id="inputState" name="State" required>
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
                                                            <option disabled=""
                                                                style="background-color:#aaa; color:#fff">UNION
                                                                Territories</option>
                                                            <option value="Andaman and Nicobar Islands">Andaman and
                                                                Nicobar Islands</option>
                                                            <option value="Chandigarh">Chandigarh</option>
                                                            <option value="Dadra and Nagar Haveli">Dadra and Nagar
                                                                Haveli</option>

                                                            <option value="Daman and Diu">Daman and Diu</option>
                                                            <option value="Delhi">Delhi</option>
                                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                            <option value="Ladakh">Ladakh</option>
                                                            <option value="Lakshadweep">Lakshadweep</option>


                                                            <option value="Puducherry">Puducherry</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12 ">
                                                    <div class="models_fieldGroup__C0awJ">
                                                        <select class="models_field__K89L6 input_inputBox__Wf8vH"
                                                            id="inputDistrict" name="City" required>
                                                            <option value="">-- select City --</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-4" id="applicationFields"
                                                    style="pointer-events: none; opacity: 0.6;">
                                                    <div class="models_fieldGroup__C0awJ form-check">
                                                        <input class="form-check-input models_checkInput__Ch2Vx"
                                                            type="checkbox" id="defaultCheck1" name="Consent__c"
                                                            value="true" required>
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            I authorise NMIMS and/or their representatives to contact me
                                                            via Phone, SMS, WhatsApp, and/or email. This will override
                                                            registry on DND/NDNC.</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <button type="submit" id="submitApplicationButton"
                                                class="btn PopfornBtn models_PopfornBtn__QP7jo disabled"
                                                disabled>SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="line-shape">
        <div class="marquee">
            <div class="marquee-inner">
                <img src="assets/images/hero-shape.png">
                <img src="assets/images/hero-shape.png">
            </div>
        </div>
    </div>
</section>


<div class="bg-wrap">

    <section class="about-section section-gap double-gap-t" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-wrap d-lg-flex d-block align-items-end">
                        <div class="img-wrap" data-aos="fade-right">
                            <div class="img">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" src="assets/images/loader.gif"
                                            data-src="assets/images/about-img.webp" alt="img">
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn btn-primary" title="Watch full Video">
                                            Watch full Video
                                            <span class="icon"><i class="n-icon" data-icon="i-play"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content" data-aos="fade-up">
                            <h1 class="main-title">
                                <span>About</span> Us
                            </h1>
                            <div class="text">
                                <p>At NMIMS School of Design, creativity meets technology. Our 4-year program blends
                                    design,
                                    science, and empathy to prepare you for future-ready careers.</p>
                                <p>
                                    Start with a strong foundation, then dive into IoT, VR, and cognitive-science-based
                                    product design. Learn from expert faculty, explore cutting-edge labs, and bring
                                    ideas to
                                    life through hands-on projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overview-section section-gap double-gap-b" id="uceed-score">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="overview-wrap" data-aos="fade-up">
                        <h2 class="main-title"><span>Bachelor of</span> Design</h2>
                        <ul class="box">
                            <li>
                                <div>
                                    <span
                                        class="d-block text-lg-center text-start mb-lg-1 mb-0 sm-title text-white">Duration</span>
                                    <span class="d-block text-lg-center text-start sm-desc fw-bold text-white">4
                                        Years</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <span
                                        class="d-block text-lg-center text-start mb-lg-1 mb-0 sm-title text-white">Eligibility</span>
                                    <span class="d-block text-lg-center text-start sm-desc fw-bold text-white">10 +
                                        2</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <span
                                        class="d-block text-lg-center text-start mb-lg-1 mb-0 sm-title text-white">Specialisation</span>
                                    <span
                                        class="d-block text-lg-center text-start sm-desc fw-bold text-white">Humanising
                                        Technology</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <span
                                        class="d-block text-lg-center text-start mb-lg-1 mb-0 sm-title text-white">Campus</span>
                                    <span class="d-block text-lg-center text-start sm-desc fw-bold text-white">NMIMS
                                        Mumbai</span>
                                </div>
                            </li>
                        </ul>
                        <h2 class="main-title sec-title"><span>Overview</span></h2>
                        <ul class="list-desc">
                            <li>
                                A trans-disciplinary design program blending <strong> People, Technology, Science &
                                    Business</strong>
                            </li>
                            <li>
                                Builds multi-stream skillsets to visualise <strong>2D, 3D & 5D experiences</strong>
                            </li>
                            <li>
                                Hands-on learning in <strong>state-of-the-art studios & labs</strong>
                            </li>
                            <li>
                                A vibrant <strong>campus ecosystem</strong> that fuels creativity and collaboration
                            </li>
                            <li>
                                Learn from <strong>industry experts & practitioners</strong> who mentor you to think,
                                design, and innovate
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="bg-wrap-2">
    <section class="admission-section" id="admission">
        <div class="container-fluid ps-0">
            <div class="row gx-0">
                <div class="col-12">
                    <div class="admission-wrap" data-aos="fade-up">
                        <h2 class="main-title text-center"><span>Admission</span> Process</h2>
                        <div class="top-content">
                            <h6 class="sm-title">Eligibility</h6>
                            <ul class="ul-list">
                                <li>
                                    Applicants must have passed 10+2 or equivalent examination from any stream.
                                </li>
                                <li>
                                    Must have secured a minimum of 50% aggregate marks from a recognized board.
                                </li>
                                <li>
                                    Candidates with an International Baccalaureate (IB) Diploma are also eligible,
                                    provided
                                    they have:
                                    <ul>
                                        <li>
                                            A minimum of 24 credits, and
                                        </li>
                                        <li>
                                            3 Higher Level (HL) subjects and 3 Standard Level (SL) subjects.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h6 class="sm-title">Steps to Apply</h6>
                            <div class="steps" data-aos="fade-up">
                                <div class="item">
                                    <span class="step d-block"><span>Step 1</span></span>
                                    <div class="text">
                                        <p>Register online and pay the application fee</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="step d-block"><span>Step 2</span></span>
                                    <div class="text">
                                        <p>Appear for Entrance Exam & personal Interview</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="step d-block"><span>Step 3</span></span>
                                    <div class="text">
                                        <p>Check your name in the Merit List</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="step d-block"><span>Step 4</span></span>
                                    <div class="text">
                                        <p>Complete the admission form with required documents</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="step d-block"><span>Step 5</span></span>
                                    <div class="text">
                                        <p>Pay the admission fee & complete the process</p>
                                    </div>
                                </div>
                            </div>
                            <h6 class="sm-title">Important Documents</h6>
                            <div class="document d-flex flex-md-nowrap flex-wrap" data-aos="fade-up">
                                <div class="item d-flex flex-grow-1">
                                    <div class="wrap">
                                        <a href="#" class="icon">
                                            <img src="assets/images/i-pdf.png" alt="pdf">
                                        </a>
                                        <h6 class="title fw-semibold fs-14 text-center mt-2"><a href="#">Admission
                                                Handout</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="item d-flex flex-grow-1">
                                    <div class="wrap">
                                        <a href="#" class="icon">
                                            <img src="assets/images/i-pdf.png" alt="pdf">
                                        </a>
                                        <h6 class="title fw-semibold fs-14 text-center mt-2"><a href="#">Admission
                                                Handout</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="item d-flex flex-grow-1">
                                    <div class="wrap">
                                        <a href="#" class="icon">
                                            <img src="assets/images/i-pdf.png" alt="pdf">
                                        </a>
                                        <h6 class="title fw-semibold fs-14 text-center mt-2"><a href="#">Admission
                                                Handout</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="item d-flex flex-grow-1">
                                    <div class="wrap">
                                        <a href="#" class="icon">
                                            <img src="assets/images/i-pdf.png" alt="pdf">
                                        </a>
                                        <h6 class="title fw-semibold fs-14 text-center mt-2"><a href="#">Admission
                                                Handout</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="program-career-section section-gap double-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pc-wrap">
                        <ul class="nav nav-pills">
                            <li class="nav-item w-100">
                                <a class="nav-link active text-center" data-bs-toggle="pill" href="#program_highlights">
                                    Program <span>Highlights</span>
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link text-center" data-bs-toggle="pill" href="#career_opportunities">
                                    Career <span>Opportunities</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" data-aos="fade-up">
                            <div id="program_highlights" class="tab-pane active">
                                <div class="pc-list program-highlights">
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-school"></i>
                                        <p class="pc-para">
                                            Ranked 4th Best Design School by Career 360
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-cap"></i>
                                        <p class="pc-para">
                                            One-of-a-kind Undergraduate Design Program in India
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-cup"></i>
                                        <p class="pc-para">
                                            10+ Awards & 5 Finalists at National & International forums
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-free-network"></i>
                                        <p class="pc-para">
                                            Strong Alumni Network across industries
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-network"></i>
                                        <p class="pc-para">
                                            100% Placement for three consecutive years
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-users"></i>
                                        <p class="pc-para">
                                            5-Month Paid Internship with leading organizations
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-book"></i>
                                        <p class="pc-para">
                                            Small Batch Size for personalized mentorship
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-heart"></i>
                                        <p class="pc-para">
                                            Immersive NGO Projects for real-world exposure
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-global"></i>
                                        <p class="pc-para">
                                            Hands-on Learning through studios & labs
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-strem"></i>
                                        <p class="pc-para">
                                            Entrepreneurial Mentorship to nurture future founders
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-chalkboard"></i>
                                        <p class="pc-para">
                                            Expert Faculty from academia and industry
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-bookopen"></i>
                                        <p class="pc-para">
                                            26+ Research Papers published in international journals & conferences
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div id="career_opportunities" class="tab-pane fade">
                                <p class="pc-title">Graduates of the B.Des. (Humanising Technology) can look forward to
                                    diverse career opportunities, including:</p>
                                <div class="pc-list career-opportunities">
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-idesigner"></i>
                                        <p class="pc-para">
                                            Interaction Designer
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-dresearcher"></i>
                                        <p class="pc-para">
                                            Design Researcher
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-datavisual"></i>
                                        <p class="pc-para">
                                            Data Visualizer
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-uiux"></i>
                                        <p class="pc-para">
                                            UI & UX Designer
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-edesigner"></i>
                                        <p class="pc-para">
                                            Experience Designer Emerging Technology
                                        </p>
                                    </div>
                                    <div class="pc-item">
                                        <i class="n-icon pc-icon" data-icon="i-graphicdesign"></i>
                                        <p class="pc-para">
                                            Graphic Designer
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="campus-section section-gap double-gap-t" id="recruiters">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                <div class="campus-tour" data-aos="fade-right">
                    <h2 class="main-title"><span>Campus</span> Tour</h2>
                    <div class="campus-story">
                        <div class="thumbnail-container object-fit">
                            <div class="thumbnail">
                                <img class="lazy" src="assets/images/loader.gif"
                                    data-src="assets/images/campus-tour.png" alt="campus-img">
                                <!-- <video autoplay="" controls="" muted=""
                                    class="campus-open-videos embed-responsive embed-responsive-16by9 d-none">
                                    <source class="embed-responsive-item" src="assets/images/125060-732641221_small.mp4"
                                        type="video/mp4">
                                </video> -->
                            </div>
                            <span class="campus-play-btn d-inline-block play-icon-animate">
                                <a href="https://www.youtube.com/watch?v=5lKuReWzgDQ&t=3s" data-fancybox="campus-video"
                                    class="campus-video-modal" aria-label="play video">
                                    <i class="n-icon" data-icon="i-playicon"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                <div class="top-recruiters" data-aos="fade-left">
                    <h2 class="main-title"><span>Top</span> Recruiters</h2>
                    <div class="recruiters-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="recruiters-card">
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r1.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r2.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r3.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r4.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r5.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r6.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="recruiters-card">
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r7.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r8.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r9.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r10.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r11.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r12.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="recruiters-card">
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r13.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r14.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r15.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                    <div class="thumbnail-container">
                                        <div class="thumbnail">
                                            <img class="lazy" src="assets/images/loader.gif"
                                                data-src="assets/images/r16.jpg" alt="recruiter-img">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="recruiters-slider">

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="industry-testimonial section-gap industry-bottom-line">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <h2 class="main-title text-center">
                    <span>Industry </span> Testimonials
                </h2>
                <div class="swiper industry-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="main-card">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/industry.png"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                                <div class="industry-title d-flex align-items-center justify-content-between">
                                    <h3>Ninad Vengurlekar</h3>
                                    <div class="industry-btn play-icon-animate">
                                        <a href="https://www.youtube.com/watch?v=VeRQ3qX-uQo&t=56s"
                                            data-fancybox="industry-video" title="Watch full Video">
                                            <i class="n-icon" data-icon="i-industry-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <p>CEO & Co-founder - Utter App</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-card">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/industry2.png"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                                <div class="industry-title d-flex align-items-center justify-content-between">
                                    <h3>Sumeet Wilankar</h3>
                                    <div class="industry-btn play-icon-animate">
                                        <a href="https://www.youtube.com/watch?v=r5S-6iOgmaI"
                                            data-fancybox="industry-video" title="Watch full Video">
                                            <i class="n-icon" data-icon="i-industry-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <p>AVP, User Experience- Strategy Barclays Investment Bank</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-card">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/industry3.png"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                                <div class="industry-title d-flex align-items-center justify-content-between">
                                    <h3>Tanay Kumar</h3>
                                    <div class="industry-btn play-icon-animate">
                                        <a href="https://www.youtube.com/watch?v=ZPhkmZIP1No"
                                            data-fancybox="industry-video" title="Watch full Video">
                                            <i class="n-icon" data-icon="i-industry-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <p>Co-founder, CEO and Creative Director
                                    Barclays Fractal Ink Design Studio Pvt. Ltd</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-btn-wrap d-xl-none">
                    <div class="industry-button-prev swiper-btn">
                        <i class="n-icon" data-icon="i-left-arrow"></i>
                    </div>
                    <div class="industry-button-next swiper-btn">
                        <i class="n-icon" data-icon="i-right-arrow"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="industry-testimonial student-testimonial">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12">
                <h2 class="main-title text-center">
                    <span>Student </span> Testimonials
                </h2>

                <div class="swiper student-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="main-card">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/student.png"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                                <div class="industry-title d-flex align-items-center justify-content-between">
                                    <h3>School of Design | Fire Chat Interaction</h3>
                                    <div class="industry-btn play-icon-animate">
                                        <a href="https://www.youtube.com/watch?v=Lwr6Pt1Ust0"
                                            data-fancybox="student-video" title="Watch full Video">
                                            <i class="n-icon" data-icon="i-industry-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-card">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/student2.png"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                                <div class="industry-title d-flex align-items-center justify-content-between">
                                    <h3>Saima Khatri</h3>
                                    <div class="industry-btn play-icon-animate">
                                        <a href="https://www.youtube.com/watch?v=DwK8BDUtZV4"
                                            data-fancybox="student-video" title="Watch full Video">
                                            <i class="n-icon" data-icon="i-industry-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <p>An alumnus of School of Design</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-card">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/student3.png"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                                <div class="industry-title d-flex align-items-center justify-content-between">
                                    <h3>Prajna Raghuveer</h3>
                                    <div class="industry-btn play-icon-animate">
                                        <a href="https://www.youtube.com/watch?v=IQiAFOqDqbE"
                                            data-fancybox="student-video" title="Watch full Video">
                                            <i class="n-icon" data-icon="i-industry-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <p>An alumnus of School of Design</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-card">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/student4.png"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                                <div class="industry-title d-flex align-items-center justify-content-between">
                                    <h3>Himanshu Mantri</h3>
                                    <div class="industry-btn play-icon-animate">
                                        <a href="https://www.youtube.com/watch?v=TYuUfmVjlus"
                                            data-fancybox="student-video" title="Watch full Video">
                                            <i class="n-icon" data-icon="i-industry-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <p>An alumnus of School of Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-btn-wrap">
                    <div class="student-button-prev swiper-btn">
                        <i class="n-icon" data-icon="i-left-arrow"></i>
                    </div>
                    <div class="student-button-next swiper-btn">
                        <i class="n-icon" data-icon="i-right-arrow"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="glimpse-life-section section-gap double-gap-b">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                <div class="glimpse-left" data-aos="fade-right">
                    <h2 class="main-title"><span>A Glimpse into Life at</span> NMIMS School of Design</h2>
                    <p>
                        From hands-on studio sessions and tech-driven experiments to vibrant campus moments, every day
                        here inspires you to design, innovate, and grow!
                    </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                <div class="glimpse-main-section" data-aos="fade-left">
                    <!-- Main Slider -->
                    <div class="swiper glimpseSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g1.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g2.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g3.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g4.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g5.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g6.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g7.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g8.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g9.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g10.jpg"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g11.jpg"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g12.jpg"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g13.jpg"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g14.jpg"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g15.jpg"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                    <!-- Thumbnail Slider (Vertical) -->
                    <div class="swiper glimpseThumb">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g1.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g2.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g3.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g4.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g5.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g6.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g7.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g8.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g9.jpg" src="assets/images/loader.gif"
                                            alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g10.jpg"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g11.jpg"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g12.jpg"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g13.jpg"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g14.jpg"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="thumbnail-container object-fit">
                                    <div class="thumbnail">
                                        <img class="lazy" data-src="assets/images/g15.jpg"
                                            src="assets/images/loader.gif" alt="img">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'Template/footer-main.php'; ?>
<?php include 'Template/footer.php'; ?>