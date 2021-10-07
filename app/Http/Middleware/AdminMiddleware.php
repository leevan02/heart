<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
          if( Auth::check() )
        {
            // if user is not admin take him to his dashboard
            if ( Auth::User()->usertype == '0' ) {
                 return redirect(route('/'));
            }

            // allow admin to proceed with request
            else if ( Auth::User()->usertype == '1' ) {
                 return $next($request);
            }
        }

        return redirect(route('/'));    }

}
