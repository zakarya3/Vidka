@extends('layouts.header')
@section('content')
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




@endsection