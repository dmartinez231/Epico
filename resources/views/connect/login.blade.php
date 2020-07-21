@extends('connect.master')

@section('title')
  Iniciar Sesión
@endsection

@section('content')
    <div class="box mbottom16">
      <h3 class="mbottom16 mtop16">Iniciar sesión</h3>
      {!!Form::open(['url' => '/login'])!!}
      {!!Form::label('email', 'Correo electrónico:')!!}
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="far fa-envelope"></i></div>
        </div>
       {!!Form::email('email', null, ['class' => 'form-control'])!!}
      </div>
       {!!Form::label('password','Contraseña:',array('class' => 'mtop16'))!!}
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-key"></i></div>
        </div>
       {!!Form::password('password', ['class' => 'form-control'])!!}
      </div>
      {!!Form::submit('Ingresar',['class' =>'btn btn-success mtop16']) !!}
      {!!Form::close()!!}
      <div class="footer mtop16">
        <a href="{{url('/register')}}">¿No tenes una cuenta?, Registrarse</a>
        <a href="{{url('/recover')}}">Recuperar contraseña</a>
      </div>
    </div>
@endsection
