@extends('layouts.app')
@section('title', 'Mes Projets')
@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h1>📁 Mes Projets</h1>

        <a href="/projets/create" class="btn btn-primary">+ Ajouter</a>
        <a href="/projets/edit" class="btn">✏ Modifier</a>
    </div>
    

    @forelse($projets as $projet)
        <x-card>
            <div style="display: flex; justify-content: space-between;">
                <div>
                    <h3>{{ $projet->nom }}</h3>
                    <p>{{ $projet->description }}</p>
                </div>
                <div>
                    <x-status-badge :status="$projet->statut" />
                </div>
            </div>
            <div style="margin-top: 1rem;">
                <a href="{{ url('/projets/' . $projet->id) }}" class="btn btn-primary">Voir</a>
            </div>
        </x-card>

    @empty
        <x-card>
            <p>Aucun projet trouvé. Créez votre premier projet !</p>
        </x-card>
    @endforelse
    <div style="text-align:center; margin-top:20px;">
    <a href="#" class="btn">⬅</a>
    <span style="margin:0 10px;">Page 1 sur 3</span>
    <a href="#" class="btn">➡</a>
    </div>
@endsection

