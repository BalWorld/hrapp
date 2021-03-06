<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       if(!Auth::check()) {
            return redirect()->route('login');
        }
        
        if(Auth::user()->role == 1) {
            return $next($request);
        }

        if(Auth::user()->role == 0) {
            return redirect('/resumes')->withMessage('You dont have Admin rights');
        }
        //abort(403);
        //return $next($request);
    }
}
