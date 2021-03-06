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
            'registry' => 'required|unique:users,registry',
            'phone' => 'required',
            'user_type' => "required|in:$user_type",
        ];

        if ($this->user_type == 2) {
            $rules = array_merge($rules, [
                'cpf' => 'required|unique:students,cpf',
                'rg' => 'required',
                'dt_nasc' => 'required|date',
                'address' => 'required|min:10',
                'course_id' => 'required|exists:courses,id',
            ]);
        } elseif ($this->user_type == 3) {
            $rules = array_merge($rules, ['area_id' => 'required|exists:areas,id']);
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
