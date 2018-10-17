@auth

{!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id], 'onsubmit' => 'return confirm("Are you sure about deleting this product?")', 'class' => 'text-center' ]) !!}
  <button type="submit" class="btn btn-link text-danger delete-button">Delete product</button>
{!! Form::close() !!}

@endauth
