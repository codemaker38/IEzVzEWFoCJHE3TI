<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class AuthCustomer
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
        if (Auth::check() === false || Auth::user()->hasRole('customer') === false) {
            return redirect('/');
        }

        return $next($request);
    }
}
