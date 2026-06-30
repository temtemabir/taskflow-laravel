<?php
namespace Database\Factories; use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
public function definition(): array
{
$startDate = fake()->dateTimeBetween('-1 month', 'now');

return [
'name' => fake()->sentence(3),
'description' => fake()->paragraph(),
'status' => fake()->randomElement(['planning', 'active', 'on_hold', 'completed']), 'priority' => fake()->numberBetween(1, 5),
'start_date' => $startDate,
'due_date' => fake()->dateTimeBetween($startDate, '+3 months'), 'owner_id' => User::factory(),
];
}

// États personnalisés
public function active(): static
{
return $this->state(fn (array $attributes) => [ 'status' => 'active',
]);
}

public function completed(): static
{
return $this->state(fn (array $attributes) => [ 'status' => 'completed',
]);
}
}
