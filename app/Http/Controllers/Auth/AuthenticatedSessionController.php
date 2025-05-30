<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('play');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
