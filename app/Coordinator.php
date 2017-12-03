<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
