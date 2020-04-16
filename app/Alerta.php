<?php

namespace App;


use App\Pet;
use App\Usuario;
use App\Comentario;
use App\Geo_localizacao;
use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    protected $fillable = [

        'id_alerta',
        'tipo_alerta',
        'created_at',
        'id_match',
        'alerta_encerrado_match',
        'alerta_encerrado_delete',
        'data_encerrado',
        'id_usuario',
        'id_pet'

    ];



    public function pet()
    {

        return $this->belongsTo(Pet::class);
    }

    public function usuario(){

        return $this->belongsTo(Usuario::class);
    }

    public function comentario(){

        return $this->hasMany(Comentario::class);
    }

    public function geo_localizacao(){

        return $this->hasMany(Geo_localizacao::class);
    }



    public $timestamps = false;
}
