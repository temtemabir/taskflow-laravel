<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <--- LIGNE MANQUANTE À AJOUTER
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'statut',
        'priorite',
        'date_echeance',
        'projet_id',
        'user_id',
    ];
}