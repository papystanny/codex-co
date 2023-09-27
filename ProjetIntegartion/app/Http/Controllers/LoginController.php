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
    public function index()
    {
        $usagers = Utilisateur::all();
        return view('Usagers.index', compact('utilisateurs'));
    }
    
    public function index2()
    {
        return View('Formulaires.formulaireAcc');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Connexion.connect');
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
       
            $request->validate([
                'matricule' => 'required',
                'password' => 'required',
            ]);

        return redirect()->route('Formulaires.formulaireAcc')->with('message',"Connexion réussie.");
     
        $reussi = Auth::attempt(['email'=> $request->email, 'password' => $request->password]);
        
        if($reussi)
        {
            if(Auth::user()->typeCompte == 'superAdmin')
                return redirect()->route('Utilisateurs.liste')->with('message', "Connexion réussie.");
            else if(Auth::user()->typeCompte == 'admin')
                return redirect()->route('Admins.index')->with('message', "Connexion réussie.");      
                else if(Auth::user()->typeCompte == 'client')
                    return redirect()->route('index')->with('message', "Connexion réussie.");
        }
        else
        {
            return redirect()->route('login')->withErrors(['Informations invalides.']);
        }

 }

    /*    $reussi = $request->validate([
                   'id' => 'required',
                   'password' => 'required',
              ]);*/
        
       

    //         if( 'droitEmploye' == 1 && $reussi )
    //          {

    //         return redirect()->route('Formulaires.formulaireAcc')->with('message',"Connexion réussie.");
    //          }
         
    //  }
           
       /*     if(Auth::user()->droitEmploye == 1)
            return redirect()->route('Formulaires.formulaireAcc')->with('message',"Connexion réussie.");
            else if(Auth::user()->droitSuperieur == 1)
            return redirect()->route('Formulaires.formulaireAcc')->with('message',"Connexion réussie.");      
                else if(Auth::user()->droitAdmin == 1)
                return redirect()->route('Formulaires.formulaireAcc')->with('message',"Connexion réussie.");
            else
            {
                return redirect()->route('login')->withErrors(['Informations invalides.']);
            }*/
     

    //    $superAdmin = Auth::attempt(['matricule'=>$request->matricule,'password'=>$request->password ]);

    //     $Admin = Auth::attempt(['id'=>$request->id,'password'=>$request->password, 'droitSuperieur' => 1]);

    //     $client = Auth::attempt(['id'=>$request->id,'password'=>$request->password, 'droitAdmin' => 1]);


    //   if ($superAdmin)

    //      {       
    //         return redirect()->route('Formulaires.formulaireAcc')->with('message',"Connexion réussie.");
    //     }

    //     if ($Admin)

    //     {       
    //         return redirect()->route('Formulaires.formulaireAcc')->with('message',"Connexion réussie.");
    //     }
    //     if ($client)

    //     {       
    //         return redirect()->route('Formulaires.formulaireAcc')->with('message',"Connexion réussie.");
    //     }
    //  }

  

     public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('Connexion.connect')->withErrors(['Informations invalides.']);
    }

    
}
