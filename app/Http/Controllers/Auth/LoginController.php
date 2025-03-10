<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth; 

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->route('blogs.index');
        }
        return redirect()->route('login')->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
