<?php

namespace App;

use App\Pet_pic;
use App\Comment;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = "pets";

    protected $fillable = [
        'alert_type',
        'event_date',
        'species',
        'breed',
        'primary_color',
        'secondary_color',
        'sex',
        'coat',
        'size',
        'name',
        'age',
        'state',
        'city',
        'nbhood',
        'description',
        'avaliable_adoption',
        'user_id',
    ];
    protected $dates = ['created_at', 'updated_at', 'event_date'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function pet_pic(){
        return $this->hasMany(Pet_pic::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    
}
