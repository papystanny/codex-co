<?php

namespace App\Http\Controllers;


use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Usager;
use App\Models\Departement;
use App\Models\FormaccidentsTravail;
use App\Models\Formulairesauditsst;
use App\Models\Formsitdangereuse;
use App\Models\Formateliermecanique;
use App\Models\ProceduresTravail;
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
        $usager = Usager::where('matricule', Session::get('matricule'))->first();
        $formulairesTous = collect();
       
        $formulairesUsagerAcc = $usager->formAccidentTravail()->orderBy('created_at', 'desc')->get();
        $formulairesUsagerAud = $usager->formulairesauditssts()->orderBy('created_at', 'desc')->get();
        $formulairesUsagerSit = $usager->formulairessitdangeureuse()->orderBy('created_at', 'desc')->get();
        $formulairesUsagerMec = $usager->formulairesateliermecanique()->orderBy('created_at', 'desc')->get();
        $formulairesTous = $formulairesTous->merge($formulairesUsagerAcc)
                                            ->merge($formulairesUsagerSit)
                                            ->merge($formulairesUsagerMec)
                                            ->merge($formulairesUsagerAud);

    
        // Tri global de la collection fusionnée
        $formulairesTous = $formulairesTous->sortByDesc('created_at');
    
        foreach ($formulairesTous as $key => $value) {
            Log::debug("$key => $value");
        }
        return view('employe.formulaire', compact('formulairesTous'));
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
        $formulairesTous = collect();
    
        foreach ($usagers as $usager) {
            $formulairesUsagerAcc = $usager->formAccidentTravail()->orderBy('created_at', 'desc')->get();
            $formulairesUsagerAud = $usager->formulairesauditssts()->orderBy('created_at', 'desc')->get();
            $formulairesUsagerSit = $usager->formulairessitdangeureuse()->orderBy('created_at', 'desc')->get();
            $formulairesUsagerMec = $usager->formulairesateliermecanique()->orderBy('created_at', 'desc')->get();
            $formulairesTous = $formulairesTous->merge($formulairesUsagerAcc)
                                                ->merge($formulairesUsagerSit)
                                                ->merge($formulairesUsagerMec)
                                                ->merge($formulairesUsagerAud);
        }

        Log::debug($formulairesTous);
        $formulairesTous = $formulairesTous->sortByDesc('created_at');
        return view('employe.equipe', compact('formulairesTous', 'usagers'));
    }
    

    public function adminAccueil()
    { 
        return view('admin.accueil');
    }

  /*  public function adminProcedure()
    { 
        $usagers = Usager::all();
        Log::debug($usagers);
    
        $proceduresTravail = collect();
    
        foreach ($usagers as $usager) {
            $departement = $usager->departements; // Ceci est un seul Departement
            $proceduresTravail = $proceduresTravail->merge($departement->proceduresTravails);
        }
    
        // Supprime les doublons de la collection
        $proceduresTravail = $proceduresTravail->unique('id'); // Supposant que chaque procédure a un ID unique.

    
        Log::debug($proceduresTravail);
        return view('admin.procedure', compact('proceduresTravail'));
    }
 */
    public function adminProcedure()
    { 
        // Récupère toutes les procédures de travail de tous les départements
        $proceduresTravail = ProceduresTravail::with('departements')
                                            ->get()
                                            ->unique('id');
        Log::debug($proceduresTravail);
        return view('admin.procedure', compact('proceduresTravail'));
    }

    


    public function adminFormulaire()
    { 
        $usagers = Usager::all();
        $formulairesTous = collect();
    
        foreach ($usagers as $usager) {
            $formulairesUsagerAcc = $usager->formAccidentTravail()->orderBy('created_at', 'desc')->get();
            $formulairesUsagerAud = $usager->formulairesauditssts()->orderBy('created_at', 'desc')->get();
            $formulairesUsagerSit = $usager->formulairessitdangeureuse()->orderBy('created_at', 'desc')->get();
            $formulairesUsagerMec = $usager->formulairesateliermecanique()->orderBy('created_at', 'desc')->get();
            $formulairesTous = $formulairesTous->merge($formulairesUsagerAcc)
                                                ->merge($formulairesUsagerSit)
                                                ->merge($formulairesUsagerMec)
                                                ->merge($formulairesUsagerAud);
        }
    
        // Tri global de la collection fusionnée
        $formulairesTous = $formulairesTous->sortByDesc('created_at');
    
        foreach ($formulairesTous as $key => $value) {
            Log::debug("$key => $value");
        }
    
        return view('admin.formulaire', compact('usagers', 'formulairesTous'));
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
