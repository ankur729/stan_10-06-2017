<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Facility;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();

      //  return $facility;
        return view('pages.admin.category.categorylist',compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.admin.category.categoryadd');
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
        $this->validate($request, [
                    'name'=>'required|regex:/^[a-zA-Z0-9 ]+$/'
            ]);
        Category::create([

            'name'=>$request->name,
            'sortorder'=>'0'
            ]);

           \Session::flash('message','Category Successfully Added !');
            return \Redirect('admin/category/list');
    
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

     //    dd($request->all());

        $category=Category::findOrFail($request->category_id);

        return view('pages.admin.category.categoryedit',compact('category'));
       // return $id;
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

            $this->validate($request, [
                    'name'=>'required|regex:/^[a-zA-Z0-9 ]+$/'
            ]);
          Category::where('id', $request->category_id)
        
                              ->update(

                                [
                                'name' => $request->name,
                                
                                ]);
                                \Session::flash('message','Category Successfully Updated !');
            return \Redirect('admin/category/list');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
            if(Facility::where('categories_id',$request->category_id)->get()->count()>=1)
            {
                \Session::flash('message','Category In Use. Cannot be Deleted. Although can be modified !');
                return \Redirect::back();
            }
            else
            {
           Category::destroy($request->category_id);
            }
         \Session::flash('message','Category Successfully Deleted !');
            return \Redirect::back();
        //
    }
}
