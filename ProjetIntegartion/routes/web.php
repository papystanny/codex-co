<?php

use App\Http\Controllers\EmployesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormAccidentTravailController;
use App\Http\Controllers\UsagersController;
use App\Http\Controllers\FormulaireSitDangereuseController;
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
Route::middleware(['auth','employe'])->group(function () {
   
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


    
    Route::post('/filtrer-formulaires', [EmployesController::class, 'filtrerFormulaires'])->name('formulaire.filtres');
    Route::post('/filtrer-formulairesEquipes', [EmployesController::class, 'filtrerFormulairesEquipes'])->name('formulaireEquipe.filtres');

});


Route::middleware(['auth', 'admin'])->group(function () {
    // Les routes qui nécessitent un compte admin seulement
    Route::get('/adminAccueil', 
    [EmployesController::class, 'adminAccueil'])->name('admin.accueil');

    Route::get('/adminProcedure', 
    [EmployesController::class, 'adminProcedure'])->name('admin.procedure');

    Route::get('/adminFormulaire', 
    [EmployesController::class, 'adminFormulaire'])->name('admin.formulaire');

    Route::get('/adminVoirFormulaireRempli', 
    [EmployesController::class, 'adminVoirFormulaireRempli'])->name('admin.voirFormulaireRempli');
});


// Formulaires Dangereuses
Route::get('/formSit' , [FormulaireSitDangereuseController::class , 'index'])->name('Formulaires.formsitdang');
Route::post('/formulaires',[FormulaireSitDangereuseController::class, 'store'])->name('formulaires.store');
//Route::get('/creation/formulaires',[FormulaireController::class,'create'])->name('formulaires.create');

// Formulaires Mécanique
Route::get('/formMeca' , [FormulaireMecaniqueController::class , 'index'])->name('formulaires.atelierMec');
Route::post('/formulairesMeca',[FormulaireMecaniqueController::class, 'store'])->name('formulairesMec.store');
//Route::get('/creation/formulairesMeca',[FormulaireController::class,'create'])->name('formulairesMec.create');


//visualisez les formulaire remplire

Route::get('/visualiser', [FormulaireSitDangereuseController::class, 'visualisezForm'])->name('Formulaires.index');

