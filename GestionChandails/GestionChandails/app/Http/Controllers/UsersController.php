<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function login(Request $request)
    {
        $success = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if($success) 
        {
            Session::put('email', $request->email);
            if(Session::has('email'))
            {
                $articles = Article::all();
                return view('articles.index', compact('articles'));
            }
        }
        else
        {
            return redirect()->back();
            
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
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
