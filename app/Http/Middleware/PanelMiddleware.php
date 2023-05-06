<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if (!Auth::check() || Auth::user()->status != 'active'  || Auth::user()->role != ('admin' || 'operator')) {
            return redirect()->route('loginPage')->with('loginError', 'شما دسترسی به ورود به پنل ادمین ندارید');
        }
        return $next($request);
    }
}
