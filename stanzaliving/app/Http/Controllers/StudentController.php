<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use App\Hostel;
use App\Country;
use App\RoomSharing;
use App\State;
use App\City;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id=null)
    {
        try{
			
			if(isset($request->apply_filter)){
				
				
				if(isset($request->keyword)){
					$search_keyword = $request->keyword;
					$students= Student::where('s_firstname', 'LIKE', '%'.$search_keyword.'%')->where('s_email', 'LIKE', '%'.$search_keyword.'%')->where('s_contact', 'LIKE', '%'.$search_keyword.'%')->get();
				}
				if(isset($request->s_hostel)){
					$search_hostel = $request->s_hostel;
					$students= Student::where('s_hostel', 'LIKE', '%'.$search_hostel.'%')->get();
				}
				if(isset($request->s_room)){
					$search_room = $request->s_room;
					$students= Student::where('s_room', 'LIKE', '%'.$search_room.'%')->get();
				}
				
				$roomtype=RoomSharing::all();
				$hostel=Hostel::all();
				
			}else{
				$students=Student::all();
				$roomtype=RoomSharing::all();
				$hostel=Hostel::all();
			}
			
			
        
		
		
		
		
		
        }
         catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        $arr=[];
        foreach ($hostel as $key => $value) {
            $h[$value->id]=$value->name;
        }
        $arr=[];
        foreach ($roomtype as $key => $value) {
            $r[$value->id]=$value->name;
        }

        return view('pages.admin.student.studentlist',compact('students','r','h'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      //  return 'test';
        try{
         $data=Hostel::all();
         $countries=Country::all();
          $roomtype=RoomSharing::all();
        $hostel=Hostel::all();
   
      $roomtype=RoomSharing::all();
        $hostel=Hostel::all();
   }
    catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
              //dd($countries);
        foreach ($data as $key => $value) {
            //array_push($arr, $value->access_name);
             
             $hostels[$value->id]=$value->name;
            
            # code...
        }

       
      
        $arr=[];
        foreach ($hostel as $key => $value) {
            $h[$value->id]=$value->name;
        }
        $arr=[];
        foreach ($roomtype as $key => $value) {
            $r[$value->id]=$value->name;
        }
        //return $hostels;
        return view('pages.admin.student.studentadd',compact('hostels','countries','r','h'));
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

         $this->validate($request, [
                                's_firstname' => 'required|alpha',
                                's_image'     =>'required|image|mimes:jpeg,png,jpg',
                                's_lastname'  =>'alpha',
                                's_doj'       =>'required|date_format:"Y-m-d"',
                                's_contact'   =>'required|digits:10',
                                's_email'     =>'required|email',
                               // 's_gender'=>$request->s_gender,
                                's_dob'       =>'date_format:"Y-m-d"',
                                's_parentname'=>'required|regex:/^[a-zA-Z ]/',
                                's_username'  =>'required|unique:students,s_username',
                              //'s_password'=>bcrypt($request->s_password),
                                's_address'   =>'required',
                               // 's_city'=>$request->s_city,
                                's_pincode'   =>'required|digits:6',
                               // 's_state'=>$request->s_state,
                              //  's_nationality'=>$request->s_nationality,
                                's_unique_id_type'=>'required',
                                's_unique_id_no'=>'required|unique:students,s_unique_id_no',
                               // 's_veg'=>$request->s_veg,
                               // 's_marital_status'=>$request->s_marital_status,
                              //  's_room'=>$request->s_room,
                              //  's_hostel'=>$request->s_hostel,
                                's_college'  =>'regex:/^[a-zA-Z ]/',
                                's_course'   =>'regex:/^[a-zA-Z ]/',
                                's_year'     =>'numeric'
                               // 's_morning'=>$request->s_morning,
                               // 's_afternoon'=>$request->s_afternoon,  
                              //  's_evening'=>$request->s_evening,
                               // 's_night'=>$request->s_night
                   ]);
				   
				   if($request->s_password!=''){
						$this->validate($request, [					  
												's_password' => 'required|min:5',
												's_cpassword' => 'required|same:s_password|min:5'
											]);
					}
					
					
         $imgname;
         
          if($request->file('s_image')){

            $file = $request->file('s_image');
            $imgname = time().$file->getClientOriginalName();
            $path = public_path("images/$imgname");
            $file->move('images/student/',$imgname);
            
        }
       
        $student=new Student;

        $student->s_doj=$request->s_doj;
        $student->s_image=$imgname;
        $student->s_contact=$request->s_contact;
        $student->s_firstname=$request->s_firstname;
        $student->s_lastname=$request->s_lastname;
        $student->s_email=$request->s_email;
        $student->s_gender=$request->s_gender;
        $student->s_dob=$request->s_dob;
        $student->s_parentname=$request->s_parentname;
        $student->s_username=$request->s_username;
        //$student->s_password=bcrypt($request->s_password);
		$student->s_password=md5($request->s_password);
        $student->s_address=$request->s_address;
        $student->s_city=$request->s_city;
        $student->s_pincode=$request->s_pincode;
        $student->s_state=$request->s_state;
		$student->s_country=$request->s_country;
        $student->s_nationality=$request->s_nationality;
        $student->s_unique_id_type=$request->s_unique_id_type;
        $student->s_unique_id_no=$request->s_unique_id_no;
        $student->s_veg=$request->s_veg;
        $student->s_marital_status=$request->s_marital_status;
        $student->s_room=$request->s_room;
        $student->s_hostel=$request->s_hostel;
        $student->s_college=$request->s_college;
        $student->s_course=$request->s_course;
        $student->s_year=$request->s_year;
        $student->s_morning=$request->s_morning;
        $student->s_afternoon=$request->s_afternoon;  
        $student->s_evening=$request->s_evening;
        $student->s_night=$request->s_night;

       
        

        try{
        $student->save();
    }
     catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Student Successfully Added !');
         return \Redirect('admin/student/list');
      //  dd($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        try{
         $student=Student::findOrFail($request->id);
         $country=Country::findOrFail($student->s_country);
         $state=State::findOrFail($student->s_state);
         $city=City::findOrFail($student->s_city);
         $roomtype=RoomSharing::all();
         $hostel=Hostel::all();
      }
       catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        $arr=[];
        foreach ($hostel as $key => $value) {
            $h[$value->id]=$value->name;
        }
        $arr=[];
        foreach ($roomtype as $key => $value) {
            $r[$value->id]=$value->name;
        }

         return view('pages.admin.student.studentview',compact(['student','country','state','city','r','h']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
       /* $states=State::where('country_id',101)->get();
            $states=$states->toArray();
            dd($states);*/

        //
        //return $request->all();
          
try{
        $countries=Country::all();
        
          $student=Student::findOrFail($request->id);


          $states_list=State::where('country_id',$student->s_country)->get();
           $cities_list=City::where('state_id',$student->s_state)->get();
       }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
             $arr=[];
        foreach ($states_list as $key => $value) {
          
             $mystates[$value->id]=$value->name;
           
        }
       
         //  dd($cities_list);
             $arr=[];
        foreach ($cities_list as $key => $value) {
          
             $mycities[$value->id]=$value->name;
           
        }
       
          try{ 
        $hostel=Hostel::all();
       $roomtype=RoomSharing::all();
        }
 catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        $arr=[];
        foreach ($hostel as $key => $value) {
            $h[$value->id]=$value->name;
        }
        
        $arr=[];
        foreach ($roomtype as $key => $value) {
            $r[$value->id]=$value->name;
        }
       
         return view('pages.admin.student.studentedit',compact(['student','countries','mystates','mycities','r','h']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

         $this->validate($request, [
                                's_firstname' => 'required|alpha',
                                //'s_image'     =>'required|image|mimes:jpeg,png,jpg',
                                's_lastname'  =>'alpha',
                                's_doj'       =>'required|date_format:"Y-m-d"',
                                's_contact'=>'required|digits:10',
                                's_email'=>'required|email',
                               // 's_gender'=>$request->s_gender,
                                's_dob'=>'date_format:"Y-m-d"',
                                's_parentname'=>'required|regex:/^[a-zA-Z ]/',
                                //'s_username'=>'required|unique:students,s_username',
                              //'s_password'=>bcrypt($request->s_password),
                                's_address'=>'required',
                               // 's_city'=>$request->s_city,
                                's_pincode'=>'required|digits:6',
                               // 's_state'=>$request->s_state,
                              //  's_nationality'=>$request->s_nationality,
                                's_unique_id_type'=>'required',
                                's_unique_id_no'=>'required',
                               // 's_veg'=>$request->s_veg,
                               // 's_marital_status'=>$request->s_marital_status,
                              //  's_room'=>$request->s_room,
                              //  's_hostel'=>$request->s_hostel,
                                's_college'=>'regex:/^[a-zA-Z ]/',
                                's_course'=>'regex:/^[a-zA-Z ]/',
                                's_year'=>'numeric'
                               // 's_morning'=>$request->s_morning,
                               // 's_afternoon'=>$request->s_afternoon,  
                              //  's_evening'=>$request->s_evening,
                               // 's_night'=>$request->s_night
                   ]);
				   
					if($request->s_password!=''){
						$this->validate($request, [					  
												's_password' => 'required|min:5',
												's_cpassword' => 'required|same:s_password|min:5'
											]);
					}
				
          $imgname=$request->imgnameh;
         
          if($request->file('s_image')){

            $file = $request->file('s_image');
            $imgname = time().$file->getClientOriginalName();
           // $path = public_path("images/$imgname");
            //$file->move('images/student/',$imgname);
			$destinationPath = public_path().'/images/student/' ;
            $file->move($destinationPath,$imgname);
            
        }
        //
         try{
            Student::where('id', $request->id)
        
                              ->update(

                                [
                               
                                's_doj'=>$request->s_doj,
                                's_image'=>$imgname,
                                's_contact'=>$request->s_contact,
                                's_firstname'=>$request->s_firstname,
                                's_lastname'=>$request->s_lastname,
                                's_email'=>$request->s_email,
                                's_gender'=>$request->s_gender,
                                's_dob'=>$request->s_dob,
                                's_parentname'=>$request->s_parentname,
                                's_username'=>$request->s_username,
                                's_address'=>$request->s_address,
                                's_city'=>$request->s_city,
                                's_pincode'=>$request->s_pincode,
                                's_state'=>$request->s_state,
								's_country'=>$request->s_country,
                                's_nationality'=>$request->s_nationality,
                                's_unique_id_type'=>$request->s_unique_id_type,
                                's_unique_id_no'=>$request->s_unique_id_no,
                                's_veg'=>$request->s_veg,
                                's_marital_status'=>$request->s_marital_status,
                                's_room'=>$request->s_room,
                                's_hostel'=>$request->s_hostel,
                                's_college'=>$request->s_college,
                                's_course'=>$request->s_course,
                                's_year'=>$request->s_year,
                                's_morning'=>$request->s_morning,
                                's_afternoon'=>$request->s_afternoon,  
                                's_evening'=>$request->s_evening,
                                's_night'=>$request->s_night
                                
                                ]);
								
								if($request->s_password!=''){									
									Student::where('id', $request->id) ->update([ 's_password'=>md5($request->s_password) ]);
								}
                          }
                           catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
                                \Session::flash('message','Student Successfully Updated !');
                                return \Redirect('admin/student/list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
      public function destroy(Request $request)
    {

        try{
           Student::destroy($request->id);
       }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
         \Session::flash('message','Student Successfully Deleted !');
            return \Redirect::back();
        //
    }
 

    public function findstates(Request $request, $id=null)
    {   

            $states=State::where('country_id',$_GET['c_id'])->get();
            $states=$states->toArray();
            foreach ($states as $value) {
              
                echo "<option value=".$value['id'].">".$value['name']."</option>";
            }
            
    }

     public function findcities(Request $request)
    {   
            $cities=City::where('state_id',$_GET['s_id'])->get();
            $cities=$cities->toArray();
            foreach ($cities as $value) {
                echo "<option value=".$value['id'].">".$value['name']."</option>";
            }
            
           
    }

   
}
