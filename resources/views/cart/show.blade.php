@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="card padding">
      <header>
        <h3>My Shopping cart</h3>
      </header>
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-6">
            <products-sc></products-sc>
          </div>
          <div class="col-12 col-md-6 payments text-center">
            Please pay the total account with the following payment methods
            <center>
              <br>
              <img src="https://icon-icons.com/icons2/730/PNG/512/paypal_icon-icons.com_62759.png" alt="" height="45" width="45">
            </center>
            <a href="{{url('/pay')}}" class="btn btn-primary">Proceed to pay</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
