<?php

use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\FormularioController;

Route::get('/formulario', [FormularioController::class, 'mostrarFormulario']);
Route::post('/formulario', [FormularioController::class, 'procesarFormulario']);
Route::get('/celulares', [ProductoController::class, 'celular_productos'])->name('celulares');
Route::get('/audifono', [ProductoController::class, 'audifonos_productos'])->name('audifono');
Route::get('/accesorio', [ProductoController::class, 'accesorio_productos'])->name('accesorio');
Route::get('/parlante', [ProductoController::class, 'parlante_productos'])->name('parlante');
Route::get('/cargador', [ProductoController::class, 'cargador_productos'])->name('cargador');
Route::view('/cargadores', 'cargador')->name('cargador');
Route::view('/parlantes', 'parlante')->name('parlante');
Route::view('/accesorios', 'accesorio')->name('accesorio');
Route::view('/audifonos', 'audifono')->name('audifono');
Route::view('/', 'inicio')->name('home');


Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');
    });

require __DIR__.'/settings.php';
