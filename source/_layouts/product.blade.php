@extends('_layouts.master')

@section('body')

  <div class="container my-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Products</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">{{ ucfirst($page->range_slug) }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
      </ol>
    </nav>

    <h1 class="my-5">{{ $page->title }}</h1>
    @yield('content')
  </div>




@endsection
