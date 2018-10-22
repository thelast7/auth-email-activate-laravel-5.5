<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        /*
        if (Auth::user()->role == 'admin') {
            return $next($request);
        }
        return redirect('/');
        */
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if (Auth::user()->role == $role) {
                    return $next($request);
                }
            }
            return redirect('/');
        }
    }
}
