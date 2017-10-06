<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\RRequest;

use App\RequestType;


class RequestTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {
            $req_type=RequestType::all();
            }
            catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
          
        return view('pages.admin.requests.reqtypelist',compact('req_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $req_type=RequestType::all();
            foreach ($req_type as $key => $value) {
                $myarr[$value->id]=$value->name;
            }
        return view('pages.admin.requests.reqtypeadd',compact('myarr'));
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
       $this->validate($request, [
                                   
                                   'r_type_name'=>'required|regex:/^[a-zA-Z0-9- ]/'


                                  ]);
        $req=new RequestType;
        $req->r_type_name=$request->r_type_name;
       
        try{
        $req->save();
            }
            catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Request Type Successfully Added !');
         return \Redirect('admin/request_type/list');
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
        $req_type=RequestType::findOrFail($request->id);
        }
            catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.requests.reqtypeedit',compact('req_type'));
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
            RequestType::where('id', $request->id)
        
                              ->update([
                               
                                'r_type_name'=>$request->r_type_name
                                                                
                                ]);
                          }
                           catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
                                \Session::flash('message','Name Successfully Updated !');
         return \Redirect('admin/request_type/list');
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

          try{
           
            
            if(RRequest::where('r_cat',$request->id)->get()->count()>=1)
            {
                \Session::flash('message','Request Type cannot be deleted.In Use.Although it can be modified !');
                 return \Redirect::back();
            }
            else{
           RequestType::destroy($request->id);
                }
       }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
         \Session::flash('message','Request Type Successfully Deleted !');
            return \Redirect::back();
    }
}
