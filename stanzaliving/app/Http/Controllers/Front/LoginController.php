<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		//echo "======>";die;
        //
    }
	
	
	function authorizelogin(Request $request){
		
			$validator = $this->validate($request,['email' => 'required|email','password' => 'required']);

			

				
				$userdata = array(
					'email' => Input::get('email') ,
					'password' => Input::get('password')
				);
				
				$email = Input::get('email');
				$password = Input::get('password');
				
				//if (\Auth::guard('students')->attempt($userdata, $request->has('remember'))) {
				/* 	
				if (\Auth::attempt($userdata, $request->has('remember'))) {				  

				return redirect('/pages/front/my-account')->with('message','You are logged in:'); 
				}else{

				return view('pages.front.index');
				}
				*/

				
				
				\DB::enableQueryLog();
				$results= \DB::select('select * from students where s_email="'.$email.'" AND s_password="'.md5($password).'"');
				//$query = \DB::getQueryLog();
				//$lastQuery = end($query);
				//print_r($lastQuery);
				$studentid = $results[0]->id;								
				session(['student_id' => $studentid]);				
			   //return view('pages.front.my-account', ['results' => $results]);				
			     return redirect('/profile/'.$studentid);
	
		
		
		
			}
			
			
		//not applicable right now		
		public function ajaxlogin(Request $request, $id=null){	 
		$email = $request->email;
		$password = $request->password;		
		//$email = $_GET['email'];
		//$password = $_GET['password'];
		
		//$user = DB::table('users')->where('name', 'John')->first();
		//$states=State::where('country_id',$_GET['c_id'])->get();
        //$states=$states->toArray();		
		$exist=Student::where([['s_email', '=',$email],['s_password','=',md5($password)]])->first();
		$query = \DB::getQueryLog();
		}

	
	
	public function myformPost(Request $request){
				$email = $request->email;
				$password = $request->password;	
	
				\DB::enableQueryLog();
				$results= \DB::select('select * from students where s_email="'.$email.'" AND s_password="'.md5($password).'"');					   			
			   
					/*$query = \DB::getQueryLog();
					$lastQuery = end($query);
					return print_r($lastQuery);*/
				
				if(count($results)>0){
					$studentid = $results[0]->id;								
					session(['student_id' => $studentid]);
					return response()->json(['success'=>'Loged In Successfully, Wait...']); 
				}else{							
					return response()->json(['error'=>'Invalid Login Details!']); 
				}
	
	}
	
	

	
	public function logout(Request $request){
         $request->session()->flush();		
		 return redirect('/');
	}
	
    

}
