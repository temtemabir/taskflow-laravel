@extends('layouts.app')
@section('title', 'Nouveau Projet')
@section('content')
    <h1>Créer un nouveau projet</h1>
    <x-card>
        <form action="{{ url('/projets') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom du projet *</label>
                <input type="text" id="nom" name="nom" required placeholder="Ex: Site E-commerce">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4" placeholder="Décrivez votre projet..."></textarea>
            </div>
            <div class="form-group">
                <label for="statut">Statut</label>
                <select id="statut" name="statut">
                    <option value="en_attente">En attente</option>
                    <option value="en_cours">En cours</option>
                    <option value="termine">Terminé</option>
                </select>
            </div>
            <div style="margin-top: 1.5rem;">
                <button type="submit" class="btn btn-success">Créer le projet</button>
                <a href="{{ url('/projets') }}" class="btn" style="background: #ddd;">Annuler</a>
            </div>
        </form>
    </x-card>
@endsection