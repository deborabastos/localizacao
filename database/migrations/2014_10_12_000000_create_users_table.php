<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45);
            $table->string('cpf', 14)->unique();
            $table->string('email', 45)->unique();
            $table->string('pic_profile', 100)->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            ['id' => 1, 'name' => "Pedro Henrique", 'cpf' => "123.456.789-12", 'email' => "pedroh@gmail.com", 'pic_profile' => "images/usuario/1.jpg", 'password' => "123456", 'email_verified_at' => "2020/04/03 17:55:00",'created_at' => "2020/03/03 17:55:00", 'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 2, 'name' => "Maria Eduarda", 'cpf' => "124.556.769-22", 'email' => "pmadu@gmail.com", 'pic_profile' => "images/usuario/2.jpg", 'password' => "123456", 'email_verified_at' => "2020/03/04 17:55:00",'created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 3, 'name' => "Marco Antônio", 'cpf' => "523.446.869-16", 'email' => "antonio@gmail.com", 'pic_profile' => "images/usuario/3.jpg", 'password' => "123456", 'email_verified_at' => "2020/02/05 17:55:00",'created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],
            ['id' => 4, 'name' => "Ana Clara", 'cpf' => "325.416.559-16", 'email' => "aclara@gmail.com", 'pic_profile' => "images/usuario/4.jpg", 'password' => "123456", 'email_verified_at' => "2020/02/05 17:55:00",'created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00"],
        ]);




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
