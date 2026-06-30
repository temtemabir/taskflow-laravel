<?php
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('projets.taches', TacheController::class);

Route::prefix('app')->name('app.')->group(function() { Route::resource('projets', ProjetController::class); Route::resource('taches', TacheController::class);
 
 
});
Route::resource('projets', ProjetController::class);
Route::get('/projets/{id}/edit', [ProjetController::class,'edit']);
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/a-propos', function() {
return 'À propos de TaskFlow';
})->name('about');
// Routes de l'application (préfixe /app)
Route::prefix('app')->name('app.')->group(function() {
Route::resource('projets', ProjetController::class);
Route::resource('taches', TacheController::class);
});
// Routes API (préfixe /api)
Route::prefix('api')->name('api.')->group(function() {
Route::get('/projets', [ProjetController::class, 'index'])
->name('projets.index');
Route::get('/taches', [TacheController::class, 'index'])
->name('taches.index');
});

Route::resource('taches', TacheController::class);
// Route resource pour les projets
Route::resource('projets', ProjetController::class);
// Route resource pour les projets
Route::get('/a-propos', function () {
    return "À propos de TaskFlow";
})->name('about');

Route::get('/contact', function () {
    return "Page de contact";
})->name('contact');

Route::get('/projet/{id}', function ($id) {
    return "Projet $id";
})->name('projets.show');

Route::get('/services', function () {
    return response()->json([
        'service1' => 'Gestion de projets',
        'service2' => 'Suivi des tâches',
        'service3' => 'Collaboration d équipe'

    ]);
});
Route::get('/utilisateur/{nom}', function ($nom) {
    return "Bienvenue $nom !";
});

Route::get('/projet/{id}', function ($id) {
    return "Projet numéro $id";
})->whereNumber('id');

Route::get('/equipe/{nom?}', function ($nom = null) {
    if ($nom) {
        return "Equipe $nom";
    }
    return "Équipe par défaut";
});

Route::get('/projet/{projetId}/tache/{tacheId}', function ($projetId, $tacheId) {
    return "Projet $projetId - Tache $tacheId";
});
Route::prefix('api')->name('api.')->group(function() {
Route::get('/projets', [ProjetController::class, 'index'])
->name('projets.index');
Route::get('/taches', [TacheController::class, 'index'])
->name('taches.index');
});
