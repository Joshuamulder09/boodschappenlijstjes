<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {//of de gebruiker is ingelogd
            if (Auth::user()->isAdmin()) { //kijken in de methode isAdmin van model User of het een admin is.
                return $next($request);
            }
        }
        return redirect('/');

    }

}
