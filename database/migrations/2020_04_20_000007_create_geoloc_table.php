<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeolocTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'geoloc';

    /**
     * Run the migrations.
     * @table geoloc
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->float('latitude')->default(null);;
            $table->float('longitude')->default(null);;
            $table->unsignedInteger('alert_id');
            $table->unsignedInteger('user_id');
            $table->string('state', 10);
            $table->string('city', 40);
            $table->string('nbhood', 40);

            $table->timestamps();

            $table->index(["user_id"], 'fk_geoloc_user_id');

            $table->index(["alert_id"], 'fk_geoloc_alert_id');


            $table->foreign('alert_id', 'fk_geoloc_alert_id')
                ->references('id')->on('alerts')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_geoloc_user_id')
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
