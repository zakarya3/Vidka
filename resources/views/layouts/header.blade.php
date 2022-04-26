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
                                        <a href="{{ url('dashboard') }}">Login<span>/ Register</span></a>
                                    </li>
                                    <li class="minicart-wrap">
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <div class="minicart-count">
                                                <img src="{{ asset('assets/header/icon/cart.png') }}" alt="Cart Icon">
                                                <span class="quantity">{{ Cart::getTotalQuantity()}}</span>
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
                                                <a href="{{ url('/') }}"><span>Acceuil</span></a>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="{{ url('/') }}"><span>Produits</span></a>
                                                <ul class="drop-menu">
                                                    @foreach ($category as $item)
                                                        <li>
                                                            <a href="{{ url('products-items/'.$item->name) }}">{{ $item->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href=""><span>Projets</span></a>
                                            </li>
                                            <li class="">
                                                <a href=""><span>Références</span></a>
                                            </li>
                                            <li class="">
                                                <a href="{{ url('/contact') }}"><span>Contact</span></a>
                                            </li>
                                            <li class="separator">
                                                <a href="{{ url('myorders') }}"><span>Mes commandes</span></a>
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
                                            @foreach ($category as $item)
                                                <li>
                                                    <a href="{{ url('products-items/'.$item->name)}}">
                                                        <span class="mm-text">{{ $item->name }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="mm-text">Projets</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="mm-text">Références</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contact') }}l">
                                            <span class="mm-text">Contact</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('myorders') }}">
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
                            <h4 class="mb-0">Panier</h4>
                            <a href="#" class="button-close"><i class="ion-ios-close-empty"></i></a>
                        </div>
                        <ul class="minicart-list">
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($cartItems as $item)
                                <li class="minicart-product product_data">
                                    <input type="hidden" value="{{ $item->id }}" class="prod_id">
                                    <div class="product-item_img">
                                        <img class="img-full" src="{{ asset('assets/uploads/products/images/'.$item->attributes->image) }}" alt="Product Image">
                                    </div>
                                    <div class="product-item_content">
                                        <a class="product-item_title" href="shop.html">{{ $item->name }}</a>
                                        <span class="product-item_quantity">{{ $item->quantity }} x {{ $item->price }} MAD</span>
                                    </div>
                                </li>
                                @php
                                    $total += $item->price * $item->quantity;
                                @endphp
                            @endforeach
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Total</span>
                        <span class="ammount">{{ $total }} MAD</span>
                    </div>
                    <div class="group-btn_wrap d-grid gap-2">
                        <a @if (Cart::getTotalQuantity() != 0)
                        href="{{ url('cart') }}"
                    @else
                        href="{{ url('/') }}"
                    @endif class="btn btn-secondary btn-primary-hover">View Cart</a>
                        <a href="checkout.html" class="btn btn-secondary btn-primary-hover">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>
        <!-- Main Header Area End Here -->
@yield('content')


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
<script src="{{ asset('frontend/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/js/qty.js') }}"></script>
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