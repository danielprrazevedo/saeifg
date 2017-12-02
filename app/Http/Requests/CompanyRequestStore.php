<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CompanyRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return (Auth::user()->user_type == 1);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'social_reason' => 'required|max:200',
            'fantasy_name' => 'required|max:200',
            'cnpj' => 'required|max:20|unique:companies,cnpj',
            'address' => 'required|max:1000',
            'state_registration' => 'max:20',
            'email' => 'required|max:200|email',
            'phone' => 'required|max:15',
            'supervisor_name' => 'required|max:200',
            'area_id' => 'required|exists:areas,id'
        ];
    }
}
