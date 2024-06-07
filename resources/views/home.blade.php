@extends('layouts.navadmin')

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
                        <div class="row row-cols-1 row-cols-md-2 g-4 text-center">
                            @foreach($heros as $hero)
                            <div class="col">
                                <div class="card">
                                    @if($hero->image)
                                        <img src="/storage/image/{{$hero->image}}" alt="{{$hero->pokemon}}" width="max">
                                    @endif
                                    <div class="card-body">
                                        <h2 class="card-title">{{$hero->pokemon}}</h2>
                                        <p class="card-text">type : {{$hero->type}}</p>
                                        <a href="{{ route('heros.show', $hero->id)}}" class="btn btn-primary btn-sm">fiche {{$hero->pokemon}}</a>
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