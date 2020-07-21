<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/static/css/admin.css?v='.time())}}">
  </head>
  <body>
    <div class="wrapper">
        <div class="col1">
          @include('admin/sidebar')
        </div>
        <div class="col2">
          <div class="shadow">
            <div class="header">
              <ul>
                <li>
                  <a href="{{url('/admin')}}" class="hpvin">Dashboard</a>
                </li>
                <span>/</span>
                @yield('sections')
              </ul>
            </div>
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
        </div>
    </div>
  </body>
</html>
