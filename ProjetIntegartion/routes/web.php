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





Route::get('/form', [LoginController::class, 'index'])->name('Formulaires.formulaireAcc');

Route::get('/form2', [LoginController::class, 'showlogin'])->name('Formulaires.formulaireSitdang');

// Route::post('/login', [LoginController::class, 'login'])->name('Formulaires.login');

// Route::get('/', [LoginController::class, 'showLoginForm'])->name('Connexion.connect');

// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', 'App\Http\Controllers\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\LoginController@login');
Route::post('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');