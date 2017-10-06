<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ComplaintSubCategory;

use App\ComplaintCategory;


class ComplaintSubCatController extends Controller
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
        $category=ComplaintCategory::all();

        foreach ($category as $key => $value) {
            $myarr[$value->id]=$value->name;
        }

        $subcategories=ComplaintSubCategory::all();
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.complaints.subcategorylist',compact('subcategories','myarr'));
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
        $category=ComplaintCategory::all();

        foreach ($category as $key => $value) {
            $myarr[$value->id]=$value->name;
             }
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.complaints.subcategoryadd',compact('myarr'));
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
        $this->validate($request, [  'name' => 'required|regex:/^[a-zA-Z0-9 ]+$/|unique:complaint_sub_categories' ,
                                     'category_id'=>'required'
                                          ]);
           $subcat=new ComplaintSubCategory;
           $subcat->name=$request->name;
           $subcat->category_id=$request->category_id;
          try{
        $subcat->save();
        }
     catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Complaint Sub Category Successfully Added !');
         return \Redirect('admin/complaint_subcategory/list');
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
        $subcategory=ComplaintSubCategory::findOrFail($request->id);
        $category=ComplaintCategory::all();

        foreach ($category as $key => $value) {
            $myarr[$value->id]=$value->name;
             }
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.complaints.subcategoryedit', compact('subcategory','myarr'));
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
        $this->validate($request, [  'name' => 'required|regex:/^[a-zA-Z0-9 ]/|unique:complaint_sub_categories',
         'category_id'=>'required'    ]);
          try{
            ComplaintSubCategory::where('id', $request->id)
        
                              ->update(

                                [
                                 'name'=>$request->name,
                                 'category_id'=>$request->category_id
                                 ]);
                              }
                           catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
                                \Session::flash('message','Complaint Sub Category Successfully Updated !');
         return \Redirect('admin/complaint_subcategory/list');
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
           ComplaintSubCategory::destroy($request->id);
       }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
         \Session::flash('message','Complaint Sub Category Successfully Deleted !');
            return \Redirect::back();
    
    }
}
