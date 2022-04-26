@extends('layouts.header')
@section('content')
<div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('assets/breadcrumb/bg/1.jpg') }}">
    <div class="container">
        <div class="breadcrumb-content">
            <span class="breadcrumb-sub-title">Contact us</span>
            <h1 class="breadcrumb-title mb-1">Envoie-nous un message</h1>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->

<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="contact-area pt-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-img-wrap">
                        <div class="contact-img">
                            <img src="{{ asset('assets/project/medium-size/pic.jpg') }}" alt="Contact Image">
                        </div>
                        <div class="contact-pattern">
                            <img src="{{ asset('assets/about/pattern.png') }}" alt="Pattern">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-10 pt-10 pt-lg-0">
                    <div class="contact-content">
                        <span class="sub-title mb-2">Vous avez un projet ? commençons</span>
                        <h2 class="title mb-3">En contact avec nous</h2>
                        <div class="contact-info pt-5">
                            <h3 class="title mb-0">Adresse de bureau
                            </h3>
                            <p class="short-desc with-border mb-0">Bureau N ° 1.Av Prince Abdelkader N ° 78 Cite Almassira. Agadir</p>
                        </div>
                        <div class="contact-info pt-4">
                            <h3 class="title mb-0">Informations de contact</h3>
                            <ul>
                                <li>
                                    Phone:
                                    <a href="tel://+212528232329">+212 528 23 23 29</a>
                                </li>
                                <li>
                                    Fax:
                                    <a href="tel://+212528230735">+212 528 23 07 35</a>
                                </li>
                                <li>
                                    Email:
                                    <a class="text-lowercase" href="mailto://vidka@vidka.ma">vidka@vidka.ma</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form-area pt-130 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="contact-form-title mb-3">Laisser un message</h2>
                    <form id="contact-form" class="contact-form pt-10" method="POST" action="{{ url('contact-message') }}">
                        @csrf
						@method('PUT')
                        <div class="group-input">
                            <input type="text" required name="name" id="con_name" placeholder="Nom*" class="input-field me-6">
                            <input type="text" required name="email" id="con_email" placeholder="Email*" class="input-field mt-6 mt-sm-0">
                        </div>
                        <div class="group-input" style="margin-top: 20px">
                            <input type="text" required name="phone" id="con_name" placeholder="Téléphone*" class="input-field me-6">
                            <input type="text" name="subject" id="con_email" placeholder="Sujet" class="input-field mt-6 mt-sm-0">
                        </div>
                        <div class="form-field mt-6">
                            <textarea name="message" required id="con_message" placeholder="Message" class="textarea-field"></textarea>
                        </div>
                        <div class="button-wrap mt-8">
                            <button type="submit" class="btn btn-custom btn-secondary btn-primary-hover" name="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 ps-lg-10">
                    <div class="map-with-pattern pt-9">
                        <iframe class="map-size" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13763.519188853215!2d-9.565313!3d30.4111521!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x552a641be8b29c46!2sFLASTER%20GROUP!5e0!3m2!1sen!2sma!4v1646677094286!5m2!1sen!2sma"></iframe>
                        <div class="contact-pattern">
                            <img src="assets/images/contact/pattern.png" alt="Pattern">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection