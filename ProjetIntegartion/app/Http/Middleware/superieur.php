<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class superieur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::debug("Super Admin Middleware");

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        Log::debug("Logged in as: ". Auth::user());
        Log::debug("User typeCompte: " . Auth::user()->typeCompte);
        
        if (Auth::user()->typeCompte == 'admin') {
            return redirect()->route('Formulaires.formulaireAcc');
        }

        if (Auth::user()->typeCompte == 'employe') {
            return redirect()->route('Formulaires.formulaireAcc');
        }
        return $next($request);
    }
}
