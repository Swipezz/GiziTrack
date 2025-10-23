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

        // Ambil user berdasarkan username
        $user = Account::where('username', $request->username)->first();

        if ($user) {
            // Simpan session login
            $request->session()->put('user_id', $user->id);
            $request->session()->put('username', $user->username);

            // Redirect ke halaman beranda
            return redirect()->route('beranda');
        }

        // Jika gagal login
        return back()->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        Session::flush();
        Cookie::queue(Cookie::forget('user_id'));
        Cookie::queue(Cookie::forget('username'));

        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:account,username|max:255',
            'password' => 'required|min:4',
            'office' => 'required|string',
            'employee' => 'required|integer',
        ]);

        $account = new Account();
        $account->username = $request->username;
        $account->password = $request->password;
        $account->office = $request->office;
        $account->employee = $request->employee;
        $account->save();

        return redirect()->route('login')->with('success', 'Registrasi berhasil.');
    }
}
