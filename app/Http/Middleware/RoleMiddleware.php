<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
//        dd(Auth::user()->Roles->name);
        if(!Auth::check()){
            return redirect('/login');
        }
        $user = Auth::user()->roles_models_id;
        switch ($user){
            case 1:
                return $next($request);
                break;
            case 2:
                return redirect()->route('customer');
                break;
            default:

        }
    }
}
