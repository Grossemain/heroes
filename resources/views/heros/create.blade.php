@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
                <div class="tab-content">
                    <div id="nav-tab-card" class="tab-pane fade show active">
                        <h3> Ajouter un héro</h3>
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
                        <form method="POST" action="{{ route('heros.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nom pokemon</label>
                                <input type="text" name="pokemon" class="form-control">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="image" class="form-label">Image du pokemon</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <input type="text" name="type" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>type2</label>
                                <input type="text" name="type2" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>sous_evolution</label>
                                <input type="text" name="sous_evolution" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>evolution</label>
                                <input type="text" name="evolution" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>mega_evolution</label>
                                <input type="text" name="mega_evolution" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>forme_normale</label>
                                <input type="text" name="forme_normale" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>generation</label>
                                <input type="text" name="generation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>region</label>
                                <input type="text" name="region" class="form-control">
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill shadow-sm mt-4">
                        Ajouter un Pokemon </button>
                    </form>
                    <!-- Fin du formulaire -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection