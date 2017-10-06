<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Food;

use App\FoodCategory;

class FoodController extends Controller
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
        $foods=Food::all();
        $f_cat=FoodCategory::all();
        foreach ($f_cat as $key => $value) {
            $myarr[$value->id]=$value->name;
        }
         }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.foods.foodlist',compact('foods','myarr'));
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
        $f_cat=FoodCategory::all();
        foreach ($f_cat as $key => $value) {
            $myarr[$value->id]=$value->name;
        }
     }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.foods.foodadd',compact('myarr'));
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
        $this->validate($request, [  'f_name' => 'required|unique:foods' ,
                                      'f_cat'=>'required',
                                      'f_type'=>'required',
                                   'status'=>'required'             ]);
            try{ 
           $cat=new Food;
           $cat->f_name=$request->f_name;
           $cat->f_cat=$request->f_cat;
           $cat->f_type=$request->f_type;
           $cat->status=$request->status;
         
        $cat->save();
        }
     catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Food Successfully Added !');
                 return \Redirect('admin/menu/list');

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
             $f_cat=FoodCategory::all();
        foreach ($f_cat as $key => $value) {
            $myarr[$value->id]=$value->name;
        }
        $category=Food::findOrFail($request->id);
        }
             catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.foods.foodedit', compact('category','myarr'));
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
         $this->validate($request, [  'f_name' => 'required' ,
                                      'f_cat'=>'required',
                                      'f_type'=>'required',
                                   'status'=>'required'    ]);
      
          try{
            Food::where('id', $request->id)
        
                              ->update(

                                [
                                 'f_name' => $request->f_name,
                                      'f_cat'=>$request->f_cat,
                                      'f_type'=>$request->f_type,
                                   'status'=>$request->status
                                 ]);
                              }
                           catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
                                \Session::flash('message','Food Item Successfully Updated !');
                 return \Redirect('admin/menu/list');
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

         
            Food::destroy($request->id);
                   
       }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
         \Session::flash('message','Food Item Successfully Deleted !');
            return \Redirect::back();
    }
}
