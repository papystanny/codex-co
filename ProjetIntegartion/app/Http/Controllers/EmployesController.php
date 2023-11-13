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
        $formulaires = $user->formAccidentTravail()->orderBy('dateAccident', 'desc')->get();
        return view('employe.formulaire', compact('formulaires'));
    }

    

    public function procedure()
    { 
        $user = Usager::where('matricule', Session::get('matricule'))->first();
        $departement = $user->departements;
        $proceduresTravail = $user->departements->proceduresTravails;

        return view('employe.procedure', compact('proceduresTravail'));
    }

    public function equipe()
    { 
        $usagers = Usager::where('nomSuperviseur', Session::get('nom'))->get();
        $formulaires = collect(); // Créer une collection vide
    
        foreach ($usagers as $usager) {
            $formulairesUsager = $usager->formAccidentTravail()->orderBy('dateAccident', 'desc')->get();
            $formulaires = $formulaires->merge($formulairesUsager); // Fusionner les collections
        }

  
        Log::debug($formulaires);
        return view('employe.equipe', compact('formulaires', 'usagers'));
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

    public function filtrerFormulairesEquipes(Request $request)
    {
        $dateDebut = $request->input('date_debut');
        $dateFin = $request->input('date_fin');
        $typeFormulaire = $request->input('typeFormulaire');
        $nomEmploye = $request->input('nom_employe');
        
        $usagers = Usager::where('matricule', $nomEmploye)->get();
        Log::debug('Étape crucial tant attendue');
        Log::debug($usagers);
    
        $formulairesFiltres = collect(); // Collection vide pour stocker les résultats
    
        foreach ($usagers as $usager) {
            $resultats = $this->getFormulairesByType($usager, $typeFormulaire, $dateDebut, $dateFin);
            $formulairesFiltres = $formulairesFiltres->merge($resultats); // Fusionner les résultats
        }
    
        return response()->json($formulairesFiltres);
    }

    // Fonction pour récupérer les formulaires en fonction du type
    private function getFormulairesByType($user, $typeFormulaire, $dateDebut, $dateFin)
    {
        switch ($typeFormulaire) {
         /*   case 'type1':
                return $user->formulairesType1()
                    ->where('dateAccident', '>=', $dateDebut)
                    ->where('dateAccident', '<=', $dateFin)
                    ->get();*/
            case 'formaccidentstravails':
                return $user->formAccidentTravail()
                    ->where('dateAccident', '>=', $dateDebut)
                    ->where('dateAccident', '<=', $dateFin)
                    ->get();
          /*  case 'type3':
                return $user->formulairesType3()
                    ->where('dateAccident', '>=', $dateDebut)
                    ->where('dateAccident', '<=', $dateFin)
                    ->get();   */
            // Ajoute d'autres cas au besoin
            default:
                // Traite le cas par défaut
                return null;
        }
    }
}
