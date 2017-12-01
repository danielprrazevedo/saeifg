<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'dt_cad',
        'dt_term',
        'dt_prev_inic',
        'dt_prev_fim',
        'carga_horaria',
        'observacao',
        'student_id',
        'company_id'
    ];
}
