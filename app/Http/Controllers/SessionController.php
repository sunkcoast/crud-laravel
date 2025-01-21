<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib di isi',
            'password.required' => 'Password wajib di isi'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); 
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('sesi');
    }

    public function run()
    {
        $this->call(EmployeeSeeder::class);
    }
}
