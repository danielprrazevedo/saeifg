<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Message
 *
 * @property int $id
 * @property int $sender_id
 * @property int $receiver_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\LogMessage[] $messages
 * @property-read \App\User $receiver
 * @property-read \App\User $sender
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereReceiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Message extends Model
{
    protected $fillable = [
        'sender_id',
        'receiver_id'
    ];

    public function messages()
    {
        return $this->hasMany('\App\LogMessage')->get();
    }

    public function lastMessage()
    {
        return $this->messages()->last();
    }

    public function sender()
    {
        return $this->belongsTo('\App\User', 'sender_id', 'id')->get()->last();
    }

    public function receiver()
    {
        return $this->belongsTo('\App\User', 'receiver_id', 'id')->get()->last();
    }

    public function messagesUser()
    {
        $id = \Auth::id();
        return $this::where('sender_id', '=', $id)->where('receiver_id', '=', $id, 'or')->get();
    }

    public function person()
    {
        return $this->sender_id == \Auth::id() ? $this->receiver() : $this->sender();
    }

    /**
     * to ficando sem ideia pra nomes de funçoes
     *
     * Essa função retorna qual o
     *
     * @return string
     */
    public function charReceiver()
    {
        return $this->sender_id == \Auth::id() ? 'R' : 'S';
    }

}