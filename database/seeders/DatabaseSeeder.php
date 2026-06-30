<?php
namespace Database\Seeders; use App\Models\User;
use App\Models\Project; use App\Models\Task;
use App\Models\Category; use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

 
public function run(): void
{
// Créer des catégories
$categories = Category::factory()->count(5)->create();

// Créer des tags
$tags = Tag::factory()->count(10)->create();

// Créer des utilisateurs
$users = User::factory()->count(10)->create();

// Créer un utilisateur de test
$testUser = User::factory()->create([ 'name' => 'Test User',
'email' => 'test@taskflow.com',
]);

// Créer des projets avec des tâches
$projects = Project::factory()
->count(5)
->create(['owner_id' => $testUser->id]);

foreach ($projects as $project) {
// Ajouter des membres au projet
$project->members()->attach(
$users->random(3)->pluck('id'), ['role' => 'developer']
);

// Créer des tâches pour le projet
$tasks = Task::factory()
->count(rand(5, 10))
->create([
'project_id' => $project->id,
'assigned_to' => $users->random()->id,
'category_id' => $categories->random()->id,
]);

// Associer des tags aux tâches 
foreach ($tasks as $task) {
$task->tags()->attach($tags->random(rand(1, 3)));
}
}
}
}
