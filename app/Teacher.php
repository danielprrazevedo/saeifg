<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Teacher
 *
 * @property int $id
 * @property int $user_id
 * @property int $campus_id
 * @property int $area_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereCampusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher whereUserId($value)
 * @mixin \Eloquent
 */
class Teacher extends Model
{
    protected $fillable = [
        'user_id',
        'campus_id',
        'area_id',
    ];

    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
