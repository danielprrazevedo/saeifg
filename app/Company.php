<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Company
 *
 * @property int $id
 * @property string $social_reason
 * @property string $fantasy_name
 * @property string $cnpj
 * @property string $address
 * @property string|null $state_registration
 * @property string $email
 * @property string $phone
 * @property string $supervisor_name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $area_id
 * @property-read \App\Area $area
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereCnpj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereFantasyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereSocialReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereStateRegistration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereSupervisorName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
