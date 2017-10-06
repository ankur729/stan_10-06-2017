<?php 
$body_class ="";
$meta_title ="Stanza Living : My Account";
$meta_keyword ="Stanza Living,Premium student";
$meta_description ="Premium student accommodation in India - move over PGs and hostels!";
//print_r($results);die;

//echo "Student Session ID==>".$value = session('student_id');
//dd(session()->all());
//print_r($results);die;

?>


@extends('layouts.master.front.index')

@section('styles')
<link href="{{ URL::asset('front/css/timestyle.css') }}" rel="stylesheet">
<link href="{{ URL::asset('front/css/timepicki.css') }}" rel="stylesheet">
<link href="{{ URL::asset('front/css/form.css') }}" rel="stylesheet">
@endsection

@section('content')


<div class="create-complaint-popup">
	<div class="design-box">
		<div class="complaint-box">
			<h4 class="title">New Complaint <span class="close"><img src="{{ URL::asset('front/images/icon/close.png') }}"></span></h4>
			<div class="coloum-div">
				<input type="text" name="" placeholder="problem subject" class="input-box">
			</div>
			<div class="coloum-div">
				<select class="select-option">
					<option>select your category</option>
					<option>Repairs and Maintenance</option>
					<option>Housekeeping</option>
					<option>Security</option>
					<option>Personnel</option>
					<option>Stanza Social</option>
					<option>Stanza Springboard</option>
					<option>Other Stanzens</option>
					<option>Others</option>
				</select>
			</div>
			<div class="coloum-div">
				<div class="col-md-70 border-right left">
					<select class="select-option">
						<option>urgency of complaint </option>
						<option>Emergency</option>
						<option>Regular </option>
					</select>
				</div>
				<div class="col-md-30 left padding-left-10px"><!-- 
					<input type="text" value="" id="demo-2" placeholder="date of problem" class="input-box"> -->
				</div>
			</div>
			<div class="coloum-div">
				<input type="file" name="" class="input-file">
			</div>
			<div class="coloum-div">
				<textarea class="textarea" placeholder="type your complaint details"></textarea>
			</div>
			<div class="coloum-div center"><input type="submit" name="" class="submit-btn"></div>
		</div>
	</div>
</div>




	<div class="container">
		<div class="work-body">
			<div class="Registered-btn">
				<a href="#" onclick="document.getElementById('form-popup').style.display='block'"  class="change-email-btn">Change Email Id</a>
			</div>

				<!-- popup-section -->
			<div id="form-popup" class="w3-modal">
   				<div class="w3-modal-content">
	      			<div class="w3-container">
	      				<!-- <h4>CHANGE EMAIL ID</h4> -->
		        		<span onclick="document.getElementById('form-popup').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		       			<input id="emailAddress" type="email" placeholder="Email Id" class="form-email">
		        		<input type="text" name="" placeholder="Phone no:" class="form-contact">
		        		<a href="#"  class="update-btn">Update</a>
	      			</div>
    			</div>
  			</div>
			<!-- popup-section ends -->


			<!-- complaint box start here -->
			<div class="complaint-box">
				<h4 class="title">New Night-out/Late Night Request</h4>
				<!-- <div class="coloum-div">
					<input type="text" name="" placeholder="Problem subject" class="input-box">
					<span class="instruction-msg">Upto 100 Characters is valid for the subject.</span>
				</div> -->
				<div class="coloum-div">
					<div class="col-md-50 left border-right">
						<select class="select-option">
							<option>Select your category</option>
							<option>Late Night Out</option>
							<option>Night Out</option>
							<option>Extended Leave of Absence</option>
						</select>
					</div>
					 <div class="col-md-25 left padding-left-10px  border-right ">
						<input type="text" value="" id="demo-4" placeholder="Date" class="input-box">
					</div>
					 <div class="col-md-25 left padding-left-10px">
						<input id="timepicker3" placeholder="Time" name="timepicker2" data-timepicki-tim="7" data-timepicki-mini="13" data-timepicki-meri="PM" type="text">
					</div>
				</div>
				<div class="coloum-div">

						<div class="col-md-25 left padding-left-10px  border-right ">
							<input id="timepicker3" placeholder="Time of Leaving" name="timepicker2" data-timepicki-tim="7" data-timepicki-mini="13" data-timepicki-meri="PM" type="text">
						</div>
						<div class="col-md-25 left padding-left-10px  border-right ">
							<input type="text" value="" id="demo-2" placeholder="Date of Leaving" class="input-box">
						</div>

					<div class="col-md-25 left padding-left-10px  border-right ">
						<input type="text" value="" id="demo-3" placeholder="Date of Return" class="input-box">
					</div>
					<div class="col-md-25 left padding-left-10px  ">
						<input id="timepicker4" placeholder="Time of Return" name="timepicker2" data-timepicki-tim="7" data-timepicki-mini="13" data-timepicki-meri="PM" type="text">
					</div>
				</div>
				<div class="coloum-div">
					<button name="" class="submit-btn" type="submit">Submit</button>
				</div>
				<!-- <div class="coloum-div">
					<textarea class="textarea" placeholder="Type your complaint details"></textarea>
					<input type="submit" name="" class="submit-btn">
				</div> -->
			</div>
			<!-- complaint box end here -->


			<!-- complaint panel start here -->
			<div class="complaint-panel">
				<h4 class="section-name">Night-Out/ Late Night Request History</h4>	
				<ul class="problem-data">
					<li class="problem-list">
						<div class="toggle_probs"></div>
					</li>
				</ul>
			</div>
			<div class="container">


			<div class="invoice-panel">
				<div class="invoice-bg">
				<!-- 	<h4 class="main-title">Rent Invoice </h4> -->
					<ul class="table-structure">
						<li class="list main">
							<div class="coloum-div col-md-15"><span class="title">Date Request</span></div>
							<div class="coloum-div col-md-15"><span class="title">Type of Request</span></div>
							<div class="coloum-div col-md-15"><span class="title">Status</span></div>
