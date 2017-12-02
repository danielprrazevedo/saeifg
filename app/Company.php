<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'social_reason',
        'fantasy_name',
        'cnpj',
        'address',
        'state_registration',
        'email',
        'phone',
        'supervisor_name',
        'area_id'
    ];

    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id', 'id');
    }
}
