<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Setting;
use App\Socialsetting;
class WebSettingController extends Controller
{

		public function general(){

			$setdata=Setting::all();
			$setting=$setdata[0];

			$socdata=Socialsetting::all();
			

       
		       
		        foreach ($socdata as $key => $value) {
		            //array_push($arr, $value->access_name);
		             
		             $myarr[$value->name]=$value->url;
		            
		            
		        }
			//return $myarr;
			$socialsetting=$myarr;
			
			return view('pages.admin.websitesetting.general',compact('setting','socialsetting'));
		}

		public function generalSettingUpdate(Request $request){
			 $this->validate($request, [  	 'sitename' => 'required|regex:/^[a-zA-Z0-9\. ]/' ,
		                                     'displayemail' => 'required|email' ,   
		                                     'sendemail' => 'required|email' ,
		                                     'reveiveon' => 'required' ,   
		                                     'phone' => 'required|digits:10' ,
		                                     'metatitle' => 'required|regex:/^[a-zA-Z0-9 ]/' ,   
		                                     'metadesc' => 'required|regex:/^[a-zA-Z0-9 ]/' ,
		                                     'metakeywords' => 'required|regex:/^[a-zA-Z0-9 ]/' ,   
		                                     'copyright' => 'required|regex:/^[a-zA-Z0-9\. ]/', 
		                                     'facebook' => 'required|regex:/^[a-zA-Z0-9\.\/ ]/' ,   
		                                     'google' => 'required|regex:/^[a-zA-Z0-9\. \/ ]/' ,   
		                                     'youtube' => 'required|regex:/^[a-zA-Z0-9\.\/ ]/'  
                                        ]);

			 Setting::where('id', 1)
        
          ->update(

            [
            'sitename' => $request->sitename,
            'displayemail' => $request->displayemail,
            'sendemail' => $request->sendemail,
            'reveiveon' => $request->reveiveon,
            'phone' => $request->phone,
            'metatitle' => $request->metatitle,
            'metadesc' => $request->metadesc,
            'metakeywords' => $request->metakeywords,
            'copyright' => $request->copyright,
            'facebook' => $request->facebook,
            'google' => $request->google,
            'youtube' => $request->youtube
           
            ]);
			\Session::flash('message','Setting Successfully Updated!');
        	return \Redirect::back('');
			//dd($request->all());

		}

		public function social(){

			$data=Socialsetting::all();
			

       
		       
		        foreach ($data as $key => $value) {
		            //array_push($arr, $value->access_name);
		             
		             $myarr[$value->name]=$value->url;
		            
		            
		        }
			//return $myarr;
			$setting=$myarr;
			return view('pages.admin.websitesetting.social',compact('setting'));
		}


		public function socialSettingUpdate(Request $request){


		SocialSetting::where('name', 'facebook')
        
          ->update(

            [
            'url' => $request->facebook,
           
            ]);
          SocialSetting::where('name', 'google')
        
          ->update(

            [
            'url' => $request->google,
           
            ]);
          SocialSetting::where('name', 'youtube')
        
          ->update(

            [
            'url' => $request->youtube,
           
            ]);
			\Session::flash('message','Setting Successfully Updated!');
        	return \Redirect::back();
		}
    //
}
