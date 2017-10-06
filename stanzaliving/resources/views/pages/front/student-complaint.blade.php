<?php 
$body_class ="";
$meta_title ="Stanza Living : My Account";
$meta_keyword ="Stanza Living,Premium student";
$meta_description ="Premium student accommodation in India - move over PGs and hostels!";



//print_r($complaintdata);die;

?>


@extends('layouts.master.front.index')

@section('styles')

<link href="{{ URL::asset('front/css/timestyle.css') }}" rel="stylesheet">
<link href="{{ URL::asset('front/css/timepicki.css') }}" rel="stylesheet">

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
				<div class="col-md-50 border-right left">
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




<div class="flash-message">
@if(Session::has('message'))
<div class="alert-box success" id="successMessage">
  <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
</div>
@endif
</div>
  
  
<div class="container">
		<div class="work-body">
		
		
	   @if(Session::has('message'))
		<div class="successmsg" id="successMessage">
		<p class="alert {{ Session::get('alert-class', 'alertsuccess') }}">{{ Session::get('message') }}</p>
		</div>
		@endif
		
		
			<!-- complaint box start here -->
			<!--<form name="complaintform" id="complaintform" method="post" action="{{ url('/student-complaint/addcomplaint') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			{{ csrf_field() }}
			-->
			
			{!! Form::open(['url' => '/student-complaint/addcomplaint','method' => 'post','files'=>true]) !!}	

			
			{!! csrf_field() !!}

			<div class="complaint-box">
				<h4 class="title">New Complaint</h4>
				<div class="coloum-div">
					<input type="text" name="complaint_subject" id="complaint_subject" placeholder="Problem subject" class="input-box" value="{{ old('complaint_subject') }}">
					@if ($errors->has('complaint_subject'))
					<div class="validationerror">{{ $errors->first('complaint_subject') }}</div>
					@endif
					<span class="instruction-msg">Upto 100 Characters is valid for the subject.</span>
				</div>
				
				
				
				
		 
		 
		 
				<div class="coloum-div">
					<div class="col-md-50 left border-right">
					
					{!! Form::select('complaint_category', $mycat,  null,['id'=>'complaint_category', 'class' => 'select-option', 'placeholder' => 'Category Name']) !!}

					@if($errors->has('complaint_category'))
					<div class="validationerror">{{ $errors->first('complaint_category') }}</div>
					@endif		
					</div>
				
					<div class="col-md-50 left padding-left-10px">
					
					{!! Form::select('complaint_subcategory', $mysubcat,  null,['id'=>'complaint_subcategory', 'class' => 'select-option', 'placeholder' => 'Subcategory Name']) !!}

					@if($errors->has('complaint_subcategory'))
					<div class="validationerror">{{ $errors->first('complaint_subcategory') }}</div>
					@endif		
					</div>				
					
				</div>	
				
				
				<div class="coloum-div">
				
				<div class="col-md-50 left border-right">					
					
					{!!     Form::text('complaint_time', null,  ['id' => 'timepicker3','data-timepicki-tim' => '7','data-timepicki-mini' => '13','data-timepicki-meri' => 'PM','placeholder' => 'Time']) !!}

					@if($errors->has('complaint_time'))
					<div class="validationerror">{{ $errors->first('complaint_time') }}</div>
					@endif		
					</div>					
					
					<div class="col-md-50 left padding-left-10px relative">
						<span class="info">Please upload photo reguarding this complaints</span>
						<input type="file" id="imgInp" name="complaint_img" class="input-file">
						<span class="mandatory">*</span>
					@if($errors->has('complaint_img'))
					<div class="validationerror">{{ $errors->first('complaint_img') }}</div>
					@endif
						
					</div>
				</div>
				
				<div class="coloum-div">
			
				{!! Form::textarea('complaint_message', null,  ['class' => 'textarea', 'placeholder' => 'Your Message']) !!}
				
					@if($errors->has('complaint_message'))
					<div class="validationerror">{{ $errors->first('complaint_message') }}</div>
					@endif
					<input type="submit" name="complaint_submit" value="Submit" class="submit-btn">
				</div>
			</div>
			{!! Form::close() !!}
			<!-- complaint box end here -->


			<!-- complaint panel start here -->
			<div class="complaint-panel">
				<h4 class="section-name">Complaints History</h4>	
				<ul class="problem-data">
					<li class="problem-list">
						<div class="toggle_probs"></div>
					</li>
				</ul>
			</div>
			<!-- complaint panel end here -->


			<!-- accordion section filter-->
  <div class="accordion-top">
  <form name="filter_from" id="filter_from" action="{{ url('/student-complaint/') }}" method="get">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  {{ csrf_field() }}
			
  	<div class="col-md-10  filter  filter-space">Filter By</div>
  	<div class="col-md-20 left filter-space">
  		{!! Form::select('complaint_cat', $mycat,  null,['id'=>'complaint_cat','class' => 'select-option', 'placeholder' => 'Select your category']) !!}

					@if($errors->has('complaint_cat'))
					<div class="validationerror">{{ $errors->first('complaint_cat') }}</div>
					@endif	
  	</div>
	
	
  	<div class="col-md-20 left filter-space">
  		<select name="complaint_subcat" id="complaint_subcat" class="select-option">
  			<option>Urgency of complaint</option>
  			<?php foreach ($compsubcat as $key => $value){ ?>
			<option value="<?=$mysubcat[$value->id]?>"><?=$value->name;?></option>
			<?php } ?>
  		</select>
  	</div>
  	<div class="col-md-20 left">
	{!! Form::select('c_status', array('Open'=>'Open', 'Pending'=>'Pending','Closed'=>'Closed'), null,  ['class' => 'select-option','placeholder' => 'Select Status']) !!}
	
  	</div>
	
	<div class="col-md-10 left">
  		<input type="submit" name="apply_filter" id="apply_filter" value="Apply" class="apply-button">
  	</div>
 </form>
