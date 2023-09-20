<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Auth;
use DB;
use Carbon\Carbon;
use Validator;

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
       
/*
        request()->validate([

            'id' => ['required', 'id'],

            'password' => ['required'],

        ]);

        
*/

$request->validate([
    'id' => 'required',
    'password' => 'required',
]);
       

        return redirect()->route('Formulaires.formulaireAcc')->with('message',"Connexion réussie.");
    }

    
}
