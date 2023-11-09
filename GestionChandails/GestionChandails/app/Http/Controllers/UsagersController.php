<?php

namespace App\Http\Controllers;
use App\Models\Usager;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Commande;
use App\Models\Campagne;;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\Taille;
use App\Models\Couleur;
use App\Http\Requests\UsagerRequest;
use App\Http\Requests\CreationURequest;
use Illuminate\Support\Facades\DB;


class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Session::get('statut') == 1)
        {         

            $user = Usager::where('email', $req->email)->first();
            $admins =  Usager::where('statut', 'LIKE',2 )->get();
            Session::put('nom', $user->nom);  
            Session::put('prenom', $user->prenom);   
            Session::put('email', $user->email);  
            Session::put('statut', $user->statut);

            return view('superAdmin.index', compact('admins'));

           
        }
        if (Session::get('statut') == 2)
        {    
            $campagnes=Campagne::all();
            $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();
            $campagnePasses = Campagne::where('statut', 'LIKE' , 'Termine')->get();
            $user = Usager::where('email', $req->email)->first();     
            Session::put('nom', $user->nom);  
            Session::put('prenom', $user->prenom);   
            Session::put('email', $user->email);  
            Session::put('statut', $user->statut);
            Session::put('id', $user->id);

            return view('admin.index', compact('campagneActuels', 'campagnePasses','campagnes'));
        }
        if (Session::get('statut') == 3)
        {         
            $user = Usager::where('email', $req->email)->first();
            Session::put('id', $user->id);  
            Session::put('nom', $user->nom);  
            Session::put('prenom', $user->prenom);   
            Session::put('email', $user->email);  
            Session::put('statut', $user->statut);
            
            $articles = Article::all();
            $tailles = Taille::all();
            $couleurs = Couleur::all();
            return view('articles.index', compact('articles', 'couleurs', 'tailles'));
        }
    }
/* --------------------------------------Affichage de la page accueil du super admin -------------------------------------*/
    public function superAdmin()
    {
        $admins =  Usager::where('statut', 'LIKE',2 )->get();
        return view('superAdmin.index', compact('admins'));
    }


/* --------------------------------------Affichage de du compte de l'utilisateur  -------------------------------------*/
    public function compte()
    {
        return view('commun.compte');
    }


    public function gestionCampagne(Campagne $campagneActuel){

        return view('admin.gestionCampagne', compact('campagneActuel' ));
    }




    
/* --------------------------------------Affichage de la page management  -------------------------------------*/
public function management()
{
    return view('commun.management');
}


/* --------------------------------------Affichage du panier de l'utilisateur  -------------------------------------*/
public function panier()
{
  
    $commandes =  Commande::where('usager_id', 'LIKE', Session::get('id') )->get();
    $nbrCommandes =  $commandes->count();
    $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();
    Log::debug( $nbrCommandes);

    return view('commun.panier',compact('commandes', 'nbrCommandes','campagneActuels'));
}


function ajouterArticles(Request $request, Article $article)
{  
        try
        {
            $commande = new Commande() ;
            $commande -> usager_id =  Session::get('id');
            $commande -> article_id = $article->id;     
            $commande -> date =  date('Y-m-d', time());
            $commande -> statut = 'non-validé';
            $commande -> quantite  = $request->input('quantite');
            $commande -> statut = 'non-récupéré';
            $commande -> save(); 


            
             return redirect('/articles');
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect('/connection')->with('status','Votre commande na pas pu être éffectué na pas été crée. ');
        }
           
}



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }



    function connexionClient (Usager $req)
    {
        try
        {
            $client = Auth::attempt(['email'=>$req->email,'password'=>$req->password, 'statut' => 3]);

            if ($client)
            {         
                $user = Usager::where('email', $req->email)->first();
                Session::put('id', $user->id);  
                Session::put('nom', $user->nom);  
                Session::put('prenom', $user->prenom);   
                Session::put('email', $user->email);  
                Session::put('statut', $user->statut);
                
                $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();
                return view('articles.index', compact('campagneActuels'));
            }
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect('/connexion')->with('status','Votre compte na pas été crée. ');
        }
    }

