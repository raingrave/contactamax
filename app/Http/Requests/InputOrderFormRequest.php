<?php

namespace Contactamax\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputOrderFormRequest extends FormRequest
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
            'product_id' => 'required',
            'quantity' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'product_id.required' => 'É obrigatório adicionar produtos para gerar ordem.'
        ];
    }
}
