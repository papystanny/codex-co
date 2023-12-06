<?php

namespace App\Http\Controllers;


use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Usager;
use App\Models\Departement;
use App\Models\Formaccidentstravail;
use App\Models\Formulairesauditsst;
use Illuminate\Support\Facades\Auth;

class EmployesController extends Controller
{
    public function index()
    { 
        $user = Usager::where('matricule', Session::get('matricule'))->first();
        $formulairesAccidentTravail= Formaccidentstravail::where ('nomSuperviseurAvise', Session::get('nom'))->get();
        $formulairesauditssT= Formulairesauditsst::where ('nomEmploye', Session::get('nom'))->get();

        return view('employe.accueil',compact('formulairesAccidentTravail','formulairesauditssT'));
    }

    public function formulaire()
    { 
        $user = Usager::where('matricule', Session::get('matricule'))->first();
        $formulaires = $user->formAccidentsTravail;
        return view('employe.formulaire', compact('formulaires'));
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
