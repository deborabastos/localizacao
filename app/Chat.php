<?php

namespace App;

use App\Mensagen;
use App\Usuario;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public function mensagem(){

        return $this->hasMany(Mensagen::class);
    }

    public function usuario(){

        return $this->belongsTo(Usuario::class);
    }
}
