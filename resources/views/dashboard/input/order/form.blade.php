@csrf
<div class="form-group row ml-0">
  <input name="quantity" id="input-sku" type="text" class="form-control form-control-sm mr-1 col-md-2 sku" placeholder="{{ __('Buscar produto por SKU') }}">
  <button id="bt-product-search" class="btn btn-secondary btn-sm">
    <i class="fas fa-search"></i>
    {{ __('Buscar') }}
  </button>
</div>
<div class="table-reponsive bg-white">
  <table id="table-list" class="table">
    <thead>
      <tr>
        <th>{{ __('SKU') }}</th>
        <th>{{ __('Categoria') }}</th>
        <th>{{ __('Nome') }}</th>
        <th>{{ __('Descrição') }}</th>
        <th>{{ __('Quantidade') }}</th>
        <th>{{ __('Preço') }}</th>
        <th>{{ __('Ações') }}</th>
      </tr>
      </thead>
      <tbody>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="7" class="text-right">
            {{ __('Total') }}: R$
            <input id="input-order-total" class="input-hidden money" value="00,0" type="text" readonly>
          </td>
        </tr>
      </tfoot>
    </tr>
  </table>
</div>
<div class="form-group">
  <button class="btn btn-sm btn-secondary" type="submit">
    <i class="fas fa-save"></i>
    {{ __('Gerar ordem') }}
  </button>
</div>