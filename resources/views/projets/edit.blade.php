@extends('layouts.app')

@section('title','Modifier Projet')

@section('content')

<h1>Modifier Projet</h1>

<x-card>

<form method="POST" action="/projets/{{ $projet->id }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="nom" value="{{ $projet->nom }}">
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description">{{ $projet->description }}</textarea>
    </div>

    <div class="form-group">
        <label>Statut</label>
        <select name="statut">
            <option value="en_attente" {{ $projet->statut=='en_attente'?'selected':'' }}>En attente</option>
            <option value="en_cours" {{ $projet->statut=='en_cours'?'selected':'' }}>En cours</option>
            <option value="termine" {{ $projet->statut=='termine'?'selected':'' }}>Terminé</option>
        </select>
    </div>

    <br>
    <button class="btn btn-success">💾 Modifier</button>
    <a href="/projets" class="btn">Annuler</a>

</form>

</x-card>

@endsection