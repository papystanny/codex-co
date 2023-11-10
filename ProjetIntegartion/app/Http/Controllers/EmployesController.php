<?php

namespace App\Http\Controllers;


use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Usager;
use App\Models\Departement;
use App\Models\FormaccidentsTravail;
use Illuminate\Support\Facades\Auth;

class EmployesController extends Controller
{
    public function index()
    { 
        $user = Usager::where('matricule', Session::get('matricule'))->first();
        $departement = $user->departements;
        $proceduresTravail = $user->departements->proceduresTravails;

        return view('employe.accueil', compact('proceduresTravail'));
    }

    public function formulaire()
    { 
        $user = Usager::where('matricule', Session::get('matricule'))->first();
        $formulaires = $user->formAccidentTravail;
        return view('employe.formulaire', compact('formulaires'));
    }

    public function filtrerFormulaires(Request $request)
    {
        $dateDebut = $request->input('dateDebut');
        $dateFin = $request->input('dateFin');
        $typeFormulaire = $request->input('typeFormulaire');

        $user = Usager::where('matricule', Session::get('matricule'))->first();

        // Logique de filtrage et récupération des données

        // Retourne les données en format JSON (à adapter selon tes besoins)
        return response()->json($formulairesFiltres);
    }

    public function procedure()
    { 
        return view('employe.procedure');
    }

    public function equipe()
    { 
        return view('employe.equipe');
    }

    public function adminAccueil()
    { 
        return view('admin.accueil');
    }

    public function adminProcedure()
    { 
        return view('admin.procedure');
    }

    public function adminFormulaire()
    { 
        return view('admin.formulaire');
    }

    public function adminVoirFormulaireRempli()
    { 
        return view('admin.voirFormulaireRempli');
    }
}
