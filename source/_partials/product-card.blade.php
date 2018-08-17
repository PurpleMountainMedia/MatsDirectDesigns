<div class="card product_card">
  <img class="card-img-top" src="{{ $product['img'] ?? '' }}" title="{{ $product['name'] ?? '' }}" alt="{{ $product['name'] ?? '' }}">
  <div class="card-body">
    <h5 class="card-title">{{ $product['name'] ?? '' }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $product['sub_name'] ?? '' }}</h6>
    <p class="card-text">{{ $product['exerpt'] ?? '' }}</p>
    <a href="#" title="Product" class="btn btn-outline-primary">{{ $product['btn'] ?? 'More Info' }}</a>
  </div>
</div>
