<?php
session_start();



$pmandatory_error='';
$pvalid_email_error='';
$pvalid_mobile_error='';
$pimage_issue_error='';

$state_arr=array(
'Andaman and Nicobar Islands',
'Andhra Pradesh',
'Arunachal Pradesh',
'Assam',
'Bihar',
'Chandigarh',
'Chhattisgarh',
'Dadra and Nagar Haveli',
'Daman and Diu',
'Delhi',
'Goa',
'Gujarat',
'Haryana',
'Himachal Pradesh',
'Jammu and Kashmir',
'Jharkhand',
'Karnataka',
'Kerala',
'Lakshadweep',
'Madhya Pradesh',
'Maharashtra',
'Manipur',
'Meghalaya',
'Mizoram',
'Nagaland',
'Odisha',
'Puducherry',
'Punjab',
'Rajasthan',
'Sikkim',
'Tamil Nadu',
'Tripura',
'Uttar Pradesh',
'Uttarakhand',
'West Bengal',
);
if(isset($_POST['preregisterform'])){
	
	extract($_POST);
	
	/*if(isset($_FILES['photo']['name']) && $_FILES['photo']['name']!=''){
			$ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
		
			$newfilename=time().'.'.$ext;
			move_uploaded_file($_FILES['photo']['tmp_name'],'./upload/'.$newfilename);
			$_SESSION['preregisterform']['photo']='./upload/'.$newfilename;
		}*/
	
	//print_r($_POST);
	if($applicant_name == '' ||$email == '' ||$phone == '' ||$nationality == '' ||$addline1 == '' ||$addline2 == '' ||$state == '' ||$city == '' ||$pin_code == '' || $parent_name == '' || $parent_email=='' || $parent_phone==''|| $terms=='' || $regulation=='' || $choose_house=='' || $type_of_occupancy==''){
	
		$pmandatory_error="*Field is required";
	
	}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$pvalid_email_error="*Please enter a valid email";
	
	}elseif(!is_numeric($phone)){
		$pvalid_mobile_error='Please enter a valid mobile number';
	}elseif(strlen($phone)<10 || strlen($phone)>15){
		$pvalid_mobile_error='Please enter a valid mobile number';
	}elseif(!filter_var($parent_email,FILTER_VALIDATE_EMAIL)){
		$parent_valid_email_error="*Please enter a valid email";
	
	}elseif(!is_numeric($parent_phone)){
		$parent_valid_mobile_error='Please enter a valid mobile number';
	}elseif(strlen($parent_phone)<10 || strlen($phone)>15){
		$parent_valid_mobile_error='Please enter a valid mobile number';
	}else{
	
		$_SESSION['preregisterform']=$_POST;
		
		$_SESSION['preregisterform']['amount']=5000;
		header('Location:paymentgateway.php');
	
	
	
	}
}else{
unset($_SESSION['preregisterform']);
}


$body_class ="pre-register-page";
$meta_title ="Stanza Living : Gallery";
$meta_keyword ="Stanza Living,Premium student";
$meta_description ="Premium student accommodation in India - move over PGs and hostels!";

?>




@extends('layouts.master.front.landing')

@section('styles')

<style>
.preregister_error{
color:red;
font-size:14px;
}
</style>

<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/plugin/calendar/css/1.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/plugin/tab/skeletabs.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/plugin/accord/src/ziehharmonika.css') }}" />

@endsection

@section('content')


