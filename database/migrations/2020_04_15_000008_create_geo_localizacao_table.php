<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoLocalizacaoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'geo_localizacao';

    /**
     * Run the migrations.
     * @table geo_localizacao
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_localizacao');
            $table->float('latitude');
            $table->float('longitude');
            $table->date('updated_at');
            $table->integer('id_alerta');
            $table->integer('id_usuario');

            $table->index(["id_alerta"], 'fk_geo_localizacao_alertas1_idx');

            $table->index(["id_usuario"], 'fk_geo_localizacao_usuario1_idx');


            $table->foreign('id_alerta', 'fk_geo_localizacao_alertas1_idx')
                ->references('id_alerta')->on('alertas')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_usuario', 'fk_geo_localizacao_usuario1_idx')
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
