<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


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
            $table->unsignedInteger('pet_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->index(["pet_id"], 'fk_comments_pet_id');
            $table->index(["user_id"], 'fk_comments_user_id');

            $table->foreign('pet_id', 'fk_comments_pet_id')
                ->references('id')->on('pets')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_comments_user_id')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });

        DB::table('comments')->insert([
            ['id' => 1, 'comment' => "Primeiro comentário", 'pet_id' => 1, 'user_id' => 3, 'created_at' => "2020/03/03 17:55:00", 'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 2, 'comment' => "Iniciou chat", 'pet_id' => 2, 'user_id' => 2, 'created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 3, 'comment' => "Outro comentário", 'pet_id' => 3, 'user_id' => 3, 'created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 4, 'comment' => "Olá, bom dia", 'pet_id' => 4, 'user_id' => 1, 'created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 5, 'comment' => "Encontrou o meu animal?", 'pet_id' => 4, 'user_id' => 2, 'created_at' => "2020/03/04 17:55:00",'updated_at' => "2020/04/04 17:55:00"],
        ]);

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
