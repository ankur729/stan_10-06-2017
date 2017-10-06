<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Payment;

use App\Student;

use App\Tax;

class PaymentController extends Controller
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
        $payments=Payment::all();
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.payment.paymentlist',compact('payments'));
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
        $tax=Tax::all();
        foreach ($tax as $key => $value) {
            $myarr[$value->percent]=$value->name;
        }
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
         return view('pages.admin.payment.paymentadd',compact('myarr'));
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
                                'std_reg_no'=>'required|regex:/^[A-Za-z0-9]/|unique:payments,std_reg_no',
                                'std_name'=>'required|regex:/^[A-Za-z0-9 ]/',
                                'inv_id'=>'required|regex:/^[A-Za-z0-9]/',
                                'inv_date'=>'required|date_format:"Y-m-d"',
                                'due_date'=>'required|date_format:"Y-m-d"',
                                'electricity'=>'required|numeric',
                                'arrears'=>'required|numeric',
                                'room_rent'=>'required|numeric',
                                'tax'=>'required|numeric',
                                'inv_amt'=>'required|numeric',
                                'amt_pay'=>'required|numeric',
                                'status'=>'required'
            ]);
        try{
        $pay=new Payment;
        $pay->std_reg_no=$request->std_reg_no;
        $pay->std_name=$request->std_name;
        $pay->inv_id=$request->inv_id;
        $pay->inv_date=$request->inv_date;
        $pay->due_date=$request->due_date;
        $pay->electricity=$request->electricity;
        $pay->arrears=$request->arrears;
        $pay->room_rent=$request->room_rent;
        $pay->tax=$request->tax;
        $pay->inv_amt=$request->inv_amt;
        $pay->amt_pay=$request->amt_pay;
        $pay->status=$request->status;
        $pay->save();
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Invoice Successfully Created !');
         return \Redirect('admin/payment/list');
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
         $tax=Tax::all();
        
        foreach ($tax as $key => $value) {
            $myarr[$value->percent]=$value->name;
        }
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        $payment=Payment::findOrFail($request->id);
        return view('pages.admin.payment.paymentview',compact('payment','myarr'));
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
        $tax=Tax::all();
        foreach ($tax as $key => $value) {
            $myarr[$value->percent]=$value->name;
        }
        $payment=Payment::findOrFail($request->id);
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.payment.paymentedit',compact('payment','myarr'));
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
         $this->validate($request,[
                                'std_reg_no'=>'required|regex:/^[A-Za-z0-9]/',
                                'std_name'=>'required|regex:/^[A-Za-z0-9 ]/',
                                'inv_id'=>'required|regex:/^[A-Za-z0-9]/',
                                'inv_date'=>'required|date_format:"Y-m-d"',
                                'due_date'=>'required|date_format:"Y-m-d"',
                                'electricity'=>'required|numeric',
                                'arrears'=>'required|numeric',
                                'room_rent'=>'required|numeric',
                                'tax'=>'required|numeric',
                                'inv_amt'=>'required|numeric',
                                'amt_pay'=>'required|numeric',
                                'status'=>'required'
            ]);
         try{
         Payment::where('id',$request->id)->update([
                            
                            'inv_id'=>$request->inv_id,
                            'inv_date'=>$request->inv_date,
                            'due_date'=>$request->due_date,
                            'electricity'=>$request->electricity,
                            'arrears'=>$request->arrears,
                            'room_rent'=>$request->room_rent,
                            'tax'=>$request->tax,
                            'inv_amt'=>$request->inv_amt,
                            'amt_pay'=>$request->amt_pay,
                            'status'=>$request->status
            ]);
         }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
          \Session::flash('message','Invoice Successfully Updated !');
         return \Redirect('admin/payment/list');

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
        Payment::destroy($request->id);
        }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        \Session::flash('message','Invoice Successfully Deleted !');
         return \Redirect::back();


    }

    public function studname(Request $request)
    {
        //
        $id=$_GET['reg_no'];
        $res=Student::where('s_unique_id_no',$id)->get();
        if($res->count()!=1)
        {
            $ret="Ambiguous Data or No Data";
        }
        else
        {
            $ret=$res[0]['s_firstname'].' '.$res[0]['s_lastname'];
        }
        echo $ret;
    }  
}
