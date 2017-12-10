<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Student
 *
 * @property int $id
 * @property string $cpf
 * @property string $rg
 * @property string $dt_nasc
 * @property string $address
 * @property int $user_id
 * @property int $course_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereCpf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereDtNasc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereRg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUserId($value)
 * @mixin \Eloquent
 */
class Student extends Model
{
    protected $fillable = [
        'cpf',
        'rg',
        'dt_nasc',
        'address',
        'user_id',
        'course_id',
    ];

    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
