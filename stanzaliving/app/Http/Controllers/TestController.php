<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{


	public function testMethod(Request $req){

		//return 'test';
		
		return view('pages.admin.test.test');
	}

}


?>