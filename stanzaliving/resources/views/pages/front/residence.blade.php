<?php 
$body_class ="residence-page";
$meta_title ="Stanza Living : Residence";
$meta_keyword ="Stanza Living,Premium student";
$meta_description ="Premium student accommodation in India - move over PGs and hostels!";
?>

@extends('layouts.master.front.landing')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/plugin/tab/skeletabs.min.css') }}">
<link href="{{ URL::asset('landing/plugin/owl/css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ URL::asset('landing/plugin/owl/css/owl.theme.css') }}" rel="stylesheet">
@endsection

@section('content')



<div class="section-1">
	<div class="container">
		<ul class="places">
			<li class="list">
				<div class="style">
					<a href="londonhouse.php">
						<span class="thumb"><img src="{{ URL::asset('landing/images/assets/residences/location.jpg') }}"></span>
						<span class="title">london house<span class="f-16 row color-green">(boys only)</span></span>
						<span class="address">north campus, new delhi</span>
						<span class="view-more">View Details</span>
					</a>
				</div>

			</li>
			<!--<li class="list">
				<div class="style">
					<a href="newyork.php">
						<span class="thumb"><img src="{{ URL::asset('landing/images/assets/residences/location1.jpg') }}"></span>
						<span class="title">new york house<span class="f-16 row color-red">(boys only)</span> </span>
						<span class="address">north campus, new delhi</span>
						<span class="view-more">View Details</span>
					</a>
				</div>
			</li>-->
			<li class="list">
				<div class="style">
					<a href="la.php">
						<span class="thumb"><img src="{{ URL::asset('landing/images/assets/residences/location2.jpg') }}"></span>
						<span class="title">los angeles house  <span class="f-16 row color-green">(girls only)</span> </span>
						<span class="address">north campus, new delhi</span>
						<span class="view-more">View Details</span>
					</a>
				</div>
			</li>


			<li class="list">
				<div class="style">
					<a href="#">
						<span class="thumb"><img src="{{ URL::asset('landing/images/assets/residences/location3.jpg') }}"></span>
						<span class="title">paris house</span>
						<span class="address">south campus, new delhi</span>
						<span class="view-more">Coming Soon</span>
					</a>
				</div>

			</li>
			<li class="list">
				<div class="style">
					<a href="#">
						<span class="thumb"><img src="{{ URL::asset('landing/images/assets/residences/location4.jpg') }}"></span>
						<span class="title">barcelona house</span>
						<span class="address">noida, uttar pradesh</span>
						<span class="view-more">Coming Soon</span>
					</a>
				</div>
			</li>
			<li class="list">
				<div class="style">
					<a href="#">
						<span class="thumb"><img src="{{ URL::asset('landing/images/assets/residences/location5.jpg') }}"></span>
						<span class="title">rome house</span>
						<span class="address">viman nagar, pune, maharashtra</span>
						<span class="view-more">Coming Soon</span>
					</a>
				</div>
			</li>


			<li class="list">
				<div class="style">
					<a href="#">
						<span class="thumb"><img src="{{ URL::asset('landing/images/assets/residences/location6.jpg') }}"></span>
						<span class="title">singapore house</span>
						<span class="address">dunga, dehradun, uttarakhand</span>
						<span class="view-more">Coming Soon</span>
					</a>
				</div>

			</li>
			<li class="list">
				<div class="style">
					<a href="#">
						<span class="thumb"><img src="{{ URL::asset('landing/images/assets/residences/location7.jpg') }}"></span>
						<span class="title">amsterdam house</span>
						<span class="address">madhya marg, chandigarh, punjab</span>
						<span class="view-more">Coming Soon</span>
					</a>
				</div>
			</li>
			<li class="list">
				<div class="style">
					<a href="#">
						<span class="thumb"><img src="{{ URL::asset('landing/images/assets/residences/location8.jpg') }}"></span>
						<span class="title">san francisco house</span>
						<span class="address">vigyan nagar, kota, rajasthan</span>
						<span class="view-more">Coming Soon</span>
					</a>
				</div>
			</li>
		</ul>
	</div>
</div>





@endsection



@push('scripts')
<script src="{{ URL::asset('landing/plugin/tab/skeletabs.min.js') }}"></script>
<script type="text/javascript">
$("#skltbsResponsive").skeletabs({
	
	animation: "fade-scale",
	// autoplay: true,
    autoplayInterval: 4500,
responsive: {
breakpoint: 800,
headingTagName: "h4",

}
});

</script>
@endpush
