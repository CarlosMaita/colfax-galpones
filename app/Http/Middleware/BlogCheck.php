<?php

namespace App\Http\Middleware;

use Closure;

class BlogCheck
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
        if(auth()->user())
        {
            if(auth()->user()->roles->title == 'blogger' || auth()->user()->roles->title == 'administrator'){
                return $next($request);
            }
        }

        return redirect('/cms');
    }
}
