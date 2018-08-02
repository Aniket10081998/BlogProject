<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usersController extends Controller
{
	
	public function postSignUp(Request $request)
	{
		$email=$request['email'];
		$password=bcrypt($request['password']);
		
		$users=new users();
		$users->email=$email;
		$users->password=$password;
		
		$users->save();
		Auth::login($users);
		
		return redirect()->route('dashboard');
	}
	public function postSignIn(request $request)
	{
		if(Auth::attempt(['email'=> $request['email1'], 'password'=>$request['password1']]))
		{
			return redirect()->route('dashboard');
		}
		else
		{
		return redirect()->back();
		}
	}
	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('home');
	}
}

	