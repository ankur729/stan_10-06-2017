<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ComplaintCategory;

use App\ComplaintSubCategory;

class ComplaintCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
      try{
        $categories=ComplaintCategory::all();
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.complaints.categorylist',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.complaints.categoryadd');

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
           $this->validate($request, [  'name' => 'required|regex:/^[a-zA-Z0-9 ]+$/|unique:complaint_categories'    ],$messages = [
    'required' => 'The Category Name field is required.'
]);
           $cat=new ComplaintCategory;
           $cat->name=$request->name;
          try{
        $cat->save();
    }
     catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Complaint Category Successfully Added !');
         return \Redirect('admin/complaint_category/list');
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
        $category=ComplaintCategory::findOrFail($request->id);
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.complaints.categoryedit', compact('category'));

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
         $this->validate($request, [  'name' => 'required|regex:/^[a-zA-Z0-9 ]/|unique:complaint_categories'    ]);
          try{
            ComplaintCategory::where('id', $request->id)
        
                              ->update(

                                [
                                 'name'=>$request->name
                                 ]);
                              }
                           catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
                                \Session::flash('message','Complaint Category Successfully Updated !');
         return \Redirect('admin/complaint_category/list');
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

             if(ComplaintSubCategory::where('category_id',$request->id)->get()->count()>=1)
          {
             \Session::flash('message','Subcategory exists. Cannot be deleted. Although! can be modified !');
            return \Redirect::back();
            }
          else{
            ComplaintCategory::destroy($request->id);
            }
          
           
       }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
         \Session::flash('message','Complaint Category Successfully Deleted !');
            return \Redirect::back();
    }
}
