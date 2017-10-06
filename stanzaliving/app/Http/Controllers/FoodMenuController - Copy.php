<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Foodmenu;
use App\Foodmenudetail;

use App\Food;

use App\FoodCategory;

class FoodMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
		
		
		/* Start Days */
		//$weekdays = array('7'=>'Sunday','1'=>'Monday','2'=>'Tuesday','3'=>'Wednesday','4'=>'Thursday','5'=>'Friday','6'=>'Saturday');
		
		$timestamp = strtotime('next Sunday');
		$weekdays = array();
		for ($i = 0; $i < 7; $i++) {
		$weekdays[] = strftime('%A', $timestamp);
		$timestamp = strtotime('+1 day', $timestamp);
		}
		/* End Days */


	   //
        try{
        $foods=Foodmenu::all();
        $f_cat=FoodCategory::all();
        foreach ($f_cat as $key => $value) {
            $myarr[$value->id]=$value->name;
        }
         }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.foodmenu.foodlist',compact('foods','myarr','weekdays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        try{
			
        $f_cat=FoodCategory::all();
		$fooditem=Food::all();
		$fooditem=$fooditem->toArray();

	
        foreach ($f_cat as $key => $value) {
            $myarr[$value->id]=$value->name;
        }
		
		
		
	   
		
		/* Start Days */
		$timestamp = strtotime('next Sunday');
		$weekdays = array();
		for ($i = 0; $i < 7; $i++) {
		$weekdays[] = strftime('%A', $timestamp);
		$timestamp = strtotime('+1 day', $timestamp);
		}
		/* End Days */
		
		
     }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.foodmenu.foodadd',compact('myarr','weekdays','fooditem'));
    }

	
public function store(Request $request){
       
        $this->validate($request, [  'from_date' => 'required' ,
                                      'to_date'=>'required',
                                      'f_type'=>'required',
									  'f_cat'=>'required',
                                       'status'=>'required']);
            try{ 
           $cat=new Foodmenu;
           $cat->from_date=$request->from_date;
		   $cat->to_date=$request->to_date;
		   $cat->f_type=$request->f_type;
           $cat->f_cat=$request->f_cat;           
           $cat->status=$request->status;
         
          $saverecords = $cat->save();		
		  
        }
     catch(\Illuminate\Database\QueryException $ex){
            \Session::flash('message','Query Exception Occurred. Call Developer!');        
		    return \Redirect('admin/foodmenu/menulist');
        }
        	
			$lastid = $cat->id;				 
			$foodmenudata = $request->foodmenu;
            for($i=0; $i < count($foodmenudata); $i++){
                   
                       $fooditemadd= Foodmenudetail::create([

                            'fmenu_id'=>$cat->id,                            
                            'menuday'=>$foodmenudata[$i]['days'],
							'menudates'=>$foodmenudata[$i]['dates'],
							'items'=>implode(",",$foodmenudata[$i]['items']),
							'status'=>$cat->status,
                                      
                ]);

            }

         
			\Session::flash('message','Menu Successfully Added !');
            //return \Redirect::back();
			  return \Redirect('admin/foodmenu/menulist');			
				 
				 

    }

public function show($id){
        //
    }

  
