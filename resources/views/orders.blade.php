@extends('layouts.header')
@section('content')
<div class="page-title-overlap bg-dark pt-4" style="margin-top: 50px">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">

      </div>
      <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
        <h1 class="h3 text-light mb-0">Mes commandes</h1>
      </div>
    </div>
</div>
<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
        <section class="col-lg-8">
            <div class="card">
                <div class="card-body">
                  <h6>Commandes</h6>
                  <hr> 
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Numéro de suivi</th>
                          <th>Prix total</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $item)
                          <tr>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->tracking_no }}</td>
                            <td>{{ $item->total_price }}</td>
                            <td>{{ $item->status == '0' ? 'en attendant' : 'complété' }}</td>
                            <td>
                                <a href="{{ url('view-order/'.$item->id) }}" class="btn btn-primary">Vue</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </section>
    </div>
</div>
@endsection