<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $events=Event::all();
        return view('pages.admin.events.eventlist',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.events.eventadd');
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
       
        $this->validate($request,[
                                    'e_name'=>'required|regex:/^[A-za-z0-9 ]/',
                                    'e_date'=>'required|date_format:"Y-m-d"',
                                    'e_time'=>'required',
                                    'e_loc'=>'required',
                                    'e_contact_person'=>'required',
                                    'e_contact'=>'required|digits:10',
                                    
                                   
                                    ]);
                                    /*'e_name'=>$request->e_name,
                                    'e_date'=>$request->e_date,
                                    'e_time '=>$request->e_time,
                                    'e_loc'=>$request->e_loc,
                                    'e_contact_person'=>$request->e_contact_person,
                                    'e_contact'=>$request->e_contact,
                                    'e_target'=>$request->e_target,
                                    'e_antk'=>$request->e_antk,
                                    'e_int'=>$request->e_int,
                                    'e_msg'=>$request->e_msg,
                                    'e_objective'=>$request->e_objective,
                                    'e_desc'=>$request->e_desc,
                                    'e_risk'=>$request->e_risk,
                                    'e_aims'=>$request->e_aims,
                                    'e_achieve'=>$request->e_achieve,
                                    'e_budget'=>$request->e_budget,
                                    'e_outcomes'=>$request->e_outcomes,
                                    'e_meff'=>$request->e_meff,
                                    'e_teff'=>$request->e_teff,
                                    'e_inv'=>$request->e_inv,
                                    'e_dd'=>$request->e_dd,
                                    'e_locd'=>$request->e_locd,
                                    'e_tad'=>$request->e_tad,
                                    'e_md'=>$request->e_md,
                                    'e_od'=>$request->e_od,
                                    'e_rac'=>$request->e_rac,
                                    'e_ece'=>$request->e_ece*/
                                    $e_inv = (isset($request->e_inv)) ? 1 : 0;
                                    $e_dd = (isset($request->e_dd)) ? 1 : 0;
                                    $e_locd = (isset($request->e_locd)) ? 1 : 0;
                                    $e_tad = (isset($request->e_tad)) ? 1 : 0;
                                    $e_md = (isset($request->e_md)) ? 1 : 0;
                                    $e_od = (isset($request->e_od)) ? 1 : 0;
                                    $e_rac = (isset($request->e_rac)) ? 1 : 0;
                                    $e_ece = (isset($request->e_ece)) ? 1 : 0;



        $eve=new Event;
                                    $eve->e_name=$request->e_name;
                                    $eve->e_date=$request->e_date;
                                    $eve->e_time =$request->e_time;
                                    $eve->e_loc=$request->e_loc;
                                    $eve->e_contact=$request->e_contact;
                                    $eve->e_contact_person=$request->e_contact_person;
                                    $eve->e_contact=$request->e_contact;
                                    $eve->e_target=$request->e_target;
                                    $eve->e_antk=$request->e_antk;
                                    $eve->e_int=$request->e_int;
                                    $eve->e_msg=$request->e_msg;
                                    $eve->e_objective=$request->e_objective;
                                    $eve->e_desc=$request->e_desc;
                                    $eve->e_risk=$request->e_risk;
                                    $eve->e_aims=$request->e_aims;
                                    $eve->e_achieve=$request->e_achieve;
                                    $eve->e_budget=$request->e_budget;
                                    $eve->e_outcomes=$request->e_outcomes;
                                    $eve->e_meff=$request->e_meff;
                                    $eve->e_teff=$request->e_teff;
                                    $eve->e_inv=$e_inv;
                                    $eve->e_dd=$e_dd;
                                    $eve->e_locd=$e_locd;
                                    $eve->e_tad=$e_tad;
                                    $eve->e_md=$e_md;
                                    $eve->e_od=$e_od;
                                    $eve->e_rac=$e_rac;
                                    $eve->e_ece=$e_ece;
         try{
        $eve->save();
    }
     catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Event Successfully Added !');
         return \Redirect('admin/event/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
         try{
         $events=Event::findOrFail($request->id);
       
      }
       catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
       

         return view('pages.admin.events.eventview',compact('events'));
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
        $events=Event::findOrFail($request->id);
        return view('pages.admin.events.eventedit',compact('events'));
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
        $this->validate($request, [
                                    'e_name'=>'required|regex:/^[A-za-z0-9 ]/',
                                    'e_date'=>'required|date_format:"Y-m-d"',
                                    'e_time'=>'required',
                                    'e_loc'=>'required',
                                    'e_contact_person'=>'required',
                                    'e_contact'=>'required|digits:10',
                   ]);
 
                                  echo  $e_inv = (isset($request->e_inv)) ? 1 : 0;
                                  echo  $e_dd = (isset($request->e_dd)) ? 1 : 0;
                                  echo  $e_locd = (isset($request->e_locd)) ? 1 : 0;
                                  echo  $e_tad = (isset($request->e_tad)) ? 1 : 0;
                                  echo  $e_md = (isset($request->e_md)) ? 1 : 0;
                                  echo  $e_od = (isset($request->e_od)) ? 1 : 0;
                                  echo  $e_rac = (isset($request->e_rac)) ? 1 : 0;
                                  echo  $e_ece = (isset($request->e_ece)) ? 1 : 0;
      

        try{
            Event::where('id', $request->id)
        
                              ->update(

                                [                               
                                    'e_name'=>$request->e_name,
                                    'e_date'=>$request->e_date,
                                    'e_time'=>$request->e_time,
                                    'e_loc'=>$request->e_loc,
                                    'e_contact_person'=>$request->e_contact_person,
                                    'e_contact'=>$request->e_contact,
                                    'e_target'=>$request->e_target,
                                    'e_antk'=>$request->e_antk,
                                    'e_int'=>$request->e_int,
                                    'e_msg'=>$request->e_msg,
                                    'e_objective'=>$request->e_objective,
                                    'e_desc'=>$request->e_desc,
                                    'e_risk'=>$request->e_risk,
                                    'e_aims'=>$request->e_aims,
                                    'e_achieve'=>$request->e_achieve,
                                    'e_budget'=>$request->e_budget,
                                    'e_outcomes'=>$request->e_outcomes,
                                    'e_meff'=>$request->e_meff,
                                    'e_teff'=>$request->e_teff,
                                    'e_inv'=>$e_inv,
                                    'e_dd'=>$e_dd,
                                    'e_locd'=>$e_locd,
                                    'e_tad'=>$e_tad,
                                    'e_md'=>$e_md,
                                    'e_od'=>$e_od,
                                    'e_rac'=>$e_rac,
                                    'e_ece'=>$e_ece
                                
                                ]);
                         }
                           catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
                                \Session::flash('message','Event Successfully Updated !');
         return \Redirect('admin/event/list');
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
           Event::destroy($request->id);
       }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
         \Session::flash('message','Event Successfully Deleted !');
            return \Redirect::back();
    }
}
