<div class="sidebar shadow">
  <div class="header">
    <div class="logo">
        <h1>epico</h1>
    </div>
    <div class="user">
      <div class=""><span>Bienvenido:</span> </div>
      <span>{{Auth::user()->name}}</span>
      <span>{{Auth::user()->lastName}}</span>
      <span>{{Auth::user()->email}}</span>
      <a href={{url('/logout') }} class="hpvin">Cerrar sesión</a>
    </div>
  </div>
  <div class="menu">
    <ul>
      <li>
        <a href="{{url('/admin')}}">Dashboard</a>
      </li>
      <li>
        <a href="{{url('/admin/products')}}">Productos</a>
      </li>
      <li>
        <a href="{{url('/admin/users')}}">Usuarios</a>
      </li>
    </ul>
  </div>
</div>
