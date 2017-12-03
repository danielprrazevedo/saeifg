<?php

namespace App;

use Carbon\Carbon;
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
        'company_id',
        'teacher_id'
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

    public function prev_inic()
    {
        $date = Carbon::createFromFormat('Y-m-d', $this->dt_prev_inic);

        return $date->format('d/m/Y');
    }

    public function prev_fim()
    {
        $date = Carbon::createFromFormat('Y-m-d', $this->dt_prev_fim);

        return $date->format('d/m/Y');
    }
}
