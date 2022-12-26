@extends('layouts.header')
@section('content')
            <!-- Begin Breadcrumb Area -->
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('assets/uploads/categories/images/'.$image->image) }}" style="background-position: center; background-size: contain">
                <div class="container">
                    <div class="breadcrumb-content">
                        <span class="breadcrumb-sub-title" style="color: rgb(228, 4, 36)">Nos Produits</span>
                        <h1 class="breadcrumb-title mb-1" style="color: rgb(228, 4, 36)">{{ $name }}</h1>
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
                                    <form class="sidebar-form" action="{{ url('search') }}" method="post">
                                        {{ csrf_field() }}
                                        <input class="searchbox-input" name="item" list="datalistOptions" placeholder="Tapez votre mot-clé...">
                                        <datalist id="datalistOptions">
                                            @foreach ($product as $item)
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
                                                <a href="{{ url('product/'.$name.'/'.$item->product_name) }}">
                                                    <img src="{{ asset('assets/uploads/products/images/'.$item->image) }}" alt="Product Image">
                                                </a>
                                                <div class="add-action">
                                                    <ul>
                                                        <form action="{{ route('cart.store') }}" style="width: 100%" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                                            <input type="hidden" value="{{ $item->product_name }}" name="name">
                                                            <input type="hidden" value="{{ $item->price }}" name="price">
                                                            <input type="hidden" value="{{ $item->image }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            @if ($item->price != NULL)
                                                            <li>
                                                                <button type="submit" class="btn btn-custom md-size btn-primary btn-secondary-hover">Add to Cart</button>
                                                            </li>
                                                            @else
                                                            <li>
                                                                <a class="btn btn-custom md-size btn-primary btn-secondary-hover" href="{{ url('/contact') }}">Contactez-ous</a>
                                                            </li>
                                                            @endif
                                                          </form>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content py-4">
                                                <h2 class="title mb-0"><a href="{{ url('product/'.$name.'/'.$item->product_name) }}">{{ $item->product_name }}</a></h2>
                                                <div class="price-box">
                                                    <span class="new-price">{{ $item->price }} <small>MAD</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-12 pt-10">
                                    <div class="pagination-wrap">
                                        <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
                                            <ul class="pagination">
                                              <li class="page-item"></li>
                                            </ul>
                                            <ul class="pagination-bolock">
                                              {{ $product->links('layouts.paginationlinks') }}
                                            </ul> 
                                            <ul class="pagination">
                                              <li class="page-item"></li>
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