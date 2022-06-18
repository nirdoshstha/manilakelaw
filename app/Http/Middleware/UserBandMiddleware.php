<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserBandMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->is_ban)
        {
            $banned = Auth::user()->is_ban=='1';
            Auth::logout();

            if($banned)
            {
                $message = 'Your account has been banned, pls contact Admin';
            }
            return redirect()->route('login')
            ->with('status', $message)
            ->withErrors(['email'=>'Your account has been banned pls contact Administration.']);

        }
        return $next($request);
    }
}
