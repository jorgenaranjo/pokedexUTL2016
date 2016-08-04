/**
 * Created by taxque on 1/08/16.
 */
'use strict';

angular.module('Pokedex')
    .controller('PokemonController', function ($scope, pokemonServices, Notification) {
        $scope.pokemon = {};
        $scope.pokemons = [];

        pokemonServices.getAllPokemons()
            .success(function(data){
                $scope.pokemons=data;
            })
            .error(function(error){
            Notification.error(
                {
                    message: '<b>Error</b> <s>notificación</s>',
                    title: 'Error al cargar pokemones',
                    delay: 5000}
                );
        });

        $scope.showPokemon = function(pokemon){
            $scope.pokemon = pokemon;
            $('.ui.modal').modal('show');
        }

        /*$scope.editUserModal = function(user){
            $scope.user = user;
            $scope.edit = true;
            $('#edit').modal('show');
        }

        $scope.showUser = function(user){
            $scope.user = user;
            $('#show').modal('show');
        }

        $scope.deleteUserModal = function(user){
            $scope.user = user;
            $('#delete').modal('show');
        }*/
    });