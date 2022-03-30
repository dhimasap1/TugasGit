<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{

    public function login()
    {
        return view('login');
    }
    public function actionlogin(Request $req)
    {
        $username = $req->username;
        $pwd   = $req->password;
        if (Auth::attempt(['username' => $username, 'password' => $pwd])) {
            return redirect('/');
        } else {
            return redirect('/dashboard');
        }
    }


    // public function login()
    // {
    //     if (Auth::check()) {
    //         return redirect('/dashboard');
    //     } else {
    //         return view('login');
    //     }
    // }

    // public function actionlogin(Request $request)
    // {
    //     $data = [
    //         'username' => $request->input('username'),
    //         'password' => $request->input('password'),
    //     ];

    //     if (Auth::Attempt($data)) {
    //         return redirect('/dashboard');
    //     } else {
    //         Session::flash('error', 'Email atau Password Salah');
    //         return redirect('/');
    //     }
    // }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
    // public function index()
    // {
    //     return view('Login.login', [
    //         'title'  => 'login',
    //         'active' => 'login'
    //     ]);
    // }

    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email:dns',
    //         'password' => 'required',
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('/dashboard');
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    //     return view('dashboard');
    // }
}
