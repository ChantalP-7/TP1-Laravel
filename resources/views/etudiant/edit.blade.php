@extends('layouts.app')
@section('title', 'Ajoute étudiant')
@section('content')
<h1 class="mb-4 text-center"><strong>Ajoute un étudiant</strong></h1>
    
    <div class="row justify-content-center mt-5 mb-5">        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="card-title fs-4"><strong>Éditer  </strong>{{ $etudiant->nom }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('etudiant.update', $etudiant) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nom" class="form-label"><strong>Nom</strong></label>
                            <input type="text" class="form-control" id="nom" name="nom"  value="{{ $etudiant->nom }}">
                        </div>
                         @if ($errors->has('nom'))
                            <div class="text-danger mt-2">
                                {{$errors->first('nom')}}
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="adresse" class="form-label"><strong>Adresse</strong></label>
                            <input type="text" class="form-control" id="adresse" name="adresse"   value="{{ $etudiant->adresse }}">
                        </div>
                        @if ($errors->has('adresse'))
                            <div class="text-danger mt-2">
                                {{$errors->first('adresse')}}
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="telephone" class="form-label"><strong>Téléphone</strong></label>
                            <input type="text" class="form-control" id="telephone" name="telephone"   value="{{ $etudiant->telephone }}">
                        </div>
                        @if ($errors->has('telephone'))
                            <div class="text-danger mt-2">
                                {{$errors->first('telephone')}}
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="dateNaissance" class="form-label"><strong>Date de naissance</strong></label>
                            <input type="date" class="form-control" id="dateNaissance" name="dateNaissance"   value="{{ $etudiant->dateNaissance }}">
                        </div>
                        @if ($errors->has('dateNaissance'))
                            <div class="text-danger mt-2">
                                {{$errors->first('dateNaissance')}}
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="courriel" class="form-label"><strong>Courriel</strong></label>
                            <input type="email" class="form-control" id="courriel" name="courriel"   value="{{ $etudiant->courriel }}">
                        </div>
                        @if ($errors->has('courriel'))
                            <div class="text-danger mt-2">
                                {{$errors->first('courriel')}}
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="ville_id" class="form-select-label"><strong>Villes</strong></label>
                            <select name="ville_id" id="ville_id">
                                <option value="">Selectionne une ville</option>
                                @foreach($villes as $ville) 
                                <option value="{{ $ville->id }}" {{ $etudiant->ville_id == $ville->id ? 'selected' : '' }}>{{ $ville->ville }}</option>
                                @endforeach
                            </select>
                        </div> 
                        @if ($errors->has('ville_id'))
                            <div class="text-danger mt-2">
                                {{$errors->first('ville_id')}}
                            </div>
                        @endif                      
                        <br/>
                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection