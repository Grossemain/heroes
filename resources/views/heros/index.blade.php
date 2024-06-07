@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
                <div class="tab-content table-responsive-xxl">
                    <div id="nav-tab-card" class="tab-pane fade show active">
                        <h3>Liste des pokémons</h3>
                        <!-- Tableau -->
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">image</th>
                                    <th scope="col">pokemon</th>
                                    <th scope="col">type</th>
                                    <th scope="col">generation</th>
                                    <th scope="col">region</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($heros as $hero)
                                <tr>
                                    <th scope="row">{{$hero->id}}</th>
                                    @if($hero->image)
                                    <td>
                                        <img src="/storage/image/{{$hero->image}}" alt="{{$hero->pokemon}}" width="100">
                                    </td>
                                    @endif
                                    <td>{{$hero->pokemon}}</td>
                                    <td>{{$hero->type}}</td>
                                    <td>{{$hero->generation}}</td>
                                    <td>{{$hero->region}}</td>
                                    <td>
                                        <a href="{{ route('heros.edit', $hero->id)}}" class="btn btn-primary btn-sm">Editer</a>
                                        <a href="{{ route('heros.destroy', $hero->id)}}" class=" btn btn-danger btn-sm">Supprimer</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Fin du Tableau -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection