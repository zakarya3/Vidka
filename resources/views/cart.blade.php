@extends('layouts.header')
@section('content')
            <!-- Begin Breadcrumb Area -->
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('assets/breadcrumb/bg/1.jpg') }}">
                <div class="container">
                    <div class="breadcrumb-content">
                        <span class="breadcrumb-sub-title">Chariot</span>
                        <h1 class="breadcrumb-title mb-1">Votre articles</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb Area End Here -->
    
            <!-- Begin Cart Area -->
            <div class="cart-area py-140">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">images</th>
                                                <th class="cart-product-name">Produit</th>
                                                <th class="product-price">Prix unitaire</th>
                                                <th class="product-quantity">Quantité</th>
                                                <th class="product-subtotal">Total</th>
                                                <th class="product_remove">Supprimer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $total = 0;
                                            @endphp
                                            @foreach ($cartItems as $item)
                                                <tr class="product_data">
                                                    <input type="hidden" value="{{ $item->id }}" class="prod_id">
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/uploads/products/images/'.$item->attributes->image) }}" style="width: 25%" alt="Cart Thumbnail">
                                                        </a>
                                                    </td>
                                                    <td class="product-name"><a href="#">{{ $item->name }}</a></td>
                                                    <td class="product-price"><span class="amount">{{ $item->price }} MAD</span></td>
                                                    <td class="quantity">
                                                        <label>Quantity</label>
                                                        <form action="{{ route('cart.update') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $item->id}}">
                                                            <div class="cart-plus-minus">
                                                                <input class="cart-plus-minus-box qty-input" name="quantity" value="{{ $item->quantity }}" type="number">
                                                            </div>
                                                            <button class="btn btn-secondary btn-primary-hover" name="update_cart" value="Update cart" type="submit">Update cart</button>
                                                        </form>
                                                    </td>
                                                    @php
                                                        $total_price = $item->quantity * $item->price;
                                                    @endphp
                                                    <td class="product-subtotal"><span class="amount">{{ $total_price }} MAD</span></td>
                                                    <td class="product_remove">
                                                        <form action="{{ route('cart.remove') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                                            <button class="btn btn-danger" type="submit"><i class="ion-android-delete" title="Remove"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @php
                                                    $total += $item->price * $item->quantity;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Total <span>{{ $total }} MAD</span></li>
                                            </ul>
                                            <form action="{{ route('check.list') }}" method="post">
                                                <input type="hidden" value="{{ $total }}" name="">
                                                <div class="button-wrap pt-6">
                                                    <a href="{{ url('checkout') }}" class="btn btn-secondary btn-primary-hover" type="submit">Commander</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cart Area End Here -->
@endsection