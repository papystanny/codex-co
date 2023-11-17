<?php

namespace App\Http\Controllers;
use App\Models\Formsitdangereuse;
use App\Models\Formateliermecanique;
use App\Http\Requests\FormsitdangereuseRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
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

    public function visualisezForm()
    {
        $formMec = Formateliermecanique::all();
        $formsit = Formsitdangereuse::all();

        return View('Formulaires.index');
    }

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
            $form->nomEmploye =$request->input('nomEmploye');
            $form->prenomEmploye =$request->input('prenomEmploye');
            $form->matriculeEmploye =$request->input('matriculeEmploye');
            $form->fonctionLorsEvenement =$request->input('fonctionLorsEvenement');
            $form->secteurActivite =$request->input('secteurActivite');
            $form->dateObservation =$request->input('dateObservation');
            $form->heureObservation =$request->input('heureObservation');
            $form->temoins =$request->input('temoins');
            $form->descriptionEvenement =$request->input('descriptionEvenement');
            $form->ameliorationsProposees =$request->input('ameliorationsProposees');
            $form->supAvise =$request->input('supAvise');
            $form->nomSuperviseur =$request->input('nomSuperviseur');
            $form->signatureEmploye =$request->input('signatureEmploye');
            $form->dateSupeAvise =$request->input('dateSupeAvise');
            $form->dateSignatureEmploye =$request->input('dateSignatureEmploye');
            $form->signatureSuperviseur =$request->input('signatureSuperviseur');
            $form->dateSignatureSuperviseur =$request->input('dateSignatureSuperviseur');
            $form->numPosteSuperviseur =$request->input('numPosteSuperviseur');
            $form->notifSup = 'oui';
            $form->notifAdmin = 'oui';
            $form->save();
            return redirect()->route('formulaires.atelierMec')->with('message', 'L\'ajout a été effectué');
            
       
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
