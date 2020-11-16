<div class="col-sm-6 col-md-4 pt-1 d-flex ">
  <div class="card thumbnail" style="width: 18rem;">
    <img class="card-img-top" src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg"
      alt="iPhone X 64GB">
    <div class="card-body">
      <h3 class="card-text">iPhone X 64GB</h3>
      <p class="card-text">71990 руб.</p>
      <p>
        <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В
          корзину</a>
          @isset($category)
          {{ $category->name }}
          @endisset
        <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/iphone_x_64" class="btn btn-default"
          role="button">Подробнее</a>
      </p>
    </div>
  </div>
</div>
