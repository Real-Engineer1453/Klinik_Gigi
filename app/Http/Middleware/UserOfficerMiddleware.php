<?php

namespace App\Http\Middleware;

use Closure;

class UserOfficerMiddleware
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
        if(auth()->guard('user_officer')->check())
        {
            return $next($request);
        }
        abort('403');
    }
}
