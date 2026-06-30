<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
    $projets = [
        (object) ['id' => 1, 'nom' => 'Site E-commerce', 'description' => 'Boutique en ligne', 'statut' => 'en_cours'],
        (object) ['id' => 2, 'nom' => 'Application Mobile', 'description' => 'App iOS/Android', 'statut' => 'termine'],
        (object) ['id' => 3, 'nom' => 'API REST', 'description' => 'Backend API', 'statut' => 'en_attente'],
    ];
    return view('projets.index', compact('projets'));
}


    public function show($id) {
    $projet = (object) [
        'id' => $id, 'nom' => 'Site E-commerce', 'description' => 'Développement d\'une boutique', 
        'statut' => 'en_cours', 'date_creation' => '2025-01-15'
    ];
    $taches = [
        (object) ['id' => 1, 'titre' => 'Créer la BDD', 'statut' => 'termine'],
        (object) ['id' => 2, 'titre' => 'Design UI', 'statut' => 'en_cours'],
    ];
    return view('projets.show', compact('projet', 'taches'));
}


    
    public function create()
    {
        return "Formulaire de création de projet";    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
    return response()->json(['message' => 'Projet reçu !', 'data' => $request->all()]);
}


    /**
     * Display the specified resource.
     */
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $projet = (object)[
        'id'=>$id,
        'nom'=>'Test projet',
        'description'=>'Desc',
        'statut'=>'en_cours'
    ];

    return view('projets.edit', compact('projet'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
