<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\RRequest;

use App\RequestType;

use App\Student;

class RRequestController extends Controller
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
        $names=Student::all();
         foreach ($names as $key => $value) {
                $name[$value->id]=$value->s_firstname.'&nbsp;'.$value->s_lastname;
            }
         $requests=RRequest::all();
            $req_type=RequestType::all();
            foreach ($req_type as $key => $value) {
                $myarr[$value->id]=$value->r_type_name;
            }
            }
            catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.requests.requestlist',compact('requests','myarr','name'));
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
    public function edit(Request $request)
    {
        //
        try{
         $names=Student::all();
         foreach ($names as $key => $value) {
                $name[$value->id]=$value->s_firstname.'&nbsp;'.$value->s_lastname;
            }
            foreach ($names as $key => $value) {
                $email[$value->id]=$value->s_email;
            }
            
        $request=RRequest::findOrFail($request->id);
        $req_type=RequestType::all();
            foreach ($req_type as $key => $value) {
                $myarr[$value->id]=$value->name;
            }
            }
            catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.requests.requestedit',compact('request','myarr','name','email'));
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
        try{
        RRequest::where('id',$request->id)->update([
                    'status'=>$request->status
                ]);
         }
         catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
                                \Session::flash('message','Request Successfully Updated !');
                                return \Redirect('admin/request/list');
        
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
