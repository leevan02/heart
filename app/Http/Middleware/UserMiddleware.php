<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
            // if user admin take him to his dashboard
            if ( Auth::User()->usertype == '1' ) {
                 return redirect(route('/'));
            }

            // allow user to proceed with request
            else if ( Auth::User()->usertype == '0' ) {
                 return $next($request);
            }
        }

   
    
}
