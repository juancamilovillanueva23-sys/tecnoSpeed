<?php

use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/celulares', [ProductoController::class, 'index'])->name('celulares');
Route::get('/audifono', [ProductoController::class, 'index'])->name('audifono');
Route::get('/parlante', [ProductoController::class, 'index'])->name('parlante');
Route::view('/cargadores', 'cargador')->name('cargador');
Route::view('/audifonos', 'audifono')->name('audifono');
Route::view('/parlantes', 'parlante')->name('parlante');
Route::view('/', 'inicio')->name('home');


Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');
    });

require __DIR__.'/settings.php';
