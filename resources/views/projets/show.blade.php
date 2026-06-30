@extends('layouts.app')

@section('content')

<h1>{{ $projet->nom }}</h1>

<p>{{ $projet->description }}</p>

@if($projet->statut == 'termine')
    <span class="badge-success">Terminé</span>
@elseif($projet->statut == 'en_cours')
    <span class="badge-warning">En cours</span>
@else
    <span class="badge-secondary">En attente</span>
@endif

<h3>Tâches</h3>

@foreach($taches as $t)
    <div class="card">
        {{ $t->titre }}
    </div>
@endforeach

<a href="/projets" class="btn">Retour</a>

@endsection