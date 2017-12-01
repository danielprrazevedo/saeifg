<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $fillable = [
        'fantasy_name',
        'social_reason',
        'cnpj'
    ];
}
