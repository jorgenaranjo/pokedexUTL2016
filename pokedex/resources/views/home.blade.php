@extends('layouts.generals.main_template')

@section('page_title')
    {{ trans('home.title') }}
@endsection

@section('homeContent')
    <div class="row">
        <div class="center">
            <h3> {{ trans('home.title') .' '.Auth::user()->name}} </h3>
            <br>
            <div class="col l10 m10 s12 push-l1 push-m1">
                <!--<div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="{{ asset("/images/SLIDER/1.png") }}">
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/2.jpg") }}">
                        </li>

                    </ul>
                </div>-->
            </div>

        </div>
    </div>
@endsection