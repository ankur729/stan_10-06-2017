<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use App\Hostel;
use App\Country;
use App\RoomSharing;
use App\State;
use App\City;
use App\Complaint;
use App\Http\Controllers\Controller;

class ProfileController extends Controller{
    
    public function index($id=''){
		
        $studentid = $id;
		$session_value = session('student_id');
		$complaintObj = new Complaint;
		
		 		
		if($session_value!=''){
			
		try{
        $students=Student::findOrFail($session_value);
        $roomtype=RoomSharing::findOrFail($students['s_room']);
        $hostel=Hostel::findOrFail($students['s_hostel']);
		//$totalcomplaint = $complaintObj->complaintCountById($session_value);
		$complaintdata = $complaintObj->complaintRecord($session_value);
		
        }
         catch(\Illuminate\Database\QueryException $ex){
            \Session::flash('message','Query Exception Occurred. Call Developer!');
			return \Redirect::back();
         }		
		 
		 return view('pages.front.my-account',compact('students','complaintdata','h'));
			
		}else{
			return view('layouts.master.front.index');			
		}
		
    }
	
/* public function studentcomplaint($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.student-complaint');
		}else{
			return view('layouts.master.front.index');			
		}
		
} */

public function foodmenu($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.food-menu');
		}else{
			return view('layouts.master.front.index');			
		}
		
}

public function invoice($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.invoice');
		}else{
			return view('layouts.master.front.index');			
		}
		
}

public function studentprofile($id=''){
	
	    $studentid = $id;
		$session_value = session('student_id');		
		
		try{			
			$student_data=Student::findOrFail($session_value);
			$countries=Country::all();
            $roomtype=RoomSharing::findOrFail($student_data['s_room']);
            $hostel=Hostel::findOrFail($student_data['s_hostel']);			
        }
        catch(\Illuminate\Database\QueryException $ex){
            \Session::flash('message','Query Exception Occurred. Call Developer!');
			return \Redirect::back();
        }		
		
		if($session_value!=''){		
			return view('pages.front.student-profile',compact('student_data','countries'));
		}else{
			return view('layouts.master.front.index');			
		}		
		
}
 
public function voxpopuli($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.vox-populi');
		}else{
			return view('layouts.master.front.index');			
		}
		
}
  
public function latenightout($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.late-night-out');
		}else{
			return view('layouts.master.front.index');			
		}
		
} 

public function stanzasocial($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.stanza-social');
		}else{
			return view('layouts.master.front.index');			
		}
		
} 

public function stanzaboard($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.stanza-board');
		}else{
			return view('layouts.master.front.index');			
		}
		
} 

public function download($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		if($session_value!=''){			
			return view('pages.front.download');
		}else{
			return view('layouts.master.front.index');			
		}
		
} 

public function studentprofileupdate($id=''){
       
		$studentid = $id;
		$session_value = session('student_id');
		
		
		$complaintObj = new Complaint;
		
		$studentid = $id;
		$session_value = session('student_id');
		
		
		try{
			
			$student_data=Student::findOrFail($session_value);
			$countries=Country::all();
			$states=State::where('country_id',$student_data->s_country)->get();
            $cities=City::where('state_id',$student_data->s_state)->get();
            $roomtype=RoomSharing::findOrFail($student_data['s_room']);
            $hostel=Hostel::findOrFail($student_data['s_hostel']);			
        }
        catch(\Illuminate\Database\QueryException $ex){
            \Session::flash('message','Query Exception Occurred. Call Developer!');
			return \Redirect::back();
        }
		
		
		
		
		if($session_value!=''){		
		
			return view('pages.front.student-profile-update',compact('student_data','countries','states','cities'));
		}else{
			return view('layouts.master.front.index');			
		}	
		
		
		
} 





