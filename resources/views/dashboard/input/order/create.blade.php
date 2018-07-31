@extends('layouts.app')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-12">
        <h4>{{ __('Nova ordem de entrada') }}</h4>
        <hr>
        @include('partials._message')
        <div class="text-right">
          @include('partials._btback', ['route' => 'dashboard.input.order.index'])
        </div>
        <div class="row">
          <div class="col-12 col-md-12">
            <p class="text-danger mt-2 auto-hide">{{ $errors->first('product_id') }}</p>
            <form action="{{ route('dashboard.input.order.store') }}" method="post">
              @include('dashboard.input.order.form')
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection