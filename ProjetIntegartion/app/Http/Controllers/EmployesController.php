<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EmployesController extends Controller
{
    public function index()
    { 
        return view('employe.accueil');
    }

    public function formulaire()
    { 
        return view('employe.formulaire');
    }

    public function procedure()
    { 
        return view('employe.procedure');
    }

    public function equipe()
    { 
        return view('employe.equipe');
    }

    public function adminAccueil()
    { 
        return view('admin.accueil');
    }

    public function adminProcedure()
    { 
        return view('admin.procedure');
    }
}
