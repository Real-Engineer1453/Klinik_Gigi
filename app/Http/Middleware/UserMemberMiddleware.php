<?php

namespace App\Http\Middleware;

use Closure;

class UserMemberMiddleware
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
        if(auth()->guard('user_member')->check())
        {
            return $next($request);
        }
        abort('403');
    }
}
