<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\LogMessage
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $message_id
 * @property \App\Message $message
 * @property string $receiver
 * @property string|null $visualized
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogMessage whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogMessage whereReceiver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogMessage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LogMessage whereVisualized($value)
 * @mixin \Eloquent
 */
class LogMessage extends Model
{
    protected $fillable = [
        'message_id',
        'message',
        'receiver',
        'visualized'
    ];

    public function message()
    {
        return $this->belongsTo('\App\Message', 'message_id')->get()->last();
    }

    /**
     * @return boolean
     */
    public function youMessage()
    {
        $sender = ($this->message()->sender_id == Auth::id());

        if ($this->receiver == "R")
            $return = ($sender);
        else
            $return = (!$sender);

        return $return;
    }
}
