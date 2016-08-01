<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PokemonEvolution extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'pokemonEvolutions';

    protected $fillable = ['name', 'pokemon_id'];

    public function pokemon()
    {
        return $this->belongsTo('App\Pokemon');
    }
}
