<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployesController;
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

/*Route::get('/', function () {
    return view('employes.index');
/**page employé */

Route::get('/employe',
[EmployesController::class, 'index'])->name('employe.index');
    
Route::get('/AccidentTravail',
[EmployesController::class, 'AccidentTravail'])->name('employe.formAccidentTravail');
