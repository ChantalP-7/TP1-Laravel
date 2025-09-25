@extends('layouts.app')
@section('title', 'Etudiants')
@section('content')
 
 <div class="row justify-content-center">
   
    <div class="col-md-8"> 
        <h3 class="mt-2 mb-5 amita-regular">Profil étudiant</h3>       
        <div class="card mb-4 border-0">
            <div class="card-header text-white background rounded-0 pt-2 pb-0">
                <h5 class="card-title klee-one-bold fs-4">{{ $etudiant->nom }}</h5>
            </div>
            <div class="card-body border-0 ">
                <p class="card-text fs-5"><strong>Adresse :</strong> {{ $etudiant->adresse  }}</p>
                <p class="card-text fs-5"><strong>Ville :</strong> {{ $etudiant->ville->ville  }}</p>
                <p class="card-text fs-5"><strong>Téléphone :</strong> {{ $etudiant->telephone  }}</p>                
                <p class="card-text fs-5"><strong>Date de naissance :</strong> {{ $etudiant->dateNaissance  }}</p>                
                <p class="card-text fs-5"><strong>Courriel :</strong> <a class="cursor-pointer"> {{ $etudiant->courriel  }}</a></p>
                
            </div>
            <div class="card-footer bg-white border-0 rounded mt-3 mb-5">
                <div class="d-flex justify-content-between mb-5">
                   <a href="{{route('etudiant.edit', $etudiant->id)}}" class="btn btn-sm btn-success">Éditer</a>
                   
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Supprimer
                    </button>                    
                </div>
                <a href="{{ route('etudiant.index') }}" class="col-md-3 btn btn-background">
                ← Retour à la liste
            </a>  
            </div> 
                     
        </div>
        
    </div>

 </div>

 <!-- modal -->



<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="deleteModalLabel">Supprimer</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Annuler"></button>
        </div>
        <div class="modal-body">
            Es-tu sûr.e de vouloir supprimer l'étudiant : <strong> {{$etudiant->nom}}</strong>?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <form method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Supprimer" class="btn btn-danger">
            </form>
        </div>
        </div>
    </div>
</div>

@endsection('content')