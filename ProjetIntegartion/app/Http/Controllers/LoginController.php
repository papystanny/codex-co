<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Auth;
use DB;
use Carbon\Carbon;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('Formulaires.formulaireAcc');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Connexion.connect');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function login(Request $request)
    {
        Log::debug("Login Controller");

        $reussi = Auth::attempt(['id'=> $request->id, 'password' => $request->password]);
        
        if($reussi)
        {
            log::debug('high');
            return redirect()->route('Formulaires.formulaireAcc')->with('message', "Connexion réussie.");
        }
        else
        {
            return redirect()->route('Connexion.connect')->withErrors(['Informations invalides.']);
        }
    }

    
}
