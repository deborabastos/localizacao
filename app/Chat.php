<?php

namespace App;

use App\Mensagen;
use App\Usuario;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'id_chats',
        'id_alerta',
        'created_at',
        'chat_encerrado',
        'id_usuario_primario',
        'id_usuario_secudario'
    ];



    public function mensagem(){

        return $this->hasMany(Mensagen::class);
    }

    public function usuario(){

        return $this->belongsTo(Usuario::class);
    }
}
