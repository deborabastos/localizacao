<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosPetsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'fotos_pets';

    /**
     * Run the migrations.
     * @table fotos_pets
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_foto');
            $table->string('link_foto', 45);
            $table->integer('posicao_foto');
            $table->integer('id_pet')->unsigned();

            $table->index(["id_pet"], 'fk_fotos_pet_pet_idx');


            $table->foreign('id_pet', 'fk_fotos_pet_pet_idx')
                ->references('id_pet')->on('pets')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
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
