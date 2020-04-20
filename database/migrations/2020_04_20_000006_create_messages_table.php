<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'messages';

    /**
     * Run the migrations.
     * @table messages
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('message', 200);
            $table->timestamp('send_at');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('chat_id');

            $table->index(["chat_id"], 'fk_messages_chat_id');

            $table->index(["user_id"], 'fk_messages_user_id');


            $table->foreign('chat_id', 'fk_messages_chat_id')
                ->references('id')->on('chats')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_messages_user_id')
                ->references('id')->on('users')
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
