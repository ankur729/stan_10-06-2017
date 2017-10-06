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

@endsection

@section('content')



<div class="create-complaint-popup">
	<div class="design-box">
		<div class="complaint-box">
			<h4 class="title">New Complaint <span class="close"><img src="{{ URL::asset('front/images/icon/close.png')}}"></span></h4>
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
			
			<!-- complaint box start here -->
			<div class="complaint-box">
				<h4 class="title">Vox Populi</h4>
				<div class="coloum-div">
					<input type="text" name="" placeholder="Topic of discussion" class="input-box">
					<span class="instruction-msg">Upto 100 Characters is valid for the subject.</span>
				</div>
				<div class="coloum-div">
					<div class="col-md-50 left border-right">
						<select class="select-option">
							<option>Select your category</option>
							<option>Stanza Social Ideas</option>
							<option>Stanza Springboard Ideas</option>
							<option>Student Referrals</option>
							<option>Guests Visiting</option>
							<option>Incident Reporting</option>
							<option>Improvement Suggestion</option>
						</select>
					</div>
					<div class="col-md-50 left padding-left-10px">
						<select class="select-option">
							<option>Select your sub category</option>
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
				</div>
				<div class="coloum-div">
					<div class="left col-md-50 border-right">
						<!-- <div class="col-md-70 border-right left">
							<select class="select-option">
								<option>Urgency of complaint </option>
								<option>Emergency</option>
								<option>Regular </option>
							</select>
						</div> -->
						<div class="col-md-70 left padding-left-10px">
							<input type="text" value="" id="demo-2" placeholder="Date of problem" class="input-box">
						</div>
					</div>
					<div class="col-md-50 left padding-left-10px relative">
						<span class="info">Please upload your Id Proof</span>
						<input type="file" name="" class="input-file">
						<!-- <span class="vox-mandatory">*</span> -->
					</div>
				</div>


				<!-- custom html -->
				<div class="coloum-div">
					<div class="left col-md-50 border-right">

						<div class="col-md-70 left padding-left-10px">
							<input type="text" value="" id="demo-2" placeholder="Person Name" class="input-box">
						</div>
					</div>
					<div class="col-md-50 left padding-left-10px relative">
						<input type="Number " name=""  class="contact-info" placeholder="Person Contact" >
					</div>
				</div>
				<!-- custom html -->

				<div class="coloum-div">
					<textarea class="textarea" placeholder="We are listening ! Tell us more about the above topic which you want to discuss with us"></textarea>
					<button type="submit" name="" class="submit-btn">Submit</button>
				</div>
			</div>
			<!-- complaint box end here -->


			<!-- complaint panel start here -->
			<div class="complaint-panel">
				<h4 class="section-name">Topics List</h4>	
				<ul class="problem-data">
					<li class="problem-list">
						<div class="toggle_probs"></div>
					</li>
				</ul>
			</div>
			<!-- complaint panel end here -->


			<!-- accordion section filter-->
  <div class="accordion-top">
  	<div class="col-md-20  filter  filter-space">Filter By</div>
  	<div class="col-md-30 left filter-space">
  		<select class="select-option">
			<option>Select your category</option>
			<option>Stanza Social Ideas</option>
			<option>Stanza Springboard Ideas</option>
			<option>Student Referrals</option>
			<option>Guests Visiting</option>
			<option>Incident Reporting</option>
			<option>Improvement Suggestion</option>
		</select>
  	</div>
<!--   	<div class="col-md-20 left filter-space">
  		<select class="select-option">
  			<option>Urgency of complaint</option>
  			<option>Emergency</option>
  			<option>Regular</option>
  		</select>
  	</div> -->
  	<div class="col-md-30 left">
  		<select class="select-option">
  			<option>Select Status</option>
  			<option>Successful</option>
  			<option>Not Successful</option>
  		</select>
  	</div>
 
