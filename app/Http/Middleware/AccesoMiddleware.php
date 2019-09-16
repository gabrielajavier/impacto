<?php

namespace App\Http\Middleware;

use Closure;

class AccesoMiddleware
{

    public function handle($request, Closure $next)
    {
        if(!$request->session()->exists('usuario')){
            return redirect('/login_root');
        }
        return $next($request);
    }
}
