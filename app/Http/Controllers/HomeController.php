<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function login(Request $request)
    {   
    
    
        $input = $request->all();
        $request->validate([
           
            'email' => 'required|email',
            'captcha' => 'required|captcha'
        ]);
    
 
        if(Auth::attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->role_id == 1) {
                return redirect()->route('superdashboard');
            }elseif(auth()->user()->role_id == 2){
                return redirect()->route('HomeDepartment');
            }
        }else{
            return redirect()->route('adminlogin')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }

    public function index()
    {
        return view('home');
    }
}
