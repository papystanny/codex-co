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
        $departementUser = $user->departements;
        
        $totalDepartements = Departement::count();

        $proceduresCommunesIds = ProceduresTravail::select('procedurestravails.id')
        ->join('departement_procedurestravail', 'procedurestravails.id', '=', 'departement_procedurestravail.procedurestravails_id')
        ->groupBy('procedurestravails.id')
        ->havingRaw('COUNT(departement_procedurestravail.departement_id) = ?', [$totalDepartements])
        ->pluck('procedurestravails.id');

        $proceduresCommunes = ProceduresTravail::select('procedurestravails.*')
            ->join('departement_procedurestravail', 'procedurestravails.id', '=', 'departement_procedurestravail.procedurestravails_id')
            ->groupBy('procedurestravails.id')
            ->havingRaw('COUNT(departement_procedurestravail.departement_id) = ?', [$totalDepartements])
            ->get();
   
        $proceduresDepartement = $departementUser->proceduresTravails()->whereNotIn('procedurestravails.id', $proceduresCommunesIds)->get();

        return view('employe.accueil', compact('proceduresCommunes', 'proceduresDepartement'));
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

   /* public function procedure()
    { 
        $user = Usager::where('matricule', Session::get('matricule'))->first();
        $departement = $user->departements;
        $proceduresTravail = $user->departements->proceduresTravails;
        return view('employe.procedure', compact('proceduresTravail'));
    }*/

    public function procedure()
    { 
      
        $user = Usager::where('matricule', Session::get('matricule'))->first();
        $departementUser = $user->departements;
        
        $totalDepartements = Departement::count();

        $proceduresCommunesIds = ProceduresTravail::select('procedurestravails.id')
        ->join('departement_procedurestravail', 'procedurestravails.id', '=', 'departement_procedurestravail.procedurestravails_id')
        ->groupBy('procedurestravails.id')
        ->havingRaw('COUNT(departement_procedurestravail.departement_id) = ?', [$totalDepartements])
        ->pluck('procedurestravails.id');

        $proceduresCommunes = ProceduresTravail::select('procedurestravails.*')
            ->join('departement_procedurestravail', 'procedurestravails.id', '=', 'departement_procedurestravail.procedurestravails_id')
            ->groupBy('procedurestravails.id')
            ->havingRaw('COUNT(departement_procedurestravail.departement_id) = ?', [$totalDepartements])
            ->get();
   
        $proceduresDepartement = $departementUser->proceduresTravails()->whereNotIn('procedurestravails.id', $proceduresCommunesIds)->get();

        return view('employe.procedure', compact('proceduresCommunes', 'proceduresDepartement'));
    }
    

    
    


    public function equipe()
    { 
        $usagers = Usager::where('nomSuperviseur', Session::get('nom'))
                                                    ->orderBy('nom')
                                                    ->get();

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
    


// ********************************************************** ADMIN ************************************************************************************

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
        $departements = Departement::with(['proceduresTravails' => function ($query) {
            $query->orderBy('nom'); // Remplacez 'nom' par le champ de nom de votre procédure
        }])->get();

        return view('admin.procedure', compact('departements'));
    }

    public function deleteProcedure(Departement $departement, ProceduresTravail $procedure)
    {
        // Désassocier la procédure du département
        $departement->proceduresTravails()->detach($procedure->id);

        // Optionnel : supprimer la procédure si nécessaire
        // $procedure->delete();

        return redirect()->back()->with('error', 'Procédure supprimée avec succès.');
    }

    public function storeProcedure(Request $request)
    {
        $request->validate([
            'textNom' => 'required|string|max:255', // Par exemple, ajoutez une règle pour la longueur maximale
            'textLien' => 'required|string|url', // Par exemple, ajoutez une règle pour vérifier qu'il s'agit d'une URL valide
        ], [
            'textNom.required' => 'Le champ Nom de la procédure est requis.',
            'textNom.string' => 'Le champ Nom de la procédure doit être une chaîne de caractères.',
            'textNom.max' => 'Le champ Nom de la procédure ne peut pas dépasser :max caractères.',
        
            'textLien.required' => 'Le champ Lien de la procédure est requis.',
            'textLien.string' => 'Le champ Lien de la procédure doit être une chaîne de caractères.',
            'textLien.url' => 'Le champ Lien de la procédure doit être une URL valide.',
        
            'typeDepartement.required' => 'Le champ Type de départements est requis.',
             ]);

        $procedure = new ProceduresTravail();
        $procedure->nom = $request->textNom;
        $procedure->lien = $request->textLien;
        $procedure->save();

        if ($request->typeDepartement == 'type2') {
            $departements = Departement::all();
            $procedure->departements()->attach($departements);
        } else {
            $procedure->departements()->attach($request->typeDepartement);
        }

        return redirect()->back()->with('success', 'Procédure ajoutée avec succès.');
    }




    public function adminFormulaire()
    { 
        $usagers = Usager::all();
        $formulairesTous = collect();

        $usagersAvecFormulaires = Usager::whereHas('formAccidentTravail')
                                ->orWhereHas('formulairesauditssts')
                                ->orWhereHas('formulairessitdangeureuse')
                                ->orWhereHas('formulairesateliermecanique')
                                ->get();

    
        foreach ($usagers as $usager) {
            $formulairesUsagerAcc = $usager->formAccidentTravail()->with('usagers')->orderBy('created_at', 'desc')->get();
            $formulairesUsagerAud = $usager->formulairesauditssts()->with('usagers')->orderBy('created_at', 'desc')->get();
            $formulairesUsagerSit = $usager->formulairessitdangeureuse()->with('usagers')->orderBy('created_at', 'desc')->get();
            $formulairesUsagerMec = $usager->formulairesateliermecanique()->with('usagers')->orderBy('created_at', 'desc')->get();
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
    
        return view('admin.formulaire', compact('usagersAvecFormulaires','usagers', 'formulairesTous'));
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
        Log::debug("j'entre dans le controller");
        $dateDebut = $request->input('date_debut');
        $dateFin = $request->input('date_fin');
        $typeFormulaire = $request->input('typeFormulaire');
        log::debug($typeFormulaire);
        $matriculeEmploye = $request->input('nom_employe'); // Assurez-vous que c'est le nom correct du champ
     
        
        $usager = Usager::where('matricule', $matriculeEmploye)->first();
        Log::debug($usager);

        if ($usager) {
            $formulairesFiltres = $this->getFormulairesByType($usager, $typeFormulaire, $dateDebut, $dateFin);
            Log::debug('LERREUR EST QUE USAGER  RETOURNE une valleur');
        } else {
            $formulairesFiltres = collect(); // Retourne une collection vide si aucun usager n'est trouvé
            Log::debug('LERREUR EST QUE USAGER NE RETOURNE RIEN');
        }
        log::debug($formulairesFiltres);
        
        $logOutput = $formulairesFiltres->map(function ($formulaire) {
            return json_encode($formulaire); // Convertit chaque élément en JSON pour un affichage clair
        })->implode("\n"); // Joindre chaque élément avec un saut de ligne
        
        Log::debug($logOutput);
        
        return response()->json($formulairesFiltres);
    }


    // Fonction pour récupérer les formulaires en fonction du type
    private function getFormulairesByType($user, $typeFormulaire, $dateDebut, $dateFin)
    {
        switch ($typeFormulaire) {
            case 'type1': // Cas pour tous les formulaires
                // Ici, vous devez combiner les résultats de toutes les requêtes
                log::debug("je suis bien dans la méthode de trie");
                $formulaires = collect();
    
                // Ajoutez tous les types de formulaires à la collection
                $formulaires = $formulaires->merge($user->formulairesateliermecanique()
                    ->where('formateliermecaniques.created_at', '>=', $dateDebut)
                    ->where('formateliermecaniques.created_at', '<=', $dateFin)
                    ->get());
    
                $formulaires = $formulaires->merge($user->formAccidentTravail()
                    ->where('formaccidentstravails.created_at', '>=', $dateDebut)
                    ->where('formaccidentstravails.created_at', '<=', $dateFin)
                    ->get());
    
                $formulaires = $formulaires->merge($user->formulairesauditssts()
                    ->where('formulairesauditssts.created_at', '>=', $dateDebut)
                    ->where('formulairesauditssts.created_at', '<=', $dateFin)
                    ->get());
    
                $formulaires = $formulaires->merge($user->formulairessitdangeureuse()
                    ->where('formsitdangereuses.created_at', '>=', $dateDebut)
                    ->where('formsitdangereuses.created_at', '<=', $dateFin)
                    ->get());
    
                return $formulaires;
            case 'formateliermecaniques':
                return $user->formulairesateliermecanique()
                ->where('formateliermecaniques.created_at', '>=', $dateDebut)
                ->where('formateliermecaniques.created_at', '<=', $dateFin)
                ->get();
            case 'formaccidentstravails':
                return $user->formAccidentTravail()
                ->where('formaccidentstravails.created_at', '>=', $dateDebut)
                ->where('formaccidentstravails.created_at', '<=', $dateFin)
                ->get();
            case 'formulairesauditssts':
                return $user->formulairesauditssts()
                ->where('formulairesauditssts.created_at', '>=', $dateDebut)
                ->where('formulairesauditssts.created_at', '<=', $dateFin)
                ->get();
            case 'formsitdangereuses':
                return $user->formulairessitdangeureuse()
                ->where('formsitdangereuses.created_at', '>=', $dateDebut)
                ->where('formsitdangereuses.created_at', '<=', $dateFin)
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
