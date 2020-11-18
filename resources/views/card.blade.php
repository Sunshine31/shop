<div class="col-sm-6 col-md-4 pt-1 d-flex ">
  <div class="card thumbnail" >
    <img class="card-img-top" src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg"
      alt="iPhone X 64GB">
    <div class="card-body">
      <h3 class="card-text">{{ $product->name }}</h3>
      <p class="card-text">{{ $product->price }} руб.</p>
      <p>
        <form action="{{ route('basket-add', $product) }}" method="POST">
          <button type="submit" class="btn btn-primary" role="button">В корзину</button>
          <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-secondary"
            role="button">Подробнее</a>
          @csrf
        </form>
      </p>
    </div>
  </div>
</div>
