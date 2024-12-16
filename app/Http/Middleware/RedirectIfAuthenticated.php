<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::check()) {
            $role = Auth::user()->role->name; // Access the user's role
            if ($role === 'admin') {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('user.home');
            }
        }

        return $next($request); // Allow guests to proceed
    }
}
