<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vidka - Importateur et distributeur des vehicules et engins</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="VIDKA est leader marocain dans le secteur des aménagements
    modulaires pour véhicules utilitaires. L’entreprise conçoit, développe
    et commercialise des solutions complètes pour véhicules utilitaires
    répondant pleinement aux exigences des clients. Nos solutions clés
    en main s’étendent des installations standard aux aménagements
    personnalisés et aux accessoires, notamment habillage intérieur et
    extérieur, éclairage, convertisseurs de puissance, rails et galeries de
    toit, séparations conducteur, armoires et signalisation..">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/logo/shortcut.png') }}" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/ionicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/font-awesome.min.css') }}" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/jquery-ui.min.css') }}">
    <!-- Plugin CSS (Plugins Files for only this Page) -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/swiper-bundle.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper">

        <!-- Begin Main Header Area -->
        <header class="main-header_area position-relative">
            <div class="header-top py-6 py-lg-3" data-bg-color="#e40424">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="offset-xl-2 offset-lg-3 col-xl-4 col-lg-5 d-none d-lg-block">
                            <div class="header-top-left ml-8">
                                <div class="contact-number">
                                    <img src="{{ asset('assets/header/icon/phone.png') }}" alt="Phone Icon">
                                    <a href="tel:+212 528232329">+212 528 23 23 29</a>
                                </div>
                                <div class="time-schedule">
                                    <img src="{{ asset('assets/header/icon/clock.png') }}" alt="Clock Icon">
                                    <span>9.00 am - 6.00 pm</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 d-block d-lg-none">
                            <div class="header-logo d-flex">
                                <a href="index.html" style="display: flex; justify-content: center;">
                                    <img class="d-none d-lg-block" src="{{ asset('assets/logo/logo.png') }}" style="width: 30%; height: 100%;" alt="Header Logo">
                                    <img class="d-block d-lg-none" src="{{ asset('assets/logo/logo.png') }}" style="width: 30%; height: 100%;" alt="Header Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-xl-5 col-lg-4 col-sm-6">
                            <div class="header-top-right">
                                <ul class="hassub-item">
                                    <li class="login-info">
                                        <a href="login-register.html">Login<span>/ Register</span></a>
                                    </li>
                                    <li class="minicart-wrap">
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <div class="minicart-count">
                                                <img src="{{ asset('assets/header/icon/cart.png') }}" alt="Cart Icon">
                                                <span class="quantity">3</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mobile-menu_wrap d-block d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                            <i class="fa fa-navicon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header header-sticky" data-bg-color="#353e46">
                <div class="container">
                    <div class="main-header_nav">
                        <div class="row align-items-center">
                            <div class="offset-xl-2 col-xl-10 d-none d-lg-block">
                                <div class="main-menu text-center">
                                    <nav class="main-nav">
                                        <ul>
                                            <li class="drop-holder">
                                                <a href="index.html"><span>Acceuil</span></a>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="service.html"><span>Produits</span></a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="">ENGINS DE TRANSPORT ET VEHICUL</a>
                                                    </li>
                                                    <li>
                                                        <a href="">ENGINS DE MATERIEL DE LEVAGE</a>
                                                    </li>
                                                    <li>
                                                        <a href="">ENGINS BTP</a>
                                                    </li>
                                                    <li>
                                                        <a href="">ENGINS D’ASSAINISSEMENT ET NETTOYAGE</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="contact.html"><span>Projets</span></a>
                                            </li>
                                            <li class="">
                                                <a href="contact.html"><span>Références</span></a>
                                            </li>
                                            <li class="">
                                                <a href="contact.html"><span>Contact</span></a>
                                            </li>
                                            <li class="separator">
                                                <a href="contact.html"><span>Mes commandes</span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-logo-wrap d-none d-lg-flex">
                        <img src="{{ asset('assets/logo/logo.png') }}" alt="" style="width: 80%; height: 100%; object-fit: contain; margin: auto;">
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-body">
                    <div class="inner-body">
                        <div class="offcanvas-top">
                            <a href="#" class="button-close"><i class="ion-ios-close-empty"></i></a>
                        </div>
                        <div class="offcanvas-menu_area">
                            <nav class="offcanvas-navigation">
                                <ul class="mobile-menu">
                                    <li>
                                        <a href="index.html">
                                            <span class="mm-text">Acceuil</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Produits
                                        <i class="ion-ios-arrow-down"></i>
                                    </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="service.html">
                                                    <span class="mm-text">Produits</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="mm-text">ENGINS D’ASSAINISSEMENT ET NETTOYAGE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="mm-text">ENGINS D’ASSAINISSEMENT ET NETTOYAGE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="mm-text">ENGINS D’ASSAINISSEMENT ET NETTOYAGE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span class="mm-text">ENGINS D’ASSAINISSEMENT ET NETTOYAGE</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index.html">
                                            <span class="mm-text">Projets</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html">
                                            <span class="mm-text">Références</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <span class="mm-text">Contact</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html">
                                            <span class="mm-text">Mes commandes</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-body">
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4 class="mb-0">Shopping Cart</h4>
                            <a href="#" class="button-close"><i class="ion-ios-close-empty"></i></a>
                        </div>
                        <ul class="minicart-list">
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i class="ion-ios-close-empty"></i></a>
                                <div class="product-item_img">
                                    <img class="img-full" src="assets/images/product/small-size/1-1-100x103.jpg" alt="Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop.html">Cutting Pliers</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i class="ion-ios-close-empty"></i></a>
                                <div class="product-item_img">
                                    <img class="img-full" src="assets/images/product/small-size/1-2-100x103.jpg" alt="Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop.html">Safety Helmet</a>
                                    <span class="product-item_quantity">1 x $120.00</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i class="ion-ios-close-empty"></i></a>
                                <div class="product-item_img">
                                    <img class="img-full" src="assets/images/product/small-size/1-3-100x103.jpg" alt="Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop.html">Jack Hammer Drill</a>
                                    <span class="product-item_quantity">1 x $230.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$91.05</span>
                    </div>
                    <div class="group-btn_wrap d-grid gap-2">
                        <a href="cart.html" class="btn btn-secondary btn-primary-hover">View Cart</a>
                        <a href="checkout.html" class="btn btn-secondary btn-primary-hover">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>
        <!-- Main Header Area End Here -->

        <!-- Begin Slider Area -->
        <div class="slider-area">

            <!-- Main Slider -->
            <div class="swiper-container main-slider swiper-arrow with-bg_white">
                <div class="swiper-wrapper">
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner bg-height" data-bg-image="{{ asset('assets/slider/bg/1-1.jpg') }}">
                            <div class="container">
                                <div class="slide-content">
                                    <span class="sub-title mb-1">Vidka</span>
                                    <h2 class="title mb-3">Importateur et distributeur <br> des <span>véhicules et engins</span></h2>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom btn-secondary btn-white-hover me-3" href="project.html">Plus de détails</a>
                                        <a class="btn btn-custom btn-primary btn-white-hover" href="contact.html">Contactez-nous!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner bg-height" data-bg-image="{{ asset('assets/slider/bg/1-2.jpg') }}">
                            <div class="container">
                                <div class="slide-content text-white">
                                    <span class="sub-title mb-1">Vidka</span>
                                    <h2 class="title mb-3">La fourtniture de pieces de rechanges <br> <span>negoce et travaux divers</span></h2>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom btn-secondary btn-white-hover me-3" href="project.html">Plus de détails</a>
                                        <a class="btn btn-custom btn-primary btn-white-hover" href="contact.html">Contactez-nous!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination with-bg d-md-none"></div>

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
        <!-- Slider Area End Here -->


        <!-- Banner Area End Here -->

        <!-- Begin About Area -->
        <div class="about-area about-style-2 py-130">
            <div class="container">
                <div class="section-title-area style-01 pb-70">
                    <div class="section-title-wrap">
                        <div class="section-title with-border text-lg-end">
                            <span>PRÉSENTATION</span>
                            <h2 class="mb-0">Nous construisons vos besoins</h2>
                        </div>
                        <div class="section-desc">
                            <p class="font-size-20 mb-0">VIDKA est leader marocain dans le secteur des aménagements
                                modulaires pour véhicules utilitaires. L’entreprise conçoit, développe
                                et commercialise des solutions complètes pour véhicules utilitaires
                                répondant pleinement aux exigences des clients. Nos solutions clés
                                en main s’étendent des installations standard aux aménagements
                                personnalisés et aux accessoires, notamment habillage intérieur et
                                extérieur, éclairage, convertisseurs de puissance, rails et galeries de
                                toit, séparations conducteur, armoires et signalisation.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img-wrap">
                            <div class="about-pattern">
                                <img src="{{ asset('assets/about/pattern.png') }}" alt="Pattern">
                            </div>
                            <div class="about-img">
                                <img class="img-full" src="{{ asset('assets/project/medium-size/pic.jpg') }}" alt="About Banner">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-content">
                            <div class="experience style-2 text-primary">
                                <div class="experience-content">
                                    
                                    <h2 class="our-progress"><span>Expérience</span></h2>
                                </div>
                                <div class="experience-img">
                                    <img src="{{ asset('assets/about/avatar.png') }}" alt="Avatar">
                                </div>
                            </div>
                            <h3 class="sub-title mb-4">Fournir les meilleurs services de construction pour nos clients avec leur satisfaction</h3>
                            <p class="short-desc mb-7">VIDKA en plus de ça vous assure l’acquisition de vehicule et engin de votre choix , importation de matériels,  l’équipement, l’entretien et la réparation en plus de vous fournir les pieces de rechanges de qualité dans un cadre de
                                suivie durable de votre projet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End Here -->


        <!-- Begin Brand Area -->
        <div class="brand-area pt-140 pb-6" data-bg-image="">
            <div class="container">
                <div class="section-title-area pb-70">
                    <div class="section-title with-border pb-5 pb-lg-0">
                        <span>Nos références</span>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container brand-slider">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/brand/1.jpg') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/brand/2.jpg') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/brand/3.png') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/brand/4.jpg') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/brand/5.jpg') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/brand/6.png') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/brand/7.png') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/brand/8.png') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/brand/1.jpg') }}" alt="Brand Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="brand-item" href="#">
                                        <img src="{{ asset('assets/brand/6.png') }}" alt="Brand Image">
                                    </a>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="brand-pagination d-md-none"></div>

                            <!-- Add Arrows -->
                            <div class="brand-button-next"></div>
                            <div class="brand-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->

        <!-- Begin Service Area -->
        <div class="service-area py-140">
            <div class="container">
                <div class="section-title-area pb-70">
                    <div class="section-title with-border pb-5 pb-lg-0">
                        <span>NOS SERVICES</span>
                        <h2 class="mb-0 font-size-50">Fournir Unique <br> & Service de qualité</h2>
                    </div>
                    <div class="section-banner text-white align-self-center p-7" data-bg-image="{{ asset('assets/service/bg/1-1.png') }}">
                        <h2 class="info mb-0">Vous avez des projets ? <span>+212 528 230 735</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="custom-arrow-holder position-relative">
                            <!-- Add Arrows -->
                            <div class="custom-button-wrap d-none d-md-flex">
                                <div class="custom-button-prev">
                                    <i class="ion-chevron-left"></i>
                                </div>
                                <div class="custom-button-next">
                                    <i class="ion-chevron-right"></i>
                                </div>
                            </div>
                            <div class="swiper-container service-slider swiper-arrow with-bg_white">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="service-item">
                                            <div class="service-img">
                                                <a href="service.html">
                                                    <img src="{{ asset('assets/service/medium-size/1-4-370x254.jpg') }}" alt="Service Image">
                                                </a>
                                                <div class="add-action text-white" style="height: 100px;">
                                                    <h2 class="title mb-0"><a href="">Engins de transport et véhicule</a></h2>
                                                    <div class="icon">
                                                        <a class="text-lowercase" href="mailto://vidka@vidka.ma">
                                                            <i class="ion-ios-plus-empty"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service-item">
                                            <div class="service-img">
                                                <a href="service.html">
                                                    <img src="{{ asset('assets/service/medium-size/pole manutention.jpg') }}" alt="Service Image">
                                                </a>
                                                <div class="add-action text-white" style="height: 100px;">
                                                    <h2 class="title mb-0"><a href="">Engins de matériel de levage</a></h2>
                                                    <div class="icon">
                                                        <a class="text-lowercase" href="mailto://vidka@vidka.ma">
                                                            <i class="ion-ios-plus-empty"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service-item">
                                            <div class="service-img">
                                                <a href="service.html">
                                                    <img src="{{ asset('assets/service/medium-size/materiel-construction.jpg') }}" alt="Service Image">
                                                </a>
                                                <div class="add-action text-white" style="height: 100px;">
                                                    <h2 class="title mb-0"><a href="">Engins btp</a></h2>
                                                    <div class="icon">
                                                        <a class="text-lowercase" href="mailto://vidka@vidka.ma">
                                                            <i class="ion-ios-plus-empty"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service-item">
                                            <div class="service-img">
                                                <a href="service.html">
                                                    <img src="{{ asset('assets/service/medium-size/net.jpg') }}" alt="Service Image">
                                                </a>
                                                <div class="add-action text-white" style="height: 100px;">
                                                    <h2 class="title mb-0"><a href="">Engins d’assainissement et nettoyage</a></h2>
                                                    <div class="icon">
                                                        <a class="text-lowercase" href="mailto://vidka@vidka.ma">
                                                            <i class="ion-ios-plus-empty"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service-item">
                                            <div class="service-img">
                                                <a href="service.html">
                                                    <img src="{{ asset('assets/service/medium-size/collect.jpg') }}" alt="Service Image">
                                                </a>
                                                <div class="add-action text-white" style="height: 100px;">
                                                    <h2 class="title mb-0"><a href="">Engins et matériel collection des déchets</a></h2>
                                                    <div class="icon">
                                                        <a class="text-lowercase" href="mailto://vidka@vidka.ma">
                                                            <i class="ion-ios-plus-empty"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service-item">
                                            <div class="service-img">
                                                <a href="service.html">
                                                    <img src="{{ asset('assets/service/medium-size/materiel-construction.jpg') }}" alt="Service Image">
                                                </a>
                                                <div class="add-action text-white" style="height: 100px;">
                                                    <h2 class="title mb-0"><a href="">Engins special</a></h2>
                                                    <div class="icon">
                                                        <a class="text-lowercase" href="mailto://vidka@vidka.ma">
                                                            <i class="ion-ios-plus-empty"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service-item">
                                            <div class="service-img">
                                                <a href="service.html">
                                                    <img src="{{ asset('assets/service/medium-size/arg.jpg') }}" alt="Service Image">
                                                </a>
                                                <div class="add-action text-white" style="height: 100px;">
                                                    <h2 class="title mb-0"><a href="">Engins et équipements d'agriculture</a></h2>
                                                    <div class="icon">
                                                        <a class="text-lowercase" href="mailto://vidka@vidka.ma">
                                                            <i class="ion-ios-plus-empty"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Area End Here -->


        <!-- Begin Team Area -->
        <div class="team-area py-140">
            <div class="container">
                <div class="section-title-area pb-70">
                    <div class="section-title-wrap style-01">
                        <div class="section-title with-border text-start text-lg-end">
                            <span>Nos partenaires</span>  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container team-member-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/team/medium-size/Flaster.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/team/medium-size/sbtech.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/team/medium-size/swiss.png') }}" alt="">
                                </div>

                            </div>
                            <!-- Add Pagination -->
                            <div class="team-pagination d-md-none"></div>

                            <!-- Add Arrows -->
                            <div class="team-button-next"></div>
                            <div class="team-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Area End Here -->



        <!-- Begin Footer Area -->
        <div class="footer-area">
            <div class="footer-top pt-100 pb-80" data-bg-image="{{ asset('assets/footer/bg/1-1-1920x454.png') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3">
                            <div class="widget-item text-hawkes-blue">
                                <div class="footer-logo pb-5">
                                    <a href="#">
                                        <img src="{{ asset('assets/logo/logo.png') }}" style="    width: 50%;
                                        height: 100%;
                                        object-fit: contain;
                                        margin: auto;" alt="Logo">
                                    </a>
                                </div>
                                <div class="inquary">
                                    <h5 class="text-primary">Pour enquête</h5>
                                    <a href="tel://+12345-879-854">+212 528 230 735</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-sm-6 pl-xl-80 pt-8 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="heading text-white mb-6">Information</h3>
                                <ul class="widget-list-item text-hawkes-blue">
                                    <li>
                                        <a href="#">Contactez-nous!</a>
                                    </li>
                                    <li>
                                        <a href="#">Projets</a>
                                    </li>
                                    <li>
                                        <a href="#">Références</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Partenaires</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 pt-8 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="heading text-white mb-6">Contact Info</h3>
                                <div class="widget-list-item text-hawkes-blue">
                                    <div class="widget-address pb-5">
                                        <p class="mb-1">Bureau N ° 1.Av Prince Abdelkader N ° 78
                                            <span class="text-primary">Cite Almassira. Agadir</span>
                                        </p>
                                        <span>+212 528 232 329 / +212 528 230 7355</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom py-3 text-hawkes-blue" data-bg-color="#353e46">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-4">
                            <ul class="social-link">
                                <li class="facebook">
                                    <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="#" data-tippy="Instagram" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-8 align-self-center">
                            <div class="copyright">
                                <span class="copyright-text">© 2021 Vidka Made with <i class="fa fa-heart text-danger"></i> by <a href="" rel="noopener" target="_blank">Vidka</a> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End Here -->

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="">
            <i class="ion-android-arrow-up"></i>
        </a>
        <!-- Scroll To Top End Here -->

    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="{{ asset('frontend/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery.waypoints.js') }}"></script>

    <!--Plugins JS-->
    <script src="{{ asset('frontend/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/tippy.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/mailchimp-ajax.js') }}"></script>

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="{{ asset('frontend/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.counterup.js') }}"></script>

    <!--Main JS (Common Activation Codes)-->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>