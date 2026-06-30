@props(['status'])

@if($status == 'termine')
    <span class="badge-success">Terminé</span>
@elseif($status == 'en_cours')
    <span class="badge-warning">En cours</span>
@else
    <span class="badge-secondary">En attente</span>
@endif