<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Validator;
use App\Models\Usager;

use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Session;

use App\Http\Requests\UsagerRequest;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $usagers = Utilisateur::all();
    //     return view('Usagers.index', compact('utilisateurs'));
    // }
    
    public function index()
    {
        return View('Formulaires.formulaireAcc');
    }
    public function showlogin()
    {
        return View('Formulaires.formulaireSitdang');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function showLoginForm()
    {
        return view('login');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function login(Request $request)
    {
       
      


    $reussi = Auth::attempt(['matricule'=> $request->matricule, 'password' => $request->password]);
    
    if($reussi)
    {
        if(Auth::user()->typeCompte == 'employe')
        return redirect()->route('Formulaires.formulaireAcc')->with('message',"Connexion réussie.");
        else if(Auth::user()->typeCompte == 'superieur')
        return redirect()->route('Formulaires.formulaireSitdang')->with('message',"Connexion réussie.");    
            else if(Auth::user()->typeCompte == 'admin')
            return redirect()->route('Formulaires.formulaireSitdang')->with('message',"Connexion réussie.");
    }
    else
    {
        return redirect()->route('login')->withErrors(['Informations invalides.']);
    }
}


     

  

     public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->withErrors(['Informations invalides.']);
    }

    
}

