<header class="header about-bg d-none d-lg-block" style="background-color: #0B111F; height:96px">
    <div class="header-area header header-sticky" id="header">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="{{ route("home") }}"><img src="{{asset("assets/images/logo/logo0.webp")}}"
                                    style = "width:100px ; height:50px" alt=""></a>
                        </div>
                        <div class="main-menu-ex  homepage8 homepage7 ">
                            <ul>
                                <li class="mega-dropdawn"><a href="#">Home </a>

                                </li>
                                <li><a href="{{ route("aboutUs") }}" class="font-ks font-16 weight-500 color">About
                                        Us</a></li>
                                <li><a href="#service" class="font-ks font-16 weight-500 color">Our Services</a></li>

                            </ul>
                        </div>

                        <div class="contact-3 d-lg-block d-none">
                            <div class="shecdule-btn1">
                                <a href="https://api.whatsapp.com/send?phone=923335124166"
                                    class="font-ks font-16 lineh-16 color weight-700 solutions1"
                                    style="background-color: #0090cb">Contact Us <span><span><i
                                                class="fa-solid fa-arrow-right"></i></span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--===== HEADER END=======-->

<!--=====Mobile header start=======-->
<div class="mobile-header mobile-header-4 d-block d-lg-none homepagesmall" style="background-color: #0B111F;">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="{{ route("home") }}"><img src="{{asset("assets/images/logo/logo0.webp")}}"
                            style = "width:100px ; height:50px" alt=""></a>
                </div>
                <div class="mobile-nav-icon dots-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar"  style="background-color: #0B111F;">
    <div class="logoicons-area">
        <div class="logos">
            <img src="{{asset("assets/images/logo/logo0.webp")}}" style = "width:100px; height:50px " alt="">
        </div>
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="mobile-nav">

        <ul class="mobile-nav-list">
            <li><a href="#home" class="font-ks font-16 weight-500 color">Home </a>

            </li>

            <li><a href="{{ route("aboutUs") }}" class="font-ks font-18 weight-600 color">About Us </a></li>

            <li><a href="#service" class="font-ks font-16 weight-500 color">Our Services</a>

            </li>




        </ul>
        <div class="allmobilesection">
            {{-- <a href="#" class="font-ks font-18 lineh-18 weight-700 color mobilemenubtn">Get Started</a> --}}
            <div class="single-footer single-footer-menu single-footer4">
                <h3 class="font-ks font-24 lineh-24 weight-600 color margin-b margin-t24">Contact Info</h3>
                <div class="footer4-contact-info">
                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <img src="{{ asset("assets/images/icons/phone5.svg") }}" alt="">
                        </div>
                        <div class="contact-info-text">
                            <a href="https://api.whatsapp.com/send?phone=923335124166"
                                class="font-ks font-16 lineh-26 weight-500 color-21">03335124166</a>
                        </div>
                    </div>

                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <img src="{{ asset("assets/images/icons/email4.svg") }}" alt="">
                        </div>
                        <div class="contact-info-text">
                            <a href="mailto:info@example.com"
                                class="font-ks font-16 lineh-26 weight-500 color-21">info@mhco.pk</a>
                        </div>
                    </div>

                    <div class="single-footer single-footer-menu single-footer4">
                        <h3 class="font-ks font-24 lineh-24 weight-600 color margin-b margin-t24">Our Location</h3>

                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <img src="{{ asset("assets/images/icons/location2.png") }}" alt="">
                            </div>
                            <div class="contact-info-text">
                                <a href="mailto:info@example.com"
                                    class="font-ks font-16 lineh-26 weight-500 color-21">Office # 4, 3rd Floor, Masco
                                    Plaza, Blue area, Islamabad, 44000</a>
                            </div>
                        </div>

                    </div>
                    <div class="single-footer single-footer-menu single-footer4">
                        <h3 class="font-ks font-24 lineh-24 weight-600 color margin-b margin-t24">Social Links</h3>

                        <div class="social social4-menu social4">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" title="Linked in"
                                        href="https://www.linkedin.com/company/muhammad-hussain-co"><svg
                                            class="svg-inline--fa fa-facebook" aria-hidden="true" focusable="false"
                                            data-prefix="fab" data-icon="facebook" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.8 90.69 226.4 209.3 245V327.7h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.3 482.4 504 379.8 504 256z">
                                            </path>
                                        </svg><!-- <i class="fa-brands fa-facebook"></i> Font Awesome fontawesome.com --></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" title="Facebook" href="#"><svg
                                            class="svg-inline--fa fa-linkedin-in" aria-hidden="true"
                                            focusable="false" data-prefix="fab" data-icon="linkedin-in"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                            data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M100.3 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.6 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.3 61.9 111.3 142.3V448z">
                                            </path>
                                        </svg><!-- <i class="fa-brands fa-linkedin-in"></i> Font Awesome fontawesome.com --></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" title="Instagram" href="#"><svg
                                            class="svg-inline--fa fa-youtube" aria-hidden="true" focusable="false"
                                            data-prefix="fab" data-icon="youtube" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M549.7 124.1c-6.281-23.65-24.79-42.28-48.28-48.6C458.8 64 288 64 288 64S117.2 64 74.63 75.49c-23.5 6.322-42 24.95-48.28 48.6-11.41 42.87-11.41 132.3-11.41 132.3s0 89.44 11.41 132.3c6.281 23.65 24.79 41.5 48.28 47.82C117.2 448 288 448 288 448s170.8 0 213.4-11.49c23.5-6.321 42-24.17 48.28-47.82 11.41-42.87 11.41-132.3 11.41-132.3s0-89.44-11.41-132.3zm-317.5 213.5V175.2l142.7 81.21-142.7 81.2z">
                                            </path>
                                        </svg><!-- <i class="fa-brands fa-youtube"></i> Font Awesome fontawesome.com --></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" title="TikTok" href="#"><svg
                                            class="svg-inline--fa fa-twitter" aria-hidden="true" focusable="false"
                                            data-prefix="fab" data-icon="twitter" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M459.4 151.7c.325 4.548 .325 9.097 .325 13.65 0 138.7-105.6 298.6-298.6 298.6-59.45 0-114.7-17.22-161.1-47.11 8.447 .974 16.57 1.299 25.34 1.299 49.06 0 94.21-16.57 130.3-44.83-46.13-.975-84.79-31.19-98.11-72.77 6.498 .974 12.99 1.624 19.82 1.624 9.421 0 18.84-1.3 27.61-3.573-48.08-9.747-84.14-51.98-84.14-102.1v-1.299c13.97 7.797 30.21 12.67 47.43 13.32-28.26-18.84-46.78-51.01-46.78-87.39 0-19.49 5.197-37.36 14.29-52.95 51.65 63.67 129.3 105.3 216.4 109.8-1.624-7.797-2.599-15.92-2.599-24.04 0-57.83 46.78-104.9 104.9-104.9 30.21 0 57.5 12.67 76.67 33.14 23.72-4.548 46.46-13.32 66.6-25.34-7.798 24.37-24.37 44.83-46.13 57.83 21.12-2.273 41.58-8.122 60.43-16.24-14.29 20.79-32.16 39.31-52.63 54.25z">
                                            </path>
                                        </svg><!-- <i class="fa-brands fa-x-twitter"></i>
                            Font Awesome fontawesome.com --></a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
