<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class UserRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return (\Auth::user()->user_type == 1);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user_type = implode(',',array_keys(User::USER_TYPE));
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'registry' => 'required',
            'phone' => 'required',
            'user_type' => "required|in:$user_type",
        ];

        if ($this->request->user_type == 2) {
            $rules = array_merge($rules, [
                'cpf' => 'required',
                'rg' => 'required',
                'dt_nasc' => 'required|date',
                'address' => 'required|min:10',
                'course_id' => 'required|exists:courses,id',
            ]);
        }
        return $rules;
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        $messages = [

        ];
        return $messages;
    }
}
