<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Taille;
use App\Models\Couleur;
use App\Models\Article;
use App\Models\Campagne;

use Session;
use Illuminate\Support\Facades\Auth;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commande = Commande::all();
        return view('commandes.index', compact('commande'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {

    try {

         $usager = Auth::user();

            $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();
            $article=Article::findOrFail($id);
            $couleur = $request->input('couleur');
            $taille  = $request->input('taille');
            $quantity = $request->input('quantitySelect');

            $couleurs = Couleur::find($couleur);
            $tailles = Taille::find($taille);
            Log::debug( $couleurs);

           $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();

            // Créer une nouvelle commande
              $commande = new Commande;
              $commande -> couleur_article = $couleurs->nom;  
              $commande -> hexcode = $couleurs->hexcode;   
              $commande -> taille_article = $tailles->nom;
              $commande -> nom_article = $article->nom;    
              
              $commande -> campagne_id = $campagneActuels[0]->id;
              log::debug($commande);
              
              $commande -> quantite = $quantity;
              $commande -> usager_id = Session::get('id');
                 Log::debug( $commande);
            
             // Associer la commande à l'usager
             $commande->save();
              
            
             return view('articles.index', compact('campagneActuels'));

        } 
        catch (\Throwable $e) {
        Log::debug( $e);
         $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();
         return view('articles.index', compact('campagneActuels'));
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $id)
    {
        //    public function terminer($id)
    {
        try{

       
        $commandes = Commande::findOrFail($id);

        $commandes ->statut="payé";
       // $campagnes ->dateFin=now();
        //ensuite mettre campagne active a 0
        Log::debug($commandes);
        $commandes->save();
        return redirect()->back();
    }
            
    catch (\Throwable $e) {
  
     Log::debug($e);
  //   return redirect()->route('campagne')->withErrors(['L\'ajout de campagne n\'a pas fonctionné']);
  
    }
    return redirect()->back();
        //
    }
    }


    public function updateEtat( $id)
    {
        //    public function terminer($id)
    {
        try{

       
        $commandes = Commande::findOrFail($id);

        $commandes ->etat="récupéré";
       // $campagnes ->dateFin=now();
        //ensuite mettre campagne active a 0
        Log::debug($commandes);
        $commandes->save();
        return redirect()->back();
    }
            
    catch (\Throwable $e) {
  
     Log::debug($e);
  //   return redirect()->route('campagne')->withErrors(['L\'ajout de campagne n\'a pas fonctionné']);
  
    }
    return redirect()->back();
        //
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try
        {
            $commande=Commande::findOrFail($id);
    
            $commande->delete();
    
            
            $commandes =  Commande::where('usager_id', 'LIKE', Session::get('id') )->get();
            $nbrCommandes =  $commandes->count();
            $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();
            Log::debug( $nbrCommandes);

            return view('commun.panier',compact('commandes', 'nbrCommandes','campagneActuels'));
        }
        catch(\Throwable $e)
            {
            Log::debug($e); //le fichier log est dans Storage\Logs\Laravel.log
           
            $commandes =  Commande::where('usager_id', 'LIKE', Session::get('id') )->get();
            $nbrCommandes =  $commandes->count();
            $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();
            Log::debug( $nbrCommandes);

            return view('commun.panier',compact('commandes', 'nbrCommandes','campagneActuels'));
            }
              
        }
    }

