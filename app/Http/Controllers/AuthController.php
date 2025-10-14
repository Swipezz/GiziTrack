<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Account;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
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

            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Username atau password salah.');
    }
}
