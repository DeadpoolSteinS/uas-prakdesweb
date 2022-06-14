<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function registrasi(Request $request){
        User::create([
            'name' => $request->nama,
            // 'tanggal_lahir' => $request->tanggal_lahir,
            // 'username' => $request->username,
            'password' => bcrypt($request->katasandi),
            'email' => $request->email
        ]);


        return redirect('/login');
    }

    function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // dd('berhasil login');
            $userId = User::where('email', $request->email)->first();
            $request->session()->regenerate();
            $request->session()->push('id', $userId->id);

            return redirect()->intended('/home');
        };

        return back()->with('loginError', 'Login failed!');
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    function home(){
        return view('page.home'); 
    }
}
