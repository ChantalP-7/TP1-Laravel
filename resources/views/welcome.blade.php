@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Bienvenue dans l'admin des étudiants</h1>
                </div>                
                <div class="">
                    <a href="{{ route('etudiant.index')}}">Va à la liste des étudiants</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection('content')