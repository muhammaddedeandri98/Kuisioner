<?php

namespace App\Http\Middleware;

use Closure;

class ceklevel
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
        if(in_array($request->user()->level,$levels)){
        return $next($request);
        
        }
       return redirect('/login');
    }
}
