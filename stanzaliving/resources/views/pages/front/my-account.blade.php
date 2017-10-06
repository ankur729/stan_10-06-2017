<?php 
$body_class ="";

$meta_title ="Stanza Living : My Account";
$meta_keyword ="Stanza Living,Premium student";
$meta_description ="Premium student accommodation in India - move over PGs and hostels!";
//print_r($results);die;
//echo "Student Session ID==>".$value = session('student_id');
//dd(session()->all());
//print_r($results);die;
$session_student = session('student_id');
$open_complaint = Commonhelper::CountStudentComplaint($session_student,'Open');
$close_complaint = Commonhelper::CountStudentComplaint($session_student,'Closed');
$pending_complaint = Commonhelper::CountStudentComplaint($session_student,'Pending');


//print_r($complaintdata);

//echo $complaintdata['c_problem'];
?>


@extends('layouts.master.front.index')

@section('styles')

@endsection

@section('content')


<div class="flash-message">
 @if(Session::has('message'))
    <div class="alert-box success" id="successMessage">
      <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
    </div>
@endif
</div>
  
  

<div class="container">
		<div class="notification-bar">
			<h4 class="title">You have 15 Notifications</h4>
		</div>
		<div class="work-body">
			<ul class="dashboard-items">
				<li class="list">
					<a href="#0" class="style">
						<div class="heading-class">
							<div class="set-display">
								<h4 class="heading">Complaints Status</h4>
								<span class="number"><?=count($complaintdata)?></span>
							</div>
						</div>
						<div class="info-data">
							<ul class="numbers">
								<li class="number-list col-md-50">
									<span class="data"><?=$close_complaint?> <br>Recently Resolved</span>
								</li>
								<li class="number-list">
									<span class="data"><?=$pending_complaint?> <br>Pending</span>
								</li>
							</ul>
						</div>
					</a>
				</li>
				<li class="list">
					<a href="#0" class="style">
						<div class="heading-class">
							<div class="set-display">
								<h4 class="heading">Payments Due</h4>
								<span class="number">2</span>
							</div>
						</div>
						<div class="info-data">
							<ul class="numbers">
								<li class="number-list col-md-50">
									<span class="data">3 <br>Rents Related</span>
								</li>
								<li class="number-list">
									<span class="data">3 <br> Electricity-related</span>
								</li>
							</ul>
						</div>
					</a>
				</li>
				<li class="list">
					<a href="#0" class="style">
						<div class="heading-class">
							<div class="set-display">
								<h4 class="heading">Late Night / Night Outs</h4>
								<span class="number">5</span>
							</div>
						</div>
						<div class="info-data">
							<ul class="numbers">
								<li class="number-list col-md-50">
									<span class="data">3 <br>Recently Approved</span>
								</li>
								<li class="number-list">
									<span class="data">3 <br>Pending</span>
								</li>
							</ul>
						</div>
					</a>
				</li>
				<li class="list">
					<a href="#0" class="style">
						<div class="heading-class">
							<div class="set-display">
								<h4 class="heading">Admin Notifications</h4>
								<span class="number">2</span>
							</div>
						</div>
						<div class="info-data">
							<ul class="numbers">
								<li class="number-list col-md-50">
									<span class="data">3 <br> Messages</span>
								</li>
								<li class="number-list">
									<span class="data">3 <br> Info Request</span>
								</li>
							</ul>
						</div>
					</a>
				</li>
				<li class="list">
					<a href="#0" class="style">
						<div class="heading-class">
							<div class="set-display">
								<h4 class="heading">Stanza Social</h4>
								<span class="number">5</span>
							</div>
						</div>
						<div class="info-data">
							<ul class="numbers">
								<li class="number-list col-md-50">
									<span class="data">3 <br>New Events</span>
								</li>
								<li class="number-list">
									<span class="data">3 <br>New Offers</span>
								</li>
							</ul>
						</div>
					</a>
				</li>
				<li class="list">
					<a href="#0" class="style">
						<div class="heading-class">
							<div class="set-display">
								<h4 class="heading">Stanza Springboard</h4>
								<span class="number">0</span>
							</div>
						</div>
						<div class="info-data">
							<ul class="numbers">
								<li class="number-list col-md-50">
									<span class="data">3 <br>New Events</span>
								</li>
								<li class="number-list">
									<span class="data">3 <br>Latest Features</span>
								</li>
							</ul>
						</div>
					</a>
				</li>
				<li class="list">
					<a href="" class="style">
						<div class="heading-class">
							<div class="set-display">
								<h4 class="heading">Birthdays</h4>
								<span class="number">2</span>
							</div>
						</div>
						<div class="info-data">
							<ul class="numbers">
								<li class="number-list col-md-50">
									<span class="data">3 <br> This Week</span>
								</li>
								<li class="number-list">
									<span class="data">3 <br> This Month</span>
								</li>
							</ul>
						</div>
					</a>
				</li>
				<li class="list">
					<a href="" class="style">
						<div class="heading-class">
							<div class="set-display">
								<h4 class="heading">Maintenance Events</h4>
								<span class="number">5</span>
							</div>
						</div>
						<div class="info-data">
							<ul class="numbers">
								<li class="number-list col-md-50">
									<span class="data">3 <br> Messages</span>
								</li>
								<li class="number-list">
									<span class="data">3 <br> Info Request</span>
								</li>
							</ul>
						</div>
					</a>
				</li>
			</ul>

			<div class="food-menu">
				<h6 class="main-heading">Todays Food Menu</h6>
				<ul class="food-list">
					<li class="list">
						<h6 class="oca">Breakfast
							<span class="time"> (09:00 - 10:30AM)</span>
						</h6>
						<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
						<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
					</li>
					<li class="list">
						<h6 class="oca">Breakfast
							<span class="time"> (09:00 - 10:30AM)</span>
						</h6>
						<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
						<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
					</li>
					<li class="list">
						<h6 class="oca">Breakfast
							<span class="time"> (09:00 - 10:30AM)</span>
						</h6>
						<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
						<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
					</li>
					<li class="list">
						<h6 class="oca">Breakfast
							<span class="time"> (09:00 - 10:30AM)</span>
						</h6>
						<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
						<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
					</li>
				</ul>
			</div>

		</div>
</div>
		
	
	
	
@endsection
	
	
	

<!-- footer start here -->
<?php //require_once('incl/footer.php');?>
<!-- footer end here -->


<?php //require_once('incl/footercommonjs.php');?>
