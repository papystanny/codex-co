<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\FormAccidentTravailController;
use App\Http\Controllers\SuperviseursController;
use App\Http\Controllers\FormAuditSSTsController;
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
    return view('employes.index');
});
/**page employé */

Route::get('/employe',
[EmployesController::class, 'index'])->name('employe.index');
    
Route::get('/AccidentTravail',
[FormAccidentTravailController::class, 'accidentTravail'])->name('employe.formAccidentTravail');
Route::post('/AccidentTravailStore',
[FormAccidentTravailController::class, 'store'])->name('employe.formAccidentTravailStore');

/***page superviseur */
Route::get('/superviseur',
[SuperviseursController::class, 'index'])->name('superviseur.index');
Route::get('/AuditSST',
[FormAuditSSTsController::class, 'formAuditSST'])->name('superviseur.formAuditSST');
Route::post('/AuditSSTStore',
[FormAuditSSTsController::class, 'store'])->name('superviseur.formAuditSSTStore');