<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Report
 *
 * @property int $id
 * @property int $student_id
 * @property int $contract_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Contract $contract
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\LogReport[] $reports
 * @property-read \App\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Report whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Report whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Report whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Report whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Report whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Report extends Model
{

    protected $fillable = [
        'student_id',
        'contract_id'
    ];

    public function reports()
    {
        return $this->hasMany('\App\LogReport');
    }

    public function student()
    {
        return $this->belongsTo('\App\Student');
    }

    public function contract()
    {
        return $this->belongsTo('\App\Contract');
    }
}
