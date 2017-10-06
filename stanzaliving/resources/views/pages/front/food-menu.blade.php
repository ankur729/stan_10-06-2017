<?php 
$body_class ="";

$meta_title ="Stanza Living : My Account";
$meta_keyword ="Stanza Living,Premium student";
$meta_description ="Premium student accommodation in India - move over PGs and hostels!";
//print_r($results);die;

//echo "Student Session ID==>".$value = session('student_id');
//dd(session()->all());
//print_r($results);die;

//echo "<pre>"; print_r($fooddata);

echo $fooddata[0]['from_date'];
?>


@extends('layouts.master.front.index')

@section('styles')

<link href="{{ URL::asset('front/css/popup.css') }}" rel="stylesheet">

@endsection

@section('content')








	<div class="container food-menu-page">
		<div class="work-body">

			<!-- Current Week Menu end here -->
			<div class="food-menu">
				<h6 class="main-heading">Current Week Menu</h6>
				  <div class="tab-slider--nav">
				    <ul class="tab-slider--tabs slider">
					
					
										  
					  
					
				      <li class="tab-slider--trigger active" rel="tab1_main">
				      	<a href="#tab1" class="active">24-7-2017<span class="caption">Tue</span></a>
				      </li>
				      <li class="tab-slider--trigger " rel="tab2_main">
				      	<a href="#tab2">25-7-2017<span class="caption">Wed</span></a>
				      </li>
				      <li class="tab-slider--trigger" rel="tab3_main">
				      	<a href="#tab3">26-7-2017<span class="caption">Thu</span></a>
				      </li>
				      <li class="tab-slider--trigger " rel="tab4_main">
				      	<a href="#tab4">27-7-2017<span class="caption">Fri</span></a>
				      </li>
				      <li class="tab-slider--trigger" rel="tab5_main">
				      	<a href="#tab5">28-7-2017<span class="caption">Sat</span></a>
				      </li>
				      <li class="tab-slider--trigger " rel="tab6_main">
				      	<a href="#tab6">29-7-2017<span class="caption">Sun</span></a>
				      </li>
				      <li class="tab-slider--trigger" rel="tab7_main">
				      	<a href="#tab7">30-7-2017<span class="caption">Mon</span></a>
				      </li>
				      <span class="slide-trigger"></span>
				    </ul>
				  </div>



				<div class="tab-slider--container">
					<div id="tab1_main" class="tab-slider--body" style="display: block;">
						<ul class="food-list">
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id01').style.display='block'"><a href="#0" class="link">Eating</a></span>

								<!-- popup start-->

								  <div id="id01" class="w3-modal">
    								<div class="w3-modal-content">
    						  			<div class="w3-container">
       						 				<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
       						 				<p class="popup-content">Are you sure ?</p>
       						 				<a class="accept-btn" href="#0">Confirm</a>
       						 				<a class="skipping-accept-btn" href="#0">Confirm</a>
       						 				<a class="cancel-btn" href="#0"  onclick="document.getElementById('id01').style.display='none'">Cancel</a>
      									</div>
      								
    								</div>
 								 </div>

 								 <!-- Popup-end -->
 							
								<span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id01').style.display='block'"><a href="#0" class="link">Skipping</a></span>



									<div class="eating-Text">
 								 		<h3 class="eating-popup-text">Eating</h3>
 									 </div>
 									 <div class="skipping-text">
 								 		<h3 class="skipping-popup-text">Skipping</h3>
 									 </div> 

 									 	<!-- popup start -->
									<div id="id02" class="w3-modal">
	    								<div class="w3-modal-content">
	    						  			<div class="w3-container">
	       						 				<span  onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
	       						 				<p class="popup-content">Are you sure ?</p>
	       						 				<a class="accept-btn" href="#0">Confirm</a>
	       						 				<a class="skipping-accept-btn" href="#0">Confirm</a>
	       						 				<a class="cancel-btn" href="#0" onclick="document.getElementById('id02').style.display='none'">Cancel</a>
	      									</div>
	      								</div>
 								 	</div>
 								 	<!-- pop-end -->
							</li>
							<li class="list">
								<h6 class="oca">Lunch
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id03').style.display='block'"><a href="#0" class="link">Eating</a></span>

								<!-- popup start -->
								  <div id="id03" class="w3-modal">
    								<div class="w3-modal-content">
    						  			<div class="w3-container">
       						 				<span  onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-display-topright">&times;</span>
       						 				<p class="popup-content">Are you sure ?</p>
       						 				<a class="accept-btn" href="#0">Confirm</a>
       						 				<a class="skipping-accept-btn" href="#0">Confirm</a>
       						 				<a class="cancel-btn" href="#0"  onclick="document.getElementById('id03').style.display='none'">Cancel</a>
      									</div>
      								
    								</div>
 								 </div>
 								 <!-- popup end -->

								<span class="skipping-btn w3-button w3-black" onclick="document.getElementById('id03').style.display='block'"><a href="#0" class="link">Skipping</a></span>
										<div class="eating-Text">
 								 			<h3 class="eating-popup-text">Eating</h3>
 										</div>
 										<div class="skipping-text">
 								 			<h3 class="skipping-popup-text">Skipping</h3>
 										</div> 

							</li>
							<li class="list">
								<h6 class="oca">High-Tea
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id04').style.display='block'"><a href="#0" class="link">Eating</a></span>
								  <div id="id04" class="w3-modal">
    								<div class="w3-modal-content">
    						  			<div class="w3-container">
       						 				<span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-display-topright">&times;</span>
       						 				<p class="popup-content">Are you sure?</p>
       						 				<a class="accept-btn" href="#0">Confirm</a>
       						 				<a class="skipping-accept-btn"tn" href="#0">Confirm</a>
       						 				<a class="cancel-btn" href="#0"  onclick="document.getElementById('id04').style.display='none'">Cancel</a>
      									</div>
      								
    								</div>
 								 </div>
								<span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id04').style.display='block'"><a href="#0" class="link">Skipping</a></span>
									<div class="eating-Text">
 								 		<h3 class="eating-popup-text">Eating</h3>
 									</div>
 									<div class="skipping-text">
 								 		<h3 class="skipping-popup-text">Skipping</h3>
 									</div> 
							</li>
							<li class="list">
								<h6 class="oca">Dinner
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id05').style.display='block'"><a href="#0" class="link">Eating</a></span>

								  <div id="id05" class="w3-modal">
    								<div class="w3-modal-content">
    						  			<div class="w3-container">
       						 				<span onclick="document.getElementById('id05').style.display='none'" class="w3-button w3-display-topright">&times;</span>
       						 				<p class="popup-content">Are you sure?</p>
       						 				<a class="accept-btn" href="#0">Confirm</a>
       						 				<a class="skipping-accept-btn" href="#0">Confirm</a>
       						 				<a class="cancel-btn" href="#0"  onclick="document.getElementById('id05').style.display='none'">Cancel</a>
      									</div>
      								
    								</div>
 								 </div>
								<span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id05').style.display='block'"><a href="#0" class="link">Skipping</a></span>
								<div class="eating-Text">
 								 	<h3 class="eating-popup-text">Eating</h3>
 								</div>
 								<div class="skipping-text">
 								 	<h3 class="skipping-popup-text">Skipping</h3>
 								</div> 
							</li>
						</ul>
					</div>
					<div id="tab2_main" class="tab-slider--body">
						<ul class="food-list">
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id06').style.display='block'"><a href="#0" class="link">Eating</a></span>

								 <!-- popup start-->

				                  <div id="id06" class="w3-modal">
				                    <div class="w3-modal-content">
				                        <div class="w3-container">
				                          <span onclick="document.getElementById('id06').style.display='none'" class="w3-button w3-display-topright">&times;</span>
				                          <p class="popup-content">Are you sure ?</p>
				                          <a class="accept-btn" href="#0">Confirm</a>
				                          <a class="skipping-accept-btn" href="#0">Confirm</a>
				                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id06').style.display='none'">Cancel</a>
				                        </div>
				                      
				                    </div>
				                 </div>

                			 <!-- Popup-end -->
							 <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id06').style.display='block'"><a href="#0" class="link">Skipping</a></span>

							  <div class="eating-Text">
                    			<h3 class="eating-popup-text">Eating</h3>
                  			 </div>
			                   <div class="skipping-text">
			                    <h3 class="skipping-popup-text">Skipping</h3>
			                   </div> 
							</li>

					<!-- section-6 -->

							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id07').style.display='block'"><a href="#0" class="link">Eating</a></span>

									<!-- popup start-->

					                  <div id="id07" class="w3-modal">
					                    <div class="w3-modal-content">
					                        <div class="w3-container">
					                          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
					                          <p class="popup-content">Are you sure ?</p>
					                          <a class="accept-btn" href="#0">Confirm</a>
					                          <a class="skipping-accept-btn" href="#0">Confirm</a>
					                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id07').style.display='none'">Cancel</a>
					                        </div>
					                      
					                    </div>
					                 </div>

                		 <!-- Popup-end -->

								 <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id07').style.display='block'"><a href="#0" class="link">Skipping</a></span>
										 <div class="eating-Text">
                   						 	<h3 class="eating-popup-text">Eating</h3>
                   						</div>
						                <div class="skipping-text">
						                    <h3 class="skipping-popup-text">Skipping</h3>
						                </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id011').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id011" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id011').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id011').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id09').style.display='block'"><a href="#0" class="link">Eating</a></span>


								<!-- popup start-->

				                  <div id="id09" class="w3-modal">
				                    <div class="w3-modal-content">
				                        <div class="w3-container">
				                          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
				                          <p class="popup-content">Are you sure ?</p>
				                          <a class="accept-btn" href="#0">Confirm</a>
				                          <a class="skipping-accept-btn" href="#0">Confirm</a>
				                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id09').style.display='none'">Cancel</a>
				                        </div>
				                      
				                    </div>
				                 </div>

                 			<!-- Popup-end -->

								 <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id09').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
						</ul>
					</div>
					<div id="tab3_main" class="tab-slider--body">
						<ul class="food-list">
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id010').style.display='block'"><a href="#0" class="link">Eating</a></span>
								<!-- popup start-->

                  <div id="id010" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id010').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id010').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id010').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id013').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id013" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id013').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id013').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id013').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg')}}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id012').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id012" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id012').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id012').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id012').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id014').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id014" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id014').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id014').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
						</ul>
					</div>
					<div id="tab4_main" class="tab-slider--body">
						<ul class="food-list">
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
							<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id015').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id015" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id015').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id015').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id015').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
							<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id016').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id016" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id016').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id016').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id016').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id017').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id017" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id017').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id017').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id017').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id018').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id018" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id018').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id018').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id018').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
						</ul>
					</div>
					<div id="tab5_main" class="tab-slider--body">
						<ul class="food-list">
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id019').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id019" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id019').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id019').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id019').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id20').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id20" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id20').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id20').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id20').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id21').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id21" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id21').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id21').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id21').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id21').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id21" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id21').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id21').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id21').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
						</ul>
					</div>
					<div id="tab6_main" class="tab-slider--body">
						<ul class="food-list">
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id22').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id22" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id22').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id22').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id22').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id23').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id23" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id23').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id23').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id23').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id24').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id24" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id24').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id24').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id24').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id25').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id25" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id25').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id25').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id25').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
						</ul>
					</div>
					<div id="tab7_main" class="tab-slider--body">
						<ul class="food-list">
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id26').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id26" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id26').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id26').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id26').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id27').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id27" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id27').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id27').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id27').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id28').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id28" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id28').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id28').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id28').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<span class="eating-btn  w3-button w3-black" onclick="document.getElementById('id29').style.display='block'"><a href="#0" class="link">Eating</a></span>

                <!-- popup start-->

                  <div id="id29" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id29').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                          <p class="popup-content">Are you sure ?</p>
                          <a class="accept-btn" href="#0">Confirm</a>
                          <a class="skipping-accept-btn" href="#0">Confirm</a>
                          <a class="cancel-btn" href="#0"  onclick="document.getElementById('id29').style.display='none'">Cancel</a>
                        </div>
                      
                    </div>
                 </div>

                 <!-- Popup-end -->
              
                <span class="skipping-btn  w3-button w3-black"  onclick="document.getElementById('id29').style.display='block'"><a href="#0" class="link">Skipping</a></span>



                  <div class="eating-Text">
                    <h3 class="eating-popup-text">Eating</h3>
                   </div>
                   <div class="skipping-text">
                    <h3 class="skipping-popup-text">Skipping</h3>
                   </div> 
							</li>
						</ul>
					</div>
				</div>			
			</div>
			<!-- Current Week Menu start here -->


			<!-- last 3 days Menu end here -->
			<div class="food-menu">
				<h6 class="main-heading">Please Share feedback for past 3 days</h6>
				  <div class="tab-slider--nav">
				    <ul class="tab-slider--tabs slider">
				      <li class="tab-slider--trigger active" rel="tab1_main">
				      	<a href="#tab1" class="active">24-7-2017<span class="caption">Tue</span></a>
				      </li>
				      <li class="tab-slider--trigger " rel="tab2_main">
				      	<a href="#tab2">25-7-2017<span class="caption">Wed</span></a>
				      </li>
				      <li class="tab-slider--trigger" rel="tab3_main">
				      	<a href="#tab3">26-7-2017<span class="caption">Thu</span></a>
				      </li>
				      <span class="slide-trigger"></span>
				    </ul>
				  </div>



				<div class="tab-slider--container">
					<div id="tab1_main" class="tab-slider--body" style="display: block;">
						<ul class="food-list">
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								
								<ul class="ratings">
									<li class="rate-list">
										<label class="s1"><input type="radio" name="bhagat" class="radio" name="1" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s2"><input type="radio" name="bhagat" class="radio" name="2" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s3"><input type="radio" name="bhagat" class="radio" name="3" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s4"><input type="radio" name="bhagat" class="radio" name="4" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s5"><input type="radio" name="bhagat" class="radio" name="5" value=""></label>
									</li>
								</ul>

							</li>
							<li class="list">
								<h6 class="oca">Lunch
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								
								<ul class="ratings">
									<li class="rate-list">
										<label class="s1"><input type="radio" name="" class="radio" name="1" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s2"><input type="radio" name="" class="radio" name="2" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s3"><input type="radio" name="" class="radio" name="3" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s4"><input type="radio" name="" class="radio" name="4" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s5"><input type="radio" name="" class="radio" name="5" value=""></label>
									</li>
								</ul>
							</li>
							<li class="list">
								<h6 class="oca">High-Tea
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								
								<ul class="ratings">
									<li class="rate-list">
										<label class="s1"><input type="radio" name="" class="radio" name="1" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s2"><input type="radio" name="" class="radio" name="2" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s3"><input type="radio" name="" class="radio" name="3" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s4"><input type="radio" name="" class="radio" name="4" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s5"><input type="radio" name="" class="radio" name="5" value=""></label>
									</li>
								</ul>
							</li>
							<li class="list">
								<h6 class="oca">Dinner
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								
								<ul class="ratings">
									<li class="rate-list">
										<label class="s1"><input type="radio" name="" class="radio" name="1" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s2"><input type="radio" name="" class="radio" name="2" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s3"><input type="radio" name="" class="radio" name="3" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s4"><input type="radio" name="" class="radio" name="4" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s5"><input type="radio" name="" class="radio" name="5" value=""></label>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div id="tab2_main" class="tab-slider--body">
						<ul class="food-list">
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								
								<ul class="ratings">
									<li class="rate-list">
										<label class="s1"><input type="radio" name="" class="radio" name="1" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s2"><input type="radio" name="" class="radio" name="2" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s3"><input type="radio" name="" class="radio" name="3" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s4"><input type="radio" name="" class="radio" name="4" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s5"><input type="radio" name="" class="radio" name="5" value=""></label>
									</li>
								</ul>
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								
								<ul class="ratings">
									<li class="rate-list">
										<label class="s1"><input type="radio" name="" class="radio" name="1" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s2"><input type="radio" name="" class="radio" name="2" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s3"><input type="radio" name="" class="radio" name="3" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s4"><input type="radio" name="" class="radio" name="4" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s5"><input type="radio" name="" class="radio" name="5" value=""></label>
									</li>
								</ul>
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								
								<ul class="ratings">
									<li class="rate-list">
										<label class="s1"><input type="radio" name="" class="radio" name="1" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s2"><input type="radio" name="" class="radio" name="2" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s3"><input type="radio" name="" class="radio" name="3" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s4"><input type="radio" name="" class="radio" name="4" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s5"><input type="radio" name="" class="radio" name="5" value=""></label>
									</li>
								</ul>
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								
								<ul class="ratings">
									<li class="rate-list">
										<label class="s1"><input type="radio" name="" class="radio" name="1" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s2"><input type="radio" name="" class="radio" name="2" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s3"><input type="radio" name="" class="radio" name="3" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s4"><input type="radio" name="" class="radio" name="4" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s5"><input type="radio" name="" class="radio" name="5" value=""></label>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div id="tab3_main" class="tab-slider--body">
						<ul class="food-list">
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								
								<ul class="ratings">
									<li class="rate-list">
										<label class="s1"><input type="radio" name="" class="radio" name="1" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s2"><input type="radio" name="" class="radio" name="2" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s3"><input type="radio" name="" class="radio" name="3" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s4"><input type="radio" name="" class="radio" name="4" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s5"><input type="radio" name="" class="radio" name="5" value=""></label>
									</li>
								</ul>
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								
								<ul class="ratings">
									<li class="rate-list">
										<label class="s1"><input type="radio" name="" class="radio" name="1" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s2"><input type="radio" name="" class="radio" name="2" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s3"><input type="radio" name="" class="radio" name="3" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s4"><input type="radio" name="" class="radio" name="4" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s5"><input type="radio" name="" class="radio" name="5" value=""></label>
									</li>
								</ul>
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								
								<ul class="ratings">
									<li class="rate-list">
										<label class="s1"><input type="radio" name="" class="radio" name="1" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s2"><input type="radio" name="" class="radio" name="2" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s3"><input type="radio" name="" class="radio" name="3" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s4"><input type="radio" name="" class="radio" name="4" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s5"><input type="radio" name="" class="radio" name="5" value=""></label>
									</li>
								</ul>
							</li>
							<li class="list">
								<h6 class="oca">Breakfast
									<span class="time"> (09:00 - 10:30AM)</span>
								</h6>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								<div class="food-set"><i class="icon"><img src="{{ URL::asset('front/images/icon/veg.jpg') }}"></i> Food Dish Name</div>
								
								<ul class="ratings">
									<li class="rate-list">
										<label class="s1"><input type="radio" name="" class="radio" name="1" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s2"><input type="radio" name="" class="radio" name="2" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s3"><input type="radio" name="" class="radio" name="3" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s4"><input type="radio" name="" class="radio" name="4" value=""></label>
									</li>
									<li class="rate-list">
										<label class="s5"><input type="radio" name="" class="radio" name="5" value=""></label>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>			
			</div>
			<!-- last 3 days Menu start here -->

		</div>		
	</div>	
	
	@endsection
	
	
