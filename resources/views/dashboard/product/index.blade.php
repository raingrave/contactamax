@extends('layouts.app')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-12">
        <h4>{{ __('Listagem de produtos') }}</h4>
        <hr>
        @include('partials._message')
        <div class="row mt-1">
          <div class="col-md-12">
            <form action="" class="form-inline">
              @include('partials._btnew', ['route' => 'dashboard.product.create'])
              <div class="form-group offset-md-7">
                <input name="name" value="{{ old('name', request()->name) }}" type="text" class="form-control form-control-sm mr-1" placeholder="{{ __('Buscar por nome') }}">
                <input name="sku" type="text" class="form-control form-control-sm mr-1" placeholder="{{ __('Buscar por SKU') }}">
                <select name="status" class="form-control form-control-sm mr-1">
                  <option value="">Todos</option>
                  <option value="active">Ativo</option>
                  <option value="inactive">Inativo</option>
                </select>
                <button class="btn btn-sm btn-secondary" type="submit">
                  <i class="fas fa-search"></i>
                  Filtrar
                </button>
              </div>
            </form>
          </div>
        </div>
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
                  <th>{{ __('Status') }}</th>
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
                  <td>{{ number_format($product->price, 2, ',', '.') }}</td>
                  <td>{!! $product->status ? '<span class="badge badge-success">Ativo</span>' : '<span class="badge badge-danger">Inativo</span>'  !!}</td>
                  <td>{{ $product->created_at->format('d/m/Y') }}</td>
                  <td>{{ $product->updated_at->format('d/m/Y') }}</td>
                  <td class="actions text-center">
                    <a href="#" class="bt-show" data-toggle="modal" data-target="#modal-show-{{ $product->id }}">
                      <i class="fas fa-eye text-black-50"></i>
                    </a>
                    <a href="{{ route('dashboard.product.edit', $product->id) }}">
                      <i class="fas fa-edit text-black-50"></i>
                    </a>
                    <a href="#" class="bt-delete">
                      <i class="far fa-trash-alt text-danger"></i>
                    </a>
                    <form id="form-delete" action="{{ route('dashboard.product.destroy', $product->id) }}" method="post">
                      @csrf
                    </form>
                  </td>
                  @include('partials._modalshow')
                </tr>
                @endforeach
              </tbody>
            </table>
          @else
            <p>{{ __('Nenhum registro encontrado.') }}</p>
          @endif
        </div>
        <div class="float-right">
          {{ $products->appends(request()->all())->links() }}
        </div>
      </div>
    </div>
  </div>
@endsection