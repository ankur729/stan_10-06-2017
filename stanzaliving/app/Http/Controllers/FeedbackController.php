<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Feedback;

use App\FoodCategory;

use App\Student;
class FeedbackController extends Controller
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
        $date = date_create(date('Y-m-d'));
        date_sub($date, date_interval_create_from_date_string('30 days'));
        $req_date= date_format($date, 'Y-m-d');

            
        $feedbacks=Feedback::where('date','>',$req_date)->get();
        $f_cat=FoodCategory::all();
        $student=Student::all();
          

        $rating[1]="Poor";
        $rating[2]="Satisfactory";
        $rating[3]="Fair";
        $rating[4]="Good";
        $rating[5]="Excellent";

        foreach ($f_cat as $key => $value) {
            $myarr[$value->id]=$value->name;
        }

        foreach ($student as $key => $value) {
            $stud[$value->id]=$value->s_firstname.' '.$value->s_lastname ;
        }

        }
        catch(\Illuminate\Database\QueryException $ex)
        {
            \Session::flash('message','Query Exception Occurred. Call Developer!');

         return \Redirect::back();
        }
        return view('pages.admin.feedbacks.feedbacklist',compact('myarr','stud','feedbacks','rating'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
