<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'registry',
        'phone',
        'user_type',
    ];

    /**
     * Aqui é definido o retorno do tipo, tornando
     * desnecessário o uso de uma tabela extra no banco
     */

    const USER_TYPE = [
        1 => 'Coordenador',
        2 => 'Aluno',
        3 => 'Professor'
    ];

    public function type()
    {
        return $this::USER_TYPE[$this->user_type];
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
