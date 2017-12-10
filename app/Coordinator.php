<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Coordinator
 *
 * @property int $id
 * @property int $user_id
 * @property int $campus_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coordinator whereCampusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coordinator whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coordinator whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coordinator whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coordinator whereUserId($value)
 * @mixin \Eloquent
 */
class Coordinator extends Model
{
    protected $fillable = [
        'user_id',
        'campus_id'
    ];

    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
