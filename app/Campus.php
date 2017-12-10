<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Campus
 *
 * @property int $id
 * @property string $fantasy_name
 * @property string $social_reason
 * @property string $cnpj
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Campus whereCnpj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Campus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Campus whereFantasyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Campus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Campus whereSocialReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Campus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Campus extends Model
{
    protected $fillable = [
        'fantasy_name',
        'social_reason',
        'cnpj'
    ];
}
