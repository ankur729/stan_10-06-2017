<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Facility;
use App\Category;
use App\RoomSharing;
use App\Hostel;
use App\RoomCount;
use DB;

class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $hostels=Hostel::all();

       // return $info;
        return view('pages.admin.hostel.hostellist',compact('hostels'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();

        $roomtypes=RoomSharing::all();

         $arr=[];
        foreach ($categories as $key => $value) {
        
         $categories[$key]['facility']=$categories[$key]->getFacility()->get();
            
        }
   
        return view('pages.admin.hostel.hosteladd',compact(['categories','roomtypes']));
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
        //echo ;

        //    dd($request->all());

            
   // //    $data=json_encode($request->roomtype);
     
         $data=(object)$request->roomtype;
         $imgname;

             if($request->file('image')){

            $file = $request->file('image');
            $imgname = time().$file->getClientOriginalName();
            $path = public_path("images/$imgname");
            $file->move('images/hostel/',$imgname);
            
        }


       $hostel_data= Hostel::create([

            'name'=>$request->name,
            'contact'=>$request->contact,
            'hoteldesc'=>$request->hoteldesc,
          
            'hoteldesclist'=>$request->hoteldesclist,
            'addr'=>$request->addr,
            'facility'=>json_encode((object)($request->facility)),
            // 'roomtype'=>(object)($request->roomtype),
            // 'roomcount'=>(object)($request->roomcount),
            
            'image'=>$imgname,
            'googleurl'=>$request->googleurl,

            ]);

        //return count($request->roomtype);
        //    dd($data);

        //        dd($hostel_data->id);


          


            for($i=0;$i<count($request->roomcount);$i++){

                    //echo $request->roomcount[$i];
                       $roomcountadd= RoomCount::create([

                            'hostel_id'=>$hostel_data->id,
                            'roomtype'=>$request->roomtype[$i],
                            'roomcount'=>$request->roomcount[$i]
                                      
                ]);

            }

         
 \Session::flash('message','Hostel Successfully Added !');
            return \Redirect::back();
       
       // dd(json_decode($data));
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

        //echo $request->id; die;
        $hostel=Hostel::findOrFail($request->id);

        // $hostel->facility=json_decode($hostel->facility);
        // $hostel->roomtype=json_decode($hostel->roomtype);
        // $hostel->roomcount=json_decode($hostel->roomcount);

    //   echo $hostel;
       // dd($hostel);
         $categories=Category::all();
        /* $roomcount=RoomCount::where('hostel_id',$request->id)->get();
            $roomcount=$roomcount->toArray();
            foreach($roomcount as $rc){
        $roomtypes[]=RoomSharing::where('id',$rc['roomtype'])->get();
          }
          dd($roomtypes);
          foreach($roomtypes as $rt)
          {

          }*/
          $roomtypes=RoomSharing::all();
          $desired=RoomCount::select('roomcounts.*')
            ->where('hostel_id','=',$request->id) 
            ->get();
          $desired=$desired->toArray();
          foreach ($desired as $value) {
             $k[$value['roomtype']]=$value['roomcount'];
          }
     
         $arr=[];
        foreach ($categories as $key => $value) {
            
         $categories[$key]['facility']=$categories[$key]->getFacility()->get();
            
        }
        // //return $images;
         return view('pages.admin.hostel.hosteledit',compact(['hostel','categories','desired','k','roomtypes']));
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
     
    
           $data=(object)$request->roomtype;
         $imgname=$request->imgnameh;

             if($request->file('image')){

            $file = $request->file('image');
            $imgname = time().$file->getClientOriginalName();
            $path = public_path("images/$imgname");
            $file->move('images/hostel/',$imgname);
            
        }

        Hostel::where('id', $request->hostel_id)->update([
            'name'=>$request->name,
            'contact'=>$request->contact,
            'hoteldesc'=>$request->hoteldesc,
          
            'hoteldesclist'=>$request->hoteldesclist,
            'addr'=>$request->addr,
            'facility'=>json_encode((object)($request->facility)),
            
            'image'=>$imgname,
            'googleurl'=>$request->googleurl,
            ]);
            print_r($roomcount);
            print_r($roomtype);
            die;
           for($i=0;$i<count($request->roomcount);$i++){

                    
                       $roomcountadd= RoomCount::where('id', $request->room_id)->update([

                            'hostel_id'=>$request->id,
                            'roomtype'=>$request->roomtype[$i],
                            'roomcount'=>$request->roomcount[$i]
                                      
                ]);
                   }
 \Session::flash('message','Hostel Successfully Updated !');
                                return \Redirect::back();
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
