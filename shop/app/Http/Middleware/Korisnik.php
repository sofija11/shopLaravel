<?php

namespace App\Http\Middleware;

use Closure;

class Korisnik
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
       
        if(session()->has('user')) {
            return $next($request);
        } else {
          
            abort(403, "Unauthorized action.");
        }  
    }
}
