<?php

namespace App\Helpers;

use App\Student;
use App\Complaint;
use App\Food;
class Commonhelper{
    

	
public static function StudentRecord($id=''){

	$studentid = $id;	
	$session_value = session('student_id');

	if($session_value!=''){
		
		$results=Student::findOrFail($session_value);		
		   //$results=Student::where('s_email', 'ceejaeasd1968@gmail.com')->first();
		  //$results=Student::where('s_email', 'ceejaeasd1968@gmail.com')->where('id', '4')->first();
		  //$results = \DB::table('students')->where('id', $session_value)->first();	
	return $results;

	}else{
		return array();		
	}

}


public static function CountStudentComplaint($studentid='',$status=''){

	$count_complaint=Complaint::where('student_id', $studentid)->where('c_status', $status)->count();

	if($count_complaint>0){		
		return $count_complaint;
	}else{
		return 0;		
	}

}



public static function findfoodcatitems($food_id=''){
	$results = Food::where('f_cat', $food_id)->get();
	if(count($results)>0){		
		return $results;
	}else{
		return 0;		
	}

}










}