<?php 
$body_class ="home-page";
$meta_title ="Stanza Living";
$meta_keyword ="Stanza Living,Premium student";
$meta_description ="Premium student accommodation in India - move over PGs and hostels!";

?>

@extends('layouts.master.front.landing')

@section('styles')

@endsection

@section('content')



<!-- section-1 start here -->
<div class="section-1">
	<div class="container">
		<div class="content">
			<h1 class="title">sta.nza</h1>
			<p>1. <i>(Italian)</i> room · apartment · chamber</p>
			<P>2. <i>(English)</i> In poetry, a grouped set of lines within a poem usually set off from other similar groupings by an indentation or separation</P> <br>
			<p>As stanzas build the foundations for a poem, Stanza Living aspires to provide world-class
			accommodation to build the foundations for the most important chapter in a student’s life - college <br><br> Come to 
			Stanza Living to find your own room – a room with a unique story, a unique personality and a unique rhythm
			– and let’s create poetry together!</p>
			<span class="row margin-top-50px scroll-set"><a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a></span>
			
		</div>
	</div>
</div>
<!-- section-1 end here -->

<!-- section-2 start here -->
<div class="section-2" id="about">
	<div class="container">
		<div class="content">
			<span class="title">what is stanza</span>
			<P>
			Stanza is a unique housing concept created for students moving to a new place to pursue their dreams. Relocating to a new city or neighbourhood is difficult and nerve-wracking. Everything seems alien - the people, the food, the places. All one wishes for is a sense of belonging, of fraternity and of comfort.<br><br>
			</P>
			<p>
				<b>It is here that Stanza is like a breath of fresh air!</b><br><br>
				Stanza creates and operates world-class residences for students where every detail of the concept has been thoughtfully designed, be it the rooms and common areas on one hand or the service offerings on the other.
				Stanza’s aim is to create a joyful, exciting, secure and truly comfortable place for students to live in – a place where warmth exudes from every corner, where a genuine sense of community is nurtured and where the student will get the perfect platform to succeed and thrive.<br><br>
			</p>
			<p>	<b>Stanza is not just another hostel or paying guest accommodation.</b><br><br>
				Stanza is challenging the status quo on behalf of every student, current and future, who steps out to pursue her/his dreams – Why should a student settle (pun intended!) for anything less than perfection when it comes to housing options? It is time for students to shout out loud – <b>“Sadda Haq Aithe Rakh!”</b></p>

			<span class="row margin-top-50px scroll-set"><a href="#service" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a></span>
		</div>
	</div>
</div>
<!-- section-2 end here -->

<!-- sectio-3 start here -->
<div class="section-3" id="service">
	<div class="container">

	<p class="f-14 center">
	<b>Every student is special – every student has a story to tell, a message to share, a future to create and a dream to turn into reality. </b>
	<br><br>

