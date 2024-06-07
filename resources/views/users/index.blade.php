@extends('layouts.navadmin')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
                <div class="tab-content table-responsive-xxl">
                    <div id="nav-tab-card" class="tab-pane fade show active">
                        <h3>Liste des utilisateurs</h3>
                        <!-- Tableau -->
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">pseudo</th>
                                    <th scope="col">email</th>
                                    <th scope="col">mot de passe</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->password}}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary btn-sm" mt-2>Editer</a>
                                        <form action="{{ route('users.destroy', $user->id)}}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm mt-2" type=" submit">Supprimer</button>
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