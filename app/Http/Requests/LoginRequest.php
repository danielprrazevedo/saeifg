<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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

        $rules = [
            'registry' => 'required|exists:users,registry',
            'password' => 'required'
        ];
        return $rules;
    }

    public function messages()
    {
        $messages = [
            'registry.required' => 'A matricula é um campo obrigatório.',
            'registry.exists' => 'A matricula inválida.',
            'password.required' => 'A senha é um campo obrigatório.'
        ];
        return $messages;
    }
}
