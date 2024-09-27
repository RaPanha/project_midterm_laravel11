<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $role = null): Response
    {
        if (!Auth::check()) {
            return redirect()->route('auth.page');
        }

        if ($role && $request->user()->role !== $role) {
            return redirect()->route('product.index');
        }

        return $next($request);
    }
}
