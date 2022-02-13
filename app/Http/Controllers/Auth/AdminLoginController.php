<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:admin');
	}

    public function showloginForm()
    {
    	return view ('auth.admin-login');
    }

    public function login(Request $request)
    {
    	//validate the form data
    	$this-> validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	// attempt to log the user in
    	if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            // if success, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }
    	//if unsuccessful, the reidirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

	/**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
