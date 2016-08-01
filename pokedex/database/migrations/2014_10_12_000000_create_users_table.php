<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->enum('type', ['admin', 'teacher']);
            $table->rememberToken();
            $table->timestamps();
        });

        $now = date('Y-m-d H:i:s');
        \DB::table('users')->insert([
            'name' => 'Administrador Pokedex',
            'email' => 'admin@pokemon.com',
            'password' => bcrypt('admin.1234'),
            'type' => 'admin',
            'created_at' => $now
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