public function updateprofile(Request $request){
	
	
	$session_value = session('student_id');

	$this->validate($request, [  's_firstname' => 'required' ,
                                      's_lastname'=>'required',									  
                                      's_parentname'=>'required',
									  's_email'=>'required',
									  's_contact'=>'required',
									  's_dob'=>'required',
									  's_gender'=>'required',
									  's_marital_status'=>'required',									  
									  's_college'=>'required',
									  's_course'=>'required',
									  's_year'=>'required',
									  's_country'=>'required',
									  's_bloodgroup'=>'required',
									  's_joindate'=>'required',									  
									  's_address'=>'required',
									  's_city'=>'required',
									  's_state'=>'required',
									  's_pincode'=>'required',
									  's_street'=>'required',
									  's_landmark'=>'required'									  
                                      ]);
									  
									  
									  if($request->student_idproof=='' && $request->s_idproof==''){
										$this->validate($request, [  's_idproof'     =>'required|image|mimes:jpeg,png,jpg'   
										  ]); 
									  }


				$imgidproofname='';
				if($request->file('s_idproof')){
				$file = $request->file('s_idproof');
				$imgidproofname = time().$file->getClientOriginalName();			     			
				$destinationPath = public_path().'/images/student/' ;
				$file->move($destinationPath,$imgidproofname);
				}else{
				  $imgidproofname=$request->student_idproof;	
				}

		
      
				try{
						
						
					/* $studentupd= Student::where([
					['id', '=',$session_value]						
					])									
					*/						
					Student::where('id', $session_value)
					->update([
						's_firstname' =>$request->s_firstname,
						's_lastname'=>$request->s_lastname,
						's_parentname'=>$request->s_parentname,
						's_email'=>$request->s_email,
						's_contact'=>$request->s_contact,
						's_dob'=>$request->s_dob,
						's_gender'=>$request->s_gender,
						's_marital_status'=>$request->s_marital_status,
						's_idproof'=>$imgidproofname,
						's_college'=>$request->s_college,
						's_course'=>$request->s_course,
						's_year'=>$request->s_year,
						's_country'=>$request->s_country,
						's_bloodgroup'=>$request->s_bloodgroup,
						's_joindate'=>$request->s_joindate,
						's_address'=>$request->s_address,
						's_city'=>$request->s_city,
						's_state'=>$request->s_state,
						's_pincode'=>$request->s_pincode,
						's_street'=>$request->s_street,
						's_landmark'=>$request->s_landmark,
						's_regno'=>$request->s_regno,
						's_medicalhistory'=>$request->s_medicalhistory,
						's_emrg_name'=>$request->s_emrg_name,
						's_emrg_email'=>$request->s_emrg_email,
						's_emrg_phone'=>$request->s_emrg_phone,
						's_emrg_address'=>$request->s_emrg_address,
						's_status'=>'1'
						]);
						
					}
					catch(\Illuminate\Database\QueryException $ex){
					\Session::flash('message','Query Exception Occurred. Call Developer!');
					return \Redirect::back();
					}
					
				\Session::flash('message','Profile Successfully Updated !');
                return \Redirect('student-profile-update');
             
				
				
				
	
	/*
	$complaint = new Complaint;
	$session_value = session('student_id');
	
		 $this->validate($request, [ 'complaint_subject' => 'required' ,
									'complaint_category' => 'required' ,
									'complaint_subcategory' => 'required' ,
									'complaint_time' => 'required' ,
									's_idproof'     =>'required|image|mimes:jpeg,png,jpg',
									'complaint_address' => 'required',
								]); 
										   
		
		$imgname='';
         
          if($request->file('s_idproof')){

            $file = $request->file('s_idproof');
            $imgname = time().$file->getClientOriginalName();			     			
            $destinationPath = public_path().'/images/complaint/' ;
            $file->move($destinationPath,$imgname);
        }

		
										   
		$complaint->student_id=$session_value;
		$complaint->c_problem=$request->complaint_subject;
        $complaint->c_category=$request->complaint_category;
		$complaint->c_subcategory=$request->complaint_subcategory;
		$complaint->c_time=$request->complaint_time;
		$complaint->c_image=$imgname;
		$complaint->c_address=$request->complaint_address;
		$complaint->c_status='Pending';
		
		
										   
        
		try{
		$complaint->save();
		}
		 catch(\Illuminate\Database\QueryException $ex){
            \Session::flash('message','Query Exception Occurred. Call Developer!');
			return \Redirect::back();
        }
		
        \Session::flash('message','Successfully Added !');
         return \Redirect('student-complaint');					

		 
		 
		 
		 $results = User::where(function($q) use ($request) {
    $q->orWhere('email', 'like', '%john@example.org%');
    $q->orWhere('first_name', 'like', '%John%');
    $q->orWhere('last_name', 'like', '%Doe%');
})->get();

$results = User::where(function($q) use ($request) {
    $q->orWhere('email', 'like', '%john@example.org%');
    $q->orWhere('first_name', 'like', '%John%');
    $q->orWhere('last_name', 'like', '%Doe%');
})->toSql();
dd($results)
	 */

   }

public function findstates(Request $request, $id=null){ 
            $states=State::where('country_id',$_GET['c_id'])->get();
            $states=$states->toArray();
            foreach ($states as $value) {              
                echo "<option value=".$value['id'].">".$value['name']."</option>";
            }            
    }

public function findcities(Request $request){   
            $cities=City::where('state_id',$_GET['s_id'])->get();
            $cities=$cities->toArray();
            foreach ($cities as $value) {
                echo "<option value=".$value['id'].">".$value['name']."</option>";
            }           
    }
   
}
