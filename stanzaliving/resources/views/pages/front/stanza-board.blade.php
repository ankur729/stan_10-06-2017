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
			<div class="table-body">
				<h4 class="heading-title">Stanza Upcoming Event</h4>
				<ul class="table-body-structure">
					<li class="table  list-item">
						<div class="coloum-div col-md-15"><span class="title">Event Name</span></div>
						<div class="coloum-div col-md-15"><span class="title">Event Date</span></div>
						<div class="coloum-div col-md-15"><span class="title">Event Time</span></div>
						<div class="coloum-div col-md-40"><span class="title">Event Description</span></div>
						<div class="coloum-div col-md-15"><span class="title">Further Details</span></div>
					</li>
					<li class="table  list-item">
						<div class="coloum-div col-md-15"><span class="event-list">Event Name</span></div>
						<div class="coloum-div col-md-15"><span class="event-list">23-sep-2017</span></div>
						<div class="coloum-div col-md-15"><span class="event-list">09:00pm</span></div>
						<div class="coloum-div col-md-40"><p class="table-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, </p></div>
						<div class="coloum-div col-md-15"><span class="download"><input type="button" class="button" value="Download"></span></div>
					</li>
					<li class="table  list-item">
						<div class="coloum-div col-md-15"><span class="event-list">Event Name</span></div>
						<div class="coloum-div col-md-15"><span class="event-list">23-sep-2017</span></div>
						<div class="coloum-div col-md-15"><span class="event-list">09:00pm</span></div>
						<div class="coloum-div col-md-40"><p class="table-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, </p></div>
						<div class="coloum-div col-md-15"><span class="download"><input type="button" class="button" value="Download"></span></div>
					</li>
				</ul>

				<div class="topic-of-discussion">
					<textarea class="text-area"  rows="4" cols="50" placeholder="Topic Of Discussion.."></textarea>
				
				</div>
				 <label class="input-video">Video-Link</label><br> 
					<input type="link"  value="" size="40" class="input-link" >
						<button name="" class="submit-btn  pull-right" type="submit">Submit</button>
				</div>

			</div>
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
