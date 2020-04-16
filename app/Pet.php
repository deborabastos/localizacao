<?php

namespace App;

use App\Fotos_pet;
use App\Alerta;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'id_foto',
        'link_foto',
        'posicao_foto',
        'id_pet'

    ];
    public function fotos(){

        return $this->hasMany(Fotos_pet::class);
    }

    public function alerta(){

        return $this->hasMany(Alerta::class);
    }
}
