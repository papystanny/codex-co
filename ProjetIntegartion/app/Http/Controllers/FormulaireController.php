<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Http\Requests\FormulaireRequest;
use Illuminate\Support\Facades\Log;
use DB;
use File;


class FormulaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Formulaires.formsitdang');
    }

    public function formulaireMec()
    {
        return view ('Formulaires.atelierMec');
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
    public function store(Request $request)
    {
        try {
        $form = new Form($request->all());
        $form->password=Hash::make($request->password);
        $form->save();
        
        return redirect()->route('Formulaires.formsitdang')->with('message', 'L\'ajout a été effectué');
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
