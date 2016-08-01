<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PokemonType extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'pokemonTypes';

    protected $fillable = ['type', 'pokemon_id'];

    public function pokemon()
    {
        return $this->belongsTo('App\Pokemon');
    }
}
