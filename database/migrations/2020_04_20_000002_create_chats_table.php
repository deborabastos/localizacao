<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


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
            $table->increments('id');
            $table->unsignedInteger('alert_id');
            $table->timestamp('ended_at')->nullable()->default(null);
            $table->unsignedInteger('primary_user_id');
            $table->unsignedInteger('secondary_user_id');
            $table->timestamps();

            $table->index(["secondary_user_id"], 'fk_chats_user2_id');
            $table->index(["primary_user_id"], 'fk_chats_user1_id');
            
            $table->foreign('primary_user_id', 'fk_chats_user1_id')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('secondary_user_id', 'fk_chats_user2_id')
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
