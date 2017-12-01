<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    protected $dateFormat = 'Y-m-d';
}
