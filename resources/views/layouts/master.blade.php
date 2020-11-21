<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Интернет магазин: @yield('title')</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/starter-template.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/font-awesome.min.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('index') }}">Интернет Магазин</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navbar" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a class="nav-link" href="{{ route('index') }}">Все товары</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('categories') }}">Категории</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{ route('basket') }}">В корзину</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Сбросить проект в начальное состояние</a>
          </li>
        </ul>

        <ul class="navbar-nav navbar-right">
          <li class="nav-item"><a class="nav-link" href="#">Панель администратора</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="starter-template">
      @if (session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success') }}</p>
      @endif
      @if (session()->has('warning'))
        <p class="alert alert-warning">{{ session()->get('warning') }}</p>
      @endif
      @yield('content')
    </div>
  </div>
</body>

</html>
