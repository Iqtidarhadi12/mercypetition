<?php

namespace App\Http\Middleware;
use Auth;

use Closure;
use Illuminate\Http\Request;
use App\Models\user;
class Admin
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
            
            return route('adminlogin');
        }
       
     
        if (Auth::user()->role_id == 1) {
            return response()->view('SuperAdmin.index');
        }  

       
        else {
           
            return route('adminlogin');
        }
    }
}
