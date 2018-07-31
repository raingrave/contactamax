@extends('layouts.app')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-12">
        <h4>{{ __('Alterar produto') }}</h4>
        <hr>
        @include('partials._message')
        <div class="text-right">
          @include('partials._btback', ['route' => 'dashboard.product.index'])
        </div>
        <div class="row">
          <div class="col-12 col-md-4">
            <form action="{{ route('dashboard.product.update', $product->id) }}" method="post">
              @include('dashboard.product.form')
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection