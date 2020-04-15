<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id_pet');
            $table->string('especie', 10);
            $table->string('raca', 45);
            $table->string('cor_primaria', 15);
            $table->string('cor_secundaria', 15);
            $table->string('sexo', 10);
            $table->string('tipo_pelo', 5);
            $table->integer('tamanho');
            $table->string('nome', 45)->nullable()->default(null);
            $table->string('descricao', 200)->nullable()->default(null);
            $table->binary('disponivel_adocao')->nullable()->default(null);
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
