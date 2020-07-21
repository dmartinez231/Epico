@extends('admin.master')

@section('title')
  Tablero de Usuarios
@endsection

@section('sections')
  <li>
    <a href="{{url('/admin/users')}}" class="hpvin">Usuarios</a>
  </li>
  <span>/</span>
@endsection

@section('content')
  <div class="content">
    <table class="table">
      <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Email</td>
        <td>Recibir ofertas</td>
      </tr>
      <tbody>
          @foreach($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->lastName}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->sale}}</td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection
