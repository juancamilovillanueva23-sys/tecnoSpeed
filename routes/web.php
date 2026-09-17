<?php

use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/celulares', [ProductoController::class, 'index'])->name('celulares');
Route::get('/cargador', [ProductoController::class, 'index'])->name('cargador');
Route::get('/accesorio', [ProductoController::class, 'index'])->name('accesorio');
Route::view('/cargadores', 'cargador')->name('cargador');
Route::view('/accesorios', 'accesorio')->name('accesorio');
Route::view('/audifonos', 'audifono')->name('audifono');
Route::view('/', 'inicio')->name('home');


Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');
    });

require __DIR__.'/settings.php';
