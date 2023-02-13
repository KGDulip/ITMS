<?php
//call config file for DB connection details
require_once 'apps/Control/config.php';
// create a object for template class
//$template = new template();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Center for Knowledge - Industrial Training</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/NWSDB.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: Gp - v4.7.0
        * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top ">
            <div class="container d-flex align-items-center justify-content-lg-between">

                <h1 class="logo me-auto me-lg-0"><a href="index.html">NWSDB<span>.CfK</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="#about">About</a></li>
                        <li><a class="nav-link scrollto" href="#services">Services</a></li>
                        <li><a class="nav-link scrollto " href="#portfolio">Gallery</a></li>
                        <li><a class="nav-link scrollto" href="#team">Team</a></li>
                        <li class="dropdown"><a href="#"><span>Download</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Download</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Drop Down 1</a></li>
                                        <h3><a href="apps/View/TraineeMgt/View_Trainee_Available_InOffice.php">Available Trainees</a></h3>
                                        <li><a href="#">Deep Drop Down 2</a></li>
                                        <li><a href="#">Deep Drop Down 3</a></li>
                                        <li><a href="#">Deep Drop Down 4</a></li>
                                        <li><a href="#">Deep Drop Down 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Drop Down 2</a></li>
                                <li><a href="#">Drop Down 3</a></li>
                                <li><a href="#">Drop Down 4</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

                <a href="../ITM/system/index.php" class="get-started-btn scrollto">Login</a>
            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center justify-content-center">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-xl-6 col-lg-8">
                        <h1>Industrial Training Excellence<span>.</span></h1>
                        <h2>Center for Knowledge</h2>
                    </div>
                </div>

                <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">

                    <div class="col-xl-2 col-md-4">
                        <div class="icon-box">
                            <i class="ri-bar-chart-box-line"></i>
                            <h3><a href="apps/View/TraineeMgt/View_Trainee_Vacancies_Available_HomePage.php">Available Trainee Vacancies</a></h3>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-4">
                        <div class="icon-box">
                            <i class="ri-store-line"></i>
                            <h3><a href="apps/View/UserMgt/TraineeRegHPFirst.php">New Trainee Registration</a></h3>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-4">
                        <div class="icon-box">
                            <i class="ri-paint-brush-line"></i>
                            <h3><a href="apps/View/UserMgt/NWSDBOfficeRegHPFirst.php">NWSDB Office Registration</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="icon-box">
                            <i class="ri-database-2-line"></i>
                            <h3><a href="apps/View/UserMgt/NWSDBProjectRegHPFirst.php">NWSDB Projects Registration</a></h3>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-4">
                        <div class="icon-box">
                            <i class="ri-bar-chart-box-line"></i>
                            <h3><a href="apps/View/UserMgt/InstituteRegistrationHPFirst.php">Academic Institute Registration</a></h3>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-4">
                        <div class="icon-box">
                            <i class="ri-calendar-todo-line"></i>
                            <h3><a href="apps/View/CertificateMgt/CertiVerification.php">Certificate Verification</a></h3>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                            <img src="assets/img/TS1.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                            <h3>Center for Knowledge</h3>
                            <p class="fst-italic">
                                The state of the art “Centre for Knowledge” is a Residential Training Center which harnesses the knowledge, skills and experience of NWSDB’s human capital as well as its infrastructure.
                            </p>
                            <h4>
                                Future Expansions
                            </h4>
                            <p class="fst-italic">
                                The center also intends to expand its reach to the South Asian region and the world at large to meet the challenges of the water and sanitation sector through knowledge sharing and collaborative efforts.
                            </p>
                            <h4>
                                Our Deliverables
                            </h4>

                            <ul>
                                <li><i class="ri-check-double-line"></i> Continuing Professional Development Programmes for professionals in related fields..</li>
                                <li><i class="ri-check-double-line"></i> Value added programmes for apprentices who complete vocational training programmes.</li>
                                <li><i class="ri-check-double-line"></i> On the job training for undergraduate trainees of higher education institutes.</li>
                                <li><i class="ri-check-double-line"></i> On the job training for craftsmen(plumbers, fitters, water treatment plant operators, automation, electrical & mechanical, SCADA…).</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                            </p>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients">
                <div class="container" data-aos="zoom-in">

                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img src="assets/img/clients/sewas.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/IWA.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/ADB.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/jaica.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/pub.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/Konica.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/CAS.png" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/pub.png" class="img-fluid" alt=""></div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Clients Section -->

            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right"></div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                                <i class="bx bx-receipt"></i>
                                <h4>Industrial Training</h4>
                                <p>Industrial Training Programme (ITP) is designed to provide the students with a supervised practical training withina specified time-frame.</p>
                            </div>
                            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Internship Training</h4>
                                <p>An internship is a professional learning experience that offers meaningful, practical work related to a student's field of study or career interest.</p>
                            </div>
                            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                                <i class="bx bx-images"></i>
                                <h4>Short-term Training</h4>
                                <p>Short-term training includes classes or programs that last anywhere between one day and two days.</p>
                            </div>
                            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                                <i class="bx bx-shield"></i>
                                <h4>Outbound Training</h4>
                                <p>Inbound training is specialized training for the internal customers and executives that are now being outsourced by organizations for effective results.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End Features Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Services</h2>
                        <p>Training Enrollment</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                <h4><a href="">Engineering</a></h4>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4><a href="">Management</a></h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-tachometer"></i></div>
                                <h4><a href="">Information Technology</a></h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-world"></i></div>
                                <h4><a href="">Water</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-slideshow"></i></div>
                                <h4><a href="">Wastewater</a></h4>
                                <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-arch"></i></div>
                                <h4><a href="">Sanitation</a></h4>
                                <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-arch"></i></div>
                                <h4><a href="http://ebis.waterboard.lk/smartzone/English/OnlinePayments">On-line Payment</a></h4>
                                <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End Services Section -->

            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                <div class="container" data-aos="zoom-in">

                    <div class="text-center">
                        <h3>Call To Action</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a class="cta-btn" href="#">Call To Action</a>
                    </div>

                </div>
            </section><!-- End Cta Section -->

            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Image Gallery</h2>
                        <p>Our Stories</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">Engineering</li>
                                <li data-filter=".filter-card">Management</li>
                                <li data-filter=".filter-web">Information Technology</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/A.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/B.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/C.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/D.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/TS.jpeg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/TS1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/E.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 2</h4>
                                    <p>Card</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/F.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/G.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 2</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/TS2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/H.JPG" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/TS1.jpeg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 1</h4>
                                    <p>Card</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/TS.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/C.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 3</h4>
                                    <p>Card</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/B.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/D.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/A.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Portfolio Section -->

            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
                <div class="container" data-aos="fade-up">

                    <div class="row no-gutters">
                        <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
                        <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
                            <div class="content d-flex flex-column justify-content-center">
                                <h3>Our Progress</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                </p>
                                <div class="row">
                                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                                        <div class="count-box">
                                            <i class="bi bi-emoji-smile"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="1165" data-purecounter-duration="2" class="purecounter"></span>
                                            <p><strong>Training Days</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                                        <div class="count-box">
                                            <i class="bi bi-journal-richtext"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="420" data-purecounter-duration="2" class="purecounter"></span>
                                            <p><strong>Happy Trainees</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                                        <div class="count-box">
                                            <i class="bi bi-clock"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="2" class="purecounter"></span>
                                            <p><strong>Office / Projects</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                                        <div class="count-box">
                                            <i class="bi bi-award"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
                                            <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End .content-->
                        </div>
                    </div>

                </div>
            </section><!-- End Counts Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                <div class="container" data-aos="zoom-in">

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/m.jpg" class="testimonial-img" alt="">
                                    <h3>Vasudewa Nanayakkara</h3>
                                    <h4>Hon. Minister of Water Supply &amp; Founder</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/C.jpg" class="testimonial-img" alt="">
                                    <h3>Nishantha Ranatunga</h3>
                                    <h4>Chairman</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/SC.jpg" class="testimonial-img" alt="">
                                    <h3>Dr. Priyath Bandu Wickrama</h3>
                                    <h4>Ministry of Water Supply Secretary</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/GM.jpg" class="testimonial-img" alt="">
                                    <h3>Eng.Thilina S. Wijetunga</h3>
                                    <h4>General Manager</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/Wa.jpg" class="testimonial-img" alt="">
                                    <h3>Dr. Wasantha Ilangasinghe </h3>
                                    <h4>Addl. General Manager (Policy & Planning)</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Testimonials Section -->

            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Industrial Training</h2>
                        <p>Our Team</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <img src="assets/img/team/AGM.jpeg" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Eng. Disna Pannila</h4>
                                    <span>Assistant General Manager(MD&T)</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="200">
                                <div class="member-img">
                                    <img src="assets/img/team/Shi.jpg" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Shiranthi Geegana</h4>
                                    <span>Manager (Training)</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="300">
                                <div class="member-img">
                                    <img src="assets/img/team/Nirosha_Perera.jpg" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Nirosha Maithrie</h4>
                                    <span>Training Officer</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up" data-aos-delay="400">
                                <div class="member-img">
                                    <img src="assets/img/team/Dulip.JPG" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Dulip Thilakarathna</h4>
                                    <span>Training Officer / Sys. Admin</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Team Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>Contact Us</p>
                    </div>

                    <div>
                        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="row mt-5">

                        <div class="col-lg-4">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>Center for Knowledge</p>
                                    <p>Thelawal, Rathmalana.</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>nwsdbit@gmeil.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+94 11263 2355</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0">


            <form id="quickForm" method="POST" action="apps/Module/MgtInfo/_HomeMsg.php">
                
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="homemsg_name" class="form-control" id="homemsg_name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="homemsg_email" id="homemsg_email" placeholder="Your Email" required>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6 form-group mt-3">
                  <input type="text" name="homemsg_mobile" class="form-control" id="homemsg_mobile" placeholder="Your Mobile" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="text" class="form-control" name="homemsg_subject" id="homemsg_subject" placeholder="Subject" required>
                </div>
                  
              </div>
              
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="homemsg_message" id="homemsg_message" placeholder="Message" required>
                
              </div>
              <div class="form-group mt-3">
              <input type="submit" value="Send Message" class="btn btn-primary" Name="New">
            </form>
                        </div>
                    </div>
                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-info">
                                <h3>CfK<span>.IT</span></h3>
                                <p>
                                    Thelawala Road <br>
                                    Rathmalana, Sri Lanka<br><br>
                                    <strong>Phone:</strong> +94 112 6323 55<br>
                                    <strong>Email:</strong> mdtdit@gmail.com<br>
                                </p>
                                <div class="social-links mt-3">
                                    <a href="https://twitter.com/SLNWSDB" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="https://www.facebook.com/NWSDB" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="https://www.instagram.com/explore/locations/1017373984/sri-lanka/akkaraipattu/national-water-supply-drainage-board-akkaraipattu/" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UCwwXLQ0tBH_jx1hSXs1F-2g" class="google-plus"><i class="bx bxl-skype"></i></a>
                                    <a href="https://lk.linkedin.com/in/nwsdb-sri-lanka-b96878a3" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Industrial Training</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Internship Training</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Short-term Training</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Outbound Training</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Training Consulting</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Our Newsletter</h4>
                            <p>Sign up to our newsletter, the Alphagram, so you can be the first to find out the latest news and tips about NWSDB.CFK.</p>
                            <form action="" method="post">
                                <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>CFK</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                    Designed by CFK.IT<a href="https://bootstrapmade.com/">.Dulip Thilakatathna</a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

    </body>

</html>