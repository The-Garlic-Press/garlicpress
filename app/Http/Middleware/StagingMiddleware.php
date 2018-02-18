<?php

namespace App\Http\Middleware;

use Closure;

class StagingMiddleware
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
        if(!$request->is('checkpoint')) {
            if( false == $request->cookie('demo') ) {
                return redirect('/checkpoint');
            } 
            if( $request->cookie('demo') !== config('app.staging_password') ) {
                return redirect('/checkpoint');
            } 
        }
        return $next($request);
    }
}
