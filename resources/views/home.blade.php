<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | MHCO</title>

    <!--=====CSS LINK=======-->
    <link rel="stylesheet" href="{{asset("assets/css/plugins/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/css/plugins/swiper.bundle.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/plugins/font-awesome-pro.css") }}">
    <link rel="stylesheet" href="{{asset("/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/nice-select.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/css/plugins/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/plugins/modal-video.min.css") }}">
    <link href="{{asset("/unpkg.com/aos%402.3.1/dist/aos.css")}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;500;600;700;800&amp;family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900&amp;family=Nunito:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&amp;family=Outfit:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("assets/css/plugins/mobile.css") }}">
    <link rel="stylesheet" href=" {{ asset("assets/css/plugins/aos.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/typography.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/master.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/plugins/responsive.css") }}">

    <!--=====FAV-ICoN=======-->
    <link rel="shortcut icon" href="{{ asset("assets/images/logo/logo0.webp") }}" />
    <!--=====JQUERY=======-->
    <script src="{{ asset("assets/js/plugins/jquery-3-6-0.min.js")}}"></script>
    <script src="{{asset("/cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js") }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>
    <!--=====HEADER =======-->
    @include('navbar')
    <!--===== Mobile header end=======-->
    <!--===== Home STARTS=======-->
    <div class="about8-section-area section-padding5" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about2-author-images">
                        <div class="about2-scetion-images" data-aos="zoom-out" data-aos-duration="1200">
                            <img src="{{ asset("assets/images/person/ceo2.png") }}" alt="">
                            <div class="floating-text"  data-aos="fade-left" data-aos-duration="1400"  >CEO - Muhammad Hussain</div>
                        </div>
                    </div>
                </div>
            <style>
                
                .about2-scetion-images {
    position: relative;
    display: inline-block;
}

