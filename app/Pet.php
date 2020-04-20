<?php

namespace App;

use App\Pet_pic;
use App\Alert;
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
        'description',
        'avaliable_adoption',
        'user_id',
    ];

    public function alert(){
        return $this->hasMany(Alert::class);
    }

    public function Pet_pic(){
        return $this->hasMany(Pet_pic::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

}
