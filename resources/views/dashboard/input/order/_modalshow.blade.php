<div class="modal fade" id="modal-show-{{ $inputOrder->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-secondary">
      <div class="modal-header  text-white">
        <h5 class="modal-title">
          <i class="fas fa-cart-plus"></i>
          {{ __('Produtos') }} ({{ $inputOrder->code }})
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
          @foreach ($inputOrder->items as $key => $item)
            <span class=" badge bg-info">Item #{{ $key + 1 }}</span>
            <li class="list-group-item">
              <i class="fas fa-caret-right"></i>
              <b class="text-secondary">
                {{ __('SKU') }}:
              </b>
              {{ $item->product->sku }}
            </li>
            <li class="list-group-item">
              <i class="fas fa-caret-right"></i>
              <b class="text-secondary">
                {{ __('Nome') }}:
              </b>
              {{ $item->product->name }}
            </li>
            <li class="list-group-item">
              <i class="fas fa-caret-right"></i>
              <b class="text-secondary">
                {{ __('Quantidade') }}:
              </b>
              {{ $item->quantity }}
            </li>
            <li class="list-group-item">
              <i class="fas fa-caret-right"></i>
              <b class="text-secondary">
                {{ __('Preço') }}:
              </b>
              R$ {{ $item->product->price }}
            </li>
            <hr>
          @endforeach
          {{--<li class="list-group-item">--}}
            {{--<i class="fas fa-caret-right"></i>--}}
            {{--<b class="text-secondary">--}}
              {{--{{ __('Nome') }}:--}}
            {{--</b>--}}
            {{--{{ $product->name }}--}}
          {{--</li>--}}
          {{--<li class="list-group-item">--}}
            {{--<i class="fas fa-caret-right"></i>--}}
            {{--<b class="text-secondary">--}}
              {{--{{ __('Descrição') }}:--}}
            {{--</b>--}}
            {{--{{ $product->description }}--}}
          {{--</li>--}}
          {{--<li class="list-group-item">--}}
            {{--<i class="fas fa-caret-right"></i>--}}
            {{--<b class="text-secondary">--}}
              {{--{{ __('Preço') }}:--}}
            {{--</b>--}}
            {{--{{ $product->price }}--}}
          {{--</li>--}}
          {{--<li class="list-group-item">--}}
            {{--<i class="fas fa-caret-right"></i>--}}
            {{--<b class="text-secondary">--}}
              {{--{{ __('Status') }}:--}}
            {{--</b>--}}
            {{--{{ $product->status ? __('Em estoque') : __('Fora de estoque') }}--}}
          {{--</li>--}}
        </ul>
      </div>
    </div>
  </div>
</div>