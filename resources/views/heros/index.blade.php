@extends('layout')
@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
                <div class="tab-content">
                    <div id="nav-tab-card" class="tab-pane fade show active">
                        <h3>Liste des pokémons</h3>
                        <!-- Tableau -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">pokemon</th>
                                    <th scope="col">type</th>
                                    <th scope="col">type2</th>
                                    <th scope="col">sous_evolution</th>
                                    <th scope="col">evolution</th>
                                    <th scope="col">mega_evolution</th>
                                    <th scope="col">forme_normale</th>
                                    <th scope="col">generation</th>
                                    <th scope="col">region</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($heros as $hero)
                                <tr>
                                    <th scope="row">{{$hero->id}}</th>
                                    <td>{{$hero->pokemon}}</td>
                                    <td>{{$hero->type}}</td>
                                    <td>{{$hero->type2}}</td>
                                    <td>{{$hero->sous_evolution}}</td>
                                    <td>{{$hero->evolution}}</td>
                                    <td>{{$hero->mega_evolution}}</td>
                                    <td>{{$hero->forme_normale}}</td>
                                    <td>{{$hero->generation}}</td>
                                    <td>{{$hero->region}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">Editer</a>
                                        <a href="" class=" btn btn-danger btn-sm">Supprimer</a>
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