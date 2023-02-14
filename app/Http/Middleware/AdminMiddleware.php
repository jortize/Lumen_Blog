<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

class AdminMiddleware
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
        // Pre-Middleware Action
        $auth_user = auth()->user();
        $user =  User::find($auth_user->id);
        if (auth()->check() && $user->isAdmin())
        {
            return $next($request);
        }
        else{
            return response('Unauthorized.', 401);
        }
        // Post-Middleware Action
    }
}