<!--  accordian starts -->

<?php foreach($complaintdata as $complaintinfo){?>
			<div class="complaint-accordion">
					<div class="accordion-outer">
						<div class="col-md-30  border-right  toggle-bar">
							<div class="subject-problem">
								<i class="fa fa-star" aria-hidden="true"></i>
								<span class="subject-text"><?=$complaintinfo['c_problem']?></span>
								<span class="admin-reply">Admin Reply</span>
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
							<p><?=$complaintinfo['c_details']?></p>
							</div>
						<div class="col-md-20 dated-section">
						<div class="time-section">
								<div class="left-time">
								<?=$complaintinfo['c_beg_date']?> | <?=$complaintinfo['c_time']?>
								</div>
						</div>
						<div class="Status">
							<?php 
							if($complaintinfo['c_status']=='Closed'){
							?>
							<span class="status-img"><img src="{{ URL::asset('front/images/assets/residences/icon/resolved-icon.png')}}"></span>
							<span class="status-info">Closed</span>						
							<?php }else{ ?>
							<span class="status-img"><img src="{{ URL::asset('front/images/assets/residences/icon/pending-icon.png')}}"></span>
							<span class="status-info">Pending</span>
							<?php } ?>
							
							
						</div>
						</div>
						
						
						
						
					</div>
					
					<?php if($complaintinfo['c_remarks']!=''){ ?>

						<div class="panel">
						  <p class="panel-content  student-border">
						  
						  <?php 
						  if($complaintinfo['c_remarks']!=''){
							echo $complaintinfo['c_remarks'];
						  }else{
							  echo "N/A";
						  }
						  ?>
						  </p>

						  	<div class="panel-text  ">
							<div class="admin-reply-breadcrum">
								<ul>
								<li class="admin-reply">Admin reply</li>
								<li class="admin-reply-text"><?=$complaintinfo['c_res_date'];?></li>								</ul>
							</div>
							<p class="border">
								<?php 
									  if($complaintinfo['c_reply']!=''){
										echo $complaintinfo['c_reply'];
									  }else{
										  echo "N/A";
									  }
								?> 
							</p>
						</div>
						
						</div>
						
					<?php } ?>

						
			</div>
<?php }?>
<!-- accordion section ends here -->

			<!--<div class="complaint-accordion">
					<div class="accordion-outer">
						<div class="col-md-30  border-right  toggle-bar">
							<div class="subject-problem">
								<i class="fa fa-star" aria-hidden="true"></i>
								<span class="subject-text">Subject of the Problem</span>
								<span class="admin-reply">2 admin Reply</span>
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
						<div class="col-md-20 dated-section">
						<div class="time-section">
								<div class="left-time">
								27-7-2017 | 11:30pm
								</div>
						</div>
						<div class="Status">
							<span class="status-img"><img src="{{ URL::asset('front/images/assets/residences/icon/resolved-icon.png')}}"></span>
							<span class="status-info">Resolved</span>
						</div>
						</div>
					</div>

						<div class="panel">
						  <p class="panel-content  student-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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

			</div>


						<div class="panel">
						  <p class="panel-content  student-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
						</div>-->

			</div>
<!-- accordion section ends here -->


<!-- accordion section -->

<?php /* ?>
			<a><div class="complaint-accordion">
					<div class="accordion-outer">
						<div class="col-md-30  border-right  toggle-bar">
							<div class="subject-problem">
							<i class="fa fa-star" aria-hidden="true"></i><span class="subject-text">Subject of the Problem</span>
							<span class="admin-reply">2 admin Reply</span>
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
						<div class="col-md-20  dated-section  toggle-bar">
							<div class="col-md-20 dated-section  toggle-bar">
						<div class="time-section">
								<div class="left-time">
								27-7-2017 | 11:30pm
								</div>
						</div>
						<div class="Status">
							<span class="status-img"><img src="{{ URL::asset('front/images/assets/residences/icon/attanded.png')}}"></span>
							<span class="status-info">To be attanded</span>
						</div>
						</div>
							<!-- <ul>
							<li>27-7-2017 | 11:30pm</li>
							<li><img src="{{ URL::asset('front/images/assets/residences/icon/attanded.png')}}') }}"><span>To be Attended</span></li>
						</ul> -->
						</div>
					</div>

						<div class="panel">
						  <p class="panel-content  student-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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

			</div><?php */ ?>



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

<script> 


$(document).ready(function(){
        setTimeout(function() {
          $('#successMessage').fadeOut('slow');
         // $('#errorMessage').fadeOut('slow');
        }, 4000); // <-- time in milliseconds
    });
</script>

<script>
$('#complaint_category').change(function(){
  var c_id=$(this).val();  
  $.ajax({
    type:'GET',
    cache: false,
    url:'findcomplaintsubcat',
    data:{c_id:c_id},     
    beforeSend:function(){   
    },
    success:function(data){	
    $('#complaint_subcategory').html(data);
    }
});
});
</script>

<script>
$('#complaint_cat').change(function(){
  var c_id=$(this).val();  
  $.ajax({
    type:'GET',
    cache: false,
    url:'findcomplaintsubcat',
    data:{c_id:c_id},     
    beforeSend:function(){   
    },
    success:function(data){	
    $('#complaint_subcat').html(data);
    }
});
});
</script>


@endpush