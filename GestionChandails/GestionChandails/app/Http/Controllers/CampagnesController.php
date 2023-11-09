<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Taille;
use App\Models\Couleur;
use App\Models\Campagne;
use App\Models\Commande;
use App\Http\Requests\CampagneRequest;
use Session;

class CampagnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /*
    public function index()
    {
        $campagneActuel = Campagne::where('statut', 'en cours');
        $campagnePasse = Campagne::where('statut', 'Termine');

        return view('admin.index', compact('campagneActuel','campagnePasse'));
    }
*/
public function index()
{
    $campagnes = Campagne::latest()->get();
    $articles = Article::all();
    $couleurs = Couleur::all();
    $tailles = Taille::all();
    return View('admin.creationsondage',compact('campagnes','articles','couleurs','tailles'));
    //
}

    public function showCampagneForm()
    {
        $campagnes=Campagne::orderBy('dateDebut', 'desc')->get();
        
        $campagnes1 =Campagne::where ('statut',  'en cours')
        ->get();

       
        return View('admin.index',compact('campagnes','campagnes1'));
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
    public function store(CampagneRequest $request)
    {
       /* 
        $campagnes1 =Campagne::where ('statut',  'en cours')
        ->exists();
        Log::debug($campagnes1);
        if($campagnes1){
            return redirect()->route('campagne')->with('message',"il existe déja une camapagne active");
        }
        else*/
    {
        try {


           $campagne = new Campagne();
           $campagne-> nom = $request->input('nom');
           $campagne-> dateDebut = $request->input('dateDebut');
           $campagne-> debutSondage = $request->input('debutSondage');
           $campagne-> finSondage = $request->input('finSondage');
           $campagne-> statut = "en cours";
           $campagne -> usager_id = Session::get('id');
           $campagne->save();
           
           return redirect()->route('admin.creationsondage');
            }
            
           catch (\Throwable $e) {
         
            Log::debug($e);
         //   return redirect()->route('campagne')->withErrors(['L\'ajout de campagne n\'a pas fonctionné']);
         
           }
           
            

        //
    }
    }
    public function showCampagne(Campagne $campagne)

    {  
       // if($campagne->statut!="en cours"){
            
      //      }
        Log::debug($campagne -> id);
        $commandes1 = Commande::join('usagers as u', 'u.id', '=', 'commandes.usager_id')
        ->select('u.nom')
        ->groupby('u.nom')
        ->get();
        

        $commandes=Commande::where ('campagne_id',  $campagne -> id)->get();
       
        

        $campagnes1 = Campagne::where('statut', 'termine')->get();
        
       
        return View('admin.zoom', compact('campagne','commandes','commandes1','campagnes1'));
   
    
    }
    public function terminer($id)
    {
        try{

       
        $campagnes = Campagne::findOrFail($id);

        $campagnes ->statut="termine";
        $campagnes ->dateFin=now();
        //ensuite mettre campagne active a 0
        Log::debug($campagnes);
        $campagnes->save();
        return redirect()->back();
    }
            
    catch (\Throwable $e) {
  
     Log::debug($e);
  //   return redirect()->route('campagne')->withErrors(['L\'ajout de campagne n\'a pas fonctionné']);
  
    }
    return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.gestionCampagne');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campagne $campagne)
    {
        return View('campagne.modifier', compact('campagne'));
        //
    }

    public function update(CampagneRequest $request, $id)
    {
        try{
            $campagne = Campagne::findOrFail($id);
            $campagne-> nom = $request->input('nom');
            $campagne-> dateDebut = $request->input('dateDebut');
            $campagne-> debutSondage = $request->input('debutSondage');
            $campagne-> finSondage = $request->input('finSondage');
            $campagne-> statut = "en cours";
            $campagne -> usager_id = Session::get('id');
            $campagne->save();
            return redirect()->back()->with('message', "Modification de " . $campagne->nom. " réussi!");



       }
        catch(\throwable $e){
        Log::debug($e);
       
      return redirect()->back()->withErrors(['la modification= n\'a pas fonctionné']); 
        }
  
    }
 public function updateArticles(Campagne $campagne)
{
    
    $campagnes = Campagne::where ('id',  $campagne -> id)->get();
    $articles = Article::all();
    $couleurs = Couleur::all();
    $tailles = Taille::all();
    return View('admin.creationsondage',compact('campagnes','articles','couleurs','tailles'));
    //
}

    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try{
            $campagne = Campagne::findOrFail($id);
  
            $campagne->articles()->detach();

            $campagne->delete();
            return redirect()->route('campagne');

        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->back()->withErrors(['La suppression n\'a pas fonctionné']);
        }
       
    }
}