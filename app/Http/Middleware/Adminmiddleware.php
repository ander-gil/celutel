<?php

namespace App\Http\Middleware;

use Closure;

class Adminmiddleware
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
        if(! auth()->check()) //no esta registrado
         redirect('login');
         
         if(auth()->user()->rol !=0) //no es admin
         redirect('home');

        return $next($request);
    }
}
