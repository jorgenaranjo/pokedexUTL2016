<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 30/07/16
 * Time: 11:42 PM
 */

$link = mysqli_connect('localhost', 'root', 'root', 'pokemon')
or die('No se pudo conectar: ' . mysqli_error());
echo 'Connected successfully';
mysqli_set_charset($link,"utf8");

$string = file_get_contents("pokemons.json");
$json_a = json_decode($string, true);
foreach($json_a as $pokemon){

    // Insertar el pokemon
    $query_pokemon = "INSERT INTO pokemons (name, number, specie, height, weight) values ('".$pokemon['name']."','".$pokemon['id']."','".$pokemon['species']."','".$pokemon['height']."','".$pokemon['weight']."')";
    $link->query($query_pokemon) or die('Consulta fallida: ' . $link->error);
    $pokemon_id = $link->insert_id;
    print '';

    // Insertar typo
    foreach($pokemon['type'] as $type){
        $query_pokemon = "INSERT INTO pokemonTypes (type, pokemon_id) values ('".$type."','".$pokemon_id."')";
        $link->query($query_pokemon) or die('Consulta fallida: ' . $link->error);
        print '';
    }

    // Insertar Abilities
    foreach($pokemon['abilities'] as $ability){
        $query_pokemon = "INSERT INTO pokemonAbilities (ability, pokemon_id) values ('".$ability."','".$pokemon_id."')";
        $link->query($query_pokemon) or die('Consulta fallida: ' . $link->error);
        print '';
    }

    // Insertar Stats
    $query_pokemon = "INSERT INTO pokemonStats (hp, attack, defense, special_attack, special_defense, speed, total, pokemon_id) values (".$pokemon['stats']['hp'].",".$pokemon['stats']['attack'].",".$pokemon['stats']['defense'].",".$pokemon['stats']['sp.atk'].",".$pokemon['stats']['sp.def'].",".$pokemon['stats']['speed'].",".$pokemon['stats']['total'].",'".$pokemon_id."')";
    $link->query($query_pokemon) or die('Consulta fallida: ' . $link->error);

    // Insertar Evolutions
    foreach($pokemon['evolution'] as $evolution){
        $query_pokemon = "INSERT INTO pokemonEvolutions (name, pokemon_id) values ('".$evolution."','".$pokemon_id."')";
        $link->query($query_pokemon) or die('Consulta fallida: ' . $link->error);
        print '';
    }

}