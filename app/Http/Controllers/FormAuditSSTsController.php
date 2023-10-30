<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulairesauditsst;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FormAuditSSTsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function formAuditSST()
    {
        return view('formAuditSST.formAuditSST');
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        {
            try {
    
    
               $Formulairesauditsst = new Formulairesauditsst();
               $Formulairesauditsst->prenomNomEmploye = $request->input('prenomNomEmploye');
               $Formulairesauditsst->lieuTravail = $request->input('lieuTravail');
               $Formulairesauditsst->date = $request->input('date');
                $Formulairesauditsst->heure = $request->input('heure');
                $Formulairesauditsst->Epi = $request->input('Epi');
                $Formulairesauditsst->tenueLieux = $request->input('tenueLieux');
                $Formulairesauditsst->comportementSecuritaire = $request->input('comportementSecuritaire');
                $Formulairesauditsst->signalisation= $request->input('signalisation');
                $Formulairesauditsst->fichesSignaletiques= $request->input('fichesSignaletiques');
                $Formulairesauditsst->traveauxEscavation= $request->input('travauxEscavation');
                $Formulairesauditsst->espaceClos= $request->input('espaceClos');
                $Formulairesauditsst->methodeTravail= $request->input('methodeTravail');
                $Formulairesauditsst->autre= $request->input('autre');
                $Formulairesauditsst->respectDistanciation= $request->input('respectDistanciation');
                $Formulairesauditsst->portEpi= $request->input('portEpi');
                $Formulairesauditsst->respectProcedures= $request->input('respectProcedures');
                $Formulairesauditsst->notifSup = 'oui';
                $Formulairesauditsst->notifAdmin = 'oui';

                $Formulairesauditsst->save();
               
               return view('superviseurs.index');
                }
                
               catch (\Throwable $e) {
             
                Log::debug($e);
             //   return redirect()->route('campagne')->withErrors(['L\'ajout de campagne n\'a pas fonctionné']);
             return view('formAuditSST.formAuditSST');
               }
               
               
                
    
            //
        }
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
