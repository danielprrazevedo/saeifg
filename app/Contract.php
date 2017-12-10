<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Contract
 *
 * @property int $id
 * @property string $dt_cad
 * @property string|null $dt_term
 * @property string $dt_prev_inic
 * @property string $dt_prev_fim
 * @property int $carga_horaria
 * @property string|null $observacao
 * @property int $student_id
 * @property int $company_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $teacher_id
 * @property-read \App\Company $company
 * @property-read \App\Student $student
 * @property-read \App\Teacher $teacher
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereCargaHoraria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereDtCad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereDtPrevFim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereDtPrevInic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereDtTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereObservacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contract whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
