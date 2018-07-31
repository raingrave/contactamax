<?php

namespace Contactamax\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'required|numeric',
            'sku' => 'required|unique:products',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'status' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
          'category_id.required' => 'O campo categoria é obrigatório.',
          'sku.required' => 'O campo sku é obrigatório.',
          'name.required' => 'O campo nome é obrigatório.',
          'description.required' => 'O campo descrição é obrigatório.',
          'price.required' => 'O campo preço é obrigatório.',
          'status.required' => 'O campo status é obrigatório.'
        ];
    }
}
