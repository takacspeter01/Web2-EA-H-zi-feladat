<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\TrailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Főoldal
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Kapcsolat
Route::get('/kapcsolat', [MessageController::class, 'create'])
    ->name('contact.form');
Route::post('/kapcsolat', [MessageController::class, 'store'])
    ->name('contact.store');

    // Adatbázis menü
Route::get('/adatbazis', [DatabaseController::class, 'index'])
    ->name('database.index');

    // CRUD
Route::resource('trails', TrailController::class);

// Auth-hoz kötött route-ok
Route::middleware('auth')->group(function () {

    // Profil szerkesztés
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Üzenetek – csak bejelentkezve
    Route::get('/uzenetek', [MessageController::class, 'index'])
        ->name('messages.index');

    // Admin 
    Route::get('/admin', function () {
        if (! Gate::allows('is-admin')) {
            abort(403);
        }

        return view('admin.index');
    })->name('admin.index');
});

require __DIR__.'/auth.php';
