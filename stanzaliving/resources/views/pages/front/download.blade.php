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
				<h4 class="title">Downloads</h4>
				<div class="coloum-div">
				<div class="col-md-50 left">
					<div class="download-document">
					<div class="col-md-10 left">
						<div class="Downloads-section">
							<ul>
								<li><a href="0#"><img src="{{ URL::asset('front/images/assets/residences/icon/pdf-icon.png')}}"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-90 left">
						<div class="Downloads-section">
							<ul>
								<li>House rules document</li>
							</ul>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-50 left">
					<div class="col-md-10 left">
						<div class="Downloads-section">
							<ul>
								<li><a href="0#"><img src="{{ URL::asset('front/images/assets/residences/icon/pdf-icon.png')}}"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-90 left">
						<div class="Downloads-section">
							<ul>
								<li>Scanned Copy of the signed agreement</li>
							</ul>
						</div>
					</div>
				</div>
				</div>
				<!-- <div class="coloum-div">
					<div class="col-md-10 left">
						<div class="Downloads-section">
							<ul>
								<li><a href="0#"><img src="{{ URL::asset('front/images/assets/residences/icon/pdf-icon.png')}}"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-90 left">
						<div class="Downloads-section">
							<ul>
								<li>Scanned Copy of the signed agreement</li>
							</ul>
						</div>
					</div>
				</div> -->
			</div>

				<!-- <div class="coloum-div">
					<input type="text" name="" placeholder="Problem subject" class="input-box">
					<span class="instruction-msg">Upto 100 Characters is valid for the subject.</span>
				</div>
				<div class="coloum-div">
					<div class="col-md-50 left border-right">
						<select class="select-option">
							<option>Select your category</option>
							<option>Repairs and Maintenance</option>
							<option>Housekeeping</option>
							<option>Security</option>
							<option>Personnel</option>
							<option>Food</option>
							<option>Laundry</option>
							<option>Stanza Social</option>
							<option>Stanza Springboard</option>
							<option>Other Stanzens</option>
							<option>Others</option>
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
						<div class="col-md-70 border-right left">
							<select class="select-option">
								<option>Urgency of complaint </option>
								<option>Emergency</option>
								<option>Regular </option>
							</select>
						</div>
						<div class="col-md-30 left padding-left-10px">
							<input type="text" value="" id="demo-2" placeholder="Date of problem" class="input-box">
						</div>
					</div>
					<div class="col-md-50 left padding-left-10px relative">
						<span class="info">Please upload photo reguarding this complaints</span>
						<input type="file" name="" class="input-file">
					</div>
				</div>
				<div class="coloum-div">
					<textarea class="textarea" placeholder="Type your complaint details"></textarea>
					<input type="submit" name="" class="submit-btn">
				</div>
			</div>
			<!-- complaint box end here -->


			<!-- complaint panel start here -->
		<!-- 	<div class="complaint-panel">
				<h4 class="section-name">Complaints History</h4>	
				<ul class="problem-data">
					<li class="problem-list">
						<div class="toggle_probs"></div>
					</li>
				</ul>
			</div> -->
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
  	</div> -->
  	<!-- <div class="col-md-20 left filter-space">
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
  			<option>To be attanded</option>
  		</select>
  	</div> -->
 
<!--  accordian starts -->
			<!-- <div class="complaint-accordion">
					<div class="accordion-outer">
						<div class="col-md-30  border-right  toggle-bar">
							<i class="fa fa-star" aria-hidden="true"></i><span class="subject-text">Subject of the Problem</span><span class="admin-reply">2 admin Reply</span>
						 <div class="accordion-list">
						 	<ul>
						 		<li>For:</li>
						 		<li>Repair & Maintance<i class="fa fa-angle-right" aria-hidden="true"></i></li>
						 		<li>Sub Category for complaints</li>

						 	</ul>
						 </div>
						</div>
							<div class="col-md-60 complaint-text  border-right toggle-bar">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						<div class="col-md-20 dated-section  toggle-bar">
						<ul>
							<li>27-7-2017</li>
							<li>11:30pm</li>
							<li><img src="{{ URL::asset('front/images/assets/residences/icon/pending-icon.png')}}"><span>Pending</span></li>
						</ul>
						</div>
					</div>

						<div class="panel">
						  <p class="panel-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						  </p>
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

			</div> -->
<!-- accordion section ends here -->



<!-- accordion section -->
			<!-- <div class="complaint-accordion">
					<div class="accordion-outer">
						<div class="col-md-30  border-right  toggle-bar">
							<i class="fa fa-star" aria-hidden="true"></i><span class="subject-text">Subject of the Problem</span><span class="admin-reply">2 admin Reply</span>
						 <div class="accordion-list">
						 	<ul>
						 		<li>For:</li>
						 		<li>Repair & Maintance<i class="fa fa-angle-right" aria-hidden="true"></i></li>
						 		<li>Sub Category for complaints</li>

						 	</ul>
						 </div>
						</div>
							<div class="col-md-60 complaint-text  border-right toggle-bar">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						<div class="col-md-20 dated-section  toggle-bar">
						<ul>
							<li>27-7-2017</li>
							<li>11:30pm</li>
							<li><img src="{{ URL::asset('front/images/assets/residences/icon/resolved-icon.png')}}"><span>Resolved</span></li>
						</ul>
						</div>
					</div>

						<div class="panel">
						  <p class="panel-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						  </p>
						  	<div class="panel-text  ">
							<div class="admin-reply-breadcrum">
								<ul>
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>
								</ul>
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

			</div> -->
<!-- accordion section ends here -->


<!-- accordion section -->
			<!-- <a><div class="complaint-accordion">
					<div class="accordion-outer">
						<div class="col-md-30  border-right  toggle-bar">
							<i class="fa fa-star" aria-hidden="true"></i><span class="subject-text">Subject of the Problem</span>
							<span class="admin-reply">2 admin Reply</span>
						 <div class="accordion-list">
						 	<ul>
						 		<li>For:</li>
						 		<li>Repair & Maintance<i class="fa fa-angle-right" aria-hidden="true"></i></li>
						 		<li>Sub Category for complaints</li>

						 	</ul>
						 </div>
						</div>
							<div class="col-md-60 complaint-text  border-right toggle-bar">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						<div class="col-md-20  dated-section  toggle-bar">
							<ul>
							<li>27-7-2017</li>
							<li>11:30pm</li>
							<li><img src="{{ URL::asset('front/images/assets/residences/icon/attanded.png')}}') }}"><span>Attanded</span></li>
						</ul>
						</div>
					</div>

						<div class="panel">
						  <p class="panel-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						  </p>
						  	<div class="panel-text  ">
							<div class="admin-reply-breadcrum">
								<ul>
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text">24-8-2017 | 12:00pm</li>
								</ul>
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

			</div> </div> --> 
		
<!-- accordion section ends here -->


		</div>


	
		</div>
		<!-- right panel start here -->

		
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