<!--  accordian starts -->
			<div class="complaint-accordion">
					<div class="accordion-outer">
						<div class="col-md-30  border-right  toggle-bar">
							<div class="span-left">
								<i class="fa fa-star" aria-hidden="true"></i><span class="subject-text">Subject of the Problem</span><span class="admin-reply">2 admin Reply</span>
							</div>

						 	<div class="accordion-list">
						 	<ul>
						 		<li>For:</li>
						 		<li>Repair & Maintance<i class="fa fa-angle-right" aria-hidden="true"></i></li>
						 		<li>Sub Category for complaints</li>

						 	</ul>
						 </div>
						</div>
							<div class="col-md-55 complaint-text  border-right toggle-bar">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						<div class="col-md-20 dated-section  toggle-bar">
							<div class="right-status">
								<span class="">27-7-2017| 11:30pm</span>
							</div>
							<div class="right-info">
								<span class="status-img"><img src="{{ URL::asset('front/images/assets/residences/icon/successful.png')}}">
								Successful
								</span>
							</div>
						<!-- <ul>
							<li>27-7-2017</li>
							<li>11:30pm</li>
							<li><img src="{{ URL::asset('front/images/assets/residences/icon/successful.png')}}"><span>Successful</span></li>
						</ul> -->
						</div>
					</div>

						<div class="panel">
						  <p class="panel-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						  </p>
						<!--   <div class="border-full"></div> -->
						  	<div class="panel-text  ">
							<div class="admin-reply-breadcrum">
								<ul>
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>								</ul>
							</div>
							<p class="border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						<div class="panel-text ">
							<div class="admin-reply-breadcrum">
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>
							</div>
							<p class="border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						<div class="panel-text  ">
							<div class="admin-reply-breadcrum">
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>
							</div>
							<p class="border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						</div>

			</div>
<!-- accordion section ends here -->



<!-- accordion section -->
			<div class="complaint-accordion">
					<div class="accordion-outer">
						<div class="col-md-30  border-right  toggle-bar">
							<div class="span-left">
								<i class="fa fa-star" aria-hidden="true"></i><span class="subject-text">Subject of the Problem</span><span class="admin-reply">2 admin Reply</span>
							</div>

						 	<div class="accordion-list">
						 	<ul>
						 		<li>For:</li>
						 		<li>Repair & Maintance<i class="fa fa-angle-right" aria-hidden="true"></i></li>
						 		<li>Sub Category for complaints</li>

						 	</ul>
						 </div>
						</div>
							<div class="col-md-55 complaint-text  border-right toggle-bar">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						<div class="col-md-20 dated-section  toggle-bar">
							<div class="right-status">
								<span class="">27-7-2017| 11:30pm</span>
							</div>
							<div class="right-info">
								<span class="status-img"><img src="{{ URL::asset('front/images/assets/residences/icon/successful.png')}}">
								Successful
								</span>
							</div>
						<!-- <ul>
							<li>27-7-2017</li>
							<li>11:30pm</li>
							<li><img src="{{ URL::asset('front/images/assets/residences/icon/successful.png')}}"><span>Successful</span></li>
						</ul> -->
						</div>
					</div>

						<div class="panel">
						  <p class="panel-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						  </p>
						<!--   <div class="border-full"></div> -->
						  	<div class="panel-text  ">
							<div class="admin-reply-breadcrum">
								<ul>
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>								</ul>
							</div>
							<p class="border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						<div class="panel-text ">
							<div class="admin-reply-breadcrum">
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>
							</div>
							<p class="border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						<div class="panel-text  ">
							<div class="admin-reply-breadcrum">
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>
							</div>
							<p class="border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						</div>

			</div>
<!-- accordion section ends here -->


