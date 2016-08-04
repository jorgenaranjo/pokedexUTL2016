<div class="ui modal">
    <div class="red darken-3 ">
        <div class="row white-text">
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
    </div>
    <div class="image content">
        <div class="ui medium image">
            <img ng-src="@{{ pokemon.name | imageify}}" style="width: 200px;height: 200px">
        </div>
        <div class="description">
            <div class="row">
                <div class="col l12 s12 m12">
                    <ul class="tabs">
                        <li class="tab col s4 m4 l4"><a href="#pokedex">Pokedex</a></li>
                        <li class="tab col s4 m4 l4"><a href="#stats">Stats</a></li>
                        <li class="tab col s4 m4 l4"><a href="#evolution">Evolution</a></li>
                    </ul>
                </div>
                <div id="pokedex" class="col s12 m12 l12">
                    <div class="row">
                        <ul class="collection">
                            <li class="collection-item">
                                <span>Type</span>
                                <a href="#" ng-repeat="pokemonType in pokemon.types" class="right">
                                      <span class="white-text type type-@{{pokemonType.type | lowercase}}">
                                        @{{pokemonType.type}}
                                      </span>
                                </a>
                            </li>
                            <li class="collection-item"><span>Height</span><span class="right">@{{ pokemon.height}}</span></li>
                            <li class="collection-item"><span>Weight</span><span class="right">@{{ pokemon.weight}}</span></li>
                            <li class="collection-item"><span>Abilities</span>
                                <ul>
                                    <li ng-repeat="pokemonAbilities in pokemon.abilities"><i class="material-icons tiny">star</i> @{{pokemonAbilities.ability}}</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="stats" class="col s12">
                    <ul class="collection" ng-repeat="stats in pokemon.stats">
                        <li class="collection-item">
                            <span>HP</span><span class="badge red right white-text">@{{ stats.hp }}</span>
                        </li>
                        <li class="collection-item">
                            <span>Attack</span><span class="badge red right white-text">@{{ stats.attack }}</span>
                        </li>
                        <li class="collection-item">
                            <span>Defense</span><span class="badge red right white-text">@{{ stats.defense }}</span>
                        </li>
                        <li class="collection-item">
                            <span>Special Attack</span><span class="badge red right white-text">@{{ stats.special_attack }}</span>
                        </li>
                        <li class="collection-item">
                            <span>Special Defense</span><span class="badge red right white-text">@{{ stats.special_defense }}</span>
                        </li>
                        <li class="collection-item">
                            <span>Speed</span><span class="badge red right white-text">@{{ stats.speed }}</span>
                        </li>
                        <li class="collection-item">
                            <span>Total</span><span class="badge red right white-text">@{{ stats.total }}</span>
                        </li>
                    </ul>
                </div>
                <div id="evolution" class="col s12">
                    <div class="center" ng-repeat="evolution in pokemon.evolutions">
                        <a href="#">
                            <img src="@{{evolution.name | imageify}}" width="160">
                            <p>
                                <strong>@{{evolution.name}}</strong>
                            </p>
                        </a>
                        <span ng-hide="$last" class="glyphicon glyphicon-arrow-down"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="ui black deny button">
            Cerrar
        </div>
    </div>
</div>