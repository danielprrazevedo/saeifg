<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\LogReport
 *
 * @property int $id
 * @property int $report_id
 * @property int $teacher_id
 * @property string $coment
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Report $report
 * @property-read \App\Teacher $teacher
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogReport whereComent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogReport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogReport whereReportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogReport whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogReport whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LogReport extends Model
{
    protected $fillable = [
        'report_id',
        'teacher_id',
        'coment'
    ];

    public function report()
    {
        return $this->belongsTo('\App\Report');
    }

    public function teacher()
    {
        return $this->belongsTo('\App\Teacher');
    }
}
