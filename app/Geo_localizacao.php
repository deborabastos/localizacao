<?php

namespace App;

use App\Usuario;
use App\Alerta;

use Illuminate\Database\Eloquent\Model;

class Geo_localizacao extends Model
{
    protected $fillable = [
        'id_localizacao',
        'latitude',
        'longitude',
        'updated_at',
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
