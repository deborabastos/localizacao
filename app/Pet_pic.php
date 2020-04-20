<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class Pet_pic extends Model
{
    protected $table = "pet_pics";

    protected $fillable = [
        'link_pic',
        'position_pic',
        'pet_id',
    ];

    public function pet(){
        return $this->belongsTo(Pet::class);
    }

    public $timestamps = false;

}
