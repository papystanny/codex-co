<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (session('typeCompte') == 'admin') {
            return $next($request);
        }

        // Redirigez l'utilisateur vers une page d'erreur ou une autre page appropriée si nécessaire.
        return redirect()->route('login.connexion');
    }
}
