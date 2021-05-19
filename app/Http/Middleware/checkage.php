<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       //echo "THIS IS GLOBAL MESSAGE FOR ALL PAGES...";
        if($request->age && $request->age <18)
        {
            return redirect ('noaccess');
        }
        return $next($request);
    }
}
