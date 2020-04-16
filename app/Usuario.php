<?php

namespace App;

use App\Mensagen;
use App\Chat;
use App\Geo_localizacao;
use App\Comentario;
use App\Alerta;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function mensagem(){

        return $this->hasMany(Mensagen::class);
    }
    public function chat(){

        return $this->hasMany(Chat::class);
    }
    public function geo_localizacao(){

        return $this->hasMany(Geo_localizacao::class);
    }
    public function comentario(){

        return $this->hasMany(Comentario::class);
    }
    public function alerta(){

        return $this->hasMany(Alerta::class);
    }
}
