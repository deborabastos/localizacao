<?php

namespace App;

use App\Fotos_pet;
use App\Alerta;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function fotos(){

        return $this->hasMany(Fotos_pet::class);
    }

    public function alerta(){

        return $this->hasMany(Alerta::class);
    }
}
