<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tax;

use App\Payment;

class TaxController extends Controller
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
        $taxes=Tax::all();
         }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.tax.taxlist',compact('taxes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.tax.taxadd');  
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
        $this->validate($request, [
            'name'=>'required|regex:/^[A-Za-z0-9\@\%-_ ]/',
            'percent'=>'required|numeric|unique:taxes,percent'
            ]);
        try{
        $tax=new Tax;
        $tax->name=$request->name;
        $tax->percent=$request->percent;
        $tax->save();
         }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Tax Successfully Added !');
                                return \Redirect('admin/taxes/list');
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
         $tax=Tax::findOrFail($request->id);
        
         }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.tax.taxedit',compact('tax'));
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
        try{
        Tax::where('id', $request->id)->update([
                        'name'=>$request->name,
                        'percent'=>$request->percent
                        ]);
         }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Tax Successfully Updated !');
                                return \Redirect('admin/taxes/list');
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
            if(Payment::where('id',$request->id)->get()->count()>=1)
            {
                \Session::flash('message','Tax in Use.Couldn\'t Deleted !');
                 return \Redirect::back();
            }
            else{
        Tax::destroy($request->id);
                 }
         }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Tax Successfully Deleted !');
        return \Redirect::back();
    }
}
