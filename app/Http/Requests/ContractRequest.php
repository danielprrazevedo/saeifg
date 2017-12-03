<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ContractRequest extends FormRequest
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
            'dt_prev_inic' => 'required|date_format:d/m/Y',
            'dt_prev_fim' => 'required|date_format:d/m/Y',
            'carga_horaria' => 'required|integer',
            'observacao' => 'max:1000',
            'student_id' => 'required|exists:students,id',
            'company_id' => 'required|exists:companies,id',
            'teacher_id' => 'required|exists:teachers,id'
        ];
    }
}
