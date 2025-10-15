<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class AuthCheck
{
    public function handle(Request $request, Closure $next)
    {
        $userId = Session::get('user_id') ?? $request->cookie('user_id');

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        return $next($request);
    }
}
