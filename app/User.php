<?php

namespace App;

use App\Mensagen;
use App\Chat;
use App\Geo_localizacao;
use App\Comentario;
use App\Alerta;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'password',
        'nome',
        'cpf',
        'email',
        'foto_perfil',
    ];
    public function mensagem()
    {

        return $this->hasMany(Mensagen::class);
    }
    public function chat()
    {

        return $this->hasMany(Chat::class);
    }
    public function geo_localizacao()
    {

        return $this->hasMany(Geo_localizacao::class);
    }
    public function comentario()
    {

        return $this->hasMany(Comentario::class);
    }
    public function alerta()
    {

        return $this->hasMany(Alerta::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
