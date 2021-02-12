<?php

namespace App\Http\Middleware;

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
        if(auth()->check() && in_array(auth()->user()->id, config('laravel.admins'))){

            return $next($request);

        }

        return redirect()->route('home')->with('error', 'Access Denied. !');

    }
}
