@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card">
    <header>
      <br>
      <h4 class="text-center">Create new product</h4>
    </header>
    <div class="card-body">
      @include('products.form')
    </div>
  </div>
</div>
@endsection
