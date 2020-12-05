<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonRequest extends FormRequest
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
            'name'=>'required',
            'cpf'=>'required|cpf|formato_cpf|unique:person',
            'date_of_birth'=>'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=> 'O campo Nome é obrigatório',

            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.unique' => 'O campo CPF já está registrado',
            
            'date_of_birth.required' => 'O campo Data de Nasciemnto é obrigatório'
        ];
    }
}
