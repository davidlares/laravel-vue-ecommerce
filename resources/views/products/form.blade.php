{!! Form::open(['url' => '/products', 'method' => 'POST', 'class' => 'app-form']) !!}
  <div>
    {!! Form::label('title','Product Title') !!}
    {!! Form::text('title','',['class' => 'form-control']) !!}
  </div>

  <div>
    {!! Form::label('description','Product description') !!}
    {!! Form::textarea('description','',['class' => 'form-control']) !!}
  </div>

  <div>
    {!! Form::label('price','Product Price') !!}
    {!! Form::number('price',0,['class' => 'form-control']) !!}
  </div>

  <div>
    <br>
    <input type="submit" value="Create Product" name="save" class="btn btn-primary">
  </div>
{!! Form::close() !!}
