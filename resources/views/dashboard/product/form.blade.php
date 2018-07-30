@csrf
<div class="form-group">
  <label for="{{ __('Categoria') }}">
    {{ __('Categoria') }}:
  </label>
  <select name="category_id" type="text" class="form-control" placeholder="{{ __('sku do produto') }}">
    <option value="">
      {{ __('Selecione') }}
    </option>
    @foreach ($categories as $category)
      <option value="{{ $category->id }}" {{ isset($product) && $category->id == $product->category->id ? 'selected' : '' }}>
        {{ $category->name }}
      </option>
    @endforeach
  </select>
  <p class="text-danger mt-2">{{ $errors->first('category_id') }}</p>
</div>
<div class="form-group">
  <label for="{{ __('Sku') }}">
    {{ __('Sku') }}:
  </label>
  <input name="sku" value="{{ old('sku' ,isset($product->sku) ? $product->sku : null) }}" type="text" class="form-control sku" placeholder="{{ __('SKU do produto') }}">
  <p class="text-danger mt-2">{{ $errors->first('sku') }}</p>
</div>
<div class="form-group">
  <label for="{{ __('Name') }}">
    {{ __('Name') }}:
  </label>
  <input name="name" value="{{ old('name' ,isset($product->name) ? $product->name : null) }}" type="text" class="form-control" placeholder="{{ __('Nome do produto') }}">
  <p class="text-danger mt-2">{{ $errors->first('name') }}</p>
</div>
<div class="form-group">
  <label for="{{ __('Description') }}">
    {{ __('Description') }}:
  </label>
  <input name="description" value="{{ old('description' ,isset($product->description) ? $product->description : null) }}" type="text" class="form-control" placeholder="{{ __('Descrição do produto') }}">
  <p class="text-danger mt-2">{{ $errors->first('description') }}</p>
</div>
<div class="form-group">
  <label for="{{ __('Price') }}">
    {{ __('Price') }}:
  </label>
  <input name="price" value="{{ old('price' ,isset($product->price) ? $product->price : null) }}" type="text" class="form-control money" placeholder="{{ __('Preço do produto') }}">
  <p class="text-danger mt-2">{{ $errors->first('price') }}</p>
</div>
<div class="form-group">
  <label for="{{ __('Status') }}">
    {{ __('Status') }}:
  </label>
  <select name="status" class="form-control">
    <option value="1">Ativo</option>
    <option value="0" {{ isset($product) && !$product->status ? 'selected' : null }}>Inativo</option>
  </select>
  <p class="text-danger mt-2">{{ $errors->first('status') }}</p>
</div>
<div class="form-group">
  <button class="btn btn-sm btn-secondary btn-block" type="submit">
    <i class="fas fa-save"></i>
    {{ __('Salvar') }}
  </button>
</div>