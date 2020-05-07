<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreatePetsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pets';

    /**
     * Run the migrations.
     * @table pets
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('alert_type', 10);
            $table->date('event_date');
            $table->string('species', 10);
            $table->string('breed', 45)->nullable();
            $table->string('primary_color', 15);
            $table->string('secondary_color', 15)->nullable();
            $table->string('sex', 10);
            $table->string('coat', 5);
            $table->unsignedInteger('size');
            $table->string('name', 45)->nullable();
            $table->string('age', 45)->nullable();
            $table->string('state', 10);
            $table->string('city', 40);
            $table->string('nbhood', 40);
            $table->string('description',600)->nullable();
            $table->unsignedInteger('avaliable_adoption')->nullable();
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->index(["user_id"], 'fk_pets_user_id');

            $table->foreign('user_id', 'fk_pets_user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        DB::table('pets')->insert([
            ['id' => 1, 'alert_type' => "achado", 'event_date' => "2020/04/02", 'species' => "cao", 'breed' => "shih tzu", 'primary_color' => "preto", 'secondary_color' => "branco", 'sex' => "f", 'coat' => 3, 'size' => 1, 'name' => NULL, 'age' => "adulto", 'state' => "sp", 'city' => "São Paulo", 'nbhood' => "Liberdade", 'description' => "achada perto da faculdade", 'avaliable_adoption' => 1, 'user_id' => 1, 'created_at' => "2020/04/03 17:55:00", 'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 2, 'alert_type' => "achado", 'event_date' => "2020/01/31", 'species' => "gato", 'breed' => "persa", 'primary_color' => "cinza", 'secondary_color' => "cinza", 'sex' => "m", 'coat' => 3, 'size' => 3, 'name' => NULL, 'age' => "Aproximadamente 3 anos", 'state' => "sp", 'city' => "São Paulo", 'nbhood' => "Bela Vista", 'description' => "encontrei no parque da cidade", 'avaliable_adoption' => 0, 'user_id' => 2, 'created_at' => "2020/02/01 17:55:00",'updated_at' => "2020/02/01 17:55:00"],
            ['id' => 3, 'alert_type' => "perdido", 'event_date' => "2020/04/03", 'species' => "cao", 'breed' => "labrador", 'primary_color' => "bege", 'secondary_color' => NULL, 'sex' => "m", 'coat' => 2, 'size' => 3, 'name' => "Tuco", 'age' => "5 anos", 'state' => "sp", 'city' => "Campinas", 'nbhood' => "Bananal", 'description' => "fugiu de casa no bairro Bananinha", 'avaliable_adoption' => 0, 'user_id' => 3, 'created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 4, 'alert_type' => "perdido", 'event_date' => "2020/03/25", 'species' => "gato", 'breed' => "srd", 'primary_color' => "cinza", 'secondary_color' => "branco", 'sex' => "f", 'coat' => 3, 'size' => 1, 'name' => "Gaia", 'age' => "filhote", 'state' => "sp", 'city' => "São Paulo", 'nbhood' => "Santo Amaro", 'description' => "usa uma coleira vermelha", 'avaliable_adoption' => 1, 'user_id' => 2, 'created_at' => "2020/04/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 5, 'alert_type' => "achado", 'event_date' => "2020/03/23", 'species' => "cao", 'breed' => "srd", 'primary_color' => "preto", 'secondary_color' => "marrom", 'sex' => "m", 'coat' => 1, 'size' => 2, 'name' => "Da Vinci", 'age' => NULL, 'state' => "sp", 'city' => "São Paulo", 'nbhood' => "Lapa", 'description' => "Da Vinci é um SRD que foi achado próximo ao posto de gasolina da Av Santo Amaro, no dia 12/05/2019. Estava com um coleira laranja, mas sem identificação. Tem os pelos longos, da cor preta e o fucinho da cor branca. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolores voluptatibus aliquam similique id assumenda impedit", 'avaliable_adoption' => 0,'user_id' => 3, 'created_at' => "2020/03/29 10:16:00",'updated_at' => "2020/03/29 10:16:00"],
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
