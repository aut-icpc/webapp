<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class CheckAccess
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
//        if (\Auth::user()->access_level != User::$SUPER_ADMIN) {
//            return redirect('/home');
//        }
        return $next($request);
    }
}
