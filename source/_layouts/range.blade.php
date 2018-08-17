@extends('_layouts.master')

@push('title'){{ $page->seo_title }}@endpush
@push('description'){{ $page->seo_description }}@endpush
@push('keywords'){{ $page->seo_keywords }}@endpush

@section('body')

  <div class="container my-4 py-4 pb-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/products">Products</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
      </ol>
    </nav>

    <h1 class="mt-5">{{ $page->title }}</h1>
    <h4>{{ $page->exerpt }}</h4>
  </div>

  <div class="container-fluid bg-primary py-5">
    <div class="container text-light">
      @yield('content')
    </div>
  </div>

  <div class="container my-4 py-4 pb-5">
    <section class="py-4">
      <div class="row">
        <div class="col px-4">
          @component('_partials.product-card', [
            'product' => [
              'name' => 'Martial Arts Puzzle Tiles',
              'sub_name' => 'Tatami MMA intermediate interlocking Gym mats 35mm thick 100cm X 100cm.',
              'img' => '/assets/img/md6007-suresportmma-tatami-intermediate-puzzle-mats.jpg',
              'exerpt' => 'Manufactured from a closed-cell bio density polyethylene tile. Ideal for moving up from basic moves to more competition moves but without going to a full blown Professional product.'
            ]
          ])
          @endcomponent
        </div>
        <div class="col px-4">
          @component('_partials.product-card', [
            'product' => [
              'name' => 'Mixed Martials Arts Puzzle Mats',
              'sub_name' => 'MMA Professional Tatami Puzzle Floor Mats For Competition Work.',
              'img' => '/assets/img/md6006-suresport-mma-tatami-professional-puzzle-mats.jpg',
              'exerpt' => 'MMA Judo / Ju-Jitsu interlocking martial arts mats 40mm/50mm thickness 100cm X 100cm. Manufactured from closed-cell bidensity polyethylene.'
            ]
          ])
          @endcomponent
        </div>
        <div class="col px-4">
          @component('_partials.product-card', [
            'product' => [
              'name' => 'Mixed Martial Arts Judo Puzzle Mats',
              'sub_name' => 'MMA Basic Judo Tatami Mat For Beginners.',
              'img' => '/assets/img/md6005-suresport-mma-tatami-basic-puzzle-mats.jpg',
              'exerpt' => '22mm thick 100cm X 100cm closed-cell monodensity polyethylene interlocking Tatami Basic mats. Rice-straw embossing, water-jet precision puzzle cut to enable easy fitting and simple storage.'
            ]
          ])
          @endcomponent
        </div>
      </div>
    </section>
  </div>

@endsection
