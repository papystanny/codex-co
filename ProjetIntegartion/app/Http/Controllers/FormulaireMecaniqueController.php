<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formateliermecanique;
use App\Http\Requests\FormateliermecaniqueRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\Session;

class FormulaireMecaniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formulaires.atelierMec');
    }

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
    public function store(FormateliermecaniqueRequest $request)
    {
        try {
            $formMec = new Formateliermecanique();
            $formMec->nomFormulaire ='Atelier Mécanique';
            $formMec->numUniteImplique =$request->input('numUniteImplique');
            $formMec->departement =$request->input('departement');
            $formMec->prenomNomEmploye =$request->input('prenomNomEmploye');
            $formMec->prenomNomSupImmediat =$request->input('prenomNomSupImmediat');
            $formMec->numPermisConduireEmploye =$request->input('numPermisConduireEmploye');
            $formMec->vehiculeCityonImplique =$request->input('vehiculeCityonImplique');
            $formMec->notifSup = 'oui';
            $formMec->notifAdmin = 'oui';
            $formMec->save();
            
            return redirect()->route('Formulaires.formsitdang')->with('message', 'L\'ajout a été effectué');
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