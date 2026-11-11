<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('profesors/create', [ProfesorController::class, 'create'])->name('profesors.create');
Route::get('profesors/list', [ProfesorController::class, 'index'])->name('profesors.index');
Route::post('profesors/store', [ProfesorController::class, 'salida'])->name('profesors.store');
Route::get('profesors/{id}', [ProfesorController::class, 'show'])->name('profesors.show');
Route::put('profesors/{profesors}', [ProfesorController::class, 'update'])->name('profesors.update');
Route::get('profesors/{profesors}/editar', [ProfesorController::class, 'edit'])->name('profesors.edit');
Route::delete('profesors/{profesors}', [ProfesorController::class, 'destroy'])->name('profesors.destroy');

Route::get('modulos/create', [ModuloController::class, 'create'])->name('modulos.create');
Route::get('modulos/list', [ModuloController::class, 'index'])->name('modulos.index');
Route::post('modulos/store', [ModuloController::class, 'salida'])->name('modulos.store');
Route::get('modulos/{id}', [ModuloController::class, 'show'])->name('modulos.show');
Route::put('modulos/{modulos}', [ModuloController::class, 'update'])->name('modulos.update');
Route::get('modulos/{modulos}/editar', [ModuloController::class, 'edit'])->name('modulos.edit');
Route::delete('modulos/{modulos}', [ModuloController::class, 'destroy'])->name('modulos.destroy');

Route::get('alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::get('alumnos/list', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::post('alumnos/store', [AlumnoController::class, 'salida'])->name('alumnos.store');
Route::get('alumnos/{id}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::put('alumnos/{alumnos}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::get('alumnos/{alumnos}/editar', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::delete('alumnos/{alumnos}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');