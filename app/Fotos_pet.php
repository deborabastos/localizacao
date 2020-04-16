<?php

namespace App;

use App\Pet;

use Illuminate\Database\Eloquent\Model;

class Fotos_pet extends Model
{
    public function pet(){

        return $this->belongsTo(Pet::class);
    }
}
