<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\UsagersController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\CampagnesController;
use App\Http\Controllers\TaillesController;
use App\Http\Controllers\CouleursController;

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

Route::get('/',
[ArticlesController::class, 'index'])->name('articles.index'); 


// --------------------------------------------Connexion( pour se connecter dans la base de donnée------------------------------------------------
Route::get('/connexion',function(){
return View('login.connexion');
});

Route::post('/connexionClient',
[UsagersController::class,'connexionClient']);
    
Route::post('/connexion',
[UsagersController::class,'connexion'])->name('login');

// ------------------------------------------------- Création de compte ------------------------------------------
Route::get('/register',function(){
return View('login.connexion');
});
    
Route::post('/register',
[UsagersController::class,'register']);
    
Route::post('/registerClient',
[UsagersController::class,'registerClient']);



// COMMANDES
Route::get('/commandes',
[CommandesController::class, 'index'])->name('commandes.index');

Route::post('/commandes/{id}/store',
[CommandesController::class, 'store'])->name('commandes.store');

// Delete commande
Route::delete('/panier/{id}/',
[CommandesController::class, 'destroy'])->name('commandes.destroy');


// --------------------------------------------Deconnexon -----------------------------------------------------------
Route::post('/logout' , [UsagersController::class,'logout'])->name('logout');

// --------------------------------------------------   Uager COMMUN   -------------------------------------------------------------------------------
Route::get('/compte',
[UsagersController::class, 'compte'])->name('usagers.compte')->middleware('auth');; 

// --------------------------------------Articles ------------------------------------------------------------------------
Route::get('/articles', 
[ArticlesController::class, 'index'])->name('articles.index');

Route::get('/articles/{article}', 
[ArticlesController::class, 'show'])->name('articles.show');


// COMMANDES
Route::get('/commandes',
[CommandesController::class, 'index'])->name('commandes.index');


// --------------------------------------Accueil super admin  ------------------------------------------------------------------------
Route::get('/superAdmin', 
[UsagersController::class, 'superAdmin'])->name('superAdmin.index')->middleware('auth');

// --------------------------------------------Ajout d'admin------------------------------------------------
Route::get('/creationAdmin',function(){
return View('superAdmin.index');
})->middleware('auth');

        
Route::post('/creationAdmin',
[UsagersController::class,'creationAdmin'])->middleware('auth');


// --------------------------------------------delete admin------------------------------------------------
Route::delete('/films/{id}',
[UsagersController::class, 'destroy'])->name('admin.destroy');


/**----------------------------------------- Afficher le panier de l'usager --------------------------------------------- */
Route::get('/panier', 
[UsagersController::class, 'panier'])->name('commun.panier');

Route::post('/ajouterArticles' , [UsagersController::class,'ajouterArticles'])->name('ajouterArticles');



/**----------------------------------------- Afficher la page de management --------------------------------------------- */
Route::get('/management', 
[UsagersController::class, 'management'])->name('commun.management')->middleware('auth');


/**----------------------------------------- Admin --------------------------------------------- */

Route::get('/campagne/{campagneActuel}', 
[UsagersController::class, 'gestionCampagne'])->name('admin.gestionCampagne')->middleware('auth');

/*
Route::get('/campagnes/{campagne}', 
[CampagnesController::class, 'show'])->name('admin.gestionCampagne');*/
//----------------------campagne---------------------------------------------------------------
Route::get('/campagne',
[CampagnesController:: class,'showcampagneForm'])->name('campagne')->middleware('auth');
Route::post('/campagne/store',
[CampagnesController:: class,'store'])->name('campagnes.store')->middleware('auth');

Route::get('/sondage',
[CampagnesController:: class, 'index'])->name('admin.creationsondage')->middleware('auth');
Route::get('/sondage/create',
[ArticlesController:: class, 'index'])->name('creationSondage')->middleware('auth');

Route::post('/sondage/create/store',
[ArticlesController:: class,'store'])->name('elementscampagne.store')->middleware('auth');
Route::post('/tailles/store',
[TaillesController:: class,'store'])->name('tailles.store')->middleware('auth');

Route::post('/couleurs/store',
[CouleursController:: class,'store'])->name('couleurs.store')->middleware('auth');

Route::post('/articles/store',
[ArticlesController:: class,'create'])->name('articles.store')->middleware('auth');

Route::get('/sondage/create/store/ajout',
[ArticlesController:: class,'AjoutElementsCampagne'])->name('AjoutSupplémentaireElements')->middleware('auth');
Route::get('/campagne/{campagne}/infos',
[CampagnesController:: class,'showCampagne'])->name('detailsCampagne')->middleware('auth');
Route::get('/campagne/{id}/terminer',
[CampagnesController:: class,'terminer'])->name('campagnes.terminer')->middleware('auth');
Route::delete('/campagne/{id}/supprimer',
 [CampagnesController:: class,'destroy'])->name('campagnes.supprimer')->middleware('auth');
 Route::patch('/campagne/{id}/modifier',
     [CampagnesController::class, 'update'])->name('campagnes.update')->middleware('auth');
 Route::get('/campagne/{film}/modifier',
     [CampagnesController::class, 'edit'])->name('campagnes.modifier')->middleware('auth');  
 Route::post('/sondage/{campagne}/modifier',
     [CampagnesController:: class, 'updateArticles'])->name('admin.modifiersondage')->middleware('auth');
 Route::post('/commande/{id}/terminer',
    [CommandesController:: class,'update'])->name('commandes.update')->middleware('auth');
Route::post('/commande/{id}/recuperer',
    [CommandesController:: class,'updateEtat'])->name('commandes.updateEtat')->middleware('auth');