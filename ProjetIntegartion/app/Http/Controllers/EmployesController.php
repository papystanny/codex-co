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


    public function filtrerFormulaires(Request $request)
    {
        $dateDebut = $request->input('date_debut');
        $dateFin = $request->input('date_fin');
        $typeFormulaire = $request->input('typeFormulaire');

        $user = Usager::where('matricule', Session::get('matricule'))->first();

        $formulairesFiltres = $this->getFormulairesByType($user, $typeFormulaire, $dateDebut, $dateFin);

        // Retourne les données en format JSON (à adapter selon tes besoins)
        return response()->json($formulairesFiltres);
    }

    // Fonction pour récupérer les formulaires en fonction du type
    private function getFormulairesByType($user, $typeFormulaire, $dateDebut, $dateFin)
    {
        switch ($typeFormulaire) {
            case 'type1':
                return $user->formulairesType1()
                    ->where('dateAccident', '>=', $dateDebut)
                    ->where('dateAccident', '<=', $dateFin)
                    ->get();
            case 'type2':
                return $user->formulairesType2()
                    ->where('dateAccident', '>=', $dateDebut)
                    ->where('dateAccident', '<=', $dateFin)
                    ->get();
            case 'type3':
                return $user->formulairesType3()
                    ->where('dateAccident', '>=', $dateDebut)
                    ->where('dateAccident', '<=', $dateFin)
                    ->get();
            // Ajoute d'autres cas au besoin
            default:
                // Traite le cas par défaut
                return null;
        }
    }
}
