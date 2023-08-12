<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->type != "customer") {
            auth()->logout();
            return redirect()->route('/')->withError('Unauthorized Access');
        }

        if (auth()->user()->status != "active") {
            auth()->logout();
            return redirect()->route('/')->withError('Unauthorized Access');
        }

        return $next($request);
    }
}
