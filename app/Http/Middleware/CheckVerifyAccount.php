<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckVerifyAccount
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (is_null(auth()->user()) || is_null(auth()->user()->email_verified_at)) {
            Session::flash('errorVerifyAccount', 'Tài khoản chưa được xác minh');
            return redirect()->route('home');
        }
        return $next($request);
    }
}
