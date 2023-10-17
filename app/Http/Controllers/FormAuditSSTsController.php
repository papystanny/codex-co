<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formauditsst;

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
    
    
               $Formauditsst = new Formauditsst();
               $Formauditsst->prenomNomEmploye = $request->input('prenomNomEmploye');
               $Formauditsst->lieuTravail = $request->input('lieuTravail');
                $Formauditsst->date = $request->input('date');
                $Formauditsst->heure = $request->input('heure');
                $Formauditsst->Epi = $request->input('Epi');
                $Formauditsst->tenueLieux = $request->input('tenueLieux');
                $Formauditsst->comportementSecuritaire = $request->input('comportementSecuritaire');
                $Formauditsst->signalisation= $request->input('signalisation');
                $Formauditsst->fichesSignaletiques= $request->input('fichesSignaletiques');
                $Formauditsst->traveauxEscavation= $request->input('travauxEscavation');
                $Formauditsst->espaceClos= $request->input('espaceClos');
                $Formauditsst->methodeTravail= $request->input('methodeTravail');
                $Formauditsst->autre= $request->input('autre');
                $Formauditsst->respectDistanciation= $request->input('respectDistanciation');
                $Formauditsst->portEpi= $request->input('portEpi');
                $Formauditsst->respectProcedures= $request->input('respectProcedures');
                $Formauditsst->notifSup = 'oui';
                $Formauditsst->notifAdmin = 'oui';



             
               $Formauditsst->save();
               
               return view('superviseurs.index');
                }
                
               catch (\Throwable $e) {
             
                Log::debug($e);
             //   return redirect()->route('campagne')->withErrors(['L\'ajout de campagne n\'a pas fonctionné']);
             return view('formAccidentTravail.formAccidentTravail');
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
