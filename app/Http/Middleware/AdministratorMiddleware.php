<?php

namespace App\Http\Middleware;

use Closure;

class AdministratorMiddleware
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
        if(auth()->user() == null || auth()->user()->role_id != \App\UserRole::$ADMINISTRATOR){
            return redirect('/login');
        }
        return $next($request);
    }
}
