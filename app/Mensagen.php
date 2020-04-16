<?php

namespace App;

use App\Chat;
use App\Usuario;

use Illuminate\Database\Eloquent\Model;

class Mensagen extends Model
{
    protected $fillable = [
        'id_mensagens',
        'mensagem',
        'send_at',
        'id_usuario',
        'id_chats'

    ];
    public function chat()
    {

        return $this->belongsTo(Chat::class);
    }

    public function usuario()
    {

        return $this->belongsTo(Usuario::class);
    }
}
