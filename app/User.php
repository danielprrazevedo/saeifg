<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $registry
 * @property string $password
 * @property string $phone
 * @property string $user_type
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRegistry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUserType($value)
 * @mixin \Eloquent
 */
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
        //Coordinator::where('user_id', '=', $this->id)->get()->last()
        if ($this->user_type == 1)
            $coordinator = $this->hasMany('\App\Coordinator')->get()->last();
        else
            $coordinator = new Coordinator();

        return $coordinator;
    }

    public function student()
    {
        if ($this->user_type == 2)
            $student = $this->hasMany('\App\Student')->get()->last();
        else
            $student = new Student();

        return $student;
    }

    public function teacher()
    {
        if ($this->user_type == 3)
            $teacher = $this->hasMany('\App\Teacher')->get()->last();
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
