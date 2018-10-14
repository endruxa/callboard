<?php

namespace App\Http\Middleware;

use App\Profile;
use Closure;

class RoleUserMiddleware
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
        if (\Auth::user()->id == Profile::role(1)) {
            return redirect(route('user'));
        }elseif (\Auth::user()->id == Profile::role(2)){
            return redirect(route('coach'));
        }elseif (\Auth::user()->id == Profile::role(3)) {
            return redirect(route('company'));
        }
        return $next($request);
    }
}
