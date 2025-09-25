<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'Hello! 🌺';
        //Écrire des méthodes qui viennent de Eloquent, les méthode sont enchaînées, donc on peut les concaténer...
            // Méthode static extensie la classe par défaut. Pas besoin d'utiliser extends
        //$tasks = Task::select()->orderby('title')->get();
        //$tasks = Task::select()->orderby('title')->get();
        //$tasks = Task::select()->orderby('title')->first;
        //return $tasks[3]->title;
        $etudiants = Etudiant::select()->with('ville') // Eloquent a fait Select * from etudiants;
        ->orderby('nom')
        ->paginate(10);
        return view('etudiant.index', ["etudiants" => $etudiants]);       

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::all() ;
        return view('etudiant.create', compact('villes')); // Tableau associatif : compact('villes') est équivalent et un raccourci de 'villes' => $villes
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'nom' => 'required|string|max:190',
        'adresse' => 'required|string|max:190',
        'telephone' => 'required|string',
        'dateNaissance' => 'required|date',
        'courriel' => 'required|string',
    ]);

    $etudiant = Etudiant::create([
        'nom' => $request->nom,
        'adresse' => $request->adresse,
        'telephone' => $request->telephone,
        'dateNaissance' => $request->dateNaissance,
        'courriel' => $request->courriel,        
        'ville_id' => 1
    ]);

    return redirect()->route('etudiant.show', $etudiant->id)->with('success', 'Étudiant créé avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return view('etudiant.show', ['etudiant' => $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $villes = Ville::all();
        return view('etudiant.edit', compact('etudiant', 'villes')); // compact est un raccourci pour les tableaux associatifs
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
        'nom' => 'required|string|max:190',
        'adresse' => 'required|string|max:190',
        'telephone' => 'required|string|max:15',
        'dateNaissance' => 'required|date',
        'courriel' => 'required|email|max:50',
        'ville_id' => 'required|exists:villes,id',
    ]);

     $etudiant->update([
        'nom' => $request->nom,
        'adresse' => $request->adresse,
        'telephone' => $request->telephone,
        'dateNaissance' => $request->dateNaissance,
        'courriel' => $request->courriel,        
        'ville_id' => 1
        
     ]);

     return redirect()->route('etudiant.show', $etudiant->id)->with('success', 'Étudiant mis à jour !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiant.index')->withSuccess('Étudiant supprimé avec succès!');
    }
}
