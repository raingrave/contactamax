@extends('layouts.app')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-12">
        <h4>{{ __('Listagem de produtos') }}</h4>
        <hr>
        @include('partials._btnew', ['route' => 'dashboard.product.create'])
        <div class="table-responsive mt-3">
          @if (count($products) > 0)
            <table class="table table-striped table-list">
              <thead>
                <tr>
                  <th>{{ __('Sku') }}</th>
                  <th>{{ __('Categoria') }}</th>
                  <th>{{ __('Nome') }}</th>
                  <th>{{ __('Descrição') }}</th>
                  <th>{{ __('Quantidade') }}</th>
                  <th>{{ __('Preço') }}</th>
                  <th>{{ __('Criado Em') }}</th>
                  <th>{{ __('Alterado Em') }}</th>
                  <th class="text-center">{{ __('Ações') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                  <td>{{ $product->sku }}</td>
                  <td>{{ $product->category->name }}</td>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->description }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->created_at->format('d/m/Y') }}</td>
                  <td>{{ $product->updated_at->format('d/m/Y') }}</td>
                  <td class="actions text-center">
                    <a href="">
                      <i class="fas fa-eye text-black-50"></i>
                    </a>
                    <a href="">
                      <i class="fas fa-edit text-black-50"></i>
                    </a>
                    <a href="#">
                      <i class="far fa-trash-alt text-danger"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          @else
            @include('partials._message', ['text' => 'Não possui itens cadastrados.', 'type' => 'warning', 'icon' => 'fa-exclamation-circle'])
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection