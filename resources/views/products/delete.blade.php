@auth

{!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id], 'onsubmit' => 'return confirm("Are about deleting this product?")' ]) !!}
  <input type="submit" value="Delete Product" class="btn btn-danger">
{!! Form::close() !!}

@endauth
