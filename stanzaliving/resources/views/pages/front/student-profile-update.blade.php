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




	<div class="container">
		<div class="work-body">
		
		
		@if(Session::has('message'))
		<div class="successmsg" id="successMessage">
		<p class="alert {{ Session::get('alert-class', 'alertsuccess') }}">{{ Session::get('message') }}</p>
		</div>
		@endif
		
		{!! Form::open(['url' => '/student-profile-update/updateinfo','method' => 'post','files'=>true]) !!}
			
			
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			{{ csrf_field() }}
			
			<div class="widget-coloum student-profile-page">
				<div class="row">
					<div class="col-md-100 left">
						<div class="col-md-50 left  border-right">
						<h4 class="title">Personal Details</h4>
						<div class="student-profile-box">
							<ul class="detail-list">
							
								<li class="list">
									<span class="label">Photo</span>
									<div class="data">
									
									<?php if($student_data->s_image!=''){ ?>
									
									<span class="thumb">
									<img src="{{ URL::to('public/images/student/'.$student_data->s_image)  }}">
									</span>
									<?php }else{ ?>								
									<span class="thumb">
									<img src="{{ URL::asset('front/images/icon/profile.jpg') }}">
									</span>
									<?php } ?>	
									
									</div>
								</li>
								
								
								<li class="list">
									<span class="label">Stanza UID</span>
									<span class="data">SL-<?=$student_data->s_unique_id_no?></span>
								</li>
								<li class="list">
									<span class="label">First Name</span>
									<span class="data">
									<input type="text" name="s_firstname" id="s_firstname"  value="<?=$student_data->s_firstname?>" placeholder="First Name">
									@if ($errors->has('s_firstname'))
									<div class="validationerror">{{ $errors->first('s_firstname') }}</div>
									@endif
									</span>
								</li>
								<li class="list">
									<span class="label">Last Name</span>
									<span class="data"><input type="text" name="s_lastname" id="s_lastname"  value="<?=$student_data->s_lastname?>" placeholder="Last Name">
									@if ($errors->has('s_lastname'))
									<div class="validationerror">{{ $errors->first('s_lastname') }}</div>
									@endif
									</span>
									
								</li>
								<li class="list">
									<span class="label">ID Proof&nbsp;<span class="student-browse">*</span></span>
									<div class="data">
									<input type="file" name="s_idproof">
									
									<input type="text" name="student_idproof" id="student_idproof"  value="<?=$student_data->s_idproof?>">
									
									@if ($errors->has('s_idproof'))
									<div class="validationerror">{{ $errors->first('s_idproof') }}</div>
									@endif
									</div>
								</li>
								<li class="list">
									<span class="label">Guardian’s Name</span>
									<span class="data"><input type="text" name="s_parentname" id="s_parentname"  value="<?=$student_data->s_parentname?>"  placeholder="Guardian’s Name..">
									@if ($errors->has('s_parentname'))
									<div class="validationerror">{{ $errors->first('s_parentname') }}</div>
									@endif
									</span>
									
									<!-- <span class="data">Father Name</span> -->
								</li>
								<li class="list">
									<span class="label">Email ID</span>
									<span class="data"><input type="text" name="s_email" id="s_email"  value="<?=$student_data->s_email?>"  placeholder="Email ID.." readonly>
									@if ($errors->has('s_email'))
									<div class="validationerror">{{ $errors->first('s_email') }}</div>
									@endif
									</span>
								</li>
								<li class="list">
									<span class="label">Mobile Number</span>
									<span class="data"><input type="text" name="s_contact" id="s_contact"  value="<?=$student_data->s_contact?>"  placeholder="Mobile Number..">
									@if ($errors->has('s_contact'))
									<div class="validationerror">{{ $errors->first('s_contact') }}</div>
									@endif
									</span>
								</li>
								<li class="list">
									<span class="label">Date Of Birth</span>
									<span class="data"><input type="text" name="s_dob" id="datepicker" value="<?=$student_data->s_dob?>" class="span2"  placeholder="Date Of Birth..">
									@if ($errors->has('s_dob'))
									<div class="validationerror">{{ $errors->first('s_dob') }}</div>
									@endif
									</span>
								</li>
								<li class="list">
									<span class="label">Gender</span>
									<span class="data">
									<select name="s_gender" id="s_gender">
									<option value="1" <?php if($student_data->s_gender==1){echo "selected";}?>>Male</option>
									<option value="0"  <?php if($student_data->s_gender==0){echo "selected";}?>>Female</option>
									</select>	
									@if ($errors->has('s_gender'))
									<div class="validationerror">{{ $errors->first('s_gender') }}</div>
									@endif									
									</span>
								</li>
								<li class="list">
									<span class="label">Marital Status</span>
									<span class="data">
									<select name="s_marital_status" id="s_marital_status">
									<option value="0"  <?php if($student_data->s_marital_status==0){echo "selected";}?>>Unmarried</option>
									<option value="1" <?php if($student_data->s_marital_status==1){echo "selected";}?>>Married</option>
									<option value="2" <?php if($student_data->s_marital_status==2){echo "selected";}?>>Others</option>
									
									</select>
									@if ($errors->has('s_marital_status'))
									<div class="validationerror">{{ $errors->first('s_marital_status') }}</div>
									@endif									
									</span>
								</li>
					</ul>
					</div>
					</div>
					<div class="col-md-50 left  border-right">
						<h4 class="title">Collage Details</h4>
						<div class="student-profile-box">
							<ul class="detail-list">
								<li class="list">
							<span class="label">College of Study</span>
							<span class="data"><input type="text" name="s_college" id="s_college"  value="<?=$student_data->s_college?>"  placeholder="College of Study..">
								@if ($errors->has('s_college'))
								<div class="validationerror">{{ $errors->first('s_college') }}</div>
								@endif	
							</span>
						</li>
						<li class="list">
							<span class="label">Course of Study</span>
							<span class="data"><input type="text" name="s_course" id="s_course"  value="<?=$student_data->s_course?>"   placeholder="Course of Study..">
							@if ($errors->has('s_course'))
								<div class="validationerror">{{ $errors->first('s_course') }}</div>
								@endif	
							</span>
						</li>
						<li class="list">
							<span class="label">Year of study</span>
							<span class="data"><input type="text" name="s_year" id="s_year"  value="<?=$student_data->s_year?>"   placeholder="Year of study..">
							@if ($errors->has('s_year'))
								<div class="validationerror">{{ $errors->first('s_year') }}</div>
								@endif	
							</span>
						</li>
						
						<li class="list">
							<span class="label">Blood Group</span>
							<span class="data"><input type="text" name="s_bloodgroup" id="s_bloodgroup"  value="<?=$student_data->s_bloodgroup?>"   placeholder="Blood Group..">
							@if ($errors->has('s_bloodgroup'))
								<div class="validationerror">{{ $errors->first('s_bloodgroup') }}</div>
								@endif
							
							</span>
						</li>
						<li class="list">
							<span class="label">Date of Joining</span>
							<span class="data"><input type="text" name="s_joindate" id="s_joindate"  value="<?=$student_data->s_joindate?>"   placeholder="Date of Joining..">
							@if ($errors->has('s_joindate'))
								<div class="validationerror">{{ $errors->first('s_joindate') }}</div>
								@endif
							</span>
						</li>
					</ul>
					</div>
					</div>

				</div>
				<div class="col-md-100 left">
				<div class="col-md-33 left  border-add-right">
						<h4 class="title">Others Details</h4>
						<div class="student-profile-box">
							<ul class="detail-list">
								<li class="list">
									<span class="label">Blood Group</span>
									<span class="data"><input type="text" name="s_bloodgroup" id="s_bloodgroup"  value="<?=$student_data->s_bloodgroup?>"  placeholder="Blood Group..">
									@if ($errors->has('s_bloodgroup'))
									<div class="validationerror">{{ $errors->first('s_bloodgroup') }}</div>
								    @endif
									</span>
								</li>
								<li class="list">
									<span class="label">Reg. No :</span>
									<span class="data"><input type="text" name="s_regno" id="s_regno" value="<?=$student_data->s_regno?>" placeholder="Registered Number.."></span>
								</li>
								<li class="list">
									<label class="update-page">Any Medical History / Allergies</label><br>
										<textarea class="text" name="s_medicalhistory" id="s_medicalhistory" rows="4" cols="10" placeholder="Type medical History..."><?=$student_data->s_medicalhistory?></textarea>
									<!-- <input type="text" name="medical history"  placeholder="Any Medical History.."> -->
								</li>
					</ul>
					</div>
					</div>
						<div class="col-md-33 left  border-add-right">
						<h4 class="title">Address Details</h4>
						<div class="student-profile-box">
							<ul class="detail-list">
								<li class="list">
									<span class="label">Address</span>
									<span class="data"><input type="text" name="s_address" id="s_address"  value="<?=$student_data->s_address?>" placeholder="Address..">
									@if ($errors->has('s_address'))
									<div class="validationerror">{{ $errors->first('s_address') }}</div>
								    @endif
									</span>
								</li>
								<li class="list">
									<span class="label">Street</span>
									<span class="data"><input type="text" name="s_street" id="s_street"  value="<?=$student_data->s_street?>"  placeholder="Street..">
									@if ($errors->has('s_street'))
									<div class="validationerror">{{ $errors->first('s_street') }}</div>
								    @endif
									</span>
								</li>
								<li class="list">
									<span class="label">Landmark</span>
									<span class="data"><input type="text" name="s_landmark" id="s_landmark"  value="<?=$student_data->s_landmark?>"  placeholder="Landmark..">
									@if ($errors->has('s_landmark'))
									<div class="validationerror">{{ $errors->first('s_landmark') }}</div>
								    @endif
									</span>
								</li>
							<li class="list">
							<span class="label">Country</span>
							<span class="data">
							<select name="s_country" id="s_country">
							<option value="">Select Country</option>							
							<?php foreach($countries as $c){ ?>
							<option value="<?php echo $c->id;?>" <?php if($student_data->s_country==$c->id){echo "selected";}?>><?php echo $c->name;?></option>
							<?php } ?>						
							</select>
							@if ($errors->has('s_country'))
								<div class="validationerror">{{ $errors->first('s_country') }}</div>
								@endif
							</span>
						</li>
						
						<li class="list">
									<span class="label">State</span>
									<span class="data">
									<select name="s_state" id="s_state">
									<option value="">Select State</option>							
									<?php foreach($states as $st){ ?>
									<option value="<?php echo $st->id;?>" <?php if($student_data->s_state==$st->id){echo "selected";}?>><?php echo $st->name;?></option>
									<?php } ?>						
									</select>									
									@if ($errors->has('s_state'))
									<div class="validationerror">{{ $errors->first('s_state') }}</div>
								    @endif
									</span>
								</li>
								
								<li class="list">
									<span class="label">City</span>
									<span class="data">
									<select name="s_city" id="s_city">
									<option value="">Select City</option>							
									<?php foreach($cities as $ct){ ?>
									<option value="<?php echo $ct->id;?>" <?php if($student_data->s_city==$ct->id){echo "selected";}?>><?php echo $ct->name;?></option>
									<?php } ?>						
									</select>
									
									@if ($errors->has('s_city'))
									<div class="validationerror">{{ $errors->first('s_city') }}</div>
								    @endif
									</span>
								</li>
								
								
								<li class="list">
									<span class="label">Pin Code</span>
									<span class="data"><input type="text" name="s_pincode" id="s_pincode"  value="<?=$student_data->s_pincode?>"  placeholder="Pin Code..">
									@if ($errors->has('s_pincode'))
									<div class="validationerror">{{ $errors->first('s_pincode') }}</div>
								    @endif
									</span>
								</li>
					</ul>
					</div>
					</div>
					
					<div class="col-md-33 left  border-add-right">
						<h4 class="title">Emergency Contact Details</h4>
						<div class="student-profile-box">
							<ul class="detail-list">
								<li class="list">
									<span class="label">Name</span>
									<span class="data"><input type="text" name="s_emrg_name" id="s_emrg_name"  value="<?=$student_data->s_emrg_name?>"  placeholder="Name.."></span>
								</li>
								<li class="list">
									<span class="label">Address</span>
									<span class="data"><input type="text" name="s_emrg_address" id="s_emrg_address"  value="<?=$student_data->s_emrg_address?>"  placeholder="Address.."></span>
								</li>
								<li class="list">
									<span class="label">Email Id </span>
									<span class="data"><input type="text" name="s_emrg_email" id="s_emrg_email"  value="<?=$student_data->s_emrg_email?>"  placeholder="Email Id.."></span>
								</li>
								<li class="list">
									<span class="label">Phone Number</span>
									<span class="data"><input type="text" name="s_emrg_phone" id="s_emrg_phone"  value="<?=$student_data->s_emrg_phone?>"  placeholder="Phone Number.."></span>
								</li>
					</ul>
					</div>
					</div>
			
					
				</div>
				</div>
			</div>
		<div class="coloum-div">
			<input type="submit" name="savedata" class="submit-button  pull-right" value="Save">
		</div>
		
		{!! Form::close() !!}


		</div>			


  </div>

