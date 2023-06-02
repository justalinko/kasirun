<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $val = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);
        if(!$val)
        {
        return back()->withErrors($val , 'errors');
        }

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect('/');
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ] , 'errors');
        }
    }
}
