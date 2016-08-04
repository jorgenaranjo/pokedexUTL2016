<div class="row">
    <div class="col s12 m6 l4" ng-repeat="pokemon in pokemons">
        <div class="card">
            <div class="row red darken-3 white-text">
                <div class="col s12 m12 l5">
                    <h5>@{{ pokemon.name }}</h5>
                </div>
                <div class="col s12 m12 l5">
                    <p>@{{ pokemon.specie }}</p>
                </div>
                <div class="col s12 m12 l2">
                    <p class="right-align">#@{{ pokemon.number }}</p>
                </div>

            </div>
            <div class="card-image center">
                <center><img ng-src="@{{ pokemon.name | imageify}}"
                     style="width: 200px;height: 200px" class="materialboxed"></center>

                <a href="#" ng-repeat="pokemonType in pokemon.types">
                  <span class="waves-effect waves-light btn type type-@{{pokemonType.type | lowercase}}">
                    @{{pokemonType.type}}
                  </span>
                </a>
            </div>
            <div class="card-action center">
                <a class="waves-effect waves-light btn" ng-click="showPokemon(pokemon)">Mas informaci&oacute;n</a>
            </div>
        </div>
    </div>
</div>