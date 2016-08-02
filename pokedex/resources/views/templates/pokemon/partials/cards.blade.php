<div class="row">
    <div class="col s12 m6 l4" ng-repeat="pokemon in pokemons">
        <div class="card medium">
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
                <center><img ng-src="@{{ 'img/pokemons/' + pokemon.name + '.jpg' | lowercase}}"
                     style="width: 200px;height: 200px"></center>
                <a class="waves-effect waves-light btn" ng-repeat="pokemonType in pokemon.types">@{{ pokemonType.type }}</a>
            </div>
            <div class="card-action center">
                <a class="waves-effect waves-light btn">Mas informaci&oacute;n</a>
            </div>
        </div>
    </div>
</div>