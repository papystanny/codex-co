<?php

namespace App\Http\Controllers;

use App\Models\Usager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Session;

class UsagersController extends Controller
{
    public function index()
    {
        
        return view('login.connexion');
    }

    public function connexion(Request $req)
    {
        $employe= Auth::attempt(['matricule'=>$req->matricule,'password'=>$req->password ]);


        if ($req->has('matricule')) {
            $id = $req->matricule; // Définition de la variable $id si 'id' est présent dans la requête
            Log::info($id); // Enregistrement de la variable $id dans les journaux
        } else {
            Log::info('La variable $id n\'est pas définie.'); // Enregistrement d'un message d'erreur si $id n'est pas définie
        }

        if ($req->has('password')) {
            $password = $req->password; // Définition de la variable $id si 'id' est présent dans la requête
            Log::info($password); // Enregistrement de la variable $id dans les journaux
        } else {
            Log::info('La variable $password n\'est pas définie.'); // Enregistrement d'un message d'erreur si $id n'est pas définie
        }



        if($employe)
        {
            return redirect('/employeAccueil');
        }
        else 
        {
          Log::info('La connexion ne marche pas ');
          return redirect('/connexion') ->with('alert', 'Erreur!');
        
        } 
      
    }

}
