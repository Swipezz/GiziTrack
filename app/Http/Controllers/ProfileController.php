<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Models\Account;

class ProfileController extends Controller
{
    public function showProfil()
    {
        $userId = Session::get('user_id');

        $account = Account::with('employees')->find($userId);

        return view('Profil', compact('account'));
    }
}

