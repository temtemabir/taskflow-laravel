<?php

namespace Database\Seeders;
use App\Models\Projet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Projet::create([
            'nom' => 'Site E-commerce ISIM',
            'description' => 'Boutique en ligne',
            'statut' => 'en_cours',
            'date_debut' => '2025-01-15',
            'user_id' => 1,
        ]);

        Projet::create([
            'nom' => 'Application Mobile',
            'description' => 'App Flutter',
            'statut' => 'en_attente',
            'date_debut' => '2025-02-01',
            'user_id' => 2,
        ]);

        Projet::create([
            'nom' => 'Système de gestion',
            'description' => 'Gestion interne',
            'statut' => 'termine',
            'date_debut' => '2024-12-01',
            'date_fin' => '2025-01-30',
            'user_id' => 3,
        ]);

        Projet::create([
            'nom' => 'API Laravel',
            'description' => 'Backend API',
            'statut' => 'en_cours',
            'date_debut' => '2025-03-01',
            'user_id' => 1,
        ]);

        Projet::create([
            'nom' => 'Dashboard Admin',
            'description' => 'Interface admin',
            'statut' => 'en_attente',
            'date_debut' => '2025-04-01',
            'user_id' => 2,
        ]);}
}
