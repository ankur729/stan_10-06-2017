<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function edit()
  
    {

        $user=\Auth::user();

        return view('pages.admin.profile.editprofile',compact('user'));
        //
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

            $has_image="false";

        if($request->file('image')){

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = public_path("images/$name");
            $file->move('images',time().$name);
            $has_image="true";
        }



        if($request->password=='' && $has_image=="false"){

             $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email',
          
            
          
            ]);
           User::where('id', \Auth::user()->id)
        
          ->update(

                        [
                        'name' => $request->username,
                        'email'=>$request->email,
                       
                        'desig'=>$request->desig,
                        
                       
            ]);
           \Session::flash('message','User Successfully Updated !');
           return \Redirect::back();
           
        }



        if($request->password=='' && $has_image=="true"){

             $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email',
           
          
            ]);
           User::where('id', \Auth::user()->id)
        
          ->update(

                        [
                        'name' => $request->username,
                        'email'=>$request->email,
                       
                        'desig'=>$request->desig,
                        'profile_img'=>time().$name
                       
            ]);
           \Session::flash('message','User Successfully Updated !');
           return \Redirect::back();
           
        }

        if($request->password!='' && $has_image=="true"){

             $this->validate($request, [
            'username' => 'required',
            'password'         => 'required',
            'conf_password' => 'required|same:password',
            'email' => 'required|email',
            
          
            ]);


           User::where('id', \Auth::user()->id)
        
          ->update(

                        [
                        'name' => $request->username,
                        'email'=>$request->email,
                        
                        'desig'=>$request->desig,
                        'password'=>bcrypt($request->password),
                        'profile_img'=>time().$name
            ]);

            \Session::flash('message','User Successfully Updated !');
            return \Redirect::back();
        }

        if($request->password!='' && $has_image=="false"){

             $this->validate($request, [
            'username' => 'required',
            'password'         => 'required',
            'conf_password' => 'required|same:password',
            'email' => 'required|email',
           
         
          
            ]);


           User::where('id', \Auth::user()->id)
        
          ->update(

                        [
                        'name' => $request->username,
                        'email'=>$request->email,
                       
                        'desig'=>$request->desig,
                      
                        'password'=>bcrypt($request->password),
                       
            ]);

            \Session::flash('message','User Successfully Updated !');
            return \Redirect::back();
        }

       // dd($request->all());
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
