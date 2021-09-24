<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class Admin
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

        if(Auth::user()->role == 3)
        {
            return redirect()->route('home');
        } elseif(Auth::user()->role == 1){
            return $next($request);
        } else {
            return redirect('/seller');
        }
    }
}
