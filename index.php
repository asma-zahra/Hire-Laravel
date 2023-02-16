<?php
    require_once('../lib/helper.php');
    header_seo_part('Hire Laravel Developer'); 
?>

<!-- Font link -->
<!-- Yeseva -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
<!-- Inter -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<!-- Rajdhani -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
<!-- CSS file -->
<link rel="stylesheet" href="scss/style.min.css" />
<!-- Bannner Image preload -->
<link rel="preload" as="image" href="images/banner_bg.png">
<link rel="preload" as="image" href="images/images/banner_slide.png">


</head>

<body>
    <?php header_navs($white=false); ?>

    <!-- Banner Starts -->
    <section class="banner">
        <div class="container">
            <div class="banner-align ">
                <div class="banner_left banner_content">
                    <h1>Over 1.3 Million Web
                        Applications Run On Laravel <span><img src="images\laravel.svg" alt="laravel" width=""
                                height=""></span></h1>
                    <h3>But, We Are Guessing You Already Know Why</h3>
                    <button class="btn-primary smoothscroll" data-target="#form">Hire Laravel Developer</button>
                </div>
                <div class="banner_right" data-img_height="3682" style=""></div>
            </div>
        </div>
    </section>
    <!-- Banner ends -->

    <!-- Services Starts -->
    <section class="services">
        <div class="container">
            <h2 data-aos="fade-up">Not Just Fancy Features</h2>
            <h4 data-aos="fade-up">You Need Solutions</h4>

            <div class="service_slider owl-carousel">
                <div class="item" data-dot="<button>1</button>">
                    <div class="left">
                        <div class="service_tab_content">
                            <h5>25% Faster Development. Fewer Blockers</h5>
                            <p class="ve-dev">1 VE Engineer = Developer + Designer + Tester</p>
                            <p>Get the power of 3 in just 1 VE Laravel Developer. Speed up the application development
                                process
                                and
                                launch your app before your competitors do.</p>

                        </div>
                    </div>
                    <div class="right ">
                        <img src="images/service_five.jpg" alt="services" width="671" height="482">
                    </div>
                </div>

                <div class="item" data-dot="<button>2</button>">
                    <div class="left flex-5">
                        <div class="service_tab_content">
                            <h5>Enterprise-grade Apps. Without the Enterprise Complexity</h5>
                            <p class="ve-dev">Supercharge Your Web Application</p>
                            <p>Building high-performing web applications don't have to be a nightmare. VE’s Remote
                                Laravel Developers can turn it into a breeze.</p>

                        </div>
                    </div>
                    <div class="right flex-7">
                        <img src="images/service_two.jpg" alt="services" width="671" height="482">
                    </div>
                </div>

                <div class="item" data-dot="<button>3</button>">
                    <div class="left flex-5">
                        <div class="service_tab_content">
                            <h5>Frictionless Applications. With Zero Compatibility Issues</h5>
                            <p class="ve-dev">Create Once, Deploy Anywhere</p>
                            <p>Deploy your fully-functional, reliable, and secure websites and applications with zero
                                downtime. Manage your web applications across any platform. Effortlessly.</p>

                        </div>
                    </div>
                    <div class="right flex-7">
                        <img src="images/service_three.jpg" alt="services" width="671" height="482">
                    </div>
                </div>

                <div class="item" data-dot="<button>4</button>">
                    <div class="left flex-5">
                        <div class="service_tab_content">
                            <h5>Sell Smarter. Provide Support Faster.</h5>
                            <p class="ve-dev">On-demand eCommerce Applications</p>
                            <p>Let your eCommerce app stun and delight users because you never get a second chance to
                                make a great first impression.</p>

                        </div>
                    </div>
                    <div class="right flex-7">
                        <img src="images/service_four.jpg" alt="services" width="671" height="482">
                    </div>
                </div>

                <div class="item" data-dot="<button>5</button>">
                    <div class="left flex-5">
                        <div class="service_tab_content">
                            <h5>Close More Deals. Speed Up Growth.</h5>
                            <p class="ve-dev">RESTful API Development. At Its Best.</p>
                            <p>Experience seamless API Integration and communicate with other third parties to reach out
                                to more audiences</p>

                        </div>
                    </div>
                    <div class="right flex-7">
                        <img src="images/service_five.jpg" alt="services" width="671" height="482">
                    </div>
                </div>

                <div class="item" data-dot="<button>6</button>">
                    <div class="left flex-5">
                        <div class="service_tab_content">
                            <h5>Move Fast. With Confidence.</h5>
                            <p class="ve-dev">Laravel 9 Is Out! Let’s Migrate YourData.</p>
                            <p>Experience a seamless migration from other frameworks to Laravel-powered interfaces
                                easily with no data loss.</p>

                        </div>
                    </div>
                    <div class="right flex-7">
                        <img src="images/service_six.jpg" alt="services" width="671" height="482">
                    </div>
                </div>
                <div class="item" data-dot="<button>7</button>">
                    <div class="left flex-5">
                        <div class="service_tab_content">
                            <h5>Increase Functionality. Not Cost.</h5>
                            <p class="ve-dev">Want Your CRM to Perform to Its Full Potential?</p>
                            <p>Leave the challenging task of developing low-cost but high-performing Laravel CRM to our
                                experts.</p>

                        </div>
                    </div>
                    <div class="right flex-7">
                        <img src="images/service_seven.jpg" alt="services" width="671" height="482">
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Services ends -->

    <!-- Resource Starts -->
    <section class="resource">
        <div class="container">
            <h2 data-aos="fade-up" class="text_center">Pull up a Chair and Watch Our Developers</h2>
            <h4 data-aos="fade-up" class="text_center">Building Real-World Laravel Apps</h4>

            <div class="resounce_wrapper">
                <div data-aos="fade-right" class="resource_info">
                    <div class="project">
                        <img src="images/resource_project1.jpg" alt="resource_project" width="330" height="428">
                    </div>
                    <div class="resource-pic">
                        <img src="images/resource1.jpg" alt="resource_pic" width="322" height="428">
                    </div>
                    <div class="content_wrapper">
                        <div class="card active" id="resource-one">
                            <h5>Kirti Deshwal</h5>
                            <h6>Senior Laravel Developer</h6>
                            <p>
                                I write code, develop apps, and teach developers how to mitigate vulnerabilities that
                                are
                                commonly found in Laravel applications. Watch me creating Smartboxx - a device booking
                                web
                                application with all the security features.
                            </p>
                            <button class="btn-primary smoothscroll" data-target="#form">Hire Kriti</button>
                        </div>
                        <div class="card" id="resource-two">
                            <h5>Vivek Kumar</h5>
                            <h6>PHP Laravel Developer</h6>
                            <p>

                                You probably know me as the creator of BleenTravel, a property booking application like
                                Airbnb. When I'm not writing code, you'll find me Pentesting (yes that’s coding too).

                            </p>
                            <button class="btn-primary smoothscroll" data-target="#form">Hire Vivek</button>
                        </div>
                        <div class="card" id="resource-three">
                            <h5>Mohit Singh</h5>
                            <h6> Laravel Developer</h6>
                            <p>

                                I love big numbers. For my last Laravel Web Development project, I created a SaaS
                                application that helped my client gain a huge profit in just 45 days. Right now am
                                creating
                                libraries that make developers easier to write code.
                                es.
                            </p>
                            <button class="btn-primary smoothscroll" data-target="#form">Hire Mohit</button>
                        </div>
                    </div>
                </div>
                <ul data-aos="fade-left" class="Image_list">
                    <li class="list" onclick="ResourceEventListner(this,'one')" data-src="images/resource1.jpg"
                        data-project="images/resource_project1.jpg">
                        <img src="images\res1.png" alt="pic1" width="320" height="436">
                    </li>
                    <li class="list active" onclick="ResourceEventListner(this,'two')" data-src="images/resource2.jpg"
                        data-project="images/project2.png">
                        <img src="images/res2.png" alt="pic2" width="320" height="436">
                    </li>
                    <li class="list active" onclick="ResourceEventListner(this,'three')" data-src="images/resource3.jpg"
                        data-project="images/project3.png">
                        <img src="images/res3.png" alt="pic3" width="320" height="436">
                    </li>
                </ul>
            </div>
        </div>

    </section>

    <!-- Resource ends -->

    <!-- form Starts -->
    <section class="get_trail_section">
        <div class="container get_trail_section_wrapper flexbox ">
            <div class="flex-6 get_started_left">
                <h2 data-aos="fade-up">
                    Avoid Mis-hires.
                    Work Only with Top Laravel Developers
                </h2>
                <h4 data-aos="fade-up">
                    In 4 Easy Steps
                </h4>
                <div class="form-points">
                    <ul>
                        <li>
                            <span>
                                Share your requirements.
                            </span>
                        </li>
                        <li>
                            <span>
                                Get instant access to top talent
                            </span>
                        </li>
                        <li>
                            <span>Handpick your triple-vetted Laravel
                                PHP Programmer.</span>
                        </li>
                        <li>
                            <span>Start building with a no-obligation,<br>
                                no-payment 1-week Free Trial.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex-6 get_started_right" id="form">
                <div class="get_started_form ">
                    <div class="lg-border">
                        <?php get_cform($thankyou = 'it-service-thank-you', $cta = 'Hire Laravel Developer'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- form ends -->

    <!-- lifecycle slider Starts -->
    <section class="lifecycle">
        <div class="container">
            <h2 data-aos="fade-up" class="text_center">Your Laravel Project Lifecycle Looks </h2>
            <h4 data-aos="fade-up" class="text_center">Somewhat Like This</h4>

            <div class="lifeCycle_slider owl-carousel">

                <div class="item">
                    <h5>1</h5>
                    <div class="content">
                        <h4>
                            Kick-off
                        </h4>
                        <ul>
                            <li>· Define project scope</li>
                            <li>· Estimate needed resources</li>

                        </ul>
                    </div>
                </div>
                <div class="item">
                    <h5>2</h5>
                    <div class="content">
                        <h4>
                            Ideation
                        </h4>
                        <ul>
                            <li>· Brainstorm ideas</li>
                            <li>· Remove guesswork</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <h5>3</h5>
                    <div class="content">
                        <h4>
                            Design
                        </h4>
                        <ul>
                            <li>· Build wireframes</li>
                            <li>· Deliver final designs for approval</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <h5>4</h5>
                    <div class="content">
                        <h4>
                            Ideation
                        </h4>
                        <ul>
                            <li>· Start building product</li>
                            <li>· Test features and iterate on test results</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <h5>5</h5>
                    <div class="content">
                        <h4>
                            Design
                        </h4>
                        <ul>
                            <li>· Fix bugs</li>
                            <li>· Ensure security, performance, and usability</li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <h5>6</h5>
                    <div class="content">
                        <h4>
                            Design
                        </h4>
                        <ul>
                            <li>· Handle incidents</li>
                            <li>· Provide updates</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- lifecycle slider ends -->

    <!-- client slider Starts -->
    <section class="client_section ">
        <div class="container">
            <h2 data-aos="fade-up" class="text_center">VE Has a Reputation for Making an Impact</h2>
            <h4 data-aos="fade-up" class="text_center">Straight from Our Clients</h4>

            <div class="client_slider owl-carousel">
                <div class="item">
                    <div class="wrap">
                        <div class="client_pic">
                            <img src="images/Brian.png" alt="" width="330" height="310">
                        </div>
                        <div class="clinet_info">
                            <span><img src="images/quote.png" alt="quote" width="445" height="36"></span>
                            <p>He incorporates my crazy ideas into software and create beautiful solutions</p>
                            <p class="client_name">Brian Taylor</p>
                            <p class="client_address">SPM. SupplyCore, USA</p>
                        </div>
                        <div class="feedback">
                            <p>
                                On how he found the most trusted Laravel Application Development Company and got the
                                right resources, at the right time, with the right engagement model</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="wrap">
                        <div class="client_pic">
                            <img src="images/Thomas.png" alt="" width="330" height="310">
                        </div>
                        <div class="clinet_info">
                            <span><img src="images/quote.png" alt="quote" width="445" height="36"></span>
                            <p>VE has been a reliable resource for 6 years.</p>
                            <p class="client_name">Thomas Zizzo</p>
                            <p class="client_address">Sales Jet.com, USA</p>
                        </div>
                        <div class="feedback">
                            <p>
                                On how he found the most trusted Laravel Application Development Company and got the
                                right resources, at the right time, with the right engagement model</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="wrap">
                        <div class="client_pic">
                            <img src="images/Andy_Mills.png" alt="" width="330" height="310">
                        </div>
                        <div class="clinet_info">
                            <span><img src="images/quote.png" alt="quote" width="445" height="36"></span>
                            <p>What would have taken six months for us to develop he manages it in six weeks.</p>
                            <p class="client_name">Andy Miles</p>
                            <p class="client_address">CTO, Common Sense Monitoring Solution, UK</p>
                        </div>
                        <div class="feedback">
                            <p>
                                Yes, we were that fast. Andy loved what we did - all the more reason to partner with a
                                leading Laravel Website Development Company.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="wrap">
                        <div class="client_pic">
                            <img src="images/Pete_Paragon.png" alt="" width="330" height="310">
                        </div>
                        <div class="clinet_info">
                            <span><img src="images/quote.png" alt="quote" width="445" height="36"></span>
                            <p>He has a very good technical knowledge, communication skills plus patience and
                                understanding.</p>
                            <p class="client_name">Pete Geanous</p>
                            <p class="client_address">SP. Paragon Print Systems. USA</p>
                        </div>
                        <div class="feedback">
                            <p>

                                We were curious to know what drove Thomas to stay with us and Outsource Laravel
                                Development projects for all these years.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- client slider ends -->

    <!-- footer Starts -->
    <div class="footer_section">
        <div class="container">
            <div class="footer_wrapper ">
                <h2 data-aos="fade-up" class="text_center">We Love Focusing on User Outcomes<br />
                    Not Just Code</h2>
                <button class="btn-primary smoothscroll" data-target="#form">Hire Laravel Developer</button>
            </div>

        </div>
    </div>
    <!-- footer ends -->

    <?php footer_seo_part(); ?>

    <script src="js/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script>
    // Header fixed on scroll start 
    window.onscroll = function() {
        myFunction()
    };
    var header = document.getElementById("mainheader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("fixed-top-menu");

        } else {
            header.classList.remove("fixed-top-menu");
        }
    }

    function toggleDropdown() {
        $("#dropdown").toggle();
        $('.dropdownoverlay').addClass('active');
    }


    // resource Tabs
    function ResourceEventListner(e, id) {
        $(e).removeClass('active');
        // change content
        $('.card').css({
            display: 'none'
        });
        $('.Image_list li').addClass('active');
        $('#resource-' + id).css({
            "display": 'block'
        });
        // change image
        $('.resource-pic img').attr('src', $(e).attr('data-src'));
        // change project
        $('.project img').attr('src', $(e).attr('data-project'));

        $(e).removeClass('active');


    }


    // smoothscroll
    $(document).ready(function() {
        $('.smoothscroll').click(function() {
            var to = $(this).attr('data-target');
            $('html,body').animate({
                    scrollTop: $(to).offset().top - 20
                },
                'slow');
            return false;
        });

        $('.dropdownoverlay').click(function() {
            $(this).removeClass('active');
            $(".dropdown-menu").toggle();
        });
    });

    // service_slider

    $(".service_slider").owlCarousel({
        loop: true,
        items: 1,
        margin: 0,
        nav: false,
        dots: true,
        lazyLoad: true,
        dotsData: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },

            1000: {
                items: 1,
            },
        },
    });

    $(".service_slider").on('mousewheel', '.owl-stage', function(e) {
        if (e.deltaY > 0) {
            console.log(e.deltaY);

            $(".service_slider").trigger('next.owl');
        } else {
            $(".service_slider").trigger('prev.owl');
        }
        e.preventDefault();
    });

    // lifeCycle_slider

    $(".lifeCycle_slider").owlCarousel({
        items: 3,
        dots: false,
        nav: false,
        loop: true,
        autoplay: true,
        slideTransition: 'linear',
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },

            1000: {
                items: 3,
            },
        },
    });

    $(".lifeCycle_slider").on('mousewheel', '.owl-stage', function(e) {

        if (e.deltaY > 0) {
            console.log(e.deltaY);

            $(".lifeCycle_slider").trigger('next.owl');

        } else {
            $(".lifeCycle_slider").trigger('prev.owl');
        }
        e.preventDefault();
    });

    // client_slider
    $(".client_slider").owlCarousel({
        loop: true,
        items: 1,
        margin: 0,
        nav: true,
        dots: true,
        lazyLoad: true,
        autoplay: true,
        navText: ["<i class='icons right-arrow-icon'></i>",
            "<i class='icons left-arrow-icon'></i>"
        ],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },

            1000: {
                items: 1,
            },
        },
    });
    </script>
</body>

</html>