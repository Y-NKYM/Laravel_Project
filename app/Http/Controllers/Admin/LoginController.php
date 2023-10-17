<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    
    public function auth(Request $request){
        $credentials = $request -> only(['email', 'password']);
        if(Auth::guard('admins') -> attempt($credentials)){
            $request->session()->regenerate();
            return redirect() -> route('admin.dashboard')
                -> with ([
                    'notice' => 'ログインしました'
                    ]);
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    
    public function logout(Request $request){
        Auth::guard('admins')->logout();
    	$request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login')
            -> with([
                'notice' => 'ログアウトしました',
                ]);
    }
}
