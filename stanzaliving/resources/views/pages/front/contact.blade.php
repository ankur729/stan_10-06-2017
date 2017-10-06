<?php 
$body_class ="contact-page";
$meta_title ="Stanza Living : Gallery";
$meta_keyword ="Stanza Living,Premium student";
$meta_description ="Premium student accommodation in India - move over PGs and hostels!";
?>

@extends('layouts.master.front.landing')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/plugin/calendar/css/1.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/plugin/tab/skeletabs.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/plugin/accord/src/ziehharmonika.css') }}" />

@endsection

@section('content')




<div class="section-1">
	<div class="container">
	

		<form class="contact-form" name="contactform" action="contact/contactform" onSubmit="return validation()" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
			@if(Session::has('message'))
			<div class="successmsg" id="successMessage">
			<p class="alert {{ Session::get('alert-class', 'alertsuccess') }}">{{ Session::get('message') }}</p>
			</div>
			@endif



        	 <div class="heading-dark text-center">get in touch </div>
           <ul>
            <li class="heft-left"><input name="name" placeholder="Your Name" type="text"></li>
            <li class="heft-right"><input name="phone" placeholder="Phone" type="text"></li>
            <li class="heft-left"><input name="email" placeholder="Email ID" type="email"></li>
            <li class="heft-right"><input name="subject" placeholder="Subject" type="text"></li>
             <li class="form-full">
               <textarea placeholder="Message" name="message"></textarea>
             </li>
              <li><input value="Submit" name="submit" class="btn-green" type="submit"></li>
           </ul>
         </form>

         <div class="contact-info-right">
              <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.8581761796177!2d77.20072491456106!3d28.69388878805331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfdf3abbb0085%3A0xd40a04dbbd6a7b27!2sStanza+Living+%7C+LA+House+%7C+Delhi+University+student+accommodation!5e0!3m2!1sen!2sin!4v1496816055667" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="map-info">    
                 <div class="heading-dark">contact info </div>
                 <ul>
                        <li><span><i class="fa fa-home"></i></span> F-1, single storey, vijay nagar, new delhi</li>
                        <li><span><i class="fa fa-phone"></i></span> +91-9958968129</li>
                        <li><span><i class="fa fa-mobile"></i></span> +91-7678237696</li>
                        <li><span><i class="fa fa-envelope"></i></span> ping@stanzaliving.com</li>
                        <li><span><i class="fa fa-globe"></i></span> www.stanzaliving.com.com</li>
                    </ul>
             </div>
             </div>
	</div>
</div>





@endsection

@push('scripts')

<script src="{{ URL::asset('landing/plugin/calendar/js/1.js') }}"></script>
<script src="{{ URL::asset('landing/plugin/tab/skeletabs.min.js') }}"></script>
<script src="{{ URL::asset('landing/plugin/accord/src/ziehharmonika.js') }}"></script>
<script type="text/javascript">

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
		// collapsible: true,
		// prefix: '★'
	});
});

</script>
<script>
		function validation(){
		
			if(document.contactform.name.value==''){
				alert('please enter your name');
				document.contactform.name.focus();
				return false;
			}
			
			if(document.contactform.email.value==''){
				alert('please enter your email');
				document.contactform.email.focus();
				return false;
			}
			
			if(document.contactform.phone.value==''){
				alert('please enter your mobile');
				document.contactform.phone.focus();
				return false;
			}
			
			if(document.contactform.phone.length<10 || document.contactform.phone.length>15){
				alert('please enter your mobile');
				document.contactform.phone.focus();
				return false;
			}
			
			if(document.contactform.subject.value==''){
				alert('please enter your subject');
				document.contactform.subject.focus();
				return false;
			}
			
			if(document.contactform.message.value==''){
				alert('please enter your subject');
				document.contactform.message.focus();
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
		
		<script> 


$(document).ready(function(){
        setTimeout(function() {
          $('#successMessage').fadeOut('slow');
         // $('#errorMessage').fadeOut('slow');
        }, 4000); // <-- time in milliseconds
    });
</script>


@endpush


