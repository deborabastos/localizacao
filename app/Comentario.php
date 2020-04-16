<?php

namespace App;

use App\Usuario;
use App\Alerta;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'id_comentario',
        'comentario',
        'created_at',
        'id_alerta',
        'id_usuario'


    ];
    public function usuario(){

        return $this->belongsTo(Usuario::class);
    }

    public function alerta(){

        return $this->belongsTo(Alerta::class);
    }
}
