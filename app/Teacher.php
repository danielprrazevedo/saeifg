<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
