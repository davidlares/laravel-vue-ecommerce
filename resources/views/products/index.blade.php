@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      @foreach($products as $prod)
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="card padding">
            <header>
              <h2 class="card-title"><a href="{{url('products/'. $prod->id)}}">{{$prod->title}}</a></h2>
              <h4 class="card-subtitle">{{$prod->price}}</h4>
            </header>
            <p class="card-text">{{$prod->description}}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="actions">
      {{$products->links()}}
    </div>
  </div>
@endsection
