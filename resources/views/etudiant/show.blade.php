@extends('layouts.app')
@section('title', 'Etudiants')
@section('content')
 
 <div class="row justify-content-center">
   
    <div class="col-md-8">
        <h1 class="amita-bold fs-1">Étudiant</h1>
        <br />
        <div class="card mb-4 border-0">
            <div class="card-header border-0 bg-success-subtle rounded-0 pt-2 pb-0">
                <h5 class="card-title klee-one-bold fs-3">{{ $etudiant->nom }}</h5>
            </div>
            <div class="card-body border-0 ">
                <p class="card-text fs-5"><strong>Adresse :</strong> {{ $etudiant->adresse  }}</p>
                <p class="card-text fs-5"><strong>Ville :</strong> {{ $etudiant->ville->ville  }}</p>
                <p class="card-text fs-5"><strong>Téléphone :</strong> {{ $etudiant->telephone  }}</p>                
                <p class="card-text fs-5"><strong>Date de naissance :</strong> {{ $etudiant->dateNaissance  }}</p>                
                <p class="card-text fs-5"><strong>Courriel :<a class="cursor-pointer"> {{ $etudiant->courriel  }}</a></strong></p>
                
            </div>
            <div class="card-footer border-0 mb-5">
                <div class="d-flex justify-content-start gap-5">
                    <a href="#" class="btn btn-sm bg-success-subtle fs-5">Éditer</a>
                    <a href="#" class="btn btn-sm bg-danger-subtle fs-5">Supprimer</a>
                </div>
            </div>
        </div>
    </div>   
 </div>
@endsection('content')