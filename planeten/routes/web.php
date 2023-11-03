<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\SolarSystemController;

// Planets routes
Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');
Route::get('/planets/{planet}', [PlanetController::class, 'show'])->name('planets.show');
Route::get('/planets/mars', [PlanetController::class, 'showMars']);

// Solar Systems routes
Route::get('/solarsystems', [SolarSystemController::class, 'index'])->name('solarsystems.index');
Route::get('/solarsystems/{solarSystem}', [SolarSystemController::class, 'show'])->name('solarsystems.show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('planet');
})->name('planet.index');