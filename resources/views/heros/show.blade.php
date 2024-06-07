@extends('layouts.app')
@section('content')
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
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-6">
                                @if($hero->image)
                                <img src="/storage/image/{{$hero->image}}" alt="{{$hero->pokemon}}" class="img-fluid rounded-start">
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h2 class="card-title">Nom : {{$hero->pokemon}}</h2>
                                    <p class="card-text">type2 : {{$hero->type2}}</p>
                                    <p class="card-text">sous_evolution : {{$hero->sous_evolution}}</p>
                                    <p class="card-text">evolution : {{$hero->evolution}}</p>
                                    <p class="card-text">mega_evolution : {{$hero->mega_evolution}}</p>
                                    <p class="card-text">forme_normale : {{$hero->forme_normale}}</p>
                                    <p class="card-text">generation : {{$hero->generation}}</p>
                                    <p class="card-text">region : {{$hero->region}}</p>
                                    <a href="{{ route('home')}}" class="btn btn-primary btn-sm">Retour pokedex</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection