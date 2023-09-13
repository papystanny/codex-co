<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FormulaireController;

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
    return view('welcome');
   
});

Route::get('/connexion', [FormulaireController::class, 'create'])->name('Connexion.connect');