@push('scripts')	

<script type="text/javascript">
$(".ratings").addClass("notgiven");

$(".ratings label").click(function(){
	$(this).parents(".ratings").removeClass("notgiven");
	$(this).parent(".rate-list").children("label").addClass("active");
	$(this).parent(".rate-list").prevAll(".rate-list").children("label").addClass("active");
	$(this).parent(".rate-list").nextAll(".rate-list").children("label").removeClass("active");
});

// $(".ratings label").mouseenter(function(){
// 	$(this).parent(".rate-list").prevAll(".rate-list").children("label").css("opacity" , "1");
// 	$(this).parent(".rate-list").nextAll(".rate-list").children("label").css("opacity" , "0.5");
// });


$(".tab-slider--nav li a").click(function(e) {

	e.preventDefault();
	var tabslidernav=$(this).parents('.tab-slider--nav');
	var tabslidercontainer=tabslidernav.next();

	    
  tabslidercontainer.children('.tab-slider--body').hide();
  var activeTab = $(this).parent('li').attr("rel");
  tabslidercontainer.children('#'+activeTab).show();
 
  var setindex=$(this).parent('li').index();
  var totalliwidth=0;
  var alltoatalliwidth=0;
  //alert($(this).parents(".tab-slider--nav").children('ul').children('li').html());
  $(this).parents(".tab-slider--nav").children('ul').children('li').each(function(){


  		
        var setliwidth=$(this).width();
        
        var nsetndex=$(this).index();
        if(nsetndex<setindex){
                
            totalliwidth+=setliwidth;
        }
        alltoatalliwidth+=setliwidth;
        

  });

 
 	var slidetrigger=tabslidernav.children('ul').children('.slide-trigger'); 
 slidetrigger.css('left',totalliwidth);
 slidetrigger.css('width',$(this).parent('li').width()+'px');
	tabslidernav.children('ul').children('li').children('a').removeClass('active');
 $(this).addClass('active');
    
});





slidechild=$('.tab-slider--trigger.active').width();
$('.slide-trigger').css('width',slidechild+'px');
$(".tab-slider--body.active").show();
$('.tab-slider--trigger').eq(0).children('a').addClass('active');






$(document).ready(function(){
    $(".accept-btn").click(function(){
        /*$(".eating-btn,.skipping-btn").hide();*/
        $(this).parents().prev('span').hide();
       $(this).parents().next('span').hide();
    	$('.w3-modal').hide();
    	$(this).closest('li').find('.eating-Text').show();
    	
    	
    	

   });
});
$(document).ready(function(){
    $(".skipping-btn .link").click(function(){
    	$('.accept-btn').hide();
    	$('.skipping-accept-btn').show();

   });
});

$('.skipping-accept-btn').click(function(){

	$(this).parents().prev('span').hide();
    $(this).parents().next('span').hide();
    $('.w3-modal').hide();
    $(this)	.closest('li').find('.skipping-text').show();
    
});

</script>

@endpush