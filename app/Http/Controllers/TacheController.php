<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($projetId)
    {
// Simuler les tâches du projet
        $taches = [
            ['id' => 1, 'projet_id' => $projetId, 'titre' => 'Tâche 1'],
            ['id' => 2, 'projet_id' => $projetId, 'titre' => 'Tâche 2'],
        ];
        return response()->json([
            'projet_id' => $projetId,
            'taches' => $taches
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            'message'=>'Tache créée',
            'data'=>$request->all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json([
            'id'=>$id,
            'titre'=>'Tache '.$id,
            'description'=>'Description',
            'statut'=>'todo',
            'priorite'=>'haute'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
