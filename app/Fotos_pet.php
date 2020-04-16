<?php

namespace App;

use App\Pet;

use Illuminate\Database\Eloquent\Model;

class Fotos_pet extends Model
{
    protected $fillable = [
        'id_foto',
        'link_foto',
        'posicao_foto',
        'id_pet',
    ];
    public function pet(){

        return $this->belongsTo(Pet::class);
    }
}
