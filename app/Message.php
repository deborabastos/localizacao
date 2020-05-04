<?php

namespace App;

use App\Chat;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";

    protected $fillable = [
        'message',
        'send_at',
        'user_id',
        'chat_id'
    ];

    protected $dates = ['send_at'];


    public function chat(){
        return $this->belongsTo(Chat::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public $timestamps = false;

}