<!-- accordion section -->
			<div class="complaint-accordion">
					<div class="accordion-outer">
						<div class="col-md-30  border-right  toggle-bar">
							<div class="span-left">
								<i class="fa fa-star" aria-hidden="true"></i><span class="subject-text">Subject of the Problem</span><span class="admin-reply">2 admin Reply</span>
							</div>

						 	<div class="accordion-list">
						 	<ul>
						 		<li>For:</li>
						 		<li>Repair & Maintance<i class="fa fa-angle-right" aria-hidden="true"></i></li>
						 		<li>Sub Category for complaints</li>

						 	</ul>
						 </div>
						</div>
							<div class="col-md-55 complaint-text  border-right toggle-bar">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						<div class="col-md-20 dated-section  toggle-bar">
							<div class="right-status">
								<span class="">27-7-2017| 11:30pm</span>
							</div>
							<div class="right-info">
								<span class="status-img"><img src="{{ URL::asset('front/images/assets/residences/icon/unsuccesful.png')}}">
								Successful
								</span>
							</div>
						<!-- <ul>
							<li>27-7-2017</li>
							<li>11:30pm</li>
							<li><img src="{{ URL::asset('front/images/assets/residences/icon/successful.png')}}"><span>Successful</span></li>
						</ul> -->
						</div>
					</div>

						<div class="panel">
						  <p class="panel-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						  </p>
						<!--   <div class="border-full"></div> -->
						  	<div class="panel-text  ">
							<div class="admin-reply-breadcrum">
								<ul>
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>								</ul>
							</div>
							<p class="border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						<div class="panel-text ">
							<div class="admin-reply-breadcrum">
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>
							</div>
							<p class="border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						<div class="panel-text  ">
							<div class="admin-reply-breadcrum">
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>
							</div>
							<p class="border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						</div>

			</div>
<!-- accordion section ends here -->

<div class="complaint-accordion">
					<div class="accordion-outer">
						<div class="col-md-30  border-right  toggle-bar">
							<div class="span-left">
								<i class="fa fa-star" aria-hidden="true"></i><span class="subject-text">Subject of the Problem</span><span class="admin-reply">2 admin Reply</span>
							</div>

						 	<div class="accordion-list">
						 	<ul>
						 		<li>For:</li>
						 		<li>Repair & Maintance<i class="fa fa-angle-right" aria-hidden="true"></i></li>
						 		<li>Sub Category for complaints</li>

						 	</ul>
						 </div>
						</div>
							<div class="col-md-55 complaint-text  border-right toggle-bar">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						<div class="col-md-20 dated-section  toggle-bar">
							<div class="right-status">
								<span class="">27-7-2017| 11:30pm</span>
							</div>
							<div class="right-info">
								<span class="status-img"><img src="{{ URL::asset('front/images/assets/residences/icon/successful.png')}}">
								Successful
								</span>
							</div>
						<!-- <ul>
							<li>27-7-2017</li>
							<li>11:30pm</li>
							<li><img src="{{ URL::asset('front/images/assets/residences/icon/successful.png')}}') }}"><span>Successful</span></li>
						</ul> -->
						</div>
					</div>

						<div class="panel">
						  <p class="panel-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						  </p>
						<!--   <div class="border-full"></div> -->
						  	<div class="panel-text  ">
							<div class="admin-reply-breadcrum">
								<ul>
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>								</ul>
							</div>
							<p class="border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						<div class="panel-text ">
							<div class="admin-reply-breadcrum">
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>
							</div>
							<p class="border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						<div class="panel-text  ">
							<div class="admin-reply-breadcrum">
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>
							</div>
							<p class="border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
						</div>

			</div>


		</div>


	
		</div>
		<!-- right panel start here -->
	</div>

	
@endsection

@push('scripts')
	
<script type="text/javascript">


$(".accordion-outer").click(function(){
	$(this).next(".panel").slideToggle();
});

$(".close").click(function(){
	$(".create-complaint-popup").fadeOut();
});

function create_complaint(){

$(".create-complaint-popup").fadeIn();

}
	
$('#demo-2').fdatepicker();

	
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