<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:4',
            'last' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo Nome é obrigatório',
            'name.min' => 'O campo precisa no minimo 4 caracteres',
            'last.required' => 'O campo Sobrenome é obrigatório',
            'last.min' => 'O campo precisa no minimo 5 caracteres',
        ];
    }
}
