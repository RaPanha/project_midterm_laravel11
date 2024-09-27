<?php

namespace App\Http\Controllers;

use App\Repositories\Auth\IAuthRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authRepository;

    public function __construct(IAuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login()
    {
        return view('Auth.login');
    }

    // Todo: Login
    public function authenticateLogin(Request $request)
    {
        return $this->authRepository->login($request);
    }

    // Todo: Register
    public function authenticateRegister(Request $request)
    {
        return $this->authRepository->register($request);
    }

    // Todo: Logout
    public function checkout()
    {
        return view('Auth.checkout');
    }
}
