<?php

namespace rest\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class GarzonMiddleware
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
          return redirect('/home');
        //  return $next($request);
      elseif (Auth::check() && Auth::user()->categoria=='Garzón')
              return $next($request);

        return redirect('/');

    }
}
