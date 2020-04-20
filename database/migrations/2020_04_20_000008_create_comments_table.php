<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'comments';

    /**
     * Run the migrations.
     * @table comments
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('comment', 200);
            $table->unsignedInteger('alert_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->index(["alert_id"], 'fk_comments_alert_id');

            $table->index(["user_id"], 'fk_comments_user_id');


            $table->foreign('alert_id', 'fk_comments_alert_id')
                ->references('id')->on('alerts')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_comments_user_id')
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
