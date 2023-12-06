<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormAccidentTravailRequest;
use App\Notifications\FormsRegisteredNotification;
use App\Http\Requests\AccidentTravailRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Formaccidentstravail;
use App\Models\Formulairesauditsst;
use App\Events\FormulaireSoumis;
use Session;
use Illuminate\Support\Carbon;
use App\Models\Usager;
class FormAccidentTravailController extends Controller
{
 /*  
    public function index()
    {
        //
    }*/
    public function accidentTravail()
    {
        $usagers=Usager::where ('nom', Session::get('nom'))->get(); //Session::get('id'));
       $user1= Session::get('nom');
       Log::debug($user1);
       Log::debug($usagers);
        return view('formAccidentTravail.formAccidentTravail',compact('usagers'));
        //
    }

    public function store(AccidentTravailRequest $request)
    {
            try {
    
    
               $Formaccidentstravail = new Formaccidentstravail();
               $Formaccidentstravail->nomFormulaire = "Accident de travail";
               $Formaccidentstravail->nomEmploye =  Session::get('prenom').' '.Session::get('nom');
                $Formaccidentstravail->fonctionMomentEvenement = $request->input('fonctionMomentEvenement');
                $Formaccidentstravail->matriculeEmploye = Session::get('matricule');
                $Formaccidentstravail->dateAccident = $request->input('dateAccident');
                $Formaccidentstravail->heureAccident = $request->input('heureAccident');
                $Formaccidentstravail->nomsTemoins = $request->input('nomsTemoins');
                $Formaccidentstravail->endroitAccident = $request->input('endroitAccident');
                $Formaccidentstravail->secteurActivite = $request->input('secteurActivite');
                Log::debug($request->input('secteurActivite',[]) );
               // $Formaccidentstravail->natureSiteBlessure = $request->input('natureSiteBlessure',[]);
                Log::debug($request->input('natureSiteBlessure',[]) );
               // $d=implode('',$request->input('natureSiteBlessure',[]));

/*
               $validator = Validator::make($request->all(), [
                'checkbox1' => 'required|boolea',
                'checkbox2' => function ($attribute, $value, $fail) use ($request) {
                    if ($value && !$request->has('checkbox1')) {
                        $fail('Checkbox 1 must be checked before checking Checkbox 2.');
                    }
                },
            ]);
*/

             
                $data=$request->input('natureSiteBlessure',[]);
                $natureSiteBlessureString=implode(',',$data);
                Log::debug($natureSiteBlessureString);            
                $Formaccidentstravail->natureSiteBlessure = $natureSiteBlessureString;

                /*
                for( $i = 0; $i <count($dataArray) ; $i++){
                    $natureSiteBlessureString=implode(',',$data);
                    Log::debug($natureSiteBlessureString);
                    
                }*/
                Log::debug($request->input('descriptionBlessure',[]) );
                $data2=$request->input('descriptionBlessure',[]);
                $descriptionBlessureString=implode(',',$data2);
                Log::debug($descriptionBlessureString);
                $Formaccidentstravail->descriptionBlessure = $descriptionBlessureString;

                //$natureSiteBlessureString=implode(',', $request->input('natureSiteBlessure'),[]);
                
                //$FormaccidentsTravail->natureSiteBlessure = $natureSiteBlessureString;
                /*
                $dataArray = explode(',', $request->input('natureSiteBlessure',[]));
                for( $i = 0; $i <count($dataArray) ; $i++){
                    FormaccidentsTravail::where ('id',  $dataArray[$i])
                    ->update(['natureSiteBlessure' => implode(',', $request->input('natureSiteBlessure',[])),
                ]);
                }

                // Récupérer les valeurs des cases à cocher cochées
                $checkboxValues = $request->input('checkbox_values', []);

                // Convertir les valeurs en une chaîne séparée par des virgules (ou un autre séparateur)
                $checkboxValuesString = implode(',', $checkboxValues);

                // Enregistrez les valeurs dans la base de données
                $votreModele = new VotreModele;
                $votreModele->champ_checkbox = $checkboxValuesString;
                $votreModele->save();


                */

              /*
                FormaccidentsTravail::where('nomEmploye',$request->input('nomEmploye'))->update([
                    'natureSiteBlessure' => implode(',', $request->input('natureSiteBlessure',[])), // Conservez les valeurs dans une chaîne séparée par des virgules (ou un autre séparateur)
                ]);
              */
               // $Formaccidentstravail->descriptionBlessure = $request->input('descriptionBlessure',[]);

               // $descriptionBlessureString=implode(',', $request->input('descriptionBlessure',[]));
                

                

                $Formaccidentstravail->violence = $request->input('violence');
                $Formaccidentstravail->descriptionDeroulementBlessure = $request->input('descriptionDeroulementBlessure');
                $Formaccidentstravail->premiersSoins = $request->input('premiersSoins');
                $Formaccidentstravail->nomSecouriste = $request->input('nomSecouriste');
                $Formaccidentstravail->necessiteAccident = $request->input('necessiteAccident');
                $Formaccidentstravail->nomSuperviseurAvise = Session::get('nomSuperviseur');
                Log::debug($Formaccidentstravail->nomSuperviseurAvise);
                $Formaccidentstravail->prenomSuperviseurAvise = Session::get('prenomSuperviseur');
                Log::debug($Formaccidentstravail->prenomSuperviseurAvise);
                $Formaccidentstravail->dateSuperviseurAvise = Carbon::now()->toDateString();
                Log::debug($Formaccidentstravail->dateSuperviseurAvise);
                 $Formaccidentstravail->signatureEmploye =Session::get('nom');
                $Formaccidentstravail->dateSignatureEmploye =  Carbon::now()->toDateString();
                $Formaccidentstravail->notifSup = 'non';
                $Formaccidentstravail->notifAdmin = 'non';



              /* $Formaccidentstravail-> nom = $request->input('nom');
               $Formaccidentstravail-> dateDebut = $request->input('dateDebut');
               $Formaccidentstravail-> debutSondage = $request->input('debutSondage');
               $Formaccidentstravail-> finSondage = $request->input('finSondage');
               $Formaccidentstravail-> statut = "en cours";
               $Formaccidentstravail -> usager_id =3; //<!-- Session::get('id');-->   */

                  /*  $condition1= Session::get('nom');
               
              $Usager = Usager::select('emailsuperviseur')
               ->where('nom', $condition1);
               $Usager->notify(new FormsRegisteredNotification());
              */ 

        
              $usagers=Usager::where ('nom', Session::get('nom'))->get();
                Log::debug($usagers);
               // Log::debug($usagers->id);
         //   $Formaccidentstravail->usagers()->attach($usagers);


         
            
              
               $Formaccidentstravail->save();
                $Formaccidentstravail->usagers()->attach($usagers);

       //      $usagers->formAccidentsTravail()->attach($Formaccidentstravail);  
             //  $condition1= Session::get('nom');
               
              /* $Usager = Usager::select('emailsuperviseur')
                ->where('nom', $condition1);
                $Usager = Usager::where('nom', $condition1)->first();
                $Usager->notify(new FormsRegisteredNotification());*/
                event(new FormulaireSoumis($data));

                return view('employe.accueil');
               
               // return view('employe.accueil');
                }
                
               catch (\Throwable $e) {
                    
                        Log::debug($e);
                    //   return redirect()->route('campagne')->withErrors(['L\'ajout de campagne n\'a pas fonctionné']);
                       
                        return view('employe.formulaire');
               }
               
                
    
            //
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function showFormulaires()
    {
        
        $Formaccidentstravail = Formaccidentstravail::all();
        return view('superviseurs.index',compact('Formaccidentstravail'));
    }
    /**
     * Store a newly created resource in storage.
     */
   

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
}