<?php
namespace App\Http\Middleware;

use Closure;
use Auth;

class PermissionMiddleware
{
    public function handle($request, Closure $next,$permission)
    {    
        //if not logged in, deny
        if (Auth::guest()) {
            abort(403);
        } 

        //check permission        
        if (!$request->user()->can($permission)) {
           abort(403);
        }

        return $next($request);
    }
}