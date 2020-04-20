<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pets';

    /**
     * Run the migrations.
     * @table pets
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('alert_type', 10);
            $table->timestamp('event_date');
            $table->string('species', 10);
            $table->string('breed', 45);
            $table->string('primary_color', 15);
            $table->string('secondary_color', 15)->nullable()->default(null);
            $table->string('sex', 10);
            $table->string('coat', 5);
            $table->unsignedInteger('size');
            $table->string('name', 45)->nullable()->default(null);
            $table->string('age', 45)->nullable()->default(null);
            $table->string('description',600)->nullable()->default(null);
            $table->binary('avaliable_adoption')->nullable();
            
            $table->unsignedInteger('user_id');

            $table->index(["user_id"], 'fk_pets_user_id');

            $table->timestamps();


            $table->foreign('user_id', 'fk_pets_user_id')
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
