@extends('admin.master')

@section('title')
  Agregar Producto
@endsection

@section('sections')
  <li>
    <a href="{{url('/admin/products')}}" class="hpvin">Productos</a>
  </li>
  <span>/</span>
  <li>
    <a href="{{url('/admin/product/add')}}" class="hpvin">Agregar Producto</a>
  </li>
  <span>/</span>
@endsection

@section('content')
  <div class="content">
    <div class="title mb-3">
      <h5>Agregar Producto</h5>
    </div>
    <div class="form">
      {!! Form::open(['url'=> 'admin/product/add'])!!}
        <div class="row">
          <div class="col-md-3 mb-3">
            {!!Form::label('name','Nombre de Producto:')!!}
            {!!Form::text('name', null, ['class' => 'form-control'])!!}
          </div>
          <div class="col-md-3 mb-3">
            {!!Form::label('category', 'Categoria:')!!}
            {!!Form::text('category', null, ['class' => 'form-control'])!!}
          </div>
          <div class="col-md-3 mb-3">
            <label for="">Cargar imagen:</label>
            <div class="custom-file">
              {!!Form::label('img', 'Click aqui', ['class' => 'custom-file-label', 'id' =>'customFile'])!!}
              {!!Form::file('img', ['class' => 'custom-file-input', 'id' => 'customFile'])!!}
            </div>
          </div>
          <div class="col-md-3 mb-3">
            {!!Form::label('price', 'Precio:')!!}
            {!!Form::number('price', null, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any'])!!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            {!!Form::label('stock', 'Cantidad:')!!}
            {!!Form::text('stock', null, ['class' => 'form-control'])!!}
          </div>
          <div class="col-md-3 mb-3">
            {!!Form::label('sale', 'En Oferta:')!!}
            <div class="text-center">
              <div class="custom-control-inline">
                <div class="custom-control custom-radio">
                  {!!Form::radio('sale','si')!!}
                  <span>Si</span>
                </div>
                <div class="custom-control custom-radio">
                  {!!Form::radio('sale','no',true)!!}
                  <span>No</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            {!!Form::label('discount', '% de Descuento:')!!}
            {!!Form::number('discount', null, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any'])!!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            {!!Form::label('description', 'Descripción de Producto:')!!}
            {!!Form::textarea('description', null, ['class' => 'form-control'])!!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              {!!Form::submit('Agregar producto',['class' =>'btn btn-success']) !!}
          </div>
        </div>
      {!! Form::close()!!}
    </div>
  </div>
@endsection
