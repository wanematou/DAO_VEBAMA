<?php

use App\Http\Controllers\CarteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth');
});


Route::get('/form', [CarteController::class, 'create'])->name('formulaire');
Route::get('/espace1', [CarteController::class, 'travail'])->name('espaceadmin');
Route::get('/espace2', [CarteController::class, 'travail1'])->name('espacesecretaire');
Route::get('/parametre', [CarteController::class, 'espaceparametre'])->name('spaceparametre');
Route::get('/liste', [CarteController::class, 'list'])->name('liste');

Route::get('/authen', [CarteController::class, 'auth'])->name('authentification');
Route::post('/authen/traitement', [CarteController::class, 'login'])->name('login');
Route::get('logout', [CarteController::class, 'logout'])->name('deconnexion');

Route::get('/forma', [CarteController::class, 'admin'])->name('formadmin');
Route::post('/enregistrement', [CarteController::class, 'store'])->name('enregistrer');




Route::post('/enregistrementetudiant', [CarteController::class, 'store6'])->name('register');
Route::post('/enregistrementcycle', [CarteController::class, 'store1'])->name('cycle');
Route::post('/enregistrementannee', [CarteController::class, 'store2'])->name('annee');
Route::post('/enregistrementfilliere', [CarteController::class, 'store3'])->name('filliere');
Route::post('/enregistrementniveau', [CarteController::class, 'store4'])->name('niveau');
Route::post('/enregistrementnationnalité', [CarteController::class, 'store5'])->name('nationnalité');

Route::delete('/effacer/{id}/destroy', [CarteController::class, 'delete'])->name('effacer');
Route::get('/modifier/{id}/edit', [CarteController::class, 'edit'])->name('modifier');
Route::put('/modifier/{id}/update', [CarteController::class, 'update'])->name('update');
Route::get('/details/{id}/show', [CarteController::class, 'show'])->name('details');
Route::get('/carte/{id}/edit', [CarteController::class, 'carte'])->name('carte');
