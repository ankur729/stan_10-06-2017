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
use App\Food;
use App\Foodmenu;
use App\Foodmenudetail;
use App\FoodCategory;
use App\Http\Controllers\Controller;

class FoodmenuController extends Controller{
   
    
    public function index(Request $request, $id=null){
		
		$foodmenuObj = new Foodmenu;		
		$studentid = $id;
		$session_value = session('student_id');		
		
		try{
			
			$fooddata=Foodmenu::all();		
			//$fooddata=Foodmenu::where('WEEK(from_date)','WEEK(NOW())')->get();
            //$fooddata=$fooddata->toArray();			
			$foodcat=FoodCategory::all();			
   
			foreach ($foodcat as $key => $value) {
				$mysubcat[$value->id]=$value->name;
			}
        }
        catch(\Illuminate\Database\QueryException $ex){
            \Session::flash('message','Query Exception Occurred. Call Developer!');
			return \Redirect::back();
        }		
		
		if($session_value!=''){		
			return view('pages.front.food-menu',compact('fooddata','foodcat'));
		}else{
			return view('layouts.master.front.index');			
		}	 		
	
		
    }
	
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
