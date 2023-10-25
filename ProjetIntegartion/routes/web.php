<?php

use App\Http\Controllers\EmployesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormAccidentTravailController;
use App\Http\Controllers\UsagersController;
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

// --------------------------------------------Connexion( pour se connecter dans la base de donnée  ) ------------------------------------------------
Route::get('/',
[UsagersController::class, 'index'])->name('login.connexion'); 

Route::get('/connexion',function(){
return View('login.connexion');
});

Route::post('/connexion',
[UsagersController::class,'connexion'])->name('login');

// --------------------------------------------Deconnexon -----------------------------------------------------------
Route::post('/logout' , [UsagersController::class,'logout'])->name('logout');

// -------------------------------------- Accueil employe ----------------------------
Route::middleware(['auth'])->group(function () {
   
    Route::get('/employeAccueil', 
    [EmployesController::class, 'index'])->name('employe.accueil');

    Route::get('/employeFormulaire', 
    [EmployesController::class, 'formulaire'])->name('employe.formulaire');

    Route::get('/employeProcedure', 
    [EmployesController::class, 'procedure'])->name('employe.procedure');

    Route::get('/employeEquipe', 
    [EmployesController::class, 'equipe'])->name('employe.equipe');

    Route::get('/adminAccueil', 
    [EmployesController::class, 'adminAccueil'])->name('admin.accueil');


    Route::get('/AccidentTravail',
    [FormAccidentTravailController::class, 'AccidentTravail'])->name('employe.formAccidentTravail');
    Route::post('/AccidentTravailStore',
    [FormAccidentTravailController::class, 'store'])->name('employe.formAccidentTravailStore');

});



