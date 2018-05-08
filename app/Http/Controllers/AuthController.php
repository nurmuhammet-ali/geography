<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt(['email' => request()->email, 'password' => request()->password])) {
            return back()->with('errors', 'Email/Açarsöz ýalňyş');
        }

        return redirect('/admin');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
