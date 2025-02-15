<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        if(Auth::user()) {
            return redirect('/dashboard');
        }

       $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:50',
            'password' => 'required|max:12|string',
       ]);

       $user = User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'level' => 'user',
            'password' => Hash::make($request -> password),
       ]);

        Auth::login($user);
        return redirect()->route('management.dashboard');

    }

    public function login(Request $request) {
        $credential = $request -> validate([
            'email' => 'required|email|string',
            'password' => 'required|string',
        ]);

        $remember = $request->has('remember');

        if(Auth::attempt($credential, $remember)) {
            $request -> session()->regenerate();

            return redirect()->route('management.dashboard');
        }

        return back()->withErrors([
            'email' => 'email atau password mungkin salah.'
        ]);
    }
    
    public function logout(Request $request) {
        Auth::logout();
        $request -> session()->invalidate();
        $request -> session()->regenerateToken();
        return redirect()->route('login');
        
    }
}
