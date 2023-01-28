<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $check = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($check)) {
            $status = auth()->user()->status;
            $level = auth()->user()->level;

            if ($status == 'aktif' && $level == 'admin') {
                $request->session()->regenerate();
                return redirect('page');
            }

            elseif ($status == 'aktif' && $level == 'petugas') {
                $request->session()->regenerate();
                return redirect('page');
            }

            elseif ($status == 'aktif' && $level == 'masyarakat') {
                $request->session()->regenerate();
                return redirect('page');
            }

            elseif ($status == 'nonaktif') {
                return back()->withInfo('akun anda belum aktif, silakan hubungi admin atau melalui email @elfan');
            } //masih error, bisa tembus middleware
        } 

        // return back()->withInfo('Email or password was wrong!');
        return back()->withInfo('username or password salah');
    }

    public function logout(Request $request)
     {
        Auth::logout();
        return redirect('/login');
    }
}
