<?php

namespace App\Http\Middleware;

use App\Role;
use App\User;
use Closure;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param null $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null)
    {
        $role = \Auth::user()->roles();
        $user = \Auth::user();
        if ($user) {
            return $next($request);
        }

        return redirect('/');
    }
}
