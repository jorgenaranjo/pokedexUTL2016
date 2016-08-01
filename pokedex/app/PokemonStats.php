<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PokemonStats extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'pokemonStats';

    protected $fillable = ['hp', 'attack', 'defense', 'special_attack', 'special_defense', 'speed',
        'total', 'pokemon_id'
    ];

    public function pokemon()
    {
        return $this->belongsTo('App\Pokemon', 'id');
    }
}
