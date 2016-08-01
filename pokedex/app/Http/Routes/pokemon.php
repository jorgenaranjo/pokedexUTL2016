<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 1/08/16
 * Time: 12:14 AM
 */

// CUSTOMER
// Views routes
Route::group(['middleware' => ['auth', 'admin', 'teacher']], function () {
    Route::resource('pokemons', 'PokemonController',
        ['only' => ['index', 'create', 'edit', 'show']]);
});
// API routes of Customer
Route::group(['prefix' => 'api/v1', 'middleware' => ['auth','admin', 'teacher']], function () {
    Route::get('pokemons', 'PokemonController@getAllPokemons');
});