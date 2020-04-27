<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateAlertsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'alerts';

    /**
     * Run the migrations.
     * @table alerts
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('alert_type', 10);
            $table->date('event_date');
            $table->unsignedInteger('id_match')->nullable()->default(null);
            $table->unsignedInteger('alert_ended_match');
            $table->unsignedInteger('alert_ended_delete');
            $table->timestamp('ended_at')->nullable()->default(null);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('pet_id');
            $table->timestamps();

            $table->index(["pet_id"], 'fk_alerts_pet_id');
            $table->index(["user_id"], 'fk_alerts_user_id');

            $table->foreign('pet_id', 'fk_alerts_pet_id')
                ->references('id')->on('pets')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id', 'fk_alerts_user_id')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });


        DB::table('alerts')->insert([
            ['id' => 1, 'alert_type' => "achado", 'event_date' => "2020/04/02", 'id_match' => NULL, 'alert_ended_match' => 0, 'alert_ended_delete' => 1, 'ended_at' => "2020/04/03 18:55:00", 'user_id' => 1, 'pet_id' => 1, 'created_at' => "2020/04/03 17:55:00", 'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 2, 'alert_type' => "achado", 'event_date' => "2020/01/31", 'id_match' => NULL, 'alert_ended_match' => 0, 'alert_ended_delete' => 0, 'ended_at' => NULL, 'user_id' => 2, 'pet_id' => 2, 'created_at' => "2020/02/01 17:55:00",'updated_at' => "2020/02/01 17:55:00"],
            ['id' => 3, 'alert_type' => "perdido", 'event_date' => "2020/04/03", 'id_match' => NULL, 'alert_ended_match' => 0, 'alert_ended_delete' => 0, 'ended_at' => NULL, 'user_id' => 3, 'pet_id' => 3, 'created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 4, 'alert_type' => "perdido", 'event_date' => "2020/03/25", 'id_match' => 5, 'alert_ended_match' => 1, 'alert_ended_delete' => 0, 'ended_at' => "2020/03/29 10:16:00", 'user_id' => 2, 'pet_id' => 4, 'created_at' => "2020/04/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 5, 'alert_type' => "achado", 'event_date' => "2020/03/23", 'id_match' => 4, 'alert_ended_match' => 1, 'alert_ended_delete' => 0, 'ended_at' => "2020/03/29 10:16:00", 'user_id' => 3, 'pet_id' => 4, 'created_at' => "2020/03/29 10:16:00",'updated_at' => "2020/03/29 10:16:00"],
            ['id' => 6, 'alert_type' => "achado", 'event_date' => "2020/03/23", 'id_match' => NULL, 'alert_ended_match' => 0, 'alert_ended_delete' => 0, 'ended_at' => NULL,  'user_id' => 3, 'pet_id' => 5, 'created_at' => "2020/03/29 10:16:00",'updated_at' => "2020/03/29 10:16:00"],
        
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
