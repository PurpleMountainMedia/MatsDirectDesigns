<div class="card product_card">
  <img class="card-img-top" src="{{ $product['img'] ?? '' }}" title="{{ $product['name'] ?? '' }}" alt="{{ $product['name'] ?? '' }}">
  <div class="card-body">
    <h3 class="card-title">{{ $product['name'] ?? '' }}</h3>
    <h4 class="product_card_subitle card-subtitle mb-2 text-muted">{{ $product['sub_name'] ?? '' }}</h4>
    <p class="card-text">{{ $product['exerpt'] ?? '' }}</p>
    <a href="#" title="{{ $product['name'] ?? '' }}" class="btn btn-outline-primary">{{ $product['btn'] ?? 'More Info' }}</a>
  </div>
</div>
