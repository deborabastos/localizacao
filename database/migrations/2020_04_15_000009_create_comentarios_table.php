<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'comentarios';

    /**
     * Run the migrations.
     * @table comentarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_comentario');
            $table->string('comentario', 200);
            $table->date('created_at');
            $table->integer('id_alerta')->unsigned();
            $table->integer('id_usuario')->unsigned();

            $table->index(["id_alerta"], 'fk_comentarios_alertas1_idx');

            $table->index(["id_usuario"], 'fk_comentarios_usuario1_idx');


            $table->foreign('id_alerta', 'fk_comentarios_alertas1_idx')
                ->references('id_alerta')->on('alertas')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_usuario', 'fk_comentarios_usuario1_idx')
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
