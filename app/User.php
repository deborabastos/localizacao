<?php

namespace App;

use App\Message;
use App\Chat;
use App\Geoloc;
use App\Comment;
use App\Alert;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'avatar',
        'phone',
        'password',
    ];
    
    protected $dates = ['created_at', 'updated_at', 'email_verified_at'];

    
    public function pet(){
        return $this->hasMany(Pet::class);
    }

    public function message(){
        return $this->hasMany(Message::class);
    }

    public function chat(){
        return $this->hasMany(Chat::class);
    }

    public function geoloc(){
        return $this->hasMany(Geoloc::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
   
    public function alert(){
        return $this->hasMany(Alert::class);
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
