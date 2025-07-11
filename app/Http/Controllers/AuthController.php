<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // login
    public function login() {
        return view('auth/login');
    }

    //loginProses
    public function loginProses(Request $request){
        $request->validate([
            'email'   => 'required',
            'password' => 'required|min:8',
        ],[
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
            'password.min' => 'Password Minimal 8 Karakter',
        ]);

        $data = array(
           'email'     => $request->email,
           'password'  => $request->password,
        );
        if (Auth::attempt($data)) {
            return redirect()->route('dashboard')->with('success', 'Anda Berhasil Login');
        } else {
            return redirect()->back()->with('error','Email atau Password Salah');
        }
    }

    //logout
    public function logout(){
        Auth::logout();

        return redirect()->route('login')->with('success', 'Anda Berhasil Logout');
    }
}
