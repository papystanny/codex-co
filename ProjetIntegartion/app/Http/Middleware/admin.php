<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->typeCompte == 'superieur') {
            return redirect()->route('Formulaires.formulaireSitdang');
        }

        if (Auth::user()->typeCompte == 'employe') {
            return redirect()->route('Formulaires.formulaireAcc');
        }
        return $next($request);
    }
}
