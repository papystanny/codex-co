<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\FormulaireMecaniqueController;

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


// Formulaires Dangereuses
Route::get('/' , [FormulaireController::class , 'index'])->name('Formulaires.formsitdang');
Route::post('/formulaires',[FormulaireController::class, 'store'])->name('formulaires.store');
//Route::get('/creation/formulaires',[FormulaireController::class,'create'])->name('formulaires.create');

// Formulaires Mécanique
Route::get('/formMeca' , [FormulaireMecaniqueController::class , 'index'])->name('formulaires.atelierMec');
Route::post('/formulairesMeca',[FormulaireMecaniqueController::class, 'store'])->name('formulairesMec.store');
//Route::get('/creation/formulairesMeca',[FormulaireController::class,'create'])->name('formulairesMec.create');


//visualisez les formulaire remplir

Route::get('/visualiser', [FormulaireController::class, 'visualisezForm'])->name('Formulaires.index');