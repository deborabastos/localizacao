<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateGeolocTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'geoloc';

    /**
     * Run the migrations.
     * @table geoloc
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->float('latitude')->default(null);;
            $table->float('longitude')->default(null);;
            $table->string('state', 10);
            $table->string('city', 40);
            $table->string('nbhood', 40);
            $table->unsignedInteger('pet_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->index(["user_id"], 'fk_geoloc_user_id');
            $table->index(["pet_id"], 'fk_geoloc_pet_id');

            $table->foreign('pet_id', 'fk_geoloc_pet_id')
                ->references('id')->on('pets')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id', 'fk_geoloc_user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });


        DB::table('geoloc')->insert([
            ['id' => 1, 'latitude' => -25.432, 'longitude' => 42.3243, 'state' => "sp", 'city' => "São Paulo", 'nbhood' => "Liberdade", 'pet_id' => 1, 'user_id' => 1,'created_at' => "2020/03/03 17:55:00", 'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 2, 'latitude' => -25.432, 'longitude' => 42.3, 'state' => "sp", 'city' => "São Paulo", 'nbhood' => "Bela Vista", 'pet_id' => 2, 'user_id' => 2, 'created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 3, 'latitude' => -25.2, 'longitude' => 41.3243, 'state' => "sp", 'city' => "Campinas", 'nbhood' => "Bananal", 'pet_id' => 3, 'user_id' => 3, 'created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 4, 'latitude' => -20.432, 'longitude' => 48.2, 'state' => "sp", 'city' => "São Paulo", 'nbhood' => "Santo Amaro", 'pet_id' => 4, 'user_id' => 1, 'created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],     
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
