<?php

use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\FormularioController;



// Ruta de Inicio
Route::view('/', 'inicio')->name('home');

// Formularios
Route::get('/formulario', [FormularioController::class, 'mostrarFormulario']);
Route::post('/formulario', [FormularioController::class, 'procesarFormulario']);

// Productos por categoría
Route::get('/celulares', [ProductoController::class, 'celular_productos'])->name('celulares');
Route::get('/audifono', [ProductoController::class, 'audifonos_productos'])->name('audifono');
Route::get('/accesorio', [ProductoController::class, 'accesorio_productos'])->name('accesorio');
Route::get('/parlante', [ProductoController::class, 'parlante_productos'])->name('parlante');
Route::get('/cargador', [ProductoController::class, 'cargador_productos'])->name('cargador');
// Ruta para mostrar el detalle de un producto específico
Route::get('/producto/{id}', [ProductoController::class, 'ver_mas'])->name('ver_mas');
// Ruta de Búsqueda
Route::get('/buscar', [ProductoController::class, 'buscar'])->name('busqueda');

// Autenticación y Dashboard
Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');
    });

require __DIR__.'/settings.php';