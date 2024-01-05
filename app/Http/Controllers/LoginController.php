<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        return view('login.index', [
            'title'=>'Login',
            'page' => 'login'
        ]);
    }

    // kalo mau ketat email:dns
    public function authenticate(Request $request){
       $credential = $request->validate([
            'email'=>'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }


        return back()->with('loginErrors', 'Login Failed!');
        dd('berhasil login');
    }
    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}