<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensagensTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'mensagens';

    /**
     * Run the migrations.
     * @table mensagens
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_mensagens');
            $table->string('mensagem', 200);
            $table->date('send_at');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_chats')->unsigned();

            $table->index(["id_usuario"], 'fk_mensagens_usuario1_idx');

            $table->index(["id_chats"], 'fk_mensagens_chats1_idx');


            $table->foreign('id_chats', 'fk_mensagens_chats1_idx')
                ->references('id_chats')->on('chats')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_usuario', 'fk_mensagens_usuario1_idx')
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
