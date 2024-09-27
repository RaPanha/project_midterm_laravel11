<?php

namespace App\Repositories\Auth;

use Illuminate\Http\Request;

interface IAuthRepository
{
    public function login(Request $request);
    public function register(Request $request);
    public function logout(Request $request);
}