<form method="post" action="pre-register/save" enctype="multipart/form-data">
<div class="container">
	<div class="section-1">
		<div class="section-head">
			<h2 class="title">Booking Request Form </h2>
		</div>

		<div class="benefits">
			<h4 class="title">benefits</h4>
			<ul class="benefits-list">
				<li class="list"><span class="text">We have limited seats available at all our hostels and on first come first serve basis. By pre-registering, you will automatically move into the priority list.</span></li>

				<li class="list"><span class="text">Your application will be processed faster than a general enquiry. Save yourself the worry of your accommodation and just concentrate on your college admission process.</span></li>
			</ul>
		</div>

		<div class="form-part">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="row">
				<div class="form-line">
					<span class="heading">Personal Information </span>
					<div class="col-md-25  padding-right-10px  left">
						<span class="label">applicant name</span>
						<div class="input-div">
							<input type="text" name="applicant_name" class="input-box" placeholder="applicant name" value="<?php echo @$_POST['applicant_name'];?>">
							<div class="preregister_error"><?php echo @$_POST['applicant_name']==''?$pmandatory_error:'';?></div>
						</div>
					</div>
					<div class="col-md-25  padding-right-10px left">
						<span class="label">email</span>
						<div class="input-div">
							<input type="text" name="email" class="input-box" placeholder="email" value="<?php echo @$_POST['email'];?>">
							<div class="preregister_error"><?php echo @$_POST['email']==''?$pmandatory_error:'';?><?php echo $pvalid_email_error;?></div>
						</div>
					</div>

					<div class="col-md-25  padding-right-10px  left">
						<span class="label">phone</span>
						<div class="input-div">
							<input type="text" name="phone" class="input-box" placeholder="phone" value="<?php echo @$_POST['phone'];?>">
							<div class="preregister_error"><?php echo @$_POST['phone']==''?$pmandatory_error:'';?><?php echo $pvalid_mobile_error;?></div>
						</div>
					</div>
					<div class="col-md-25 left">
						<span class="label">nationality</span>
						<div class="input-div">
							<input type="text" name="nationality" class="input-box" placeholder="nationality" value="<?php echo @$_POST['nationality'];?>">
							<div class="preregister_error"><?php echo @$_POST['nationality']==''?$pmandatory_error:'';?></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="form-line">
					<span class="heading">Parent’s / Guardian’s Information</span>
					<div class="col-md-25  padding-right-10px  left">
						<span class="label">Parent’s / Guardian’s Name</span>
						<div class="input-div">
							<input type="text" name="parent_name" class="input-box" placeholder="Parent's/Guardian's Name" value="<?php echo @$_POST['parent_name'];?>">
							<div class="preregister_error"><?php echo @$_POST['parent_name']==''?$pmandatory_error:'';?></div>
						</div>
					</div>
					<div class="col-md-25  padding-right-10px left">
						<span class="label">Parent’s / Guardian’s Email</span>
						<div class="input-div">
							<input type="text" name="parent_email" class="input-box" placeholder="Parent's/Guardian's email" value="<?php echo @$_POST['parent_email'];?>">
							<div class="preregister_error"><?php echo @$_POST['parent_email']==''?$pmandatory_error:'';?><?php echo @$parent_valid_email_error;?></div>
						</div>
					</div>

					<div class="col-md-25  padding-right-10px  left">
						<span class="label">Parent’s / Guardian’s Phone Number</span>
						<div class="input-div">
							<input type="text" name="parent_phone" class="input-box" placeholder="Parent's/Guardian's phone" value="<?php echo @$_POST['parent_phone'];?>">
							<div class="preregister_error"><?php echo @$_POST['parent_phone']==''?$pmandatory_error:'';?><?php echo @$parent_valid_mobile_error;?></div>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="form-line">
					<span class="heading">Residence of Choice</span>
					<div class="col-md-25  padding-right-10px  left">
						<span class="label">Choose House</span>
						<div class="input-div">
							<select name="choose_house" class="input-box">

							@foreach($myhostels as $hostel)
							<option value="{{$hostel->id}}">{{ $hostel->name }}</option>
							@endforeach
							</select>
							<div class="preregister_error"><?php echo @$_POST['choose_house']==''?$pmandatory_error:'';?></div>
						</div>
					</div>
					<div class="col-md-25  padding-right-10px  left">
						<span class="label">Type of Occupancy</span>
						<div class="input-div">
							<select name="type_of_occupancy" class="input-box">
							<option value="">Type of Occupancy</option>
							@foreach($myroomtypes as $roomtype)
							<option value="{{$roomtype->id}}">{{ $roomtype->name }}</option>
							@endforeach
							</select>
							<div class="preregister_error"><?php echo @$_POST['type_of_occupancy']==''?$pmandatory_error:'';?></div>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="form-line">
					<span class="heading">current address</span>
					<div class="col-md-25  padding-right-10px  left">
						<span class="label">Line 1</span>
						<div class="input-div">
							<input type="text" name="addline1" class="input-box" placeholder="Line 1" value="<?php echo @$_POST['addline1'];?>">
							<div class="preregister_error"><?php echo @$_POST['addline1']==''?$pmandatory_error:'';?></div>
						</div>
					</div>
					<div class="col-md-25 padding-right-10px left">
						<span class="label">Line 2</span>
						<div class="input-div">
							<input type="text" name="addline2" class="input-box" placeholder="Line 2" value="<?php echo @$_POST['addline2'];?>">
							<div class="preregister_error"><?php echo @$_POST['addline2']==''?$pmandatory_error:'';?></div>
						</div>
					</div>

					<div class="col-md-25  padding-right-10px  left">
						<span class="label">state</span>
						<div class="input-div">
						<select name="state" id="state" class="input-box">
						<option value="">select state</option>
						@foreach($mystates as $state)
							<option value="{{$state->id}}">{{ $state->name }}</option>
							@endforeach
						</select>
							<div class="preregister_error"><?php echo @$_POST['state']==''?$pmandatory_error:'';?></div>
						</div>
					</div>
					<div class="col-md-25 left">
						<span class="label">city</span>
						<div class="input-div">
		  <select class="input-box" name="s_city" id="cities">

                   </select>
							<div class="preregister_error"><?php echo @$_POST['city']==''?$pmandatory_error:'';?></div>
						</div>
					</div>
					<div class="row">
				<div class="form-line">
					<div class="col-md-25 padding-right-10px left">
						<span class="label">pin code</span>
						<div class="input-div">
							<input type="text" name="pin_code" class="input-box" placeholder="pin code" value="<?php echo @$_POST['pin_code'];?>">
							<div class="preregister_error"><?php echo @$_POST['pin_code']==''?$pmandatory_error:'';?></div>
						</div>
					</div>
				</div>
				</div>
				</div>
			</div>
			
			<div class="row">
				<div class="form-line">
					<label class="condition-check">
						<input type="checkbox" name="terms" class="checkbox" <?php if(@$_POST['terms']=='on'){echo "checked";}?>>
						please agree with terms and conditions*
					</label>
					<div class="preregister_error"><?php echo @$_POST['terms']==''?$pmandatory_error:'';?></div>
					<label class="condition-check">
						<input type="checkbox" name="regulation" class="checkbox" <?php if(@$_POST['regulation']=='on'){echo "checked";}?>>
						i agree to the rules & regulations
					</label>
					<div class="preregister_error"><?php echo @$_POST['regulation']==''?$pmandatory_error:'';?></div>
				</div>

				<div class="row">
					<div class="input-div center">
						<input type="submit" name="preregisterform" class="submit-btn">
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
</form>