At Stanza, we believe in this adage and we work night and day to deliver a unique experience to all our residents – an experience intricately crafted by us through a best-in-class collection of <b>facilities, communities and opportunities.</b> 
</p>

		<!-- <ul class="accordion">
          <li class="ac-list">
            <div class="look-1st">
              <span class="banner-holder"><img src="{{ URL::asset('front/images/assets/home/ac-1.jpg') }}"></span>
              <span class="service-name color-1">Facilities</span>
            </div>
            <div class="toggle-div">
                
            </div>
          </li>

          <li class="ac-list">
            <div class="look-1st">
              <span class="banner-holder"><img src="{{ URL::asset('front/images/assets/home/ac-1.jpg') }}"></span>
              <span class="service-name color-2">Communities</span>
            </div>
            <div class="toggle-div">
                
            </div>
          </li>

          <li class="ac-list">
            <div class="look-1st">
              <span class="banner-holder"><img src="{{ URL::asset('front/images/assets/home/ac-1.jpg') }}"></span>
              <span class="service-name color-3">Opportunities</span>
            </div>
            <div class="toggle-div">
              
            </div>
          </li>
      </ul> -->


      <ul class="accordion">
          <li class="ac-list"  id="facility">
            <div class="look-1st">
              <span class="banner-holder"><img src="{{ URL::asset('landing/images/assets/home/ac-1.jpg') }}"></span>
              <a href="#facility" class="service-name color-1">Facilities@Stanza</a>
            </div>
            <div class="toggle-div">
            	<div class="display-setting">
            		<div class="table-view">
		                <ul class="feature-listing">
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon1.png') }}"></span>
		                        <span class="title"><b>Tastefully designed</b> rooms <br> and common areas</span>
		                    </li>
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon2.png') }}"></span>
		                        <span class="title"><b>High quality</b> <br> living infrastructure </span>
		                    </li>
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon3.png') }}"></span>
		                        <span class="title"><b>Technology driven</b> <br> security systems</span>
		                    </li>
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon4.png') }}"></span>
		                        <span class="title"><b>Tasty and healthy</b><br> multi-cuisine food</span>
		                    </li>
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon5.png') }}"></span>
		                        <span class="title">Professionally <b>trained<br> and caring</b> staff</span>
		                    </li>
		                </ul>
	                </div>
                </div>
            </div>
          </li>

          <li class="ac-list">
            <div class="look-1st">
              <span class="banner-holder"><img src="{{ URL::asset('landing/images/assets/home/ac-2.jpg') }}"></span>
              <a href="#facility" class="service-name color-2">Communities@Stanza</a>
            </div>
            <div class="toggle-div">

            	<div class="display-setting">
            		<div class="table-view">
		                <ul class="feature-listing">
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon6.png') }}"></span>
		                        <span class="title"><b>Recreational spaces</b> for <br> relaxing and bonding</span>
		                    </li>
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon7.png') }}"></span>
		                        <span class="title">Year-round <br> <b>events and celebrations</b></span>
		                    </li>
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon8.png') }}"></span>
		                        <span class="title"><b>Reading areas</b> for <br> studying and brainstorming sessions</span>
		                    </li>
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon9.png') }}"></span>
		                        <span class="title">Focus on feedback driven <br> <b>process improvement</b></span>
		                    </li>
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon10.png') }}"></span>
		                        <span class="title"><b>Lifestyle options</b> <br> through targeted tie-ups</span>
		                    </li>
		                </ul>
	                </div>
                </div>
            </div>
          </li>

          <li class="ac-list">
            <div class="look-1st">
              <span class="banner-holder"><img src="{{ URL::asset('landing/images/assets/home/ac-3.jpg') }}"></span>
              <a href="#facility" class="service-name color-3">Opportunities@Stanza</a>
            </div>
            <div class="toggle-div">

            	<div class="display-setting">
            		<div class="table-view">
		               <ul class="feature-listing">
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon11.png') }}"></span>
		                        <span class="title">Carefully sourced <b>experts pool</b> <br> to help sharpen life skills</span>
		                    </li>
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon12.png') }}"></span>
		                        <span class="title">Access to corporate networks <br> for <b>internship opportunities</b></span>
		                    </li>
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon13.png') }}"></span>
		                        <span class="title"><b>Brown bag sessions</b> to <br> network with successful entrepreneurs</span>
		                    </li>
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon14.png') }}"></span>
		                        <span class="title">Access to the <b>Stanza founders, <br> employees and alumni network</b> </span>
		                    </li>
		                    <li class="list">
		                        <span class="icon"><img src="{{ URL::asset('landing/images/assets/home/icon15.png') }}"></span>
		                        <span class="title">Thoughtfully selected <br> <b>knowledge network</b></span>
		                    </li>
		                </ul>
		            </div>
		        </div>
            </div>
          </li>
      </ul>



		<span class="row margin-top-50px"><a href="#team" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a></span>
	</div>
</div>
<!-- section-3 end here -->

<!-- section-4 end here -->
<div class="section-4" id="team">
	<div class="container">
		<span class="title">the <b>stanza</b> founders</span>
		<div class="content">
			<ul class="team-member">
	            <li class="list">
	                <div class="style">
	                    <div class="position-set">
	                      <span class="image"><img src="{{ URL::asset('landing/images/assets/home/team-1.png') }}" alt=""></span>
	                      <div class="content"><!-- 
	                          <span class="name">Anindya Dutta</span> -->
	                          <p> The property geek, Anindya aka ‘Andy' spent the majority of his working life in London plying his skills in real estate, investment banking and private equity at Goldman Sachs and Oaktree Capital. During his time abroad, he spent a few late nights evaluating student living businesses and decided it was time that Indian students finally got what they deserved (yeh hui na baat!). An MBA from IIM Ahmedabad and an engineering graduate from IIT Kharagpur, Anindya is also a keen traveller (he claims to have walked all the streets of Europe!) and is a huge Chelsea Football Club fan. </p>
	                      </div>
	                    </div>
	                    <div class="team-desc">
	                        <span class="team-name">Anindya Dutta</span>
	                        <span class="team-role">Co-Founder</span>
	                    </div>
	                </div>
	            </li>
	            <li class="list">
	                <div class="style">
	                    <div class="position-set">
	                      <span class="image"><img src="{{ URL::asset('landing/images/assets/home/team-2.png') }}" alt=""></span>
	                      <div class="content"><!-- 
	                          <span class="name">Sandeep Dalmia</span> -->
	                          <p> The technology aficionado, Sandeep aka ‘Dalmia’ enjoyed his working life across India, Los Angeles, Philippines and Indonesia in management consulting with Boston Consulting Group. Always wanting to try his hand at entrepreneurship, Dalmia is super excited to moving from giving advice to top businesspersons in the country to shaping the student living experience in India. An MBA from IIM Ahmedabad and an engineering graduate from Delhi College of Engineering, Dalmia loves to road-bike, enjoys poker with friends and is always exploring new malts. </p>
	                      </div>
	                    </div>
	                    <div class="team-desc">
	                        <span class="team-name">Sandeep Dalmia</span>
	                        <span class="team-role">Co-Founder</span>
	                    </div>
	                </div>
	            </li>
	        </ul>
        </div>
	</div>
</div>
<!-- section-4 end here -->
	
		
		
	
	
	
@endsection
	
	
	