@endsection	
	
	
@push('scripts')
   
<script>

	$('#heelo').fdatepicker();

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



$('#s_country').change(function(){
  var c_id=$(this).val();  
  $.ajax({
    type:'GET',
    cache: false,
    url:'studentfindstates',
    data:{c_id:c_id},     
    beforeSend:function(){   
    },
    success:function(data){	
    $('#s_state').html(data);
    }
});
});

$('#s_state').change(function(){
    var s_id=$(this).val();   
  $.ajax({
    type:'GET',
    cache: false,
    url:'studentfindcities',
    data:{s_id:s_id},     
    beforeSend:function(){ 
    },
    success:function(data){ 
    $('#s_city').html(data);
    }
});
});

$('.fname').change(function(){
   if (! $(this).val().match('^[a-zA-Z]{3,16}$') ) {
          alert("Do not add spaces or special chars");
          $(this).val('');
          $(this).focus();
          return false;
      } 
      else if($(this).val()==''){
           alert("Please enter valid name.");
          $(this).val('');
          $(this).focus();
          return false;
      }

});

$('.lname').change(function(){
   if (! $(this).val().match('^[a-zA-Z]{3,16}$') ) {
          alert("Do not add spaces or special chars");
          $(this).val('');
          $(this).focus();
          return false;
      } 
      else if($(this).val()==''){
           alert("Please enter valid name.");
          $(this).val('');
          $(this).focus();
          return false;
      }

});

$('#s_contact').change(function(){
   var num=$(this).val();
   var len=num.length;
   if(isNaN(num) || parseInt(len)!=10)
   {
     alert("Please enter 10 digit mobile number.");
          $(this).val('');
          $(this).focus();
          return false;
   }

});

$('#s_pincode').change(function(){

    if (! $(this).val().match('^[0-9_\.]{6}$') ) {
          alert("Please enter 6 digit integer pincode.");
          $(this).val('');
          $(this).focus();
          return false;
      } 

});

$("#s_dob").datepicker({     
      dateFormat: "yy-mm-dd",
       yearRange: '1980:2017',
      numberOfMonths: 1,
      changeMonth: true,
        changeYear: true
    });
 $('#datepicker').change(function(){
  if(! $(this).val().match('^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$') )
  {
    alert('Invalid Date Format');
    $(this).val(' ');
    $(this).focus();
  }
});


</script>

@endpush