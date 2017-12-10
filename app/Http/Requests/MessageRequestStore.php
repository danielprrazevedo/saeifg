<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'receiver_id.required' => 'Você deve selecionar um destinatário.',
            'receiver_id.exists' => 'Destinatário inexistente.',
            'message.required' => 'Digite uma mensagem a ser enviada.',
            'message.max' => 'Texto muito grande, tente reduzir sua mensagem para menos de 1000 caracteres.'
        ];
    }
}
