<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Formateliermecanique;
use App\Http\Requests\FormateliermecaniqueRequest;
use App\Http\Requests\FormatelierMecRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\Usager;
use App\Notifications\FormsRegisteredNotification;
use App\Events\FormulaireAudit;
use Illuminate\Support\Carbon;
use File;
use Session;


class FormulaireMecaniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formulaires.atelierMec');
    }

    public function visualisere()
    {
        $formecanique = Formateliermecanique::all();
        

        return View('Formulaires.index');
    }

   /* public function show(Formateliermecanique $formecanique)
    {
        return View('formMec.show', compact('formecanique'));
    }
*/

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('formulairesMec.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $formMec = new Formateliermecanique();
            $formMec->nomFormulaire ='Atelier Mécanique';
            $formMec->numUniteImplique =$request->input('numUniteImplique');
            $formMec->departement =$request->input('departement');
            $formMec->nomEmploye =Session::get('prenom').' '.Session::get('nom');
            $formMec->prenomNomSupImmediat =Session::get('prenomSupervisuer').' '.Session::get('nomSupervisuer');
            $formMec->numPermisConduireEmploye =$request->input('numPermisConduireEmploye');
            $formMec->vehiculeCityonImplique =$request->input('vehiculeCityonImplique');
            $formMec->notifSup = 'non';
            $formMec->notifAdmin = 'non';
            //$usagers=Usager::where ('id', Session::get('id'))->get();
            
            
            $formMec->save();
            $usagers=Usager::where ('nom', Session::get('nom'))->get();
            Log::debug($usagers);
            $formMec->usagers()->attach($usagers);
            $data=Carbon::now()->toDateString();
            event(new FormulaireAudit($data));
             
            return redirect()->route('employe.accueil')->with('error', 'Connexion échouée !');
           // $formMec->usagers()->attach($usagers);
        }
        catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('formulaires.atelierMec')->withErrors(['L\'ajout n\'a pas fonctionné.']);
        }
    
        return redirect()->route('Formulaires.formsitdang');
    }

    /**
     * Display the specified resource.
     */
   

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