@extends('layouts.app')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-12">
        <h4>{{ __('Ordem de entrada') }}</h4>
        <hr>
        @include('partials._message')
        <div class="row mt-1">
          <div class="col-md-12">
            <form action="" class="form-inline">
              @include('partials._btnew', ['route' => 'dashboard.input.order.create'])
              <div class="form-group offset-md-7">
                <input name="code" type="text" class="form-control form-control-sm mr-2" placeholder="{{ __('Buscar por código') }}">
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
          @if (count($inputOrders) > 0)
            <table class="table table-striped table-list">
              <thead>
              <tr>
                <th>{{ __('Código') }}</th>
                <th>{{ __('Origem') }}</th>
                <th>{{ __('Total') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Criado Em') }}</th>
                <th class="text-center">{{ __('Ações') }}</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($inputOrders as $inputOrder)
                <tr>
                  <td>{{ $inputOrder->code }}</td>
                  <td>{{ $inputOrder->request_type }}</td>
                  <td>R$ {{ number_format($inputOrder->total, 2, ',', '.') }}</td>
                  <td>{!! is_null($inputOrder->deleted_at) ? '<span class="badge badge-success">Ativa</span>' : '<span class="badge badge-danger">Cancelada</span>'  !!}</td>
                  <td>{{ $inputOrder->created_at->format('d/m/Y') }}</td>
                  <td class="actions text-center">
                    <a href="#" class="bt-show" data-toggle="modal" data-target="#modal-show-{{ $inputOrder->id }}">
                      <i class="fas fa-cart-plus text-black-50"></i>
                    </a>
                    <a href="#" class="bt-input-order-delete">
                      <i class="far fa-trash-alt text-danger"></i>
                    </a>
                    <form class="form-input-order-delete" action="{{ route('dashboard.input.order.destroy', $inputOrder->id) }}" method="post">
                      @csrf
                    </form>
                  </td>
                  @include('dashboard.input.order._modalshow')
                </tr>
              @endforeach
              </tbody>
            </table>
          @else
            <p>{{ __('Nenhum registro encontrado.') }}</p>
          @endif
        </div>
        <div class="float-right">
          {{ $inputOrders->appends(request()->all())->links() }}
        </div>
      </div>
    </div>
  </div>
@endsection