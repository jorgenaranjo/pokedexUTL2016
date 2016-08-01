<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pokemon extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'pokemons';

    protected $fillable = ['name', 'number', 'specie', 'height', 'weight'];


    public function abilities()
    {
        return $this->hasMany('App\PokemonAbility');
    }

    public function evolutions()
    {
        return $this->hasMany('App\PokemonEvolution');
    }

    public function stats()
    {
        return $this->hasMany('App\PokemonStats', 'pokemon_id');
    }

    public function types()
    {
        return $this->hasMany('App\PokemonType');
    }

}
