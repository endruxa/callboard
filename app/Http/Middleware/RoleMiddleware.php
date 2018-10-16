<?php

namespace App\Http\Middleware;

use App\Role;
use App\User;
use Closure;

class RoleMiddleware
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
        if (auth()->user()->pivot->user_id == Role::ROLE_USER){
            return redirect(route('upload'));
        }
        return $next($request);
    }
}
