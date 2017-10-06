<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Food;

use App\FoodCategory;

class FoodCatController extends Controller
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
        $f_cat=FoodCategory::all();
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.foods.foodcatlist',compact('f_cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('pages.admin.foods.foodcatadd');
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
         $this->validate($request, [  'name' => 'required|alpha|unique:food_categories'    ]);
           $cat=new FoodCategory;
           $cat->name=$request->name;
          try{
        $cat->save();
    }
     catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Food Category Successfully Added !');
         return \Redirect('admin/f_cat/list');
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
        $category=FoodCategory::findOrFail($request->id);
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.foods.foodcatedit', compact('category'));
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
        $this->validate($request, [  'name' => 'required|alpha|unique:food_categories'    ]);
          try{
            FoodCategory::where('id', $request->id)
        
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
                                \Session::flash('message','Food Category Successfully Updated !');
         return \Redirect('admin/f_cat/list');
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

             if(Food::where('f_cat',$request->id)->get()->count()>=1)
          {
             \Session::flash('message','Food Item exists. Cannot be deleted. Although! can be modified !');
            return \Redirect::back();
            }
          else{
            FoodCategory::destroy($request->id);
            }
          
           
       }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
         \Session::flash('message','Food Category Successfully Deleted !');
            return \Redirect::back();
    }
}
