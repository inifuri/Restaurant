<?php

namespace rest\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::check() && Auth::user()->categoria=='Administrador')
          //  return redirect('/home');
            return $next($request);
        if (Auth::check() && Auth::user()->categoria=='Garzón')
                return redirect('garzon');
    return redirect('/');
    }
}