public function edit(Request $request){
       
         try{
             $f_cat=FoodCategory::all();
        foreach ($f_cat as $key => $value) {
            $myarr[$value->id]=$value->name;
        }
		
		/* Start Days */
		$timestamp = strtotime('next Sunday');
		$weekdays = array();
		for ($i = 0; $i < 7; $i++) {
		$weekdays[] = strftime('%A', $timestamp);
		$timestamp = strtotime('+1 day', $timestamp);
		}
		/* End Days */
		
		
        //$category=Foodmenu::findOrFail($request->id);
		
		
		$category = Foodmenu::select("foodmenus.*","food_categories.id as fcatid","food_categories.name as fcatname")
            ->join("food_categories","food_categories.id","=","foodmenus.f_cat") 
			->where('foodmenus.id',$request->id)
			->first();
	
		
		$menuitems=Foodmenudetail::where('fmenu_id',$request->id)->get();
		$menuitems=$menuitems->toArray();
		
		
		$request->f_cat = $category['f_cat'];
		$request->f_type = $category['f_type'];
		
		$fooditemdata = $this->getfooditemrec($request);
		
		
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.foodmenu.foodedit', compact('category','myarr','weekdays','menuitems','fooditemdata'));
    }

  
public function update(Request $request){	
	
	
	$this->validate($request, [  'from_date' => 'required' ,
                                      'to_date'=>'required',
                                      'f_type'=>'required',
									  'f_cat'=>'required',
                                       'status'=>'required']);     
      
				try{
							Foodmenu::where('id', $request->id)
						->update([
						'from_date' => $request->from_date,
						'to_date'=>$request->to_date,
						'f_type'=>$request->f_type,
						'f_cat'=>$request->f_cat,
						'status'=>$request->status
						]);
					}
                catch(\Illuminate\Database\QueryException $ex){
					\Session::flash('message','Query Exception Occurred. Call Developer!');
					return \Redirect::back();
				}
                
			/* Update Items START */	
						 
			$foodmenudata = $request->foodmenu;      	
			
			 for($i=0;$i<count($foodmenudata);$i++){

                        $exist=Foodmenudetail::where([['fmenu_id', '=',$request->id],
                            ['menuday','=',$foodmenudata[$i]['days']]])->first();
                        if(count($exist)>0){
                                    $fooditemupd= Foodmenudetail::where([
                                    ['fmenu_id', '=',$request->id],
                                    ['menuday','=',$foodmenudata[$i]['days']]
                                    ])
                                   ->update([
                                        'items'=>implode(",",$foodmenudata[$i]['items'])
                                                  
								]);
                        }
                        else{
                              $fooditemadd= Foodmenudetail::create([
                            'fmenu_id'=>$request->id,
                            'menuday'=>$foodmenudata[$i]['days'],
                            'items'=>implode(",",$foodmenudata[$i]['items']),
							'status'=>$request->status
                                      
							]);
                        }
            }
			
			
				
			/* END Update Items */	
				
				
				\Session::flash('message','Foodmenu Item Successfully Updated !');
                return \Redirect('admin/foodmenu/menulist');


}





	
public function destroy(Request $request)
    {
        //
         try{

         
            Foodmenu::destroy($request->id);
			Foodmenudetail::where('fmenu_id',$request->id)->delete();
                   
       }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
		
		
		
		
		
         \Session::flash('message','Foodmenu Item Successfully Deleted !');
            return \Redirect::back();
    }
	
	
	
	public function getfooditemrec(Request $request){ 			
            $foods=Food::where('f_cat',$request->f_cat)->where('f_type',$request->f_type)->get();
            $foods=$foods->toArray();
            return  $foods;          
           
    }
	
	
	
	public function findfooditemrec(Request $request){ 			
            $foods=Food::where('f_cat',$_GET['fact_id'])->where('f_type',$_GET['f_type'])->get();
            $foods=$foods->toArray();
            foreach ($foods as $value) {
                echo "<option value=".$value['id'].">".$value['f_name']."</option>";
            }           
           
    }
	
	public function findfooditems(Request $request){  
            $foods=Food::where('f_cat',$_GET['fact_id'])->get();
            $foods=$foods->toArray();
            foreach ($foods as $value) {
                echo "<option value=".$value['id'].">".$value['f_name']."</option>";
            }           
           
    }
	
	
	
	public function findfooditemsdisplay(Request $request){ 		
			
/* SELECT * FROM foodmenus WHERE from_date BETWEEN '2017-10-03' AND DATE_ADD('2017-10-03', INTERVAL 7 DAY)
SELECT * FROM foodmenus WHERE from_date >= '2017-10-03' AND to_date <= DATE_ADD('2017-10-03', INTERVAL 7 DAY)

 */
			
			$frmdate = $_GET['from_date'];
			$todate = $_GET['to_date'];
			$ctype = $_GET['f_type'];
			$ccat = $_GET['f_cat'];
			
			$foods=Food::where('f_cat',$ccat)->where('f_type',$ctype)->get();
            $foods=$foods->toArray();
			

				$begin = new \DateTime($frmdate);
				$end = new \DateTime($todate);
				$end->modify('+1 day');
				$daterange = new \DatePeriod($begin, new \DateInterval('P1D'), $end);
				$interval = $end->diff($begin);
				$totaldays = $interval->format('%a')."\n"; 
				
				/* foreach ($daterange as $date) {
					$regdt[]= $date->format("Y-m-d");
				}
				echo print_r($regdt);die; */

				if($totaldays<=7){
					
				$divdata="";
				
				foreach ($daterange as $date) {					
					
				$dayval = $date->format("w");
				$dayname = $date->format("D");
				$regulardate = $date->format("Y-m-d");
				$divdata.="<div class='box-body list'>";
                $divdata.="<div class='col-xs-3'><div class='form-group'><label>Menu Days</label>
				<select class='form-control' name='foodmenu[$dayval][days]' required>";			
				
				$divdata.="<option value='$dayval'>$dayname</option>";				 
				$divdata.="</select><div class='form_error'></div></div></div>";
				
				
				$divdata.="<div class='col-xs-3'><div class='form-group'><label>Menu Dates</label>
				<select class='form-control' name='foodmenu[$dayval][dates]' required>";			
				
				$divdata.="<option value='$regulardate'>$regulardate</option>";				 
				$divdata.="</select><div class='form_error'></div></div></div>";


			    $divdata.="<div class='col-md-3'><div class='form-group'><label>Select Fooditem</label>
				<select name='foodmenu[$dayval][items][]' id='fooditemid'  multiple='multiple' style='height: 100px;width:100%;float:left;margin-left: 10px;' required>";
				
				foreach($foods as $menuvalue){	
					$fmenuid = $menuvalue['id'];
					$fmenuval = $menuvalue['f_name'];				
					$divdata .="<option value='$fmenuid'>$fmenuval</option>";				
				 } 
				$divdata.="</select><div class='form_error'></div></div></div>"; 
				
				$divdata.="<div class='col-xs-3'><div class='form-group'><label>&nbsp;</label>&nbsp;";		 
				$divdata.="<div class='form_error'></div></div></div>";
				
				
				$divdata.="</div><div class='clearfix'></div>";
            }
			

				//echo $frmdate."  ".$todate."  ".$ctype."  ".$ccat."=>".$divdata;
				echo $divdata;
				
				}else{

				echo "Date Range Not Allowed";
				}				

				
				
			
            
			
                         
           
    }
	
	
	
	
}
