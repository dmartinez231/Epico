@extends('admin.master')

@section('title')
  Tablero de Productos
@endsection

@section('sections')
  <li>
    <a href="{{url('/admin/products')}}" class="hpvin">Productos</a>
  </li>
  <span>/</span>
@endsection

@section('content')
  <div class="content">
    <div class="but">
      <a href="{{url('/admin/product/add')}}" class="btn btn-primary">Agregar producto</a>
    </div>
    <table class="table">
      <tr>
        <td>Nombre</td>
        <td>Descripción</td>
        <td>Categoria</td>
        <td>Precio</td>
        <td>Stock</td>
        <td>En Oferta</td>
      </tr>
      <tbody>

      </tbody>
    </table>
  </div>
@endsection
