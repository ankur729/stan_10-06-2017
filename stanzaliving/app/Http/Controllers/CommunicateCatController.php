<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\CommunicateCategory;

use App\CommunicateSubCategory;

use DB;

class CommunicateCatController extends Controller
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
        $categories=CommunicateCategory::all();
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.communicate.categorylist',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('pages.admin.communicate.categoryadd');

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
        $this->validate($request, [  'name' => 'required|regex:/^[a-zA-Z0-9 ]:unique:communicate_categories/'    ]);
           $cat=new CommunicateCategory;
           $cat->name=$request->name;
          try{
        $cat->save();
    }
     catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Category Successfully Added !');
         return \Redirect('admin/communicate_category/list');
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
        $category=CommunicateCategory::findOrFail($request->id);
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.communicate.categoryedit', compact('category'));
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
         $this->validate($request, [  'name' => 'required|regex:/^[a-zA-Z0-9 ]/|unique:communicate_categories,name'    ]);
          try{
            CommunicateCategory::where('id', $request->id)
        
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
                                \Session::flash('message','Category Successfully Updated !');
         return \Redirect('admin/communicate_category/list');
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
            
          if(CommunicateSubCategory::where('cat_id', $request->id)->get()->count()>=1)
          {
             \Session::flash('message','Subcategory exists. Cannot be deleted. Although! can be modified !');
            return \Redirect::back();
          } 
          else{
           CommunicateCategory::destroy($request->id);
          }
          
       }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
         \Session::flash('message','Category Successfully Deleted !');
            return \Redirect::back();
    }
}
