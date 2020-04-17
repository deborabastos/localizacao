<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'alertas';

    /**
     * Run the migrations.
     * @table alertas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_alerta');
            $table->string('tipo_alerta', 10);
            $table->date('created_at');
            $table->integer('id_match')->nullable()->default(null)->unsigned();
            $table->binary('alerta_encerrado_match');
            $table->binary('alerta_encerrado_delete');
            $table->date('data_encerrado')->nullable()->default(null);
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_pet')->unsigned();

            $table->index(["id_pet"], 'fk_alertas_pet1_idx');

            $table->index(["id_usuario"], 'fk_alertas_usuario1_idx');


            $table->foreign('id_pet', 'fk_alertas_pet1_idx')
                ->references('id_pet')->on('pets')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_usuario', 'fk_alertas_usuario1_idx')
                ->references('id_usuario')->on('usuarios')
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
