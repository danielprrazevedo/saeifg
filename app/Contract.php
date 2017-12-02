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

    public function company()
    {
        return $this->belongsTo('\App\Company');
    }

    public function student()
    {
        return $this->belongsTo('\App\Student');
    }

    public function teacher()
    {
        return $this->belongsTo('\App\Teacher');
    }
}
