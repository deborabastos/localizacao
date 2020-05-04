<?php

namespace App;

use App\Pet;
use App\User;
use App\Comment;
use App\Geoloc;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $table = "alerts";

    protected $fillable = [
        'alert_type',
        'event_date',
        'id_match',
        'alert_ended_match',
        'alert_ended_delete',
        'ended_at',
        'user_id',
        'pet_id',
    ];

    protected $dates = ['created_at', 'updated_at', 'event_date', 'ended_at'];


    public function pet(){
        return $this->belongsTo(Pet::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function geoloc(){
        return $this->hasMany(Geoloc::class);
    }

}
