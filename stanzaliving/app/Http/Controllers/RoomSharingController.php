<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\RoomSharing;

class RoomSharingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms=RoomSharing::all();
        return view('pages.admin.roomsharing.roomsharinglist',compact('rooms'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.admin.roomsharing.roomsharingadd');

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
                    'name'=>'required|regex:/^[a-zA-Z0-9 ]+$/',
                    'sharingcount'=>'required|numeric'
            ]);


        RoomSharing::create([

            'name'=>$request->name,
            'sharingcount'=>$request->sharingcount

            ]);

            \Session::flash('message','Room Successfully Added !');
                                return \Redirect('admin/room/list');
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

        $room=RoomSharing::findOrFail($request->room_id);

        return view('pages.admin.roomsharing.roomsharingedit',compact('room'));
        //dd($room);
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
                    'sharingcount'=>'required|numeric'
            ]);

       
          RoomSharing::where('id', $request->room_id)
        
                              ->update(

                                [
                                'name' => $request->name,
                                 'sharingcount' => $request->sharingcount,
                                
                                ]);
                                \Session::flash('message','Category Successfully Updated !');
                                return \Redirect('admin/room/list');

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


           RoomSharing::destroy($request->room_id);
         \Session::flash('message','Room Successfully Deleted !');
            return \Redirect::back();
        //
    }
}
