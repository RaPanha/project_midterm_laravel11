<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->has(['email', 'password'])) {
            return redirect()->back()->withErrors('Email and password are required');
        }

        $user = User::where('email', $request->input('email'));

        if ($user && Hash::check($request->input('password'), $user->password)) {
            FacadesAuth::login($user);

            return redirect()->route('product.index');
        }

        return redirect()->back()->withErrors('Invalid email or password');
    }
}
