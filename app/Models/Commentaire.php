<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = ['contenu', 'tache_id'];

    // Relation : Un commentaire appartient à une tâche
    public function tache() {
        return $this->belongsTo(Tache::class);
    }
}

