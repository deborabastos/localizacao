<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->timestamp('event_date');
            $table->unsignedInteger('id_match')->nullable()->default(null);
            $table->binary('alert_ended_match');
            $table->binary('alert_ended_delete');
            $table->timestamp('ended_at')->nullable()->default(null);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('pet_id');
            $table->timestamps();

            $table->index(["pet_id"], 'fk_alerts_pet_id');

            $table->index(["user_id"], 'fk_alerts_user_id');



            $table->foreign('pet_id', 'fk_alerts_pet_id')
                ->references('id')->on('pets')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_alerts_user_id')
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
