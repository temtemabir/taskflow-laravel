@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <div style="text-align: center; padding: 4rem 0;">
        <h1>Bienvenue sur TaskFlow</h1>
        <p style="margin: 1rem 0; font-size: 1.2rem; color: #666;">
            L'outil simple et efficace pour gérer vos projets et vos tâches au quotidien.
        </p>
        <div style="margin-top: 2rem;">
            <a href="{{ url('/projets') }}" class="btn btn-primary" style="padding: 1rem 2rem;">Voir les projets</a>
            <a href="{{ url('/projets/create') }}" class="btn btn-success" style="padding: 1rem 2rem; margin-left: 10px;">Créer un projet</a>
        </div>
    </div>
@endsection