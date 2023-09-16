<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {

            // Admin role == 1
            // User role == 0

            if (Auth::user()->role == '1') {
                return $next($request);
            } else {
                return redirect('/dashboard')->with('message', 'Akses ditolak karena anda bukan Admin!!');
            }
        } else {
            return redirect('/login')->with('message', 'Silahkan login untuk mengakses website');
        }
        return $next($request);
    }
}