/*--------------------------------------------------------------Connexion et création de compte ---------------------------------------*/ 
    function connexion (UsagerRequest $req)
    {

       /* $req()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);*/

        $superAdmin = Auth::attempt(['email'=>$req->email,'password'=>$req->password, 'statut' => 1]);
        $Admin = Auth::attempt(['email'=>$req->email,'password'=>$req->password, 'statut' => 2]);
        $client = Auth::attempt(['email'=>$req->email,'password'=>$req->password, 'statut' => 3]);

        if ($superAdmin)
        {         

            $user = Usager::where('email', $req->email)->first();
            $admins =  Usager::where('statut', 'LIKE',2 )->get();
            Session::put('nom', $user->nom);  
            Session::put('prenom', $user->prenom);   
            Session::put('email', $user->email);  
            Session::put('statut', $user->statut);

            return view('superAdmin.index', compact('admins'));

           
        }
        if ($Admin)
        {    
            //$commandes = Commande::orderBy('nom', 'asc')->get();
            $campagnes=Campagne::orderBy('dateDebut', 'asc')->get();
            $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();
            $campagnePasses = Campagne::where('statut', 'LIKE' , 'Termine')->get();
            $campagnes1 =Campagne::where ('statut',  'en cours')
            ->get();
            $user = Usager::where('email', $req->email)->first();     
            Session::put('nom', $user->nom);  
            Session::put('prenom', $user->prenom);   
            Session::put('email', $user->email);  
            Session::put('statut', $user->statut);
            Session::put('id', $user->id);

            return view('admin.index', compact('campagneActuels', 'campagnePasses','campagnes','campagnes1')); 
        }
        if ($client)
        {         
            $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();
            $user = Usager::where('email', $req->email)->first();
            Session::put('id', $user->id);  
            Session::put('nom', $user->nom);  
            Session::put('prenom', $user->prenom);   
            Session::put('email', $user->email);  
            Session::put('statut', $user->statut);
            
            $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();
            $articles = Article::all();
            $tailles = Taille::all();
            $couleurs = Couleur::all();
            return view('articles.index', compact('articles', 'couleurs', 'tailles','campagneActuels'));
        }
        else 
        {
        
          return redirect('/connexion') ->with('alert', 'Erreur!');
        
        } 
      
    }

     function register(CreationURequest $request)
    {  
            try
            {
                $usager = new Usager() ;
                $usager -> nom = $request->input('nom');
                $usager -> prenom = $request->input('prenom');
                $usager -> statut = 3;
                $usager -> password = Hash::make($request->input('password'));
                $usager -> email = $request->input('email');
                $usager -> save(); 
            return redirect('/');
            }
            catch(\Throwable $e)
            {
                Log::debug($e);
                return redirect('/connexion')->with('status','Votre compte na pas été crée. ');
            }
               
    }

/* --------------------------------------------- Création des comptes admins depuis le super admin -------------------------------*/ 
    function creationAdmin(Request $request)
    {  

        function genererChaineAleatoire($longueur = 10)
        {
          return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($longueur/strlen($x)) )),1,$longueur);
        }

            try
            {
                $usager = new Usager() ;
                $usager -> nom = $request->input('nom');
                $usager -> prenom = $request->input('prenom');
                $usager -> statut = 2;
                $usager -> password = Hash::make(genererChaineAleatoire(15));
                $usager -> email = $request->input('email');
                $usager -> save(); 

                $admins =  Usager::where('statut', 'LIKE',2 )->get();
                return view('superAdmin.index', compact('admins'));
            }
            catch(\Throwable $e)
            {
                Log::debug($e);
                
                $admins =  Usager::where('statut', 'LIKE',2 )->get();
                return view('superAdmin.index', compact('admins'));
            }           
    }








/* --------------------------------------------- Création des comptes Client depuis le panier pour qu'ils soient renvoyé au panier -------------------------------*/ 
    function registerClient(Request $request)
    {  
            try
            {
                $usager = new Usager() ;
                $usager -> nom = $request->input('nom');
                $usager -> prenom = $request->input('prenom');
                $usager -> statut = 3;
                $usager -> password = Hash::make($request->input('password'));
                $usager -> email = $request->input('email');
                $usager -> save(); 

                $client = Auth::attempt(['email'=>$request->email,'password'=>$request->password, 'statut' => 3]);

                if ($client)
                {         
                    $user = Usager::where('email', $request->email)->first();
                    Session::put('id', $user->id);  
                    Session::put('nom', $user->nom);  
                    Session::put('prenom', $user->prenom);   
                    Session::put('email', $user->email);  
                    Session::put('statut', $user->statut);
                    $campagneActuels = Campagne::where('statut', 'LIKE',  'en cours')->get();
                    return view('articles.index', compact('campagneActuels'));
                }
            }
            catch(\Throwable $e)
            {
                Log::debug($e);
                return redirect('/connexion')->with('status','Votre compte na pas été crée. ');
            }
               
    }











/*--------------------------------------------------  fonction pour se décoonecter ---------------------------------------------*/
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/articles');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
