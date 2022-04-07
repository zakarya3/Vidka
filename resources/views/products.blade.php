@extends('layouts.header')
@section('content')
            <!-- Begin Breadcrumb Area -->
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('assets/breadcrumb/bg/1.jpg') }}">
                <div class="container">
                    <div class="breadcrumb-content">
                        <span class="breadcrumb-sub-title">Nos Produits</span>
                        <h1 class="breadcrumb-title mb-1">{{ $name }}</h1>
                        <p class="breadcrumb-desc font-size-20">Boutique</p>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb Area End Here -->
    
            <div class="product-area py-140">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 order-lg-1 order-2 pe-lg-9 pt-8 pt-lg-0">
                            <div class="sidebar-area">
                                <div class="sidebar-widget sidebar-searchbar sidebar-common mb-8" data-bg-color="#f4f8ff">
                                    <h3 class="sidebar-title mb-5">Rechercher</h3>
                                    <form class="sidebar-form">
                                        <input class="searchbox-input" type="text" placeholder="Tapez votre mot-clé...">
                                        <button class="btn btn-custom md-size btn-primary btn-secondary-hover searchbox-btn" type="submit">
                                            <i class="ion-ios-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="sidebar-widget sidebar-blog-categories sidebar-common mb-8" data-bg-color="#f4f8ff">
                                    <h3 class="sidebar-title mb-5">Categories</h3>
                                    <ul>
                                        @foreach ($type as $item)
                                            <li>
                                                <a href="{{ url('/products/'.$name.'/'.$item->id) }}">{{ $item->name }}
                                                    
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 order-lg-2 order-1">
                            <div class="product-wrap row">
                                @foreach ($product as $item)
                                    <div class="col-md-6 pt-8 pt-md-0">
                                        <div class="product-item text-center">
                                            <div class="product-img">
                                                <a href="{{ url('/product/'.$name.'/'.$item->product_name) }}">
                                                    <img src="{{ asset('assets/uploads/products/images/'.$item->image) }}" alt="Product Image">
                                                </a>
                                                <div class="add-action">
                                                    <ul>
                                                        <li>
                                                            <a class="btn btn-custom md-size btn-primary btn-secondary-hover" href="#">Add to Cart</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content py-4">
                                                <h2 class="title mb-0"><a href="product-detail.html">{{ $item->product_name }}</a></h2>
                                                <div class="price-box">
                                                    <span class="new-price">{{ $item->price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-12 pt-10">
                                    <div class="pagination-wrap">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination pagination-custom justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                        <i class="ion-ios-arrow-back"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">
                                                        <i class="ion-ios-arrow-forward"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection