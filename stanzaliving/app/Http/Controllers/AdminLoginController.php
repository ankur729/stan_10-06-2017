<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

class AdminLoginController extends Controller
{


	public function login_check(Request $req){

		//return 'VALIDATING';
	//	return $req->all();

		 if (\Auth::attempt(Input::only('email', 'password'))) {
       			

       		return redirect('/admin/dashboard')->with('message','You are logged in:');
		 	//return 'VALID ';
   		 }

    		//return 'INCORRECT';			
			return redirect('/admin_logout')->with('duplicate','Invalid Info');
			
   
	}

	public function logout(){

	//	echo 'logout';
		 \Auth::logout();

		 return view('pages.admin.login.login');
		// if(\Auth::logout())
		// 	{

		// 		return "success logout";
		// 	}
	}

	public function show_admin_auth_view(){



			if(\Auth::check()){
			
				return view('pages.admin.home');
			//	return redirect('/admin-home');
			}
	}
    //
}
