<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'code'=>'required|unique:products',
            'name'=>'required|unique:products',
            'unit_price'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'O campo código é obrigatório',
            'code.unique' => 'Esse codigo jé esta em uso',
            
            'name.required'=> 'O campo Nome é obrigatório',
            'name.unique'=> 'Este nome já está em uso',
            
            'unit_price.required' => 'O campo Data de Nasciemnto é obrigatório'
        ];
    }
}
