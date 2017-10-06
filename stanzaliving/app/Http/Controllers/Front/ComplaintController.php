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
use App\ComplaintCategory;
use App\ComplaintSubCategory;
use App\Http\Controllers\Controller;

class ComplaintController extends Controller{
    
    public function index(Request $request, $id=null){
		
		$complaintObj = new Complaint;
		
		$studentid = $id;
		$session_value = session('student_id');
		
		
		try{
			
			//$complaintdata=Complaint::all();

			
			

			if(isset($request->apply_filter)){
				
				
				if(isset($request->complaint_cat)){
					$search_cat = $request->complaint_cat;
					$complaintdata= Complaint::where('c_category', 'LIKE', '%'.$search_cat.'%')->get();
				}
				if(isset($request->complaint_subcat)){
					$search_subcat = $request->complaint_subcat;
					$complaintdata= Complaint::where('c_subcategory', 'LIKE', '%'.$search_subcat.'%')->get();
				}
				if(isset($request->c_status)){
					$search_status = $request->c_status;
					$complaintdata= Complaint::where('c_status', 'LIKE', '%'.$search_status.'%')->get();
				}
				
			}else{
				$complaintdata=Complaint::where('student_id',$session_value)->get();
			}
			
			
			
            $complaintdata=$complaintdata->toArray();
			
			
			$compcat=ComplaintCategory::all();
			$compsubcat=ComplaintSubCategory::all();

			foreach ($compcat as $key => $value) {
				$mycat[$value->id]=$value->name;
			}
   
			foreach ($compsubcat as $key => $value) {
				$mysubcat[$value->id]=$value->name;
			}
        }
        catch(\Illuminate\Database\QueryException $ex){
            \Session::flash('message','Query Exception Occurred. Call Developer!');
			return \Redirect::back();
        }
		
		
		
		
		if($session_value!=''){	
		
			//$complaintdata = $complaintObj->complaintRecord($session_value);

		
			return view('pages.front.student-complaint',compact('complaintdata','mycat','mysubcat','compcat','compsubcat'));
		}else{
			return view('layouts.master.front.index');			
		}	 		
	
		
    }


public function store(Request $request){
	
	$complaint = new Complaint;
	$session_value = session('student_id');
	
		 $this->validate($request, [ 'complaint_subject' => 'required' ,
									'complaint_category' => 'required' ,
									'complaint_subcategory' => 'required' ,
									'complaint_time' => 'required' ,
									'complaint_img'     =>'required|image|mimes:jpeg,png,jpg',
									'complaint_message' => 'required',
								]); 
										   
		
		$imgname='';
         
          if($request->file('complaint_img')){

            $file = $request->file('complaint_img');
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
		$complaint->c_details=$request->complaint_message;
		$complaint->c_status='Pending';
		$complaint->c_beg_date=date('Y-m-d');
		
		
										   
        
		try{
		$complaint->save();
		}
		 catch(\Illuminate\Database\QueryException $ex){
            \Session::flash('message','Query Exception Occurred. Call Developer!');
			return \Redirect::back();
        }
		
        \Session::flash('message','Successfully Added !');
         return \Redirect('student-complaint');					

	 

   }


public function findcomplaintsubcat(Request $request, $id=null){ 
            $states=ComplaintSubCategory::where('category_id',$_GET['c_id'])->get();
            $states=$states->toArray();
            foreach ($states as $value) {              
                echo "<option value=".$value['id'].">".$value['name']."</option>";
            }            
    }
	
	
   
}
