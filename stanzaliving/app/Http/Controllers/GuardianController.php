<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Guardian;
use App\Country;
use App\State;
use App\City;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         try{
      $guardians=Guardian::all();
    }
   catch(\Illuminate\Database\QueryException $ex){ 
  \Session::flash('message','Query Exception Occurred. Call Developer!');
                //dd($ex);
         return \Redirect::back();
    }
        //$guardians=Guardian::all();
       
        return view('pages.admin.guardian.parentlist',compact('guardians'));
    }

    public function create()
    {
        //
         $countries=Country::all();
         //dd($countries);
      
        return view('pages.admin.guardian.parentadd',compact('countries'));
    }

 
    public function store(Request $request)
    {
        //
        $this->validate($request, [
                                'p_firstname' => 'required|alpha',
                                'p_lastname'  =>'alpha',
                                'p_dob'       =>'required|date_format:"Y-m-d"',
                                'p_contact'=>'required|digits:10',
                                'p_email'=>'required|email|unique:guardians,p_email',
                             
                                'p_username'=>'required|unique:guardians,p_username',
                            
                                'p_address'=>'required',
                          
                                'p_pincode'=>'required|digits:6',
                         
                                'p_unique_id_type'=>'required',
                                'p_unique_id_no'=>'required',
                            
                                'p_no_sons'=>'required||digits:1',
                                'p_no_daughters'=>'required||digits:1',
                                 
                                  'p_bankname'=>'regex:/^[a-zA-Z ]/',
                                  'p_branchname'=>'regex:/^[a-zA-Z ]/',
                                  'p_account_no'=>'numeric',
                                  'p_ifsc'=>'regex:/^[a-zA-Z0-9]/',
                             
                   ]);
        $guardian=new Guardian;

      
        $guardian->p_contact=$request->p_contact;
        $guardian->p_firstname=$request->p_firstname;
        $guardian->p_lastname=$request->p_lastname;
        $guardian->p_email=$request->p_email;
        $guardian->p_gender=$request->p_gender;
        $guardian->p_dob=$request->p_dob;
        $guardian->p_username=$request->p_username;
        $guardian->p_password=bcrypt($request->p_password);
        $guardian->p_address=$request->p_address;
        $guardian->p_city=$request->p_city;
        $guardian->p_pincode=$request->p_pincode;
        $guardian->p_state=$request->p_state;
        $guardian->p_nationality=$request->p_nationality;
        $guardian->p_unique_id_type=$request->p_unique_id_type;
        $guardian->p_unique_id_no=$request->p_unique_id_no;
        $guardian->p_no_sons=$request->p_no_sons;
        $guardian->p_no_daughters=$request->p_no_daughters;
        $guardian->p_bankname=$request->p_bankname;
        $guardian->p_branchname=$request->p_branchname;
        $guardian->p_account_no=$request->p_account_no;
        $guardian->p_ifsc=$request->p_ifsc;
       

       
        

        try{
        $guardian->save();
    }
   catch(\Illuminate\Database\QueryException $ex){ 
  \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
    }
        \Session::flash('message','Parent Successfully Added !');
         return \Redirect('admin/guardian/list');
    
  
     
    }

  
    public function show(Request $request)
    {
        //
         try{
           
        $guardian=Guardian::findOrFail($request->id);
         $countries=Country::all();
              $states_list=State::where('country_id',$guardian->p_nationality)->get();
             $arr=[];
        foreach ($states_list as $key => $value) {
          
             $mystates[$value->id]=$value->name;
           
        }
        $cities_list=City::where('state_id',$guardian->p_state)->get();
         //  dd($cities_list);
             $arr=[];
        foreach ($cities_list as $key => $value) {
          
             $mycities[$value->id]=$value->name;
           
        }
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
            return view('pages.admin.guardian.parentview',compact('guardian','countries','mystates','mycities'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        try{
            
        $guardian=Guardian::findOrFail($request->id);

        $countries=Country::all();
        
        $states_list=State::where('country_id',$guardian->p_nationality)->get();
           
        $cities_list=City::where('state_id',$guardian->p_state)->get();
         //  dd($cities_list);
          
            
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

           $arr=[];
        foreach ($cities_list as $key => $value) {
          
             $mycities[$value->id]=$value->name;
           
        }
    

            return view('pages.admin.guardian.parentedit',compact('guardian','countries','mystates','mycities'));
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
        //
         $this->validate($request, [
                                'p_firstname' => 'required|alpha',
                                'p_lastname'  =>'alpha',
                                'p_dob'       =>'required|date_format:"Y-m-d"',
                                'p_contact'=>'required|digits:10',
                                'p_email'=>'required|email',
                             
                               
                                'p_address'=>'required',
                          
                                'p_pincode'=>'required|digits:6',
                         
                                'p_unique_id_type'=>'required',
                                'p_unique_id_no'=>'required',
                            
                                'p_no_sons'=>'required|digits:1',
                                'p_no_daughters'=>'required|digits:1',
                                 
                                  'p_bankname'=>'regex:/^[a-zA-Z ]$/',
                                  'p_branchname'=>'regex:/^[a-zA-Z ]$/',
                                  'p_account_no'=>'numeric',
                                  'p_ifsc'=>'regex:/^[a-zA-Z0-9]$/',
                             
                   ]);
   try{
  Guardian::where('id', $request->id)
        
                              ->update(

                                [
      
        'p_contact'=>$request->p_contact,
        'p_firstname'=>$request->p_firstname,
        'p_lastname'=>$request->p_lastname,
        'p_email'=>$request->p_email,
        'p_gender'=>$request->p_gender,
        'p_dob'=>$request->p_dob,
        'p_username'=>$request->p_username,
        'p_password'=>bcrypt($request->p_password),
        'p_address'=>$request->p_address,
        'p_city'=>$request->p_city,
        'p_pincode'=>$request->p_pincode,
        'p_state'=>$request->p_state,
        'p_nationality'=>$request->p_nationality,
        'p_unique_id_type'=>$request->p_unique_id_type,
        'p_unique_id_no'=>$request->p_unique_id_no,
        'p_no_sons'=>$request->p_no_sons,
        'p_no_daughters'=>$request->p_no_daughters,
        'p_bankname'=>$request->p_bankname,
        'p_branchname'=>$request->p_branchname,
        'p_account_no'=>$request->p_account_no,
        'p_ifsc'=>$request->p_ifsc
        ]);
}
  catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
    \Session::flash('message','Parent Successfully Updated !');
                                        return \Redirect('admin/guardian/list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
          Guardian::destroy($request->id);
         \Session::flash('message','Parent Successfully Deleted !');
            return \Redirect::back();
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
