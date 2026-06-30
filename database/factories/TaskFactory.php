<?php

namespace Database\Factories;

use App\Models\Project; use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
public function definition(): array
{
return [
'title' => fake()->sentence(4),
'description' => fake()->paragraph(),
'status' => fake()->randomElement(['todo', 'in_progress', 'review', 'done']), 'priority' => fake()->numberBetween(1, 5),
'due_date' => fake()->dateTimeBetween('now', '+2 months'), 'estimated_hours' => fake()->randomFloat(1, 1, 40),
'project_id' => Project::factory(), 'assigned_to' => User::factory(),
'category_id' => Category::factory(),
];
}
}

