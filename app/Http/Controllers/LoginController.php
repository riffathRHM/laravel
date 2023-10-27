<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

class LoginController extends Controller
{
    
   public function checklogin(Request $request)
    {
        //validation
           $this ->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:6'
           ]);

           $user_data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($user_data))
        {
            return view('success');
        }
        else{
            return back() -> with('error','Wrong Login Details');
        
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
}
