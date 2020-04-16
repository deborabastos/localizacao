<?php

namespace App;

use App\Chat;
use App\Usuario;

use Illuminate\Database\Eloquent\Model;

class Mensagen extends Model
{
    public function chat(){

        return $this->belongsTo(Chat::class);
    }

    public function usuario(){

        return $this->belongsTo(Usuario::class);
    }
}
