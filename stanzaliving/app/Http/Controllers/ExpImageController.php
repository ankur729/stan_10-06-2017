<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Expcategory;
use App\Expimage;

class ExpImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $expimages =Expimage::all();

        return view('pages.admin.experience.imagelist',compact('expimages'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Expcategory::all();
       
       
        foreach ($data as $key => $value) {
            //array_push($arr, $value->access_name);
             
             $myarr[$value->id]=$value->title;
            
            # code...
        }
       
        return view('pages.admin.experience.imageadd',compact('myarr'));
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

        //dd($request->all());

        if($request->file('image')){

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = public_path("images/categoryimage/$name");
            $file->move('images/categoryimage/',time().$name);
            
        }

          // if($has_image=="false"){

           $expimgcategory= new Expimage;

            $expimgcategory->expcategory_id=$request->category;
            $expimgcategory->title=$request->title;
            $expimgcategory->desc=$request->desc;
            $expimgcategory->img=time().$name;
           
            
            $expimgcategory->save();
            // \DB::insert('insert into role_user (user_id, role_id) values (?, ?)', [$user->id, $request->role]);

             \Session::flash('message','Cateogory Image Successfully Added !');
                                return \Redirect('admin/experience/image/list');

        // }
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

         $data=Expcategory::all();
       
       
        foreach ($data as $key => $value) {
            //array_push($arr, $value->access_name);
             
             $myarr[$value->id]=$value->title;
            
            # code...
        }


        $expimage=Expimage::findOrFail($request->image_id);
       // return $expimage;

        return view('pages.admin.experience.imageedit',compact(['expimage','myarr']));
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

      //  dd($request->all());

        if($request->file('image')){

            return 'has image';
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = public_path("images/categoryimage/$name");
            $file->move('images/categoryimage/',time().$name);


            Expimage::where('id', $request->image_id)
        
          ->update(

                        [
                        'title' => $request->title,
                        'desc'=>$request->desc,
                        'expcategory_id'=>$request->category,
                        'img'=>$name,
                   
                       
            ]);

    
            \Session::flash('message','Image Successfully Updated !');
                                return \Redirect('admin/experience/image/list');

        }

        if(!$request->file('image')){

              Expimage::where('id', $request->image_id)
        
          ->update(

                        [
                        'title' => $request->title,
                        'desc'=>$request->desc,
                        'expcategory_id'=>$request->category,
                      
                   
                       
            ]);

    
            \Session::flash('message','Image Successfully Updated !');
            return \Redirect::back();
          
        }

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


           Expcategory::destroy($request->image_id);
         \Session::flash('message','Category Image Successfully Deleted !');
            return \Redirect::back();
        //
    }
}
