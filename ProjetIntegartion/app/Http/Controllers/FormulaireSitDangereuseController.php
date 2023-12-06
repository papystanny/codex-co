<?php

namespace App\Http\Controllers;
use App\Models\Formsitdangereuse;
use App\Models\Formateliermecanique;
use App\Http\Requests\FormsitdangereuseRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usager;
use App\Notifications\FormsRegisteredNotification;
use App\Events\FormulaireSoumis;
use DB;
use Session;
use Illuminate\Support\Carbon;
class FormulaireSitDangereuseController extends Controller
{

    public function index()
    {
        return view('Formulaires.formsitdang');
    }

    // public function formulaireMec()
    // {
    //     return view ('Formulaires.atelierMec');
    // }

  /*  public function visualisezForm( Formsitdangereuse $formsit )
    {
        $formMec = Formateliermecanique::all();
        $formsit = Formsitdangereuse::all();

        return View('Formulaires.index' , compact('formsit' , 'formMec'));
    }
   */ 
    // public function visualisezForm1( Formatelier $formsit )
    // {
    //     //$formMec = Formateliermecanique::all();
    //    // $formsit = Formsitdangereuse::all();

    //     return View('Formulaires.index' , compact('formsit'));
    // }
    
 




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        return View('formulaires.create');
 
    }
  

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormsitdangereuseRequest $request)
    {
        try {
        
            $form = new Formsitdangereuse();
            $form->nomFormulaire ='Situation Dangereuses';
            $form->nomEmploye =$request->input('nomEmploye');
            Log::debug( $form->nomEmploye);
            $form->prenomEmploye =$request->input('prenomEmploye');
            $form->matriculeEmploye =$request->input('matriculeEmploye');
            $form->fonctionLorsEvenement =$request->input('fonctionLorsEvenement');
            $form->secteurActivite =$request->input('secteurActivite');
            $form->dateObservation =$request->input('dateObservation');
            $form->heureObservation =$request->input('heureObservation');
            $form->temoins =$request->input('temoins');
            $form->descriptionEvenement =$request->input('descriptionEvenement');
            $form->ameliorationsProposees =$request->input('ameliorationsProposees');
            $form->signatureEmploye =Session::get('nom');
            $form->dateSupeAvise =now();
            $form->dateSignatureEmploye = now();
            $form->nomSuperviseur = Session::get('nomSuperviseur');
            $form->notifSup = 'non';
            $form->notifAdmin = 'non';
           //$form->usager_id = auth()->user()->id;
         //  dd("ca store");
            $form->save();
            $usagers=Usager::where ('nom', Session::get('nom'))->get();
            Log::debug($usagers);
            $form->usagers()->attach($usagers);
            $data=Carbon::now()->toDateString();
            event(new FormulaireSoumis($data));
            return view('employe.accueil');
           
       
       }
    catch (\Throwable $e) {
        Log::debug($e);
        return redirect()->route('Formulaires.formsitdang')->withErrors(['L\'ajout n\'a pas fonctionné.']);
    }

    return redirect()->route('Formulaires.formsitdang');
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
   
}
