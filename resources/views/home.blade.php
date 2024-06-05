@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
                <div class="tab-content">
                    <div id="nav-tab-card" class="tab-pane fade show active">
                        <h3>Liste des Pokemons</h3>
                        @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{session()->get('success') }}
                        </div><br />
                        @endif
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            @foreach($heros as $hero)
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title">Nom : {{$hero->pokemon}}</h2>
                                        <p class="card-text">type2 : {{$hero->type2}}</p>
                                        <p class="card-text">sous_evolution : {{$hero->sous_evolution}}</p>
                                        <p class="card-text">evolution : {{$hero->evolution}}</p>
                                        <p class="card-text">mega_evolution : {{$hero->mega_evolution}}</p>
                                        <p class="card-text">forme_normale : {{$hero->forme_normale}}</p>
                                        <p class="card-text">generation : {{$hero->generation}}</p>
                                        <p class="card-text">region : {{$hero->region}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection