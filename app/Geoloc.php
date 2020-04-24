<?php

namespace App;

use App\User;
use App\Alert;
use Illuminate\Database\Eloquent\Model;

class Geoloc extends Model
{
    protected $table = "geoloc";

    protected $fillable = [
        'latitude',
        'longitude',
        'state',
        'city',
        'nbhood',
        'alert_id',
        'user_id'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);

    }

    public function alert(){

        return $this->belongsTo(Alert::class);
    }    
}
