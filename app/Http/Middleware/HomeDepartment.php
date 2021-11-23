<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class HomeDepartment
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
        

        if (!Auth::check()) {
            return redirect()->route('adminlogin');
        }
       
      
        if (Auth::user()->role_id == 2) {
            return response()->view('HomeDepartment.homedepartment');
        }  

       
        else {
            return redirect()->route('adminlogin');
        }

    }
}
