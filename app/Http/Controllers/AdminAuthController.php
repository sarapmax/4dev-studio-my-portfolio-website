<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function getLogin() {
    	if(auth()->guard('admin')->check()) {
    		return redirect('backoffice');
    	}

    	return view('backoffice.login');
    }

    public function postLogin(Request $request) {
    	$this->validate($request, [
    		'email' => 'email|required',
    		'password' => 'required',
    	]);

    	$credentials = [
    		'email' => $request->email,
    		'password' => $request->password,
    	];

    	if(auth()->guard('admin')->attempt($credentials, $request->remember_token)) {
    		return redirect('backoffice');
    	}else {
    		return redirect()->back()->with('error-login', 'Invalid email or password');
    	}
    }

    public function getLogout() {
    	auth()->guard('admin')->logout();

    	return redirect('backoffice/login');
    }
}
