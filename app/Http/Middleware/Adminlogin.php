<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Adminlogin
{
    public function handle($request, Closure $next)
    {
        // Logika autentikasi admin
        // Anda bisa menggunakan metode autentikasi yang sesuai dengan kebutuhan Anda
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect()->route('login_admin');
        }

        return $next($request);
    }
}
