<?php


namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginprocess(Request $request){
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('/pegawai');
        } 
        
        return back()->withErrors(['email' => 'Username belum terdaftar atau password salah.'])->withInput();
    }

    public function register(){
        return view('register');
    }

    public function registeruser(Request $request){
    // dd($request->all());
    if (User::where('email', $request->email)->exists()) {
        return back()->withErrors(['email' => 'Email sudah terdaftar, silahkan login'])->withInput();
    }
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        
        return back()->with('success', 'Registrasi berhasil! Silakan Login.');
    }

    public function logout(Request $request){
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}
}
