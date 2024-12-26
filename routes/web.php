<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\RegisteController;

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

Route::get('/login', [AuthControllers::class, 'login'])->name('auth.login');
Route::post('/login', [AuthControllers::class, 'loginReq']);
Route::get('/register', [RegisteController::class, 'showRegister'])->name('auth.register');
Route::post('/register', [RegisteController::class, 'register']);


Route::get('/supprimer-etudiant/{id}', [EtudiantController::class , 'supprimer_etudiants']);
Route::get('/modifier-etudiant/{id}', [EtudiantController::class , 'modifier_etudiants']);
Route::post('/modifier/traitement', [EtudiantController::class , 'modifier_etudiant_traitement']);
Route::get('/etudiants', [EtudiantController::class, 'Liste_des_etudiants']);
Route::get('ajouter', [EtudiantController::class, 'ajoue_etudiants']);
Route::post('/ajouter/traitement', [EtudiantController::class , 'ajouter_etudiant_traitement']);