.floating-text {
    position: absolute;
    bottom: 29px; /* Adjust as needed */
    right: 10px; /* Adjust as needed */
    background-color: rgba(0, 144, 203, 0.50); 
    color: white; /* Text color */
    padding: 5px 10px;
    border-radius: 5px;
 
}
            </style>                

                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                    <div class="about-2-textarea">
                        <span class=" about8 font-ks font-16 lineh-16 color39 weight-500 margin-b20 d-inline-block">Why
                            Us</span>
                        <h1 class="font-lora font-44 weight-600 lineh-52 color39 margin-b20">Tax Consulting Services In Pakistan</h1>
                        <div class="pera-background1 ts">
                            <p class="font-ks font-16 lineh-26 color-17 weight-500 ts">With over 30 years of experience
                                we take responsibility for your financial security and take pride in our work, you can
                                choose our tax consulting services with confidence.
                            </p>
                        </div>
                        <p class="font-ks font-16 lineh-26 colorhp1 weight-500">We offer specialized, compliance-focused
                            solutions while maintaining timely delivery, open lines of contact, and moral values. Our
                            industry knowledge, accessible services, and excellent track record, coupled with our
                            dedication to business success, make us the ideal partner for your financial needs. We have
                            an obligation to your success in addition to our commitment to it.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--===== Home END=======-->

    <!--===== SERVICE STARTS=======-->
    <div class="secvice8-section-area section-padding8" id="service">
        <img src="{{ asset("assets/images/elementor/elementor51.png") }}" alt="" class="elementors14">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="servicve-8-header text-center margin-b60">
                        <span class=" about8 font-ks font-16 lineh-16 color39 weight-500 margin-b20 d-inline-block">Our
                            Services</span>
                        <h1 class="font-lora font-44 weight-600 lineh-52 color39 margin-b20">Expert Tax Consulting
                            Services</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 select-option" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="800">
                    <div class="service-8-boxarea text-center margin-b30">
                        <div class="service-8-icons ts">
                            <img src="{{ asset("assets/images/icons/tax-consulting2.png") }}" alt="" class="ts">
                        </div>
                        <a href="#contact"
                            class="font-lora font-24 lineh-24 weight-600 color39 d-inline-block margin-b ts"
                            data-custom-value="Import Export">Import-export
                            registration (PSW) </a>
                        <p class="font-ks font-16 weight-500 colorhp1 lineh-26 margin-b24 ts">
                            For businesses looking to broaden their horizons and widen their perspective beyond
                            international boundaries

                        </p>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6 select-option" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="800">
                    <div class="service-8-boxarea text-center margin-b30">
                        <div class="service-8-icons ts">
                            <img src="{{asset("assets/images/icons/tax-consulting3.png")}}" alt="" class="ts">
                        </div>
                        <a href="#contact"
                            class="font-lora font-24 lineh-24 weight-600 color39 d-inline-block margin-b ts"
                            data-custom-value="Sales Tax Services">Sales
                            tax
                            registration and Monthly filing
                        </a>
                        <p class="font-ks font-16 weight-500 colorhp1 lineh-26 margin-b24 ts">Services for Companies
                            and businesses</p>

                    </div>
                </div>



                <div class="col-lg-4 col-md-6 select-option" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="800">
                    <div class="service-8-boxarea text-center margin-b30">
                        <div class="service-8-icons ts">
                            <img src="{{ asset("assets/images/icons/tax-consulting4.png")}}" alt="" class="ts">
                        </div>
                        <a href="#contact"
                            class="font-lora font-24 lineh-24 weight-600 color39 d-inline-block margin-b ts"
                            data-custom-value="Company Registration">Liaison
                            office, branch registration and setup
                        </a>
                        <p class="font-ks font-16 weight-500 colorhp1 lineh-26 margin-b24 ts">To Assist international
                            clients and investors to expand their operations into Pakistan seamlessly</p>

                    </div>
                </div>



                <div class="col-lg-4 col-md-6 select-option" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="800">
                    <div class="service-8-boxarea text-center margin-b30">
                        <div class="service-8-icons ts">
                            <img src="{{ asset("assets/images/icons/tax-consulting5.png")}}" alt="" class="ts">
                        </div>
                        <a href="#contact"
                            class="font-lora font-24 lineh-24 weight-600 color39 d-inline-block margin-b ts"
                            data-custom-value="NPO Registration">NPO
                            (Non-Profit Organization)</a>
                        <p class="font-ks font-16 weight-500 colorhp1 lineh-26 margin-b24 ts">Registrations for NPOs
                            under Section 42 trusts</p>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6 select-option" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="800">
                    <div class="service-8-boxarea text-center margin-b30">
                        <div class="service-8-icons ts">
                            <img src="assets/images/icons/tax-consulting6.png" alt="" class="ts">
                        </div>
                        <a href="#contact"
                            class="font-lora font-24 lineh-24 weight-600 color39 d-inline-block margin-b ts"
                            data-custom-value="NBFC Registration">Registrations
                            for NBFCs </a>
                        <p class="font-ks font-16 weight-500 colorhp1 lineh-26 margin-b24 ts">Registration for
                            Non-Banking Financial Companies, including those providing small loans</p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 select-option" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="800">
                    <div class="service-8-boxarea text-center margin-b30">
                        <div class="service-8-icons ts">
                            <img src="{{ asset("assets/images/icons/tax-consulting6.png") }}" alt="" class="ts">
                        </div>
                        <a href="#contact"
                            class="font-lora font-24 lineh-24 weight-600 color39 d-inline-block margin-b ts"
                            data-custom-value="SECP Compliance">Form A and
                            Form 29 </a>
                        <p class="font-ks font-16 weight-500 colorhp1 lineh-26 margin-b24 ts">Fulfilling requirements
                            with SECP (Securities and Exchange Commission of Pakistan) for LTD and Pvt Ltd companies,
                            and annual income tax return filing</p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="800">
                    <div class="service-8-boxarea text-center margin-b30">
                        <div class="service-8-icons ts">
                            <img src="{{ asset("assets/images/icons/tax-consulting6.png") }}" alt="" class="ts">
                        </div>
                        <a href="#contact"
                            class="font-lora font-24 lineh-24 weight-600 color39 d-inline-block margin-b ts"
                            data-custom-value="Income Tax Services">Income tax
                            return</a>
                        <p class="font-ks font-16 weight-500 colorhp1 lineh-26 margin-b24 ts">Services for individuals,
                            AOPs (Association of Persons), limited companies, Pvt Limited companies, NGOs, NPOs, and
                            NBFCs.</p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 select-option" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="800">
                    <div class="service-8-boxarea text-center margin-b30">
                        <div class="service-8-icons ts">
                            <img src="{{ asset("assets/images/icons/taxconsulting1.png") }}" alt="" class="ts">
                        </div>
                        <a id="companyregistration" href="#contact"
                            class="font-lora font-24 lineh-24 weight-600 color39 d-inline-block margin-b ts"
                            data-custom-value="Withholding Tax Guidance">
                            Withholding tax guidance
                        </a>
                        <p class="font-ks font-16 weight-500 colorhp1 lineh-26 margin-b24 ts"> Including percentage
                            calculations, submission timelines, and quarterly and semi-annual requirements
                        </p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 select-option" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="800">
                    <div class="service-8-boxarea text-center margin-b30">
                        <div class="service-8-icons ts">
                            <img src="{{ asset("assets/images/icons/taxconsulting1.png") }}" alt="" class="ts">
                        </div>
                        <a id="companyregistration" href="#contact"
                            class="font-lora font-24 lineh-24 weight-600 color39 d-inline-block margin-b ts"
                            data-custom-value="Bookkeeping Services">
                            Bookkeeping Services  
                        </a>
                        <p class="font-ks font-16 weight-500 colorhp1 lineh-26 margin-b24 ts">
                            Services for companies and individuals achieve financial organisation and make tax compliance seamlessly easy
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== SERVICE END=======-->

    <!--===== COUNTER STARTS=======-->
    <div class="counter8-section-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">


                    <div class="counter8-box-area text-center" data-aos="zoom-in" data-aos-duration="800">
                        <h1 class="font-lora font-44 lineh-52 weight-600 color39 margin-b20 ts"><span
                                class="counter ts">400</span>+</h1>
                        <p class="font-16 font-ks weight-500 colorhp1 lineh-16 ts">Active clients</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="counter8-box-area text-center" data-aos="zoom-in" data-aos-duration="1000">
                        <h1 class="font-lora font-44 lineh-52 weight-600 color39 margin-b20 ts"><span
                                class="counter ts">3000</span>+</h1>
                        <p class="font-16 font-ks weight-500 colorhp1 lineh-16 ts">Complete Cases</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="counter8-box-area text-center" data-aos="zoom-in" data-aos-duration="1200">
                        <h1 class="font-lora font-44 lineh-52 weight-600 color39 margin-b20 ts"><span
                                class="counter ts">1000</span>+</h1>
                        <p class="font-16 font-ks weight-500 colorhp1 lineh-16 ts">Satisfied Customers</p>
                    </div>
                </div>


                <div class="col-lg-3">
                    <div class="counter8-box-area text-center" data-aos="zoom-in" data-aos-duration="1400">
                        <h1 class="font-lora font-44 lineh-52 weight-600 color39 margin-b20 ts"><span
                                class="counter ts">30</span>+</h1>
                        <p class="font-16 font-ks weight-500 colorhp1 lineh-16 ts">Years Experience </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== COUNTER END=======-->

    <!--===== CONTACT STARTS=======-->

    <form action="{{ route("storeContactDetails") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="welcome-eightsection-area" id="contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="welcome8-header" data-aos="fade-left" data-aos-duration="1000">
                            <span
                                class="font-ks font-16 weight-600 lineh-26 services8 colorspan margin-b20 d-inline-block">Premier
                                Tax Consulting Services
                            </span>
                            <h1 class="font-lora font-56 lineh-64 weight-600 color margin-b" data-aos="fade-left"
                                data-aos-duration="1200">Contact Us </h1>
                            <p class="font-16 font-ks weight-500 color-21 lineh-26">Reach out to our expert and
                                knowledgeable team of Chartered Accountants and Tax Experts for guidance on any matter,
                                whether its financial clarity, strategic business assistance, or tax optimization.
                                Contact us today to ascend to greater tier of financial success.
                            <div class="contact-info">
                                <label>Phone:</label>
                                <a href="tel:+92514348093"><span style="color: white;">(051) 4348093</span></a>
                                <a href="tel:+92512348094"><span style="color: white;">(051) 2348094</span></a>
                                <label>Mobile:</label>
                                <a href="https://api.whatsapp.com/send?phone=923335124166"><span
                                        style="color: white;">03335124166</span></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="welcomecontact-header" data-aos="zoom-out" data-aos-duration="1200">
                            <img src="{{asset("assets/images/elementor/elementor50.png") }}" alt=""
                                class="elemenors8 keyframe3">
                            <div class="row">
                                <div class="col-lg-6 margin-b ">
                                    <div class="contactinput8 margin-t32">
                                        <input type="text" name="firstName" id="firstName" required
                                            placeholder="First Name*">
                                    </div>
                                </div>

                                <div class="col-lg-6 margin-b">
                                    <div class="contactinput8 margin-t32">
                                        <input type="text" name="lastName" id="lastName" required
                                            placeholder="Last Name*">
                                    </div>
                                </div>


                                <div class="col-lg-6 margin-b">
                                    <div class="contactinput8">
                                        <input type="email" name="email" id="email" required
                                            placeholder="Email Address*">
                                    </div>
                                </div>

                                <div class="col-lg-6 margin-b">
                                    <div class="contactinput8">
                                        <input type="text" name="phone" required placeholder="Phone Number*">
                                    </div>
                                </div>

                                <div class="col-lg-12 margin-b">
                                    <div class="first-name-input1">
                                        <select name="newClient" id="newClient" class="country-area2">
                                            <option value="1" data-display="Are you a new client?*"
                                                class="font-outfit font-16 lineh-16 color-ni weight-500 input3">Are you
                                                a
                                                new client ?</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 margin-b">
                                    <div class="first-name-input1">
                                        <select name="country" id="country" class="country-area2">
                                            <option value="1" data-display="Where is your Bussiness Located ?*"
                                                class="font-outfit font-16 lineh-16 color-ni weight-500 input3">Where
                                                is your Bussiness Located ? </option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Brezil">Brezil</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Germany">Germany</option>

                                        </select>
                                    </div>
                                </div>


                                <h1 class="font-lora font-24 lineh-24 weight-600 color39 margin-b20">Request a free
                                    consult
                                    now!</h1>
                                <p>What services can we help you with?</p>
                                <style>
                                    /* CSS to set a smaller width for the Select2 container */
                                    .select2-container--default {
                                        width: 500px !important;
                                        /* Adjust this width as needed */
                                    }

                                    @media (max-width: 767px) {
                                        .select2-container--default {
                                            width: 100% !important;
                                        }
                                    }
                                </style>

                                <!-- Your HTML code with the select box -->
                                <div class="col-lg-12 margin-b">
                                    <div class="first-input">
                                        <div class="first-name-input" aria-labelledby="dropdownMenuButton">
                                            <!-- Your existing select box code -->
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 margin-b">
                                    <div class="first-input ">
                                        <div class="first-name-input" aria-labelledby="dropdownMenuButton">
                                            <select name="services" id="services" data-display="Select Service*"
                                                class="country-area nice-select margin-b30 js-example-basic-single">
                                                <option value="">Select Service</option>
                                                <option value="Company Registration">Company Registration</option>
                                                <option value="Tax Consultancy">Tax Consultancy</option>
                                                <option value="NPO Registration">NPO Registration</option>
                                                <option value="NBFC Registration">NBFC Registration</option>
                                                <option value="SECP Compliance">SECP Compliance</option>
                                                <option value="Income Tax Services">Income Tax Services</option>
                                                <option value="Sales Tax Services">Sales Tax Services</option>
                                                <option value="Handling FBR Notices">Handling FBR Notices</option>
                                                <option value="Withholding Tax Guidance">Withholding Tax Guidance
                                                </option>
                                                <option value="Import Export">Import Export</option>
                                                <option value="Bookkeeping Services">Bookkeeping Services</option>
                                                <option value="Corporate Advisory">Corporate Advisory</option>
                                                <option value="General Queries">General Queries</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact8 margin-t32">
                                        <h1 class="font-lora font-16 lineh-16 weight-500 color39 margin-b20">Tell us
                                            about your business</h1>
                                        <textarea cols="30" rows="10" name="message" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-lg-12" data-aos="fade-left" data-aos-duration="1400">
                                        <button type="submit" style="background-color: #0090cb"
                                            class="font-ks font-16 weight-700 lineh-16 color consulitingbt7 text-right">Submit
                                            Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
                                    </div>
    </form>
    </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    <img src="{{ asset("assets/images/elementor/elementor49.png") }}" alt="" class="elementors7 aniamtion-key-1">
    </div>

    <!--===== FOOTER STARTS=======-->
    <div class="footer4-section-area8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contcat5-section5-area section-padding15">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="contact5-logo5-text1">
                                    <img src="{{ asset("assets/images/logo/logo0.webp")}}" style = "width:100px ; height:50px"
                                        alt="">
                                    <p class="font-ks font-16 weight-500 lineh-26 colorhp1 margin-t margin-b24">Your
                                        premier choice for professional tax consultancy services. Connect with us!
                                    </p>
                                    <div class="icon-social-links list8">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="ml1"><i
                                                        class="fa-brands fa-google-plus-g"></i></a></li>
                                            <li><a href="https://www.linkedin.com/company/muhammad-hussain-co
                                              "
                                                    class="ml1"><i class="fa-brands fa-linkedin-in"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="about-5-links footer8links">
                                    <h1 class="font-20 font-lora weight-600 lineh-20 color39">About Link</h1>
                                    <ul>
                                        <li><a href="{{ route("aboutUs") }}"
                                                class="font-ks font-16 lineh-16 weight-500 colorhp1 d-inline-block margin-t32">About
                                                Us</a></li>
                                        <li><a href="#service"
                                                class="font-ks font-16 lineh-16 weight-500 colorhp1 margin-t d-inline-block">
                                                Services</a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=923335124166"
                                                class="font-ks font-16 lineh-16 weight-500 colorhp1 margin-t d-inline-block">
                                                Contact Us</a></li>


                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                                <div class="contact-footer contactfooter8">
                                    <h1 class="font-20 color39 lineh-20 font-ks margin-b24 weight-600">Contact Us</h1>
                                    <div class="email4">
                                        <img src="{{ asset("assets/images/icons/email5.png")}}" alt="">
                                        <a href="mailto:info@taxvice.com"
                                            class="font-16 lineh-24 colorhp1 weight-500 font-ks">info@mhco.pk</a>
                                    </div>
                                    <span class="location-fooetr ">
                                        <img src="{{ asset("assets/images/icons/location4.svg") }}" alt=""
                                            class="heightwidth">
                                        <a href="http://maps.google.com/?q=1200 "
                                            class="font-16 font-ks lineh-26 weight-500 colorhp1 margin-t">Office # 4,
                                            3rd Floor, Masco Plaza, Blue area, Islamabad, 44000</a>
                                    </span>
                                    <div class="email4 margin-t">
                                        <img src="{{ asset("assets/images/icons/phone7.svg") }}" alt="">
                                        <a href="https://api.whatsapp.com/send?phone=923335124166"
                                            class="font-16 lineh-24 colorhp1 weight-500 font-ks">Mobile:03335124166</a>
                                    </div>
                                    <div class="email4 margin-t">
                                        <img src="{{asset("assets/images/icons/phone7.svg")}}" alt="">
                                        <a href="tel:+92514348093"
                                            class="font-ks font-11 lineh-16 weight-500 colorhp1 margin-t d-inline-block">
                                            Phone:<br>0514348093

                                        </a>
                                        <a href="tel:+92512348094"
                                            class="font-ks font-11 lineh-16 weight-500 colorhp1 margin-t d-inline-block">
                                            Phone:<br>0512348094

                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 margin-b">
                                <div style="width: 100%">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.895544537894!2d73.0606023!3d33.7116517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbf3fa3e35b8b%3A0x8c2250b619fc5eae!2sMuhammad%20Hussain%20%26%20Co!5e0!3m2!1sen!2s!4v1700638236377!5m2!1sen!2s"
                                        width="450" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                            </div>
                        </div>
                        <style>
                            /* CSS to hide the image on mobile devices */
                            @media (max-width: 767px) {
                                .elementors18 {
                                    display: none;
                                }
                            }
                            </style>
                        <img src="{{ asset("assets/images/elementor/elementor54.png")}}" alt="" class="elementors18">
                        <img src="{{ asset("assets/images/elementor/elementor55.png")}}" alt="" class="elementor19">
                    </div>

                </div>
            </div>

        </div>
        <!--===== FOOTER END=======-->

        <a href="https://api.whatsapp.com/send?phone=923335124166" class="float">
            <i class="fab fa-whatsapp my-float"></i>

        </a>
        <!--=====JS=======-->
        <script src="{{asset("assets/js/plugins/bootstrap.min.js")}}"></script>
        <script src="{{asset("assets/js/plugins/swiper.bundle.js")}}"></script>
        <script src="{{asset("assets/js/plugins/owl.carousel.min.js")}}"></script>
        <script src="{{asset("assets/js/plugins/jquery-modal-video.min.js")}}"></script>
        <script src="{{asset("assets/js/plugins/fontawesome.js")}}"></script>
        <script src="{{asset("assets/js/plugins/counter.js")}}"></script>
        <script src="{{asset("/unpkg.com/aos%402.3.1/dist/aos.js")}}"></script>
        <script src="{{asset("assets/js/plugins/jquery.nice-select.js")}}"></script>
        <script src="{{asset("/cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js")}}"></script>
        <script src="{{asset("assets/js/plugins/jquery.lineProgressbar.js")}}"></script>
        <script src="{{asset("assets/js/plugins/isotope.pkgd.min.js")}}"></script>
        <script src="{{asset("assets/js/plugins/propper.min.js")}}"></script>
        <script src="{{asset("/unpkg.com/imagesloaded%405.0.0/imagesloaded.pkgd.min.js")}}"></script>
        <script src="{{asset("/cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js")}}"></script>
        <script src="{{asset("assets/js/plugins/tippy.js")}}"></script>
        <script src="{{asset("assets/js/plugins/jquery.nice-select.js")}}"></script>


        <script src="{{asset("/cdn.jsdelivr.net/npm/%40popperjs/core%402.11.6/dist/umd/popper.min.js")}}"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="{{asset("assets/js/plugins/mobilemenu.js")}}"></script>
        <script src="{{asset("assets/js/main.js")}}"></script>

        <script>
            $('.js-example-basic-single').select2();
        </script>
        <script>
            $(document).ready(function() {
                $('#services').select2();
                $('.col-lg-4').click(function() {
                    var value = $(this).find('.font-lora').data('custom-value');

                    $('#services').val(value).trigger('change');
                    $('#services').change(function() {

                        var selectedText = $('#services option:selected').text();

                        $('#services').siblings('.select2-container').find(
                            '.select2-selection__placeholder').text(selectedText);
                    });
                    $('#services').change();
                });
            });
        </script>

</body>


</html>
