<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Complaint;

use App\ComplaintCategory;

use App\ComplaintSubCategory;

class ComplaintController extends Controller
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
        $complaints=Complaint::all();
        $compcat=ComplaintCategory::all();
        $compsubcat=ComplaintSubCategory::all();

        foreach ($compcat as $key => $value) {
            $mycat[$value->id]=$value->name;
        }
   
        foreach ($compsubcat as $key => $value) {
            $mysubcat[$value->id]=$value->name;
        }
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.complaints.complaintlist',compact('complaints','mycat','mysubcat'));
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
    public function show(Request $request)
    {
        //
         try{
        $complaint=Complaint::findOrFail($request->id);
        $compcat=ComplaintCategory::all();
        $compsubcat=ComplaintSubCategory::all();

        foreach ($compcat as $key => $value) {
            $mycat[$value->id]=$value->name;
        }
   
        foreach ($compsubcat as $key => $value) {
            $mysubcat[$value->id]=$value->name;
        }
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.complaints.complaintview',compact('complaint','mycat','mysubcat'));
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
    public function update(Request $request)
    {
        //
        $this->validate($request, [  'c_status' => 'required' ,
                                     'c_res_date' => 'required' ,   
                                     'c_remarks' => 'required|regex:/^[a-zA-Z0-9 ]/'  
                                           ]);
         Complaint::where('id', $request->id)
        
                              ->update(

                                [
                                'c_status' => $request->c_status,
                                'c_res_date'=>$request->c_res_date,
                                'c_remarks'=>$request->c_remarks,
								'c_reply'=>$request->c_reply
                                
                                ]);
                                \Session::flash('message','Complaint Status Updated !');
                                return \Redirect('admin/complaint/list');
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
