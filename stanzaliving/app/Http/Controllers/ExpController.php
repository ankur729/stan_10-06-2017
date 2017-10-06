<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Expcategory;
class ExpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories=Expcategory::all();
        return view('pages.admin.experience.categorylist',compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.admin.experience.addcategory');
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

                       $info=new Expcategory;

                            $info->title=$request->title;
                            $info->desc=$request->desc;
                          


                            $info->save();

                             \Session::flash('message','Category Successfully Added !');
                                return \Redirect('admin/experience/category/list');

     //   dd($request->all());
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

       // dd($request->all());

        $category=Expcategory::findOrFail($request->id);

        return view('pages.admin.experience.editcategory',compact('category'));

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

       // dd($request->all());
                    Expcategory::where('id', $request->category_id)
        
                              ->update(

                                [
                                'title' => $request->title,
                                 'desc' => $request->desc,
                                
                                ]);
                                \Session::flash('message','Category Successfully Updated !');
                                return \Redirect('admin/experience/category/list');
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

           Expcategory::destroy($request->id);
         \Session::flash('message','Category Successfully Deleted !');
            return \Redirect::back();
        //
    }
}
