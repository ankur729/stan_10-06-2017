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
									<span class="label">ID Proof&nbsp;</span>
									<div class="data"><input type="file" name="s_idproof">
									<?php if($student_data->s_idproof!=''){ ?>
									<a onclick="window.open(&quot;{{ URL::to('public/images/student/'.$student_data->s_idproof)  }}&quot;,&quot;Image&quot;,&quot;width=600,height=600,0,status=0,&quot;);" href="#0">View</a>
									<?php } ?>	
									</div>
								</li>
								<li class="list">
									<span class="label">Guardian’s Name</span>
									<span class="data"><?=$student_data->s_parentname?></span>
								</li>
								<li class="list">
									<span class="label">Email ID</span>
									<span class="data"><?=$student_data->s_email?></span>
								</li>
								<li class="list">
									<span class="label">Mobile Number</span>
									<span class="data"><?=$student_data->s_contact?></span>
								</li>
								<li class="list">
									<span class="label">Date Of Birth</span>
									<span class="data"><?=$student_data->s_dob?></span>
								</li>
								<li class="list">
									<span class="label">Gender</span>
									<span class="data"><?=$student_data->s_gender?></span>
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
							<span class="data"><?=$student_data->s_college?></span>
						</li>
						<li class="list">
							<span class="label">Course of Study</span>
							<span class="data"><?=$student_data->s_course?></span>
						</li>
						<li class="list">
							<span class="label">Year of study</span>
							<span class="data"><?=$student_data->s_year?></span>
						</li>
						<li class="list">
							<span class="label">Nationality</span>
							<span class="data"><?=$student_data->s_nationality?></span>
						</li>
						<li class="list">
							<span class="label">Blood Group</span>
							<span class="data"><?=$student_data->s_bloodgroup?></span>
						</li>
						<li class="list">
							<span class="label">Date of Joining</span>
							<span class="data"><?=$student_data->s_joindate?></span>
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
									<span class="data"><?=$student_data->s_bloodgroup?></span>
								</li>
								<li class="list">
									<span class="label">Any Medical History / Allergies </span>
									<span class="data"> Name of the Allergy</span>
								</li>
								<li class="list">
									<span class="label">Registered Number Details for Late-Night/Night-Out<br> Requests</span>
									<span class="data">7838383838</span>
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
									<span class="data"><?=$student_data->s_address?></span>
								</li>
								<li class="list">
									<span class="label">Street</span>
									<span class="data"><?=$student_data->s_street?></span>
								</li>
								<li class="list">
									<span class="label">Landmark</span>
									<span class="data"> <?=$student_data->s_landmark?></span>
								</li>
								<li class="list">
									<span class="label">City</span>
									<span class="data"><?=$student_data->s_city?></span>
								</li>
								<li class="list">
									<span class="label">State</span>
									<span class="data"><?=$student_data->s_state?></span>
								</li>
								<li class="list">
									<span class="label">Country</span>
									<span class="data"><?=$student_data->s_country?></span>
								</li>
								<li class="list">
									<span class="label">Pin Code</span>
									<span class="data"><?=$student_data->s_pincode?></span>
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
									<span class="data"><?=$student_data->s_emrg_name?></span>
								</li>
								<li class="list">
									<span class="label">Address</span>
									<span class="data"><?=$student_data->s_emrg_address?></span>
								</li>
								<li class="list">
									<span class="label">Email Id </span>
									<span class="data"><?=$student_data->s_emrg_email?></span>
								</li>
								<li class="list">
									<span class="label">Phone Number</span>
									<span class="data"><?=$student_data->s_emrg_phone?></span>
								</li>
					</ul>
					</div>
					</div>
			
					
				</div>
				</div>
		</div>

			</div>
</div>



@endsection
