@extends('layouts.navadmin')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
                <div class="tab-content">
                    <div id="nav-tab-card" class="tab-pane fade show active">
                        <h3>Editer un Pokemon</h3>
                        <!-- Message d'information -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <!-- Formulaire -->
                        <form method="POST" action="{{ route('heros.update', $hero->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label>pokemon</label>
                                <input type="text" name="pokemon" class="form-control" value="{{$hero->pokemon }}">
                            </div>
                            <div class="form-group">
                                <label>type</label>
                                <input type="text" name="type" class="form-control" value="{{$hero->type }}">
                            </div>
                            <div class="form-group">
                                <label>type2</label>
                                <input type="text" name="type2" class="form-control" value="{{$hero->type2 }}">
                            </div>
                            <div class="form-group">
                                <label>sous_evolution</label>
                                <input type="text" name="sous_evolution" class="form-control" value="{{$hero->sous_evolution }}">
                            </div>
                            <div class="form-group">
                                <label>evolution</label>
                                <input type="text" name="evolution" class="form-control" value="{{$hero->evolution }}">
                            </div>
                            <div class="form-group">
                                <label>mega_evolution</label>
                                <input type="text" name="mega_evolution" class="form-control" value="{{$hero->mega_evolution }}">
                            </div>
                            <div class="form-group">
                                <label>pokemon</label>
                                <input type="text" name="pokemon" class="form-control" value="{{$hero->pokemon }}">
                            </div>
                            <div class="form-group">
                                <label>forme_normale</label>
                                <input type="text" name="forme_normale" class="form-control" value="{{$hero->forme_normale }}">
                            </div>
                            <div class="form-group">
                                <label>generation</label>
                                <input type="text" name="generation" class="form-control" value="{{$hero->generation }}">
                            </div>
                            <div class="form-group">
                                <label>region</label>
                                <input type="text" name="region" class="form-control" value="{{$hero->region }}">
                            </div>
                            
                            <button type="submit" class="btn btn-primary rounded-pill shadow-sm mt-5">Mettre à jour</button>
                        </form>
                        <!-- Fin du formulaire -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection