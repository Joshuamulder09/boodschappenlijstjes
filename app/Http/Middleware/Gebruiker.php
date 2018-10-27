<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Gebruiker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {//of de gebruiker is ingelogd
            if (Auth::user()->isGebruiker()) { //kijken in de methode isAdmin van model User of het een gebruiker is.
                return $next($request);
            }
        }
        return redirect('/');

    }
}
