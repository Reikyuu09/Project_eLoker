<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Pastikan user sudah login
        if (Auth::check()) {
            // Cek kolom is_admin, kalau bukan admin redirect ke /
            if (!Auth::user()->is_admin) {
                return redirect('/');
            }

            // Kalau admin, lanjutkan request
            return $next($request);
        }

        // Kalau belum login, redirect ke halaman login
        return redirect('/login');
    }
}
