@extends('layouts.header')
@section('content')
<div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('assets/breadcrumb/bg/1.jpg') }}">
    <div class="container">
        <div class="breadcrumb-content">
            <span class="breadcrumb-sub-title">Détails du produit</span>
            <h1 class="breadcrumb-title mb-1">{{ $name }}</h1>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->

<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="product-detail-area py-140 product_data"">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product-detail-wrap row">
                        <div class="col-lg-6">
                            <div class="product-detail-img">
                                <div class="swiper-container product-detail-slider swiper-arrow swiper-arrow-sm-size with-bg_white">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-img zoom">
                                                <img src="{{ asset('assets/uploads/products/images/'.$product->image) }}" alt="Product Image">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-9 pt-lg-0">
                            <div class="product-detail-content ps-1">
                                <h2 class="title mb-2">{{ $product->product_name }}</h2>
                                <div class="product-detail-review pb-7">
                                    <div class="price-box">
                                        @if ($product->price != null)
                                            <span class="new-price">{{ $product->price }}</span>
                                        @else
                                            <span class="new-price">Contactez-nous!</span>
                                        @endif
                                    </div>
                                    <div class="rating-box ps-10 text-primary">
                                        <ul>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="product-desc mb-3">{{ $product->product_description }}</p>
                                <div class="product-detail-info pb-3">
                                    @if ($product->qty !== null && $product->qty > 0)
                                        <span class="stock pb-2">Stock: <strong class="text-primary">In Stock</strong></span>
                                    @endif
                                    @if ($product->product_reference !== null)
                                        <span class="sku">Ref: 245KBJTU</span>
                                    @endif
                                </div>
                                <div class="product-qty-with-btn pb-3">
                                    @if ($product->qty !== null)
                                        <input type="hidden" value="{{ $product->id }}" class="prod_id">
                                        <div class="quantity">
                                            <label>Quantité:</label>
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box qty-input" value="1" type="text">
                                                <div class="dec qtybutton"><i class="ion-ios-arrow-down decrement-btn"></i></div>
                                                <div class="inc qtybutton"><i class="ion-ios-arrow-up increment-btn"></i></div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="button-wrap ps-5">
                                        <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                            <input type="hidden" value="{{ $product->product_name }}" name="name">
                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                            <input type="hidden" value="{{ $product->image }}"  name="image">
                                            <input type="hidden" class="qty-input form-control" name="quantity">
                                            <input type="hidden" value="{{ $product->qty }}"  name="qty">
                                            @if ($product->price != NULL)
                                            <button class="btn btn-secondary btn-primary-hover btn-lg rounded-0" type="submit">Ajouter au panier</button>
                                            @else
                                            <a class="btn btn-secondary btn-primary-hover btn-lg rounded-0" href="{{ url('/contact') }}">Contactez-nous</a>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                                <div class="product-detail-category pb-2">
                                    <span>Categorie: <a href="#">{{ $product->category->name }}</a></span>
                                </div>
                            </div>
                        </div>
                        @if ($product->brand_id !== null)
                            <div class="col-lg-12">
                                <div class="product-detail-tab pt-9">
                                    <ul class="nav nav-pills" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Marque</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content pt-7" id="myTabContent">
                                        <img src="{{ asset('assets/uploads/brands/images/'.$product->brand->image) }}" alt="brand">
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 ps-lg-9 pt-10 pt-lg-0">
                    <div class="sidebar-area">
                        <div class="sidebar-widget sidebar-searchbar sidebar-common mb-8" data-bg-color="#f4f8ff">
                            <h3 class="sidebar-title mb-5">Rechercher</h3>
                            <form class="sidebar-form" action="{{ url('search') }}" method="post">
                                {{ csrf_field() }}
                                <input class="searchbox-input" name="item" list="datalistOptions" placeholder="Tapez votre mot-clé...">
                                <datalist id="datalistOptions">
                                    @foreach ($products as $item)
                                        <option value="{{ $item->product_name }}">
                                    @endforeach
                                  </datalist>
                                <button class="btn btn-custom md-size btn-primary btn-secondary-hover searchbox-btn" type="submit">
                                    <i class="ion-ios-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="sidebar-widget sidebar-blog-categories sidebar-common mb-8" data-bg-color="#f4f8ff">
                            <h3 class="sidebar-title mb-5">Categories</h3>
                            <ul>
                                @foreach ($category as $item)
                                <li>
                                    <a href="{{ url('products-items/'.$item->name)}}">{{ $item->name }}
                                        
                                    </a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection