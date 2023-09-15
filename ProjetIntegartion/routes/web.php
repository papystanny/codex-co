<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FormulaireController;
use App\Http\Controllers\LoginController;
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



Route::get('/', [LoginController::class, 'create'])->name('Connexion.connect');

Route::get('/form', [LoginController::class, 'index'])->name('Formulaires.formulaireAcc');

Route::post('login', 'App\Http\Controllers\LoginController@login');
