<?php

namespace App\Http\Controllers;


use DB;

use Validator;
use App\Models\Usager;
use App\Models\Departement;
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
                $departement = $user->departements;
                  // Sépare le nom du département en mots
                $words = explode(' ', $departement->nom);

                // Applique la logique des initiales seulement s'il y a plus de 2 mots
                if (count($words) > 1) {
                    $initials = array_map(function ($word) {
                        return strtoupper($word[0]);
                    }, $words);

                    // Joint les initiales pour former une chaîne
                    $initialsString = implode('', $initials);
                } else {
                    $initialsString = strtoupper($departement->nom);
    }
                $proceduresTravail = $user->departements->proceduresTravails;
                $nom = ucfirst($user->nom); // Utilisation de ucfirst pour capitaliser la première lettre

                Session::put('nom', $user->nom);  
                Session::put('matricule', $user->matricule);      
                Session::put('prenom', $user->prenom);    
                Session::put('typeCompte', $user->typeCompte);
                Session::put('nomDepartement', $initialsString);
                Session::put('nomSuperviseur', $user->nomSuperviseur);
                Session::put('prenomSuperviseur', $user->prenomSuperviseur);
                
                Log::debug($proceduresTravail );
               // Log::debug($user );
               
                
               return redirect()->route('employe.accueil')->with('error', 'Connexion échouée !');

            }
            else if(Auth::user()->typeCompte == 'superieur')
            {
                $user = Usager::where('matricule', $request->matricule)->first();
                
                $departement = $user->departements;
                    // Sépare le nom du département en mots
                $words = explode(' ', $departement->nom);

                // Applique la logique des initiales seulement s'il y a plus de 2 mots
                if (count($words) > 1) {
                    $initials = array_map(function ($word) {
                        return strtoupper($word[0]);
                    }, $words);

                    // Joint les initiales pour former une chaîne
                    $initialsString = implode('', $initials);
                } else {
                    $initialsString = strtoupper($departement->nom);
                }

                $proceduresTravail = $user->departements->proceduresTravails;
                $nom = ucfirst($user->nom); 

                Session::put('nom', $user->nom);       
                Session::put('matricule', $user->matricule); 
                Session::put('prenom', $user->prenom);   
                Session::put('typeCompte', $user->typeCompte);
                Session::put('nomDepartement', $initialsString);
                Session::put('nomSuperviseur', $user->nomSuperviseur);
                Session::put('prenomSuperviseur', $user->prenomSuperviseur);

                return redirect()->route('employe.accueil')->with('error', 'Connexion échouée !');
            }
            else if(Auth::user()->typeCompte == 'admin')
            {
                $user = Usager::where('matricule', $request->matricule)->first();
                $departement = $user->departements;
                $nom = ucfirst($user->nom); // Utilisation de ucfirst pour capitaliser la première lettre

                Session::put('nom', $nom);
                Session::put('matricule', $user->matricule); 
                Session::put('typeCompte', $user->typeCompte);
                Session::put('nomDepartement', $departement->nom);
                return redirect()->route('admin.accueil')->with('error', "Connexion réussie.");
            }
            else{
                return redirect('/connexion') ->with('error', 'Connexion ok mais connexion no');
            }
            
        } 
         else 
        {
          return redirect('/connexion') ->with('error', 'TENTATIVE  ÉCHOUÉE!');
        } 
                
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/connexion');
    }

}
