<?php

use App\Http\Controllers\EmployesController;
use Illuminate\Support\Facades\Route;

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


// -------------------------------------- Accueil employe ----------------------------

Route::get('/employeAccueil', 
[EmployesController::class, 'index'])->name('employe.accueil');


