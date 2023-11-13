<?php

namespace App\Http\Middleware;

use Closure;

class EmployeMiddleware
{
    public function handle($request, Closure $next)
    {
        if (session('typeCompte') == 'employe' || session('typeCompte') == 'superieur' ) {
            return $next($request);
        }

        // Redirigez l'utilisateur vers une page d'erreur ou une autre page appropriée si nécessaire.
        return redirect('/connexion') ->with('error', 'PROBLÈME MIDDLE WARE!');
    }
}
