<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Facility;
use App\Category;
class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities=Facility::all();

      //  return $facility;
        return view('pages.admin.facility.facilitylist',compact('facilities'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data=Category::all();
       
        $arr=[];
        foreach ($data as $key => $value) {
            //array_push($arr, $value->access_name);
             
             $myarr[$value->id]=$value->name;
            
            # code...
        }
        return view('pages.admin.facility.facilityadd',compact('myarr'));
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

      //  dd($request->all());
        $this->validate($request, [
            'name'=>'required|regex:/^[a-zA-Z0-9 ]+$/',
            'image'=>'required',
            'category'=>'required'
            ]);
          if($request->file('image')){

            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $path = public_path("images/$name");
            $file->move('images/facility/',$name);
            
        }

try{
        Facility::create([

            'name'=>$request->name,
            'categories_id'=>$request->categories_id,
            'img'=>$name,
            'sortorder'=>'0'

            ]);
} catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
           \Session::flash('message','Facility Successfully Added !');
            return \Redirect('admin/facility/list');
    
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
           $data=Category::all();
       
        $arr=[];
        foreach ($data as $key => $value) {
            //array_push($arr, $value->access_name);
             
             $myarr[$value->id]=$value->name;
            
            # code...
        }
        $facility=Facility::findOrFail($request->facility_id);

        return view('pages.admin.facility.facilityedit',compact(['facility','myarr']));
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
            'name'=>'required|regex:/^[a-zA-Z0-9 ]+$/',
            
            'categories_id'=>'required'
            ]);

        $has_image="false";
           if($request->file('image')){

            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $path = public_path("images/$name");
            $file->move('images/facility/',$name);
            $has_image="true";
        }

        if($has_image=="false")
        {
          Facility::where('id', $request->facility_id)
        
                              ->update(

                                [
                                'name' => $request->name,
                                'categories_id'=>$request->categories_id,
                                ]);
                                \Session::flash('message','Facility Successfully Updated !');
                                return \Redirect::back();

                            }

                if($has_image=="true")
        {
          Facility::where('id', $request->facility_id)
        
                              ->update(

                                [
                                'name' => $request->name,
                                 'categories_id'=>$request->category,
                                 'img'=>$name
                                ]);
                                \Session::flash('message','Facility Successfully Updated !');
                                           return \Redirect('admin/facility/list');


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

           Facility::destroy($request->facility_id);
         \Session::flash('message','Facility Successfully Deleted !');
            return \Redirect::back();
        //
    }
}
