<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class EmployesController extends Controller
{
    public function index()
    { 
        return view('employe.accueil');
    }
}
