<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    {{-- =============== Logo =========================== --}}
    <link rel="shortcut icon" href="{{asset('images/logo.svg')}}" type="image/x-icon">

    <!--================ Swiper CSS ===================== -->
    <link rel="stylesheet" href="{{asset('swiper/swiper-bundle.min.css')}}">

    <!--=================== CSS ==========================-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!--================= UNICONS ======================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Portfolio Website</title>
</head>

<body>

    <!--=========================== Header ======================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#">
                <img src="{{asset('images/logo.svg')}}" alt="Noitusan" class="nav_logo">
            </a>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list grid">
                    <li class="nav_item">
                        <a href="#home" class="nav_link active-link">
                            <i class="uil uil-estate nav_icon"></i> Home
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#about" class="nav_link">
                            <i class="uil uil-user nav_icon"></i> About
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#skills" class="nav_link">
                            <i class="uil uil-file-bookmark-alt nav_icon"></i> Skills
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#services" class="nav_link">
                            <i class="uil uil-briefcase-alt nav_icon"></i> Services
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#portfolio" class="nav_link">
                            <i class="uil uil-scenery nav_icon"></i> Portfolio
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#contact" class="nav_link">
                            <i class="uil uil-message nav_icon"></i> Contact Me
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav_close" id="nav-close"></i>
            </div>
            <div class="nav_btns">
                <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav_toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--================ Main =====================-->
    <main class="main">
        <!--================ Home =======================-->
        <section class="home section" id="home">
            <div class="home_container container">
                <div class="home_content">
                    <div class="home_data home_profile">
                        <h1 class="home_title home_name_one">Habil</h1>
                        <h2 class="home_subtitle">Fullstack Developer</h2>
                        <a href="#contact" class="button botton-flex"> Contact Me
                            <i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
                    <div class="home_image">
                        <img src="{{asset('images/arch_humans.png')}}" alt="Human" class="home_img">
                    </div>
                    <div class="home_data home_about">
                        <h1 class="home_title home_name_two">Nasution</h1>
                        <p class="home_description">I am a student of USK university. I am someone who is dedicated to creating attractive websites and mobile applications that can help market your products.</p>
                        <a href="#about" class="button botton-flex"> About Me
                            <i class="uil uil-user button_icon"></i>
                        </a>
                    </div>
                </div>

                <!-- Tulisan scroll down -->
                <div class="home_scroll">
                    <a href="#about" class="home_scroll-button button-flex">
                        <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                        <span class="home_scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home_scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--=================== About ====================-->
        <section class="about section" id="about">
            <h2 class="section_title">About Me</h2>
            <span class="section_subtitle">My Introduction</span>
            <div class="about_container container grid">
                <img src="{{asset('images/human.png')}}" alt="Human" class="about_img">
                <div class="about_data">
                    <p class="about_description">I am a fullstack developer with experience working on various projects such as websites and mobile applications. I have experience in using HTML, CSS, Javascript, Tailwind, React JS and programming languages such as Java, C and Python.</p>
                    <div class="about_info">
                        <div>
                            <span class="about_info-title">02+</span>
                            <span class="about_info-name">Year <br> experience</span>
                        </div>
                        <div>
                            <span class="about_info-title">04+</span>
                            <span class="about_info-name">Completed <br> project</span>
                        </div>
                    </div>
                    <div class="about_buttons">
                        <a download="" href="{{asset('cv/CV.pdf')}}" class="button button-flex">
                            Download CV <i class="uil uil-download-alt button_icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--===================== Skills ====================-->
        <section class="skills section" id="skills">
            <h2 class="section_title">Skills</h2>
            <span class="section_subtitle">My technical level</span>

            <div class="skills_container container grid">
                <!-- ============= Skills 1 =========== -->
                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <i class="uil uil-brackets-curly skills_icon"></i>
                        <div>
                            <h1 class="skills_title">Frontend Developer</h1>
                            <span class="skills_subtitle">More than 2 years</span>
                        </div>
                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>

                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">HTML</h3>
                                <span class="skills_subtitle">More than 2 years</span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">CSS</h3>
                                <span class="skills_subtitle">More than 2 years</span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">JavaScript</h3>
                                <span class="skills_subtitle">More than 2 years</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============= Skills 2 =========== -->
                <div class="skills_content skills_close">
                    <div class="skills_header">
                        <i class="uil uil-server-network-alt skills_icon"></i>
                        <div>
                            <h1 class="skills_title">Backend Developer</h1>
                            <span class="skills_subtitle">More than 1 year</span>
                        </div>
                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>

                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">C</h3>
                                <span class="skills_subtitle">More than 1 year</span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Java</h3>
                                <span class="skills_subtitle">More than 8 months</span>
                            </div>
                        </div>
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Python</h3>
                                <span class="skills_subtitle">More than 4 months</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============= Skills 3 =========== -->
                <div class="skills_content skills_close">
                    <div class="skills_header">
                        <i class="uil uil-swatchbook skills_icon"></i>
                        <div>
                            <h1 class="skills_title">Designer</h1>
                            <span class="skills_subtitle">More than 1 year</span>
                        </div>
                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>

                    <div class="skills_list grid">
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Photoshop</h3>
                                <span class="skills_subtitle">More than 1 year</span>
                            </div>
                        </div>

                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">Figma</h3>
                                <span class="skills_subtitle">More than 9 months</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===================== Qualification ====================-->
        <section class="qualification section">
            <h2 class="section_title">Qualification</h2>
            <span class="section_subtitle">My personal journey</span>

            <div class="qualification_container container">
                <div class="qualification_tabs">
                    <div class="qualification_button button-flex qualification_active" data-target="#education">
                        <i class="uil uil-graduation-cap qualification_icons"></i>
                        Education
                    </div>
                    <div class="qualification_button button-flex" data-target="#work">
                        <i class="uil uil-briefcase-alt qualification_icons"></i>
                        Work
                    </div>
                </div>

                <div class="qualification_sections">
                    <!-- ========= Qualification content 1 ==========-->
                    <div class="qualification_content qualification_active" data-content id="education">
                        <!-- ========= Qualification 1 =========-->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">Information technology</h3>
                                <span class="qualification_subtitle">USK — Indonesia </span>
                                <div class="qualification_calender"><i class="uil uil-calendar-alt"></i> 2021 — Now
                                </div>
                            </div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>

                        <!-- ========= Qualification 2 =========-->
                        <div class="qualification_data">
                            <div></div>

                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>

                            <div>
                                <h3 class="qualification_title">Web Development</h3>
                                <span class="qualification_subtitle">Bootcamp</span>
                                <div class="qualification_calender"><i class="uil uil-calendar-alt"></i> 2022 — Now
                                </div>
                            </div>
                        </div>

                        <!-- ========= Qualification 3 =========-->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">Fullstack Developer</h3>
                                <span class="qualification_subtitle">Code Politan</span>
                                <div class="qualification_calender"><i class="uil uil-calendar-alt"></i> 2023 — Now
                                </div>
                            </div>
                            <div>
                                <span class="qualification_rounder"></span>
                            </div>
                        </div>
                    </div>

                    <!-- ========= Qualification content 2 ==========-->
                    <div class="qualification_content" data-content id="work">
                        <!-- ========= Qualification 1 =========-->
                        <div class="qualification_data">
                            <div>
                                <h3 class="qualification_title">Unknown</h3>
                                <span class="qualification_subtitle">Unknown - Unknown </span>
                                <div class="qualification_calender"><i class="uil uil-calendar-alt"></i> Unknown —
                                    Unknown
                                </div>
                            </div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                        </div>

                        <!-- ========= Qualification 2 =========-->
                        <div class="qualification_data">
                            <div></div>
                            <div>
                                <span class="qualification_rounder"></span>
                            </div>
                            <div>
                                <h3 class="qualification_title">Unknown</h3>
                                <span class="qualification_subtitle">Unknown — Unknown</span>
                                <div class="qualification_calender"><i class="uil uil-calendar-alt"></i> Unknown —
                                    Unknown
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--===================== Services ====================-->
        <section class="services section" id="services">
            <h2 class="section_title">Services</h2>
            <span class="section_subtitle">What I offer</span>

            <div class="services_container container grid">
                <!--================== Services 1 ==================-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">UI/UX <br> Designer</h3>
                    </div>

                    <span class="button button-flex button-small button-link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">
                                UI/UX <br> Designer
                            </h4>
                            <i class="uil uil-times services_modal-close"></i>
                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>User Research</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>User Experience Planning</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Wireframing</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>User Interface Design</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Prototyping</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--================== Services 2 ==================-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-arrow services_icon"></i>
                        <h3 class="services_title">Frontend <br> Developer</h3>
                    </div>
                    <span class="button button-flex button-small button-link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Frontend <br> Developer</h4>
                            <i class="uil uil-times services_modal-close"></i>
                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>User Interface Development</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Responsive Web Development</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>UX Element Interactions</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Cross-Browser Compatibility</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Performance Optimization</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--================== Services 3 ==================-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-server-network services_icon"></i>
                        <h3 class="services_title">Backend <br> Developer</h3>
                    </div>
                    <span class="button button-flex button-small button-link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Backend <br> Developer</h4>
                            <i class="uil uil-times services_modal-close"></i>
                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Server-Side Development</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Database Management</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>API Development</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Authentication and Security</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===================== Portfolio ==================-->
        <section class="portfolio section" id="portfolio">
            <h2 class="section_title">Portfolio</h2>
            <span class="section_subtitle">Most recent work</span>
            <div class="portfolio_container container swiper mySwiper">
                <div class="swiper-wrapper">
                    <!--============== Portfolio 1 ================-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="{{asset('images/portfolio_solveblem.png')}}" alt="Website Solveblem"
                            class="portfolio_image">
                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Solveblem</h3>
                            <p class="portfolio_description">Solveblem is a website that is useful for creating problems and practicing problem solving in terms of coding.</p>
                            <a href="{{url('https://github.com/FajryAriansyah/SolveBlem.git')}}" class="button button-flex button-small portfolio_button">
                                Demo
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--============= Portfolio 2 ==============-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="{{asset('images/portfolio_peta.png')}}" alt="Website PETA-Pemandu Wisata"
                            class="portfolio_image">
                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Peta-Pemandu Wisata</h3>
                            <p class="portfolio_description">Peta-Pemandu Wisata is a website that aims to facilitate tourists in finding tour guides and opening up jobs for those who want to become tour guides.</p>
                            <a href="{{url('https://github.com/Habil-Ns/INF206-2023-2-PETA.git')}}" class="button button-flex button-small portfolio_button">
                                Demo
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--============= Portfolio 3 ==============-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="{{asset('images/portfolio_coffeeshop.png')}}" alt="Website Coffee Shop"
                            class="portfolio_image">
                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Coffee Shop</h3>
                            <p class="portfolio_description">Coffee shop website is a website created to promote coffee businesses with an attractive appearance so that customers are increasingly interested in buying these products.</p>
                            <a href="{{url('https://github.com/Noitusanx/Coffee-Shop.git')}}" class="button button-flex button-small portfolio_button">
                                Demo
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--=============== Portfolio 4 =================-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="{{asset('images/portfolio_catatyuk.jpg')}}" alt="Aplikasi Catat Yuk!"
                            class="portfolio_image">
                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Catat Yuk!</h3>
                            <p class="portfolio_description">Catat Yuk is a mobile note application that is used to record all needs and will be stored in the application.</p>
                            <a href="{{url('https://github.com/Noitusanx/Catat-Yuk.git')}}" class="button button-flex button-small portfolio_button">
                                Demo
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper_portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper_portfolio-icon"></i>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- ============== Project in Mind ===================== -->
        <section class="project section">
            <div class="project_bg">
                <div class="project_container container">
                    <div class="client_project">
                        <h4 class="text_client">Clients</h4>
                        <h2 class="text_colaborated">Who have collaborated</h2>
                    </div>

                    <div class="clients">
                        <div class="client">
                            <a href="" class="logo_clients">
                                <img src="{{asset('images/google.svg')}}" alt="Google" class="logo_client">
                            </a>
                            <a href="" class="logo_clients">
                                <img src="{{asset('images/tokopedia.svg')}}" alt="Tokopedia" class="logo_client">
                            </a>
                        </div>
                        <div class="client">
                            <a href="" class="logo_clients">
                                <img src="{{asset('images/google.svg')}}" alt="Google" class="logo_client">
                            </a>
                            <a href="" class="logo_clients">
                                <img src="{{asset('images/tokopedia.svg')}}" alt="Tokopedia" class="logo_client">
                            </a>
                        </div>
                    </div>

                    <div class="project_data">
                        <h2 class="project_title">You have a new Project</h2>
                        <p class="project_description">Contact me now if you have a project!</p>
                        <a href="#contact" class="button button-flex button-white">Contact Me
                            <i class="uil uil-message project_icon button_icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= Testimonial ======================= -->
        <section class="testimonial section" id="testimonial">
            <h2 class="section_title">Testimonial</h2>
            <span class="section_subtitle">My client saying</span>
        
            <div class="testimonial_container container swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($testimonial as $testimonial)
                        <div class="testimonial_content swiper-slide">
                            <div class="testimonial_data">
                                <div class="testimonial_header">
                                    <div>
                                        <h3 class="testimonial_nama">{{ $testimonial->name }}</h3>
                                        <span class="testimonial_client">Client</span>
                                    </div>
                                </div>
        
                                <div>
                                    @php
                                        $rating = $testimonial->rate;
                                        $totalStars = 5;
                                        $yellowStars = $rating;
                                        $greyStars = $totalStars - $rating;
                                    @endphp
        
                                    @for ($i = 1; $i <= $totalStars; $i++)
                                        @if ($i <= $yellowStars)
                                            <span class="testimonial_star testimonial_icon-star"></span>
                                            @else
                                            <span class="testimonial_star testimonial_icon-star-grey"></span>
                                        @endif
                                    @endfor
                                </div>
                            </div>
        
                            <p class="testimonial_description">
                                {{ $testimonial->testimonial }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        



        <!--===================== Contact Me =========================-->
        <!-- Nama id harus sesuai dengan nama link, id tidak memakai # -->
        <section class="contactme section" id="contact">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="section_content">
                            <h2 class="section_title">Contact Me</h2>
                            <span class="section_subtitle">Get in touch</span>
                        </div>
                        <div class="contact_container container grid">
                            <div>
                                <div class="contact_information">
                                    <i class="uil uil-phone contact_icon"></i>
                                    <div>
                                        <h3 class="contact_title">Call Me</h3>
                                        <span class="contact_subtitle">0813-5810-1797</span>
                                    </div>
                                </div>

                                <div class="contact_information">
                                    <i class="uil uil-envelope contact_icon"></i>
                                    <div>
                                        <h3 class="contact_title">Email</h3>
                                        <span class="contact_subtitle">habilnasutionx@gmail.com</span>
                                    </div>
                                </div>

                                <div class="contact_information">
                                    <i class="uil uil-location-pin-alt contact_icon"></i>
                                    <div>
                                        <h3 class="contact_title">Location</h3>
                                        <span class="contact_subtitle">Atjeh - Indonesia</span>
                                    </div>
                                </div>
                            </div>
                            <form action="{{url('portfolio')}}" method="Post" class="contact_form grid">
                                @csrf
                                <div class="contact_inputs grid">
                                    <div class="contact_content">
                                        <label for="" class="contact_label">Name</label>
                                        <input type="text" name="name" class="contact_input">
                                    </div>
                                    <div class="contact_content">
                                        <label for="" class="contact_label">Email</label>
                                        <input type="email" name="email" class="contact_input">
                                    </div>
                                </div>

                                <div class="contact_content">
                                    <label for="" class="contact_label">Project</label>
                                    <input type="text" name="project" class="contact_input">
                                </div>
                                <div class="contact_content">
                                    <label for="" class="contact_label">Message</label>
                                    <textarea name="message" id="" cols="0" rows="7" class="contact_input"></textarea>
                                </div>
                                <div class="submit_button">
                                    <button type="submit" class="button button-flex button_send">
                                        Send Message
                                        <i class="uil uil-message button_icon"></i>
                                    </button>
                                </div>
                                <span class="button button-flex button-small button-link services_button swipe">
                                    Swipe
                                    <i class="uil uil-arrow-right button_icon"></i>
                                </span>
                            </form>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="section_content">
                            <h2 class="section_title">Rating</h2>
                            <span class="section_subtitle">Provide testimonials</span>
                        </div>
                        <div class="contact_container container grid">
                            <div>
                                <div class="contact_information">
                                    <i class="uil uil-phone contact_icon"></i>
                                    <div>
                                        <h3 class="contact_title">Call Me</h3>
                                        <span class="contact_subtitle">0813-5810-1797</span>
                                    </div>
                                </div>

                                <div class="contact_information">
                                    <i class="uil uil-envelope contact_icon"></i>
                                    <div>
                                        <h3 class="contact_title">Email</h3>
                                        <span class="contact_subtitle">habilnasutionx@gmail.com</span>
                                    </div>
                                </div>

                                <div class="contact_information">
                                    <i class="uil uil-location-pin-alt contact_icon"></i>
                                    <div>
                                        <h3 class="contact_title">Location</h3>
                                        <span class="contact_subtitle">Atjeh - Indonesia</span>
                                    </div>
                                </div>
                            </div>
                            <form action="{{url('portfolio')}}" method="Post" class="contact_form grid">
                                @csrf
                                <div class="contact_inputs">
                                    <div class="contact_content">
                                        <label for="" class="contact_label">Name</label>
                                        <input type="text" name="name" class="contact_input">
                                    </div>
                                </div>

                                <div class="contact_content">
                                    <label for="" class="contact_label">Testimonial</label>
                                    <textarea name="testimonial" id="" cols="0" rows="7" class="contact_input"></textarea>
                                </div>
                                <div class="contact_content">
                                    <label for="" class="contact_label">Rating</label>
                                    <div class="ratings">
                                        <span>
                                            <input type="radio" id="star5a" data-product-id="@Model.ProductId" class="star" name="rate" value="5" />
                                            <label for="star5a" title="5 Stars"></label>
                                            <input type="radio" id="star4a" data-product-id="@Model.ProductId" class="star" name="rate" value="4" />
                                            <label for="star4a" title="4 Star"></label>
                                            <input type="radio" id="star3a" data-product-id="@Model.ProductId" class="star" name="rate" value="3" />
                                            <label for="star3a" title="3 Star"></label>
                                            <input type="radio" id="star2a" data-product-id="@Model.ProductId" class="star" name="rate" value="2" />
                                            <label for="star2a" title="2 Stars"></label>
                                            <input type="radio" id="star1a" data-product-id="@Model.ProductId" class="star" name="rate" value="1" />
                                            <label for="star1a" title="1 Star"></label>
                                        </span>
                                    </div>
                                </div>
                                <div class="submit_button">
                                    <button type="submit" class="button button-flex button_send">
                                        Send Message
                                        <i class="uil uil-message button_icon"></i>
                                    </button>
                                </div>
                                <span class="button button-flex button-small button-link services_button swipe">
                                    <i class="uil uil-arrow-left button_left_icon"></i>
                                    Swipe
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
            </div>
        </section>

    </main>

    <!-- ====================== Footer ======================= -->
    <footer class="footer">
        <div class="footer_bg">
            <div class="footer_container container grid">
                <div>
                    <h1 class="footer_title">Habil Nasution</h1>
                    <span class="footer_subtitle">Fullstack Developer</span>
                </div>
                <ul class="footer_links">
                    <li>
                        <a href="#services" class="footer_link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer_link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer_link">Contactme</a>
                    </li>
                </ul>
                <div class="footer_socials">
                    <a href="https://www.instagram.com/" target="_blank" class="footer_social">
                        <i class="uil uil-instagram-alt"></i>
                    </a>
                    <a href="https://line.me/id/" target="_blank" class="footer_social">
                        <i class="uil uil-line"></i>
                    </a>
                    <a href="https://twitter.com/" class="footer_social" target="_blank">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer_copy">&#169; Habil Nasution. All right reserved.</p>
        </div>
    </footer>

    <!-- ================= Scroll Top ========================= -->
    <a href="#" class="scroll-up" id="scroll-up">
        <i class="uil uil-arrow-up scroll-up_icon"></i>
    </a>


    <!-- ================== Swiper JS ======================== -->
    <script src="{{asset('swiper/swiper-bundle.min.js')}}"></script>

    <!--=================== Main JS ====================-->
    <script src="{{asset('js/index.js')}}"></script>
</body>

</html>