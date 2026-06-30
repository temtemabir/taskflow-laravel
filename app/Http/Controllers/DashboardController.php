<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $total_projets = 3;

    $taches = [
        ['statut' => 'todo'],
        ['statut' => 'in_progress'],
        ['statut' => 'done'],
        ['statut' => 'todo'],
    ];

    $stats = [
        'todo' => 0,
        'in_progress' => 0,
        'done' => 0
    ];

    foreach ($taches as $tache) {
        $stats[$tache['statut']]++;
    }

    return response()->json([
        'total_projets' => $total_projets,
        'taches_par_statut' => $stats
    ]);
}
}
