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


    /**
     * The attributes that are mass assignable.
     *
     * @return string
     */
    public function type()
    {
        return $this::USER_TYPE[$this->user_type];
    }

    public function coordinator()
    {
        if ($this->user_type == 1)
            $coordinator = Coordinator::where('user_id', '=', $this->id)->get()->last();
        else
            $coordinator = new Coordinator();

        return $coordinator;
    }

    public function student()
    {
        if ($this->user_type == 2)
            $student = Student::where('user_id', '=', $this->id)->get()->last();
        else
            $student = new Student();

        return $student;
    }

    public function teacher()
    {
        if ($this->user_type == 3)
            $teacher = Teacher::where('user_id', '=', $this->id)->get()->last();
        else
            $teacher = new Teacher();

        return $teacher;
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
