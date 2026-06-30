<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
            'name' => 'Admin TaskFlow',
            'email' => 'admin@taskflow.com',
            'password' => Hash::make('password123'),
        ]);

        // Créer quelques utilisateurs de test 
        User::create([
            'name' => 'Ahmed Ben Ali',
            'email' => 'ahmed@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Fatma Trabelsi',
            'email' => 'fatma@example.com',
            'password' => Hash::make('password123'),
        ]);
 
    }
}
