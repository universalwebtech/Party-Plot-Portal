<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
		if (Auth::guard($guard)->check()) {
			if (Request::is('admin/*'))
			{
				if(Auth::user()->hasRole('Party Plot Owner')){
					return redirect('/');
				}
				
			}else{
				if(Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Agent')){
					return redirect('admin/dashboard');	
					/*
					Auth::guard()->logout();
					$request->session()->flush();
					$request->session()->regenerate();
					return redirect('/');
					*/

				}
			}
		}
		 return $next($request);
    }
}
