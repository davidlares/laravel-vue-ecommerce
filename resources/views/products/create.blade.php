@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card padding">
    <header>
      <h4 class="text-center">Create new product</h4>
      <p class="text-center"><a href="{{url('/products')}}">Back to the list</a></p>
    </header>
    <div class="card-body">
      @include('products.form')
    </div>
  </div>
</div>
@endsection