<!-- 							<div class="coloum-div col-md-15"><span class="title">Rent Due</span></div>
							<div class="coloum-div"><span class="title">Payment Status</span></div>
							<div class="coloum-div col-px-150"><span class="title">Generate Invoice</span></div> -->
						</li>
						<li class="list">
							<div class="coloum-div col-md-15"><span class="title">27-7-2017</span></div>
							<div class="coloum-div col-md-15"><span class="title">stanza living</span></div>
							<div class="coloum-div col-md-15"><span class="title">Request Approved</span></div>
<!-- 							<div class="coloum-div col-md-15"><span class="title b"> <i class="fa fa-inr"></i> 500</span></div>
							<div class="coloum-div"><span class="title  info">Paid</span></div>
							<div class="coloum-div col-px-150"><a href="#0" class="genrate-btn">Generate <br> Invoice</a></div> -->
						</li>
						<li class="list">
							<div class="coloum-div col-md-15"><span class="title">27-7-2017</span></div>
							<div class="coloum-div col-md-15"><span class="title">stanza living</span></div>
							<div class="coloum-div col-md-15"><span class="title">Request Rejected</span></div>
<!-- 							<div class="coloum-div col-md-15"><span class="title b"><i class="fa fa-inr"></i> 500</span></div>
							<div class="coloum-div"><span class="title lil-due">Due</span></div>
							<div class="coloum-div col-px-150"><a href="#0" class="genrate-btn">Generate <br> Invoice</a></div> -->
						</li>
						<li class="list">
							<div class="coloum-div col-md-15"><span class="title">27-7-2017</span></div>
							<div class="coloum-div col-md-15"><span class="title">stanza living</span></div>
							<div class="coloum-div col-md-15"><span class="title">Request Approved</span></div>
<!-- 							<div class="coloum-div col-md-15">
								<div class="row"><span class="title b"><i class="fa fa-inr"></i> 500</span></div>
								<span class="title-panalty">Penalty of <i class="fa fa-inr"></i> 500</span>
							</div>
							<div class="coloum-div"><span class="title dead-due">Overdue</span></div>
							<div class="coloum-div col-px-150"><a href="#0" class="genrate-btn">Generate <br> Invoice</a></div> -->
						</li>
						<li class="list">
							<div class="coloum-div col-md-15"><span class="title">27-7-2017</span></div>
							<div class="coloum-div col-md-15"><span class="title">stanza living</span></div>
							<div class="coloum-div col-md-15"><span class="title">Request Rejected</span></div>
<!-- 							<div class="coloum-div col-md-15">
								<div class="row"><span class="title b"><i class="fa fa-inr"></i> 500</span></div>
								<span class="title-panalty">Penalty of <i class="fa fa-inr"></i> 500</span>
							</div>
							<div class="coloum-div"><span class="title dead-due">Overdue</span></div>
							<div class="coloum-div col-px-150"><a href="#0" class="genrate-btn">Generate <br> Invoice</a></div> -->
						</li>
					</ul>
				</div>
			</div>


			<!-- complaint panel end here -->


			<!-- accordion section filter-->
  <!-- <div class="accordion-top">
  	<div class="col-md-20  filter  filter-space">Filter By</div>
  	<div class="col-md-20 left filter-space">
  		<select class="select-option">
			<option>Select your category</option>
			<option>Repairs and Maintenance</option>
			<option>Housekeeping</option>
			<option>Security</option>
			<option>Personnel</option>
			<option>Stanza Social</option>
			<option>Stanza Springboard</option>
			<option>Other Stanzens</option>
			<option>Others</option>
		</select>
  	</div>
  	<div class="col-md-20 left filter-space">
  		<select class="select-option">
  			<option>Urgency of complaint</option>
  			<option>Emergency</option>
  			<option>Regular</option>
  		</select>
  	</div>
  	<div class="col-md-20 left">
  		<select class="select-option">
  			<option>Select Status</option>
  			<option>Resolved</option>
  			<option>Pending</option>
  			<option>To be attended</option>
  		</select>
  	</div>
 
