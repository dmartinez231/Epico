@extends('connect.master')

@section('title')
  Registro
@endsection

@section('content')
    <div class="box mbottom16">
      <h3 class="mbottom16 mtop16">Registro</h3>
      {!!Form::open(['url' => '/register'])!!}
      {!!Form::label('name', 'Nombre:')!!}
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
       {!!Form::text('name', null, ['class' => 'form-control'])!!}
      </div>
      {!!Form::label('lastName', 'Apellido:',array('class' => 'mtop16'))!!}
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user-tag"></i></div>
        </div>
       {!!Form::text('lastName', null, ['class' => 'form-control'])!!}
      </div>
      {!!Form::label('email', 'Correo electrónico:',array('class' => 'mtop16'))!!}
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
      {!!Form::label('cpassword','Confirmar contraseña:',array('class' => 'mtop16'))!!}
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-key"></i></div>
        </div>
        {!!Form::password('cpassword', ['class' => 'form-control'])!!}
      </div>
      <div class="box-radio">
          {!!Form::label('sale','Desea recibir ofertas:',array('class' => 'mtop16'))!!}
        <div class="radio">
          <span>Si</span>
          {!!Form::radio('sale','si')!!}
        </div>
        <div class="radio">
          <span>No</span>
          {!!Form::radio('sale','no')!!}
        </div>
      </div>
      {!!Form::submit('Registrarse',['class' =>'btn btn-success mtop16']) !!}
      {!!Form::close()!!}
      <div class="footer mtop16">
        <a href="{{url('/login')}}">¿Ya tienes una cuenta?, Ingresar</a>
      </div>
    </div>
@endsection
