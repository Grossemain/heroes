@extends('layout')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8  text-center">
            <div class="card">
                <div class="card-header">
                    <h1>Recherche de pokemon</h1>
                    <div class="card-body">
                        <form action="{{ route('search.index') }}" method="GET">
                            <input type="text" name="query" value="{{ old('query', $query) }}" placeholder="Rechercher un pokemon">
                            <button type="submit">Attrape le !</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(isset($searches) && count($searches) > 0)
    <h2>Résultats de la recherche :</h2>
    <ul>
        @foreach($searches as $search)
        <div class="row row-cols-1 row-cols-md-2 g-4 text-center">
                            @foreach($searches as $search)
                            <div class="col">
                                <div class="card">
                                    @if($search->image)
                                        <img src="/storage/image/{{$search->image}}" alt="{{$search->pokemon}}" width="max">
                                    @endif
                                    <div class="card-body">
                                        <h2 class="card-title">{{$search->pokemon}}</h2>
                                        <p class="card-text">type : {{$search->type}}</p>
                                        <a href="{{ route('searches.show', $search->id)}}" class="btn btn-primary btn-sm">fiche {{$search->pokemon}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
        @endforeach
    </ul>
    @elseif(isset($query))
    <p>Aucun résultat trouvé pour "{{ $query }}".</p>
    @endif
    @endsection