<!-- late-night-out-accordion Start -->
<!-- <div class="History-accordion">
	<div class="History-accordion-outer">
		<div class="col-md-30  border-right  toggle-left">
			<div class="subject-heading">
				<i class="fa fa-star" aria-hidden="true"></i>
				<span class="subject">Subject of the Problem</span>
				<span class="Reply">2 admin Reply</span>
			</div>
			<div class="subject-breadcrum">
				<ul>
					<li>For :</li>
					<li>Repair &amp; Maintance <i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li>Sub Category for complaints</li>

				</ul>
			</div>
		</div>
		<div class="col-md-55 complaint-content  border-right toggle-left">
			<p class="complaints">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="col-md-20  date-time">
				<div class="date-tm-section">
					<div class="date-time-breadcrum">27-7-2017 | 11:30pm</div>
				</div>
				<div class="accordion-Status"> -->
					<!-- <span class="right-status-img"><img src="{{ URL::asset('front/images/assets/residences/icon/pending-icon.png') }}"></span> -->
				<!-- 	<span class="right-status-info">Request Approved</span>
				</div>
		</div>
		</div>
			<div class="panel" style="display: block;">
				<p class="accordian-content  green-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
				<div class="admin-text">
					<div class="admin-reply-Heading">
						<span class="admin-reply-text">Admin reply</span> 
						<span class="admin-reply-sch">24-8-2017 | 12:00pm</span>
						<p class="history">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>

					</div>
				</div>
				<div class="admin-text">
					<div class="admin-reply-Heading">
						<span class="admin-reply-text">Admin reply</span> 
						<span class="admin-reply-sch">24-8-2017 | 12:00pm</span>
						<p class="history">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
				</div>
				<div class="admin-text">
					<div class="admin-reply-Heading">
						<span class="admin-reply-text">Admin reply</span> 
						<span class="admin-reply-sch">24-8-2017 | 12:00pm</span>
						<p class="history">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
				</div>
			</div>
	</div>
 --><!-- late-night out-page accordion end-->


<!-- late-night-out-accordion Start -->
<!-- <div class="History-accordion">
	<div class="History-accordion-outer">
		<div class="col-md-30  border-right  toggle-left">
			<div class="subject-heading">
				<i class="fa fa-star" aria-hidden="true"></i>
				<span class="subject">Subject of the Problem</span>
				<span class="Reply">2 admin Reply</span>
			</div>
			<div class="subject-breadcrum">
				<ul>
					<li>For :</li>
					<li>Repair &amp; Maintance <i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li>Sub Category for complaints</li>

				</ul>
			</div>
		</div>
		<div class="col-md-55 complaint-content  border-right toggle-left">
			<p class="complaints">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="col-md-20  date-time">
				<div class="date-tm-section">
					<div class="date-time-breadcrum">27-7-2017 | 11:30pm</div>
				</div>
				<div class="accordion-Status">
					<!-- <span class="right-status-img"><img src="{{ URL::asset('front/images/assets/residences/icon/pending-icon.png') }}"></span> -->
					<!-- <span class="right-status-info">Request Rejected</span>
				</div> -->
		<!-- </div>
		</div>
			<div class="panel" style="display: block;">
				<p class="accordian-content  green-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
				<div class="admin-text">
					<div class="admin-reply-Heading">
						<span class="admin-reply-text">Admin reply</span> 
						<span class="admin-reply-sch">24-8-2017 | 12:00pm</span>
						<p class="history">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>

					</div> -->
				<!-- </div>
				<div class="admin-text">
					<div class="admin-reply-Heading">
						<span class="admin-reply-text">Admin reply</span> 
						<span class="admin-reply-sch">24-8-2017 | 12:00pm</span>
						<p class="history">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
				</div>
				<div class="admin-text">
					<div class="admin-reply-Heading">
						<span class="admin-reply-text">Admin reply</span> 
						<span class="admin-reply-sch">24-8-2017 | 12:00pm</span>
						<p class="history">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
				</div>
			</div> 
	</div> -->
<!-- late-night out-page accordion end-->


