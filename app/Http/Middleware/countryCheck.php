<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class countryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Middleware check in web = http://127.0.0.1:8000/about?age=18&country=palestine

            if ($request->country != "palestine") {
            die("You are jews and i will kill you bloody");
        }

        return $next($request);
    }
}
