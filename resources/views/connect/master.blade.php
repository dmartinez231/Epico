<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Epico - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href={{ url('/static/css/connect.css?v='.time())}}>
    <script src="https://kit.fontawesome.com/4c4b42c0e1.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <div class="content">
        <h1>
          <a id="logo" href={{url('/')}}>Epico</a>
        </h1>
        <nav>
          <ul>
            <li>
              <a href={{url('/products')}}>Productos</a>
            </li>
            <li>
              <a href={{url('/sale')}}>Ofertas</a>
            </li>
            @if (Route::has('login'))
              <li>
                <a href={{url('/user')}}>david</a>
              </li>
            @else
              <li>
                <a href={{url('/register')}}>Registrarse</a>
              </li>
              <li>
                <a href={{url('/login')}}>Iniciar Sesión</a>
              </li>
            @endif
          </ul>
        </nav>
      </div>
    </header>
    <div class="content">
      @if(Session::has('message'))
        <div class="errors mtop16">
          <div class="alert alert-danger" role="alert">
            {{Session::get('message')}}
            @if ($errors->any())
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
            @endif
          </div>
        </div>
      @endif

      @yield('content')
    </div>
    <footer>
      <div class="content">
        <p>Pagina creada por David Martinez</p>
      </div>
    </footer>
  </body>
</html>
