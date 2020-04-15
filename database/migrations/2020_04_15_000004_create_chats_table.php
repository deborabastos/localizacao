<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'chats';

    /**
     * Run the migrations.
     * @table chats
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_chats');
            $table->integer('id_alerta');
            $table->date('created_at');
            $table->binary('chat_encerrado');
            $table->integer('id_usuario_primario');
            $table->integer('id_usuario_secundario');

            $table->index(["id_usuario_primario"], 'fk_chats_usuario1_idx');

            $table->index(["id_usuario_secundario"], 'fk_chats_usuario2_idx');


            $table->foreign('id_usuario_primario', 'fk_chats_usuario1_idx')
                ->references('id_usuario')->on('usuarios')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_usuario_secundario', 'fk_chats_usuario2_idx')
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
