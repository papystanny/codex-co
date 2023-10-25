<?php

namespace App\Http\Controllers;


use DB;

use Validator;
use App\Models\Usager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Session;

class UsagersController extends Controller
{
    public function index()
    {
        
        return view('login.connexion');
    }

    public function connexion(Request $request)
    {
        $reussi = Auth::attempt(['matricule'=> $request->matricule, 'password' => $request->password]);

        if($reussi)
        {
            if(Auth::user()->typeCompte == 'employe')
            {
                $user = Usager::where('matricule', $request->matricule)->first();
                Session::put('nom', $user->nom);       
                Session::put('prenom', $user->prenom);    
                Session::put('typeCompte', $user->typeCompte);
               // Session::put('departement', $user->departement_id);
                return redirect()->route('employe.accueil')->with('message',"Connexion réussie.");
            }
            else if(Auth::user()->typeCompte == 'superieur')
            {
                $user = Usager::where('matricule', $request->matricule)->first();
                Session::put('nom', $user->nom);       
                Session::put('prenom', $user->prenom);   
                Session::put('typeCompte', $user->typeCompte);
                return redirect()->route('employe.accueil')->with('message',"Connexion réussie.");   
            }
            else if(Auth::user()->typeCompte == 'admin')
            {
                $user = Usager::where('matricule', $request->matricule)->first();
                Session::put('nom', $user->nom);       
                Session::put('typeCompte', $user->typeCompte);
                return redirect()->route('admin.accueil')->with('message',"Connexion réussie.");
            }
        } 
         else 
        {
          return redirect('/connexion') ->with('alert', 'Conexxion échoué!');
        } 
                
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/connexion');
    }

}
