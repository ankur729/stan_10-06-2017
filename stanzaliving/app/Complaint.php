<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model{



/* Front End Model */

public function complaintRecord($session_value=''){
	
	$results = Complaint::where('student_id', $session_value)->get();	
	if(count($results)>0){		
		return $results->toArray();
	}else{
		return array();		
	}
	
}

public function complaintCountById($session_value=''){
	
	$totalcomplaint = Complaint::where('student_id', $session_value)->count();
	
	if($totalcomplaint>0){		
		return $totalcomplaint;
	}else{
		return 0;		
	}
	
}
	
/* END Front End Model */
	

}
