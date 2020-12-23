<?php

namespace App\Http\Middleware;

use Closure;

class changeLang
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
        if (\Session::has('locale')) {
          if (\App::getLocale()!= \Session::get('locale')) {
             \App::setLocale(\Session::get('locale'));
            }
          }else {
             \Session::put('locale', 'en');
             \App::setLocale('en');
         }
        return $next($request);
    }
}
