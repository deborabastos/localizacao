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
            $table->string('avatar')->default('default.png');
            $table->string('password', 100);
            $table->string('phone');
            //$table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('is_admin')->default(false);

        });

        DB::table('users')->insert([
            ['id' => 1, 'name' => "Pedro Henrique", 'cpf' => "123.456.789-12", 'email' => "pedroh@gmail.com", 'avatar' => "1.jpeg", 'password' => "123456", 'phone' => '61992028069','created_at' => "2020/03/03 17:55:00", 'updated_at' => "2020/04/03 17:55:00",'is_admin'=>0],
            ['id' => 2, 'name' => "Maria Eduarda", 'cpf' => "124.556.769-22", 'email' => "pmadu@gmail.com", 'avatar' => "2.jpeg", 'password' => "123456", 'phone' => '61992028069','created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00",'is_admin'=>0],
            ['id' => 3, 'name' => "Marco Antônio", 'cpf' => "523.446.869-16", 'email' => "antonio@gmail.com", 'avatar' => "3.jpeg", 'password' => "123456", 'phone' => '61992028069','created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00",'is_admin'=>0],
            ['id' => 4, 'name' => "Ana Clara", 'cpf' => "325.416.559-16", 'email' => "aclara@gmail.com", 'avatar' => "4.jpeg", 'password' => "123456", 'phone' => '61992028069','created_at' => "2020/03/03 17:55:00",'updated_at' => "2020/04/03 17:55:00",'is_admin'=>0],
            ['id' => 5, 'name' => "Admin", 'cpf' => "000.000.000-00", 'email' => "suporte@gmail.com", 'avatar' => "default.png", 'password' => "admin123", 'phone' => '61992028069','created_at' => "2020/03/03 17:55:00", 'updated_at' => "2020/04/03 17:55:00",'is_admin'=>1], 
            
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
