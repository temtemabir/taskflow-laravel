<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <--- VÉRIFIEZ CETTE LIGNE
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'statut', 'date_debut', 'user_id'];
}