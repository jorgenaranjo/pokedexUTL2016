/**
 * Created by taxque on 1/08/16.
 */

/**
 * Created by taxque on 9/02/16.
 */

angular.module('Pokedex')
    .factory('pokemonServices', function (HOST, $http) {
        return{
            getAllPokemons : function(){
                return $http.get(HOST+'api/v1/pokemons')
            }
        }
    });