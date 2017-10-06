<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Enquiry;
use App\Http\Controllers\Controller;

use App\RoomSharing;
use App\Hostel;
use App\State;




class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
	
	
	
	 public function contactenquiry(Request $request){
       
	   $enq = new Enquiry;
	    
		$this->validate($request, [ 'name' => 'required' ,
									'email' => 'required' ,
									'phone' => 'required' ,
									'subject' => 'required' ,									
									'message' => 'required',
								]); 
			
		$name = $request->name;
		$email = $request->email;
		$phone = $request->phone;
		$subject = $request->subject;
		$message = $request->message;
		$type = 'Contact';
		  
		 try{ 
         
			$saverecords= Enquiry::create([
                            'name'=>$name,
                            'email'=>$email,
							'phone'=>$phone,
                            'subject'=>$subject,
							'message'=>$message,
							'type'=>'Contact',
                            'status'=>'active',							
							'enquiry_date'=>date('Y-m-d H:i:s')
							]);	  
		   
        }
		catch(\Illuminate\Database\QueryException $ex){
            \Session::flash('message','Query Exception Occurred. Call Developer!');        
		    return \Redirect('/contact');
        }
		
		    \Session::flash('message','Request Send Successfully !');          
			return \Redirect('/contact');	
		
		
		
		 /*
		 Mail Error 
		 
		 
		 $title = $request->input('title');
        $content = $request->input('content');
        $attach = $request->file('file');
        Mail::send('emails.send', ['title' => $name, 'content' => $content], function ($message) use ($attach){

            $message->from('me@gmail.com', 'Christian Nwamba');
            $message->to('chrisn@scotch.io');
            $message->attach($attach);
            $message->subject("Hello from Scotch");
        });
        return response()->json(['message' => 'Request completed']);
		 */
		
		

		
		
		
    }
	
	
    public function bookingReqFormView(){

        $mystates=State::all();
        $myroomtypes=RoomSharing::all();
        $myhostels=Hostel::all();


         return view('pages.front.pre-register',compact('myhostels','myroomtypes','mystates'));
    }
	
    public function bookingReqFormSave(Request $req){

        //return $req->all();Enquiry


        $preregenquiry= new Enquiry;

        $preregenquiry->type='PreRegister';
        $preregenquiry->name=$req->applicant_name;
        $preregenquiry->email=$req->email;
        $preregenquiry->phone=$req->phone;
        $preregenquiry->nationality=$req->nationality;
        $preregenquiry->parent_name=$req->parent_name;
        $preregenquiry->parent_email=$req->parent_email;
        $preregenquiry->parent_phone=$req->parent_phone;
        $preregenquiry->hostel_id=$req->choose_house;
        $preregenquiry->roomsharings_id=$req->type_of_occupancy;
        $preregenquiry->addline1=$req->addline1;
        $preregenquiry->addline2=$req->addline2;
        $preregenquiry->state_id=$req->state;
        $preregenquiry->pin_code=$req->pin_code;
        
        $preregenquiry->save();

           \Session::flash('message','Your Query Successfully Recieved !');
            return \Redirect::back();

    }


    // //  return $req->all();

    // }

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
