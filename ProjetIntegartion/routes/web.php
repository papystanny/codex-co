<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireController;

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



Route::get('/' , [FormulaireController::class , 'index'])->name('Formulaires.formsitdang');
Route::post('/formulaires',[FormulaireController::class, 'store'])->name('formulaires.store');
Route::get('/creation/formulaires',[FormulaireController::class,'create'])->name('formulaires.create');


Route::get('/formMec' , [FormulaireController::class , 'formulaireMec'])->name('Formulaires.atelierMec');
