@extends('layouts.generals.main_template')
@section('page_title')
    Pokemons
@endsection

@section('title')
    Pokemons
@endsection

@section('angular_controller')
    <div data-ng-controller="PokemonController as pokemon">
        @endsection

        @section('end_angular_controller')
    </div>
@endsection

@section('filters')
@endsection

@section('button_delete')
@endsection

@section('buttons')

@endsection

@section('body_page')
    <div class="row">
        @include('templates.pokemon.partials.cards')
        <div class="center">
            <dir-pagination-controls
                    max-size="15"
                    direction-links="true"
                    boundary-links="true" >
            </dir-pagination-controls>
        </div>
    </div>
    @include('templates.pokemon.partials.modal')
@endsection