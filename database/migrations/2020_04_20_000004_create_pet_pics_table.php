<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


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
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        DB::table('pet_pics')->insert([
            ['id' => 1, 'link_pic' => "storage/images/pet/1.jpg", 'position_pic' => 1, 'pet_id' => 1, ],        
            ['id' => 2, 'link_pic' => "storage/images/pet/1_2.jpg", 'position_pic' => 2, 'pet_id' => 1, ],        
            ['id' => 3, 'link_pic' => "storage/images/pet/1_3.jpg", 'position_pic' => 3, 'pet_id' => 1, ],        
            ['id' => 4, 'link_pic' => "storage/images/pet/2.jpg", 'position_pic' => 1, 'pet_id' => 2, ],
            ['id' => 5, 'link_pic' => "storage/images/pet/2_2.jpg", 'position_pic' => 2, 'pet_id' => 2, ],
            ['id' => 6, 'link_pic' => "storage/images/pet/3.jpg", 'position_pic' => 1, 'pet_id' => 3, ],
            ['id' => 7, 'link_pic' => "storage/images/pet/4.jpg", 'position_pic' => 1, 'pet_id' => 4, ],
            ['id' => 8, 'link_pic' => "storage/images/pet/4_2.jpg", 'position_pic' => 2, 'pet_id' => 4, ],
            ['id' => 9, 'link_pic' => "storage/images/pet/5.jpg", 'position_pic' => 1, 'pet_id' => 5, ],
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