<!-- late-night-out-accordion Start -->
<!-- <div class="History-accordion">
	<div class="History-accordion-outer">
		<div class="col-md-30  border-right  toggle-left">
			<div class="subject-heading">
				<i class="fa fa-star" aria-hidden="true"></i>
				<span class="subject">Subject of the Problem</span>
				<span class="Reply">2 admin Reply</span>
			</div>
			<div class="subject-breadcrum">
				<ul>
					<li>For :</li>
					<li>Repair &amp; Maintance <i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li>Sub Category for complaints</li>

				</ul>
			</div>
		</div>
		<div class="col-md-55 complaint-content  border-right toggle-left">
			<p class="complaints">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="col-md-20  date-time">
				<div class="date-tm-section">
					<div class="date-time-breadcrum">27-7-2017 | 11:30pm</div>
				</div>
				<div class="accordion-Status">
					<!-- <span class="right-status-img"><img src="{{ URL::asset('front/images/assets/residences/icon/pending-icon.png') }}"></span> -->
					<!-- <span class="right-status-info">Request Approved</span>
				</div>
		</div>
		</div>
			<div class="panel" style="display: block;">
				<p class="accordian-content  green-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
				<div class="admin-text">
					<div class="admin-reply-Heading">
						<span class="admin-reply-text">Admin reply</span> 
						<span class="admin-reply-sch">24-8-2017 | 12:00pm</span>
						<p class="history">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>

					</div>
				</div>
				<div class="admin-text">
					<div class="admin-reply-Heading">
						<span class="admin-reply-text">Admin reply</span> 
						<span class="admin-reply-sch">24-8-2017 | 12:00pm</span>
						<p class="history">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
				</div>
				<div class="admin-text">
					<div class="admin-reply-Heading">
						<span class="admin-reply-text">Admin reply</span> 
						<span class="admin-reply-sch">24-8-2017 | 12:00pm</span>
						<p class="history">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
				</div>
			</div> 
	</div> -->
<!-- late-night out-page accordion end-->


<!-- late-night-out-accordion Start -->
<!-- <div class="History-accordion">
	<div class="History-accordion-outer">
		<div class="col-md-30  border-right  toggle-left">
			<div class="subject-heading">
				<i class="fa fa-star" aria-hidden="true"></i>
				<span class="subject">Subject of the Problem</span>
				<span class="Reply">2 admin Reply</span>
			</div>
			<div class="subject-breadcrum">
				<ul>
					<li>For :</li>
					<li>Repair &amp; Maintance <i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li>Sub Category for complaints</li>

				</ul>
			</div>
		</div>
		<div class="col-md-55 complaint-content  border-right toggle-left">
			<p class="complaints">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="col-md-20  date-time">
				<div class="date-tm-section">
					<div class="date-time-breadcrum">27-7-2017 | 11:30pm</div>
				</div>
				<div class="accordion-Status">
					<!-- <span class="right-status-img"><img src="{{ URL::asset('front/images/assets/residences/icon/pending-icon.png') }}"></span> -->
					<!-- <span class="right-status-info">Request Rejected</span>
				</div>
		</div>
		</div>
			<div class="panel" style="display: block;">
				<p class="accordian-content  green-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
				<div class="admin-text">
					<div class="admin-reply-Heading">
						<span class="admin-reply-text">Admin reply</span> 
						<span class="admin-reply-sch">24-8-2017 | 12:00pm</span>
						<p class="history">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>

					</div>
				</div>
				<div class="admin-text">
					<div class="admin-reply-Heading">
						<span class="admin-reply-text">Admin reply</span> 
						<span class="admin-reply-sch">24-8-2017 | 12:00pm</span>
						<p class="history">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
				</div>
				<div class="admin-text">
					<div class="admin-reply-Heading">
						<span class="admin-reply-text">Admin reply</span> 
						<span class="admin-reply-sch">24-8-2017 | 12:00pm</span>
						<p class="history">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
					</div>
				</div>
			</div>
	</div>  -->
<!-- late-night out-page accordion end-->

</div>





		</div>


	
		</div>
		<!-- right panel start here -->
		
@endsection

@push('scripts')
	
<script type="text/javascript">

$(".accordion-outer,.History-accordion-outer").click(function(){
	$(this).next(".panel").slideToggle();
});

$(".close").click(function(){
	$(".create-complaint-popup").fadeOut();
});

function create_complaint(){

$(".create-complaint-popup").fadeIn();

}
	
$('#demo-2,#demo-3,#demo-4').fdatepicker();

	
$(".input-div .input-text").on('click keypress',function(){
	$(this).parent("label").addClass("active");
					
	$(this).blur(function(){
		var getitemval=$(this).val();						
			if(getitemval==''){
				$(this).parent("label").removeClass("active");
			}
	
	});
	
});

</script>
@endpush