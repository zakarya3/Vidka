@extends('layouts.header')
@section('content')
<div class="checkout-area py-140">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Your order</h3>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Veuillez nous envoyer votre chèque en suivant ces indications :
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tr>
                                                      <td>Montant</td>
                                                      <td>{{ $total }} MAD</td>
                        
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td>Bénéficiaire</td>
                                                      <td>SB-TECH</td>
                                                    </tr>
                                                    <tr>
                                                      <td>RIB</td>
                                                      <td>attijariwafa 0017263560063500</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Envoyez votre chèque à cette adresse</td>
                                                      <td>SB-TECH Maroc
                                                         CITE Almassira AGADIR- MAROC</td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Payer comptant à la livraison
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Vous payez lors de la livraison de votre commande</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment">
                                <div class="mt-3 px-2">
                                    <label for="">Sélectionnez le mode de paiement</label>
                                    <form action="{{ url('payment-method') }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="name_user" id="" value="{{ Session::get('name') }}">
                                        <input type="hidden" name="phone" id="" value="{{ Session::get('phone') }}">
                                        <input type="hidden" name="email" id="" value="{{ Session::get('email') }}">
                                        <input type="hidden" name="address" id="" value="{{ Session::get('address') }}">
                                        <input type="hidden" name="total" id="" value="{{ $total }}">
                                        @foreach ($cartItems as $item)
                                        <input type="hidden" name="id" id="" value="{{ $item->id }}">
                                        <input type="hidden" name="name" id="" value="{{ $item->name }}">
                                        <input type="hidden" name="price" id="" value="{{ $item->price }}">
                                        <input type="hidden" name="quantity" id="" value="{{ $item->name }}">
                                        @endforeach
                                        <select class="form-select" name="order_choice">
                                            <option value="0" >Payer par chèque</option>
                                            <option value="1" >Payer comptant à la livraison</option>
                                          </select>
                                          <button type="submit" class="btn btn-primary mt-3">Confirmer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection