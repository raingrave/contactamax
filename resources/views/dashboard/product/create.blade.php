@extends('layouts.app')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-12">
        <h4>{{ __('Listagem de produtos') }}</h4>
        <hr>
        <form action="{{ route('dashboard.product.store') }}" method="post">
          @csrf
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-sm btn-success" style="submit">
              {{ __('Salvar') }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection