<?php

namespace App;

use App\Message;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = "chats";

    protected $fillable = [
        'alert_id',
        'ended_at',
        'primary_user_id',
        'secondary_user_id'
    ];


    public function message(){
        return $this->hasMany(Message::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    

}
