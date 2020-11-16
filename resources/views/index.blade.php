<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Интернет Магазин</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/starter-template.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Интернет Магазин</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navbar" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a class="nav-link" href="#">Все товары</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Категории</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">В корзину</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Сбросить проект в начальное состояние</a>
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
      <h1>Все товары</h1>

      <div class="row">
        <div class="card-deck">
            <div class="col-sm-6 col-md-4 pt-1 d-flex ">
              <div class="card thumbnail" style="width: 18rem;">
                <img class="card-img-top" src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg" alt="iPhone X 64GB">
                <div class="card-body">
                  <h3 class="card-text">iPhone X 64GB</h3>
                  <p class="card-text">71990 руб.</p>
                  <p>
                    <a href="http://laravel-diplom-1.rdavydov.ru/basket/1/add" class="btn btn-primary" role="button">В
                      корзину</a>
                    <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/iphone_x_64" class="btn btn-default"
                      role="button">Подробнее</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pt-1 d-flex">
              <div class="card thumbnail" style="width: 18rem;">
                <img class="card-img-top" src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg" alt="iPhone X 256GB">
                <div class="card-body">
                  <h3>iPhone X 256GB</h3>
                  <p>89990 руб.</p>
                  <p>
                    <a href="http://laravel-diplom-1.rdavydov.ru/basket/2/add" class="btn btn-primary" role="button">В
                      корзину</a>
                    <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/iphone_x_256" class="btn btn-default"
                      role="button">Подробнее</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pt-1 d-flex">
              <div class="card thumbnail" style="width: 18rem;">
                <img class="card-img-top" src="http://internet-shop.tmweb.ru/storage/products/htc_one_s.png" alt="HTC One S">
                <div class="card-body">
                  <h3>HTC One S</h3>
                  <p>12490 руб.</p>
                  <p>
                    <a href="http://laravel-diplom-1.rdavydov.ru/basket/3/add" class="btn btn-primary" role="button">В
                      корзину</a>
                    <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/htc_one_s" class="btn btn-default"
                      role="button">Подробнее</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pt-3 d-flex">
              <div class="card thumbnail" style="width: 18rem;">
                <img class="card-img-top" src="http://internet-shop.tmweb.ru/storage/products/iphone_5.jpg" alt="iPhone 5SE">
                <div class="card-body">
                  <h3>iPhone 5SE</h3>
                  <p>17221 руб.</p>
                  <p>
                    <a href="http://laravel-diplom-1.rdavydov.ru/basket/4/add" class="btn btn-primary" role="button">В
                      корзину</a>
                    <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/iphone_5se" class="btn btn-default"
                      role="button">Подробнее</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pt-3 d-flex">
              <div class="card thumbnail" style="width: 18rem;">
                <img class="card-img-top" src="http://internet-shop.tmweb.ru/storage/products/beats.jpg" alt="Наушники Beats Audio">
                <div class="card-body">
                  <h3>Наушники Beats Audio</h3>
                  <p>20221 руб.</p>
                  <p>
                    <a href="http://laravel-diplom-1.rdavydov.ru/basket/5/add" class="btn btn-primary" role="button">В
                      корзину</a>
                    <a href="http://laravel-diplom-1.rdavydov.ru/portable/beats_audio" class="btn btn-default"
                      role="button">Подробнее</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pt-3 d-flex justify-content-between">
              <div class="card thumbnail" style="width: 18rem;">
                <img class="card-img-top img-responsive" src="http://internet-shop.tmweb.ru/storage/products/gopro.jpg" height="200" width="100" alt="Камера GoPro">
                <div class="card-body">
                  <h3 class="card-text">Камера GoPro</h3>
                  <p class="card-text">12000 руб.</p>
                  <p class="card-text mb-auto">
                    <a href="http://laravel-diplom-1.rdavydov.ru/basket/6/add" class="btn btn-primary" role="button">В
                      корзину</a>
                    <a href="http://laravel-diplom-1.rdavydov.ru/portable/gopro" class="btn btn-default"
                      role="button">Подробнее</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pt-3 d-flex">
              <div class="card thumbnail" style="width: 18rem;">
                <img class="card-img-top" src="http://internet-shop.tmweb.ru/storage/products/video_panasonic.jpg"
                  alt="Камера Panasonic HC-V770">
                <div class="card-body">
                  <h3>Камера Panasonic HC-V770</h3>
                  <p>27900 руб.</p>
                  <p>
                    <a href="http://laravel-diplom-1.rdavydov.ru/basket/7/add" class="btn btn-primary" role="button">В
                      корзину</a>
                    <a href="http://laravel-diplom-1.rdavydov.ru/portable/panasonic_hc-v770" class="btn btn-default"
                      role="button">Подробнее</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pt-3 d-flex">
              <div class="card thumbnail" style="width: 18rem;">
                <img class="card-img-top" src="http://internet-shop.tmweb.ru/storage/products/delongi.jpg" alt="Кофемашина DeLongi">
                <div class="card-body">
                  <h3>Кофемашина DeLongi</h3>
                  <p>25200 руб.</p>
                  <p>
                    <a href="http://laravel-diplom-1.rdavydov.ru/basket/8/add" class="btn btn-primary" role="button">В
                      корзину</a>
                    <a href="http://laravel-diplom-1.rdavydov.ru/appliances/delongi" class="btn btn-default"
                      role="button">Подробнее</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pt-3 d-flex">
              <div class="card thumbnail" style="width: 18rem;">
                <img class="card-img-top" src="http://internet-shop.tmweb.ru/storage/products/haier.jpg" alt="Холодильник Haier">
                <div class="card-body">
                  <h3>Холодильник Haier</h3>
                  <p>40200 руб.</p>
                  <p>
                    <a href="http://laravel-diplom-1.rdavydov.ru/basket/9/add" class="btn btn-primary" role="button">В
                      корзину</a>
                    <a href="http://laravel-diplom-1.rdavydov.ru/appliances/haier" class="btn btn-default"
                      role="button">Подробнее</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pt-3 d-flex">
              <div class="card thumbnail" style="width: 18rem;">
                <img class="card-img-top" src="http://internet-shop.tmweb.ru/storage/products/moulinex.jpg" alt="Блендер Moulinex">
                <div class="card-body">
                  <h3>Блендер Moulinex</h3>
                  <p>4200 руб.</p>
                  <p>
                    <a href="http://laravel-diplom-1.rdavydov.ru/basket/10/add" class="btn btn-primary" role="button">В
                      корзину</a>
                    <a href="http://laravel-diplom-1.rdavydov.ru/appliances/moulinex" class="btn btn-default"
                      role="button">Подробнее</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pt-3 d-flex">
              <div class="card thumbnail" style="width: 18rem;">
                <img class="card-img-top" src="http://internet-shop.tmweb.ru/storage/products/bosch.jpg" alt="Мясорубка Bosch">
                <div class="card-body">
                  <h3>Мясорубка Bosch</h3>
                  <p>9200 руб.</p>
                  <p>
                    <a href="http://laravel-diplom-1.rdavydov.ru/basket/11/add" class="btn btn-primary" role="button">В
                      корзину</a>
                    <a href="http://laravel-diplom-1.rdavydov.ru/appliances/bosch" class="btn btn-default"
                      role="button">Подробнее</a>
                  </p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
