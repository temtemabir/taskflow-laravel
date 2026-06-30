<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tache>
 */
class TacheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'statut' => fake()->randomElement(['todo', 'in_progress', 'done']),
            'priorite' => fake()->randomElement(['basse', 'moyenne', 'haute']),
            'date_echeance' => fake()->optional()->date(),
            'projet_id' => \App\Models\Projet::factory(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
