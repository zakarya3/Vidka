@extends('layouts.header')
@section('content')
            <!-- Begin Checkout Area -->
            <div class="checkout-area py-140">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <form action="{{ url('payment') }}" method="post">
                                {{ csrf_field() }}
                                <div class="checkbox-form">
                                    <h3>Adresse de livraison</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Nom &amp; Prénom <span class="required">*</span></label>
                                                <input placeholder="" required="" name="userName" value="@if ($user!=NULL){{ $user->name }}@endif"  type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Numéro de téléphone <span class="required">*</span></label>
                                                <input placeholder="" required="" name="phone" value="@if ($user!=NULL){{ $user->phone }}@endif" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Adresse e-mail</label>
                                                <input placeholder="" required="" name="email" value="@if ($user!=NULL){{ $user->email }}@endif" type="email" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Adresse <span class="required">*</span></label>
                                                <input required="" name="address" value="@if ($user!=NULL){{ $user->address }}@endif" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Détails</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-product-name">Produit</th>
                                                <th class="cart-product-total">Prix</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $total = 0;
                                            @endphp
                                            @foreach ( $cartItems as $item )
                                                <tr class="cart_item">
                                                    <td class="cart-product-name"> {{ $item->name }}<strong
                                                        class="product-quantity">
                                                        × {{ $item->quantity }}</strong></td>
                                                    <td class="cart-product-total"><span class="amount">{{ $item->price }} <small>MAD</small></span></td>
                                                </tr>
                                                @php
                                                $total += $item->price * $item->quantity
                                                @endphp
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="order-total">
                                                <th>Total TTC</th>
                                                <td><strong><span class="amount">{{ $total }} <small>DH</small></span></strong></td>
                                                <input type="hidden" name="total" value="{{ $total }}">
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        
                                        <div class="order-button-payment">
                                            <button type="submit" class="btn btn-primary"style="width: 100%;">Confirmer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </form>
            </div>
@endsection