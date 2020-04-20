<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetPicsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pet_pics';

    /**
     * Run the migrations.
     * @table pet_pics
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('link_pic', 45);
            $table->unsignedInteger('position_pic');
            $table->unsignedInteger('pet_id');

            $table->index(["pet_id"], 'fk_pet_pics_pet_id');

            $table->foreign('pet_id', 'fk_pet_pics_pet_id')
                ->references('id')->on('pets')
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
