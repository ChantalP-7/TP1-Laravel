@extends('layouts.app')
@section('title', 'Étudiants')
@section('content')
 <h1 class="amita-bold">Liste des étudiants</h1>
 <br />
 <div class="row">
    @forelse($etudiants as $etudiant)
    <div class="col-md-4 border-0">
        <div class="card mb-4 border-0">
            <div class="card-header bg-success-subtle border-0 rounded-0 pt-2 pb-0">
                <h5 class="card-title klee-one-bold fs-4">{{$etudiant->nom}}</h5>
            </div>
            <div class="card-body">               
                <p class="card-text fs-5"><strong>Date de naissance :</strong> {{ $etudiant->dateNaissance  }}</p>
                <p class="card-text fs-5"><strong>Ville :</strong> {{ $etudiant->ville->ville  }}</p>
            </div>
            <div class="card-footer border-0">
                <div class="d-flex justify-content-start bg-transparent">
                    <a href="{{ route('etudiant.show', $etudiant->id)}}" class="btn btn-sm bg-success-subtle btn-outline-primary fs-5">Profil</a>
                </div>
            </div>
            <hr/>
        <br >
        </div>
        
    </div>
    
    @empty
        <div class="alert alert-danger"> Il n'y a pas d'étudiant !</div>
    @endforelse
 </div>
@endsection('content')