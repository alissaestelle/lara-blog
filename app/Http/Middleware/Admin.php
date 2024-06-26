<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /*
    Handle an incoming request.
    @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    */

    public function handle(Request $request, Closure $next): Response
    {
        // dump($request->path());

        if (auth()->user()?->id !== 1) {
            abort(403);
            // abort(Response::HTTP_FORBIDDEN);
        };

        return $next($request);
    }
}
