<?php

use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::view('/audifonos', 'audifono')->name('audifono');
Route::view('/', 'inicio')->name('inicio');
=======
Route::view('/', 'welcome')->name('hom');
Route::view('/', 'inicio')->name('home');
>>>>>>> 535218de08f348414db99789e691e2d925158569


Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');
    });

require __DIR__.'/settings.php';
