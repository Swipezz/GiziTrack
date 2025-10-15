<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

use App\Models\Account;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('Login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = Account::where('username', $request->username)->first();

        if ($user && $request->password === $user->password) {
            Session::put('user_id', $user->id);
            Session::put('username', $user->username);

            Cookie::queue('user_id', $user->id, 60);
            Cookie::queue('username', $user->username, 60);

            return redirect()->route('beranda');
        }

        return back()->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        Session::flush();
        Cookie::queue(Cookie::forget('user_id'));
        Cookie::queue(Cookie::forget('username'));

        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }

    public function showProfile()
    {
        return view('Profil');
    }
}
