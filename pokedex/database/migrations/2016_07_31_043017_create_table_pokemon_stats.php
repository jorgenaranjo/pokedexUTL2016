<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePokemonStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemonStats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hp');
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('special_attack');
            $table->integer('special_defense');
            $table->integer('speed');
            $table->integer('total');
            $table->integer('pokemon_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pokemonStats');
    }
}