@endsection

@push('scripts')

<script src="{{ URL::asset('landing/plugin/calendar/js/1.js') }}"></script>
<script src="{{ URL::asset('landing/plugin/tab/skeletabs.min.js') }}"></script>
<script src="{{ URL::asset('landing/plugin/accord/src/ziehharmonika.js') }}"></script>
<script type="text/javascript">
	

$('#state').change(function(){

    var s_id=$(this).val();
    console.log(s_id);
  $.ajax({
    type:'GET',
    cache: false,
    url:'admin/student/findcities',
    data:{s_id:s_id},
     
    beforeSend:function(){
 
    },
    success:function(data){

    	console.log(data);
 	//alert(data);	
    $('#cities').html(data);


    }
});
});


$('#dp2').fdatepicker({
	closeButton: false
});
	
$("#skltbsResponsive").skeletabs({
	equalHeights: true,
	animation: "fade-scale",
	// autoplay: true,
    autoplayInterval: 4500,
responsive: {
breakpoint: 800,
headingTagName: "h4"
}
});

$('#dp2').fdatepicker({
	closeButton: false
});
$('#dp1').fdatepicker({
	closeButton: false
});

$(document).ready(function() {
	$('.ziehharmonika').ziehharmonika({
		collapsible: true,
		// prefix: '★'
	});
});

</script>
<script>
		function sverror(){
		
			if(document.sv.name.value==''){
				alert('please enter your name');
				document.sv.name.focus();
				return false;
			}
			
			if(document.sv.email.value==''){
				alert('please enter your email');
				document.sv.email.focus();
				return false;
			}
			
			if(document.sv.phone.value==''){
				alert('please enter your mobile');
				document.sv.phone.focus();
				return false;
			}
			
			if(document.sv.phone.length<10 || document.sv.phone.length>15){
				alert('please enter your mobile');
				document.sv.phone.focus();
				return false;
			}
			
			if(document.sv.selectdate.value==''){
				alert('please enter your subject');
				document.sv.selectdate.focus();
				return false;
			}
			
			if(document.sv.selecttime.value==''){
				alert('please enter your prefered time slot');
				document.sv.selecttime.focus();
				return false;
			}
			
			return true;
		}
		
		function bnerror(){
			
			if(document.bn.mdate.value==''){
				alert('please enter your date');
				document.bn.mdate.focus();
				return false;
			}
			
			if(document.bn.name.value==''){
				alert('please enter your name');
				document.sv.name.focus();
				return false;
			}
			
			if(document.bn.email.value==''){
				alert('please enter your email');
				document.bn.email.focus();
				return false;
			}
			
			if(document.bn.phone.value==''){
				alert('please enter your mobile');
				document.bn.phone.focus();
				return false;
			}

			if(document.bn.university.value==''){
				alert('please fill your university');
				document.bn.university.focus();
				return false;
			}
			
			if(document.bn.phone.length<10 || document.bn.phone.length>15){
				alert('please enter your mobile');
				document.bn.phone.focus();
				return false;
			}
			
			return true;
		}
		
		function validateForm(email) {
			var x = email;
			var atpos = x.indexOf("@");
			var dotpos = x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
				return false;
			}else{
				return true;
			}
		}
		

		
</script>

@endpush



