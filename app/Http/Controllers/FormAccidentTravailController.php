<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\FormaccidentsTravail;
class FormAccidentTravailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function AccidentTravail()
    {
        return view('formAccidentTravail.formAccidentTravail');
        //
    }
     public function store(Request $request)
    {
        //
        {
            try {
    
    
               $Formaccidentstravail = new Formaccidentstravail();
               $Formaccidentstravail->nomEmploye = $request->input('nomEmploye');
                $Formaccidentstravail->fonctionMomentEvenement = $request->input('fonctionMomentEvenement');
                $Formaccidentstravail->matriculeEmploye = $request->input('matriculeEmploye');
                $Formaccidentstravail->dateAccident = $request->input('dateAccident');
                $Formaccidentstravail->heureAccident = $request->input('heureAccident');
                $Formaccidentstravail->nomsTemoins = $request->input('nomsTemoins');
                $Formaccidentstravail->endroitAccident = $request->input('endroitAccident');
                $Formaccidentstravail->secteurActivite = $request->input('secteurActivite');
                $Formaccidentstravail->natureSiteBlessure = $request->input('natureSiteBlessure');
                $Formaccidentstravail->descriptionBlessure = $request->input('descriptionBlessure');
                $Formaccidentstravail->violence = $request->input('violence');
                $Formaccidentstravail->descriptionDeroulementBlessure = $request->input('descriptionDeroulementBlessure');
                $Formaccidentstravail->premiersSoins = $request->input('premiersSoins');
                $Formaccidentstravail->nomSecouriste = $request->input('nomSecouriste');
                $Formaccidentstravail->necessiteAccident = $request->input('necessiteAccident');
                $Formaccidentstravail->supAvise = $request->input('supAvise');
                $Formaccidentstravail->nomSuperviseurAvise = $request->input('nomSuperviseurAvise');
                $Formaccidentstravail->dateSuperviseurAvise = $request->input('dateSuperviseurAvise');
                $Formaccidentstravail->signatureSupImmediat = $request->input('signatureSupImmediat');
                $Formaccidentstravail->numPosteSupImmediat = $request->input('numPosteSupImmediat');
                $Formaccidentstravail->dateSignatureSupImmediat = $request->input('dateSignatureSupImmediat');
                $Formaccidentstravail->signatureEmploye = $request->input('signatureEmploye');
                $Formaccidentstravail->numPosteEmploye = $request->input('numPosteEmploye');
                $Formaccidentstravail->dateSignatureEmploye = $request->input('dateSignatureEmploye');




              /* $Formaccidentstravail-> nom = $request->input('nom');
               $Formaccidentstravail-> dateDebut = $request->input('dateDebut');
               $Formaccidentstravail-> debutSondage = $request->input('debutSondage');
               $Formaccidentstravail-> finSondage = $request->input('finSondage');
               $Formaccidentstravail-> statut = "en cours";
               $Formaccidentstravail -> usager_id =3; //<!-- Session::get('id');-->   */
               $Formaccidentstravail->save();
               
               return redirect()->route('professeur.creationsondage');
                }
                
               catch (\Throwable $e) {
             
                Log::debug($e);
             //   return redirect()->route('campagne')->withErrors(['L\'ajout de campagne n\'a pas fonctionné']);
             return redirect()->route('employe.formAccidentTravail');
               }
               
                
    
            //
        }
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
