@extends('layouts.app')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-3 mb-4">
        @include('partials._card', ['title' => 'Gerenciar produtos', 'icon' => 'plus', 'route' => 'dashboard.product.index'])
      </div>
      <div class="col-12 col-md-3 mb-4">
        @include('partials._card', ['title' => 'Entrada de produtos', 'icon' => 'cart-plus', 'route' => 'dashboard.product.index'])
      </div>
      <div class="col-12 col-md-3 mb-4">
        @include('partials._card', ['title' => 'Saída de produtos', 'icon' => 'cart-arrow-down', 'route' => 'dashboard.product.index'])
      </div>
      <div class="col-12 col-md-3 mb-4">
        @include('partials._card', ['title' => 'Relatórios', 'icon' => 'history', 'route' => 'dashboard.product.index'])
      </div>
    </div>
  </div>

@endsection