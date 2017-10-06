<?php 
$body_class ="experience-page";
$meta_title ="Stanza Living";
$meta_keyword ="Stanza Living,Premium student";
$meta_description ="Premium student accommodation in India - move over PGs and hostels!";

?>

@extends('layouts.master.front.landing')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/plugin/tab/skeletabs.min.css') }}">

@endsection

@section('content')




<!--<body class="experience-page" id="header">-->
<div class="section-1">
	<div class="container">
		
	
		<div id="skltbsResponsive" class="skltbs">
		    <ul role="tablist" class="skltbs-tab-group">
		        <li role="presentation" class="skltbs-tab-item">
		            <a role="tab" class="skltbs-tab" href="#header">Stanza Lifestyle</a>
		        </li>
		        <li role="presentation" class="skltbs-tab-item">
		            <a role="tab" class="skltbs-tab" href="#header">Stanza Social</a>
		        </li>
		        <li role="presentation" class="skltbs-tab-item">
		            <a role="tab" class="skltbs-tab" href="#header">Stanza Springboard</a>
		        </li>
		    </ul>
		    <div class="skltbs-panel-group">
		        <div role="tabpanel" class="skltbs-panel">
		            <div class="main-content">
		            	<p>At Stanza, we are reimagining student living in every possible way. Student living is no longer just about meeting a need or a basic requirement – it is no more about just providing a boarding facility. We believe that student living is about fulfilling the aspirations and ambitions of an entire generation – about giving them a lifestyle which is superior to what any other accommodation option can and will provide. <br> <br> <b> At Stanza we live, dine, care, study and unwind in style!</b></p>
		            </div>
		            <ul class="media">
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/live.jpg') }}">
		            			<div class="media-body yellow">
		            				<div class="display-set">
			            				<p>Every Stanza residence is about thoughtfully designed rooms and common areas with dashes of colour and life, about smart space planning and storage options, about high quality fit-outs & furnishings, hi-speed internet and much more…
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/dine.jpg') }}">
		            			<div class="media-body pink">
		            				<div class="display-set">
			            				<p>Stanza brings to our students a food experience like never before! Tasty, nutritious, healthy and engaging food across a range of cuisines – regional, national and international with a variety of options for students to choose from depending on their preferences
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/study.jpg') }}">
		            			<div class="media-body grey">
		            				<div class="display-set">
			            				<p>All our residences are designed to support a student’s academic needs. At Stanza, residents benefit from ergonomically designed study ledges, quiet rooms to concentrate, brainstorm or do group assignments as well as access to online study materials and libraries


										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/unwind.jpg') }}">
		            			<div class="media-body yellow">
		            				<div class="display-set">
			            				<p>Every residence is a place for a community to be born. Our properties have vibrant, student-focused common areas, entertainment lounges, terrace gardens, pool, foosball tables and a range of board games, gym facilities etc. to give students a chance to relax and chill!
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/celebrate.jpg') }}">
		            			<div class="media-body pink">
		            				<div class="display-set">
			            				<p>At Stanza, we are all one big family. It is hence core to our ethos that we celebrate all those special occasions with each other, whether it is a birthday, a success at college, an internship/job offer or all our very special Indian festivals, and, yes, all of this is on the house…
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/care.jpg') }}">
		            			<div class="media-body grey">
		            				<div class="display-set">
			            				<p>At Stanza, we care – be it the constant upkeep of residences by professionally trained staff, 24*7 security through biometric access cards, CCTVs etc., on-call medical support and several other exclusive facilities like travel concierge and much more…


										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            </ul>
		        </div>
		        <div role="tabpanel" class="skltbs-panel">
		             <div class="main-content">
		            	<p>Stanza residents not only benefit from superior living facilities and high-quality service offerings, but also a range of other goodies and rewards. The Stanza card provides exclusive, discounted access to some of the best restaurants in the area, incredible events happening in the city, coaching classes and special tutorial sessions and a range of other facilities like swimming pools, fitness centres, dance classes etc.</p>
		            </div>
		            <ul class="media">
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/cabs.jpg') }}">
		            			<div class="media-body yellow">
		            				<div class="display-set">
			            				<p>Discounts for Stanzens on mobile app based cab services. The Stanza team is finalizing an exclusive offer package for its residents and details will be uploaded shortly
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/fitnesscenter.jpg') }}">
		            			<div class="media-body pink">
		            				<div class="display-set">
			            				<p>Discounts for Stanzens on fitness centers in the neighbourhood. The Stanza team is finalizing an exclusive offer package for its residents and details will be uploaded shortly
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/restaurants.jpg') }}">
		            			<div class="media-body grey">
		            				<div class="display-set">
			            				<p>Discounts for Stanzens on restaurants in the neighbourhood. The Stanza team is finalizing an exclusive offer package for its residents and details will be uploaded shortly
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/shopping.jpg') }}">
		            			<div class="media-body yellow">
		            				<div class="display-set">
			            				<p>Discounts for Stanzens at shopping centers in the neighbourhood. The Stanza team is finalizing an exclusive offer package for its residents and details will be uploaded shortly
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/collegesupplies.jpg') }}">
		            			<div class="media-body pink">
		            				<div class="display-set">
			            				<p>Special discounts for stanzens on college supplies. The Stanza team is finalizing an exclusive offer package for its residents and details will be uploaded shortly
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/movies.jpg') }}">
		            			<div class="media-body grey">
		            				<div class="display-set">
			            				<p>Unwind after exams with dicounts on movie tickets for stanzens. The Stanza team is finalizing an exclusive offer package for its residents and details will be uploaded shortly
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>



		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/medicalservices.jpg') }}">
		            			<div class="media-body grey">
		            				<div class="display-set">
			            				<p>Unwind after exams with dicounts on movie tickets for stanzens. The Stanza team is finalizing an exclusive offer package for its residents and details will be uploaded shortly
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/spa.jpg') }}">
		            			<div class="media-body grey">
		            				<div class="display-set">
			            				<p>Unwind after exams with dicounts on movie tickets for stanzens. The Stanza team is finalizing an exclusive offer package for its residents and details will be uploaded shortly
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/hobbies.jpg') }}">
		            			<div class="media-body grey">
		            				<div class="display-set">
			            				<p>Unwind after exams with dicounts on movie tickets for stanzens. The Stanza team is finalizing an exclusive offer package for its residents and details will be uploaded shortly
										</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            </ul>
		        </div>
		        <div role="tabpanel" class="skltbs-panel">
		             <div class="main-content">
		            	<p>Stanza residences are inspirational places for students to live and to chalk out their career paths. Not only will we make sure that our residents feel happy, calm, secure and at home but we will also make sure that they are clued up and plugged in to a range of career options and corporate networks which will provide them the springboard for the next chapters of their lives. And all along the way, they will get that little bit of guidance and helping hand from us that will make set themselves apart both through university and beyond.</p>
		            </div>
		            <ul class="media">
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/onlinestudy.jpg') }}">
		            			<div class="media-body yellow">
		            				<div class="display-set">
			            				<p>Coming soon. Watch this space for more details</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/expertsnetwork.jpg') }}">
		            			<div class="media-body pink">
		            				<div class="display-set">
			            				<p>Coming soon. Watch this space for more details</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/inetrnshipopportunities.jpg') }}">
		            			<div class="media-body grey">
		            				<div class="display-set">
			            				<p>Coming soon. Watch this space for more details</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/brownbagsessions.jpg') }}">
		            			<div class="media-body yellow">
		            				<div class="display-set">
			            				<p>Coming soon. Watch this space for more details</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/alumninetwork.jpg') }}">
		            			<div class="media-body pink">
		            				<div class="display-set">
			            				<p>Coming soon. Watch this space for more details</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            	<li class="list">
		            		<div class="style">
		            			<img src="{{ URL::asset('landing/images/assets/experience/mbapreparations.jpg') }}">
		            			<div class="media-body grey">
		            				<div class="display-set">
			            				<p>Coming soon. Watch this space for more details</p>
									</div>
		            			</div>
		            		</div>
		            	</li>
		            </ul>
		        </div>
		    </div>
		</div>


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