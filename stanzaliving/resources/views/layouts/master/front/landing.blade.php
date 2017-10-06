<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="row-md-100">
	<head>
		<title>{{$meta_title}}</title>
		<meta name="keyword" content="{{$meta_keyword}}">
		<meta name="description" content="{{$meta_description}}">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>

		<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/css/reset.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/css/media.css') }}">

		<link href="{{ URL::asset('landing/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		<script src="{{ URL::asset('landing/js/min.js') }}"></script>
		<!-- css end here-->
		
	@yield('styles')
		
	</head>

<body class="{{$body_class}}" id="header">

<!-- book now popup start here -->

<link href="{{ URL::asset('landing/plugin/calendar/css/1.css') }}" rel="stylesheet">
<?php
$display=0;
$mandatory_error='';
$valid_email='';
if(isset($_POST['booknow'])){
$display=1;
extract($_POST);
if($house_name=='' || $applicant_name=='' || $home_city=='' || $phone=='' || $email=="" || $room_choice=='' || $message=='' || $dateofjoin==''){

		$mandatory_error="Field is required";
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$valid_email="Please enter a valid email";
}else{
			
			require_once './phpmailer/class.phpmailer.php';

				$mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch
				
				try {
				$body="<div>
					<p>Hello ,</p>
					<p>Please find the detials below:-</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<table>
						<tr>
							<td>House Name</td>
							<td>$house_name</td>
						</tr>
						<tr>
							<td>Applicant Name</td>
							<td>$applicant_name</td>
						</tr>
						<tr>
							<td>Home City</td>
							<td>$home_city</td>
						</tr>
						<tr>
							<td>Phone</td>
							<td>$phone</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>$email</td>
						</tr>
						<tr>
							<td>Room Choice</td>
							<td>$room_choice</td>
						</tr>
						<tr>
							<td>Message</td>
							<td>$message</td>
						</tr>
						<tr>
							<td>Date of visit</td>
							<td>$dateofjoin</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>Kind Regards<br />
					Stanza Living
					</p>
					</div>";
					
				$body_customer="<div>
					<p>Hello $applicant_name,</p>
					<p>Thank you for contacting us. The Stanza team will get back to you shortly.</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>Kind Regards<br />
					Stanza Living
					</p>
					</div>";
				
				
				///////////Email 1////////////////
				  	$mail->AddAddress('stanzaliving@gmail.com', 'Stanza Living');
				  //$mail->AddAddress('vishalgarg.love@gmail.com', 'Stanza Living');
					$mail->AddAddress('ping@stanzaliving.com', 'Stanza Living');
				  $mail->SetFrom('donotreply@stanzaliving.com', 'Stanza Living');
				  $mail->Subject = 'One enquiry received';
				  $mail->MsgHTML($body);
				  $mail->Send();
				  
				  
				  $mail2 = new PHPMailer(true);
				  ///////////Email 2////////////////
				  $mail2->AddAddress($email);
				  $mail2->SetFrom('donotreply@stanzaliving.com', 'Stanza Living');
				  $mail2->Subject = 'Thank you for contacting us';
				  $mail2->MsgHTML($body_customer);
				  $mail2->Send();
				  
				  header('Location:thankyou.php');
				} catch (phpmailerException $e) {
				  echo $e->errorMessage(); //Pretty error messages from PHPMailer
				} catch (Exception $e) {
				  echo $e->getMessage(); //Boring error messages from anything else!
				}
						
		
		}

}
?>
<style>
.booknow_error{
color:red;
font-size:14px;
}
</style>
<div class="book-now-popup" <?php if($display==0){?>style="display:none"<?php }?>>
<form method="post" action="">
	<div class="design-box">
		<span class="close-popup"><i class="fa fa-close"></i></span>
		<div class="inner-data">
			<div class="head-data">
				<span class="logo"><img src="{{ URL::asset('landing/images/logo-2.png') }}"></span>
				<span class="title">arrange viewing</span>
				<span class="data-capture">please select a <span class="arr-view-title">hostel</span></span>
			</div>

			<ul class="hostel-list">
				<li class="list">
					<div class="style">
						<span class="thumb"><img src="{{ URL::asset('landing/images/assets/residences/location.jpg') }}"></span>
						<span class="title">london house<!-- <span class="f-16 row color-green">(girls only)</span> --></span>
						<span class="address">C-19, single storey, vijay nagar</span>
						<label class="view-more <?php if(@$_POST['house_name']=='London House'){echo "active";}?>">select <input type="radio" name="house_name" class="house_name" value="London House" <?php if(@$_POST['house_name']=='London House'){echo "checked='checked'";}?>> </label>
					</div>
				</li>
				<li class="list">
					<div class="style">
						<span class="thumb"><img src="{{ URL::asset('landing/images/assets/residences/location1.jpg') }}"></span>
						<span class="title">new york house<!-- <span class="f-16 row color-green">(girls only)</span> --></span>
						<span class="address">124, old gupta colony</span>
						<label class="view-more <?php if(@$_POST['house_name']=='Newyork House'){echo "active";}?>">select <input type="radio" name="house_name" class="house_name" value="Newyork House" <?php if(@$_POST['house_name']=='Newyork House'){echo "checked='checked'";}?>> </label>
					</div>
				</li>
				<li class="list">
					<div class="style">
						<span class="thumb"><img src="{{ URL::asset('landing/images/assets/residences/location2.jpg') }}"></span>
						<span class="title">los angeles house  <!-- <span class="f-16 row color-green">(girls only)</span> --></span>
						<span class="address">F-1, single storey, vijay nagar</span>
						<label class="view-more <?php if(@$_POST['house_name']=='Los Angeles House'){echo "active";}?>">select <input type="radio" name="house_name" class="house_name" value="Los Angeles House" <?php if(@$_POST['house_name']=='Los Angeles House'){echo "checked='checked'";}?>> </label>
					</div>
				</li>
			</ul>
			<div class="booknow_error"><?php echo @$_POST['home_city']==''?$mandatory_error:'';?></div>
			<div class="form-part">
				<span class="instruction">Please fill the information to send us your interest.</span>
				<div class="row">
					<div class="col-md-50  padding-right-10px  left">
						<div class="input-div">
							<input type="text" name="applicant_name" class="input-box" placeholder="applicant name" value="<?php echo @$_POST['applicant_name']?>">
							<div class="booknow_error"><?php echo @$_POST['applicant_name']==''?$mandatory_error:'';?></div>
						</div>
					</div>
					<div class="col-md-50 padding-left-10px left">
						<div class="input-div">
							<input type="text" name="home_city" class="input-box" placeholder="Home City" value="<?php echo @$_POST['home_city']?>">
							<div class="booknow_error"><?php echo @$_POST['home_city']==''?$mandatory_error:'';?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-50 left  padding-right-10px  ">
						<div class="input-div">
							<input type="text" name="phone" class="input-box" placeholder="phone" value="<?php echo @$_POST['phone']?>">
							<div class="booknow_error"><?php echo @$_POST['phone']==''?$mandatory_error:'';?></div>
						</div>
					</div>
					<div class="col-md-50 left padding-left-10px ">
						<div class="input-div">
							<input type="text" name="email" class="input-box" placeholder="email" value="<?php echo @$_POST['email']?>">
							<div class="booknow_error"><?php echo @$_POST['email']==''?$mandatory_error:'';?><?php echo $valid_email;?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-50 left padding-right-10px  ">
						<div class="input-div">
							<select class="select-option room_choice" name="room_choice">
								<option value="single sharing" <?php if(@$_POST['room_choice']=='single sharing'){echo "selected='selected'";}?>>single sharing</option>
							<?php 
								if(in_array(@$_POST['house_name'],array('Newyork House','London House'))){
							?>
								<option value="twin sharing" <?php if(@$_POST['room_choice']=='twin sharing'){echo "selected='selected'";}?>>twin sharing</option>
							<?php 
							}elseif(@$_POST['house_name']=='Los Angeles House'){
							?>
								<option value="triple sharing" <?php if(@$_POST['room_choice']=='triple sharing'){echo "selected='selected'";}?>>triple sharing</option>
							<?php
							}else{
							?>
							<option value="twin sharing" <?php if(@$_POST['room_choice']=='twin sharing'){echo "selected='selected'";}?>>twin sharing</option>
							<?php
							}
							?>
								
								
							</select>
							<div class="booknow_error"><?php echo @$_POST['room_choice']==''?$mandatory_error:'';?></div>
						</div>
					</div>
					<div class="col-md-50 left padding-left-10px ">
						<div class="input-div">
							<input type="text" name="dateofjoin" class="input-box" placeholder="Select Date" value="<?php echo @$_POST['dateofjoin']?>" data-date-format="dd/mm/yy hh:ii" id="booknowdate">
							<div class="booknow_error"><?php echo @$_POST['dateofjoin']==''?$mandatory_error:'';?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-100 left">
						<div class="input-div">
							<textarea class="textarea" placeholder="leave a message" name="message"><?php echo @$_POST['message']?></textarea>
							<div class="booknow_error"><?php echo @$_POST['message']==''?$mandatory_error:'';?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-div center">
						<input type="submit" name="booknow" class="submit-btn">
					</div>
				</div>
			</div>

			<p class="alert-note">Please note that this enquiry does not guarantee you a seat in the residences. You may, however, choose to “Book Now" with us by paying a token fee (INR 5,000/- Non-refundable)* online for initiating a faster admission process.<a href="<?php echo @$base_url;?>pre-register.php" class="link">pay here</a></p>
		</div>
	</div>
	</form>
</div>
<script src="{{ URL::asset('landing/plugin/calendar/js/1.js') }}"></script> 
<script>





$('.house_name').click(function(){
	var house_name=$(this).val();
	$('.arr-view-title').text(house_name);
	if(house_name=='Newyork House' || house_name=='London House'){
		$('.room_choice').html("<option val='single sharing'>single sharing</option><option val='twin sharing'>twin sharing</option>");
	}else if(house_name=='Los Angeles House'){
		$('.room_choice').html("<option val='single sharing'>single sharing</option><option val='triple sharing'>triple sharing</option>");
	}
});

$('#booknowdate').fdatepicker({
	closeButton: false,
	pickTime:true
});
</script>


<?php //require_once('incl/booknowpopup.php');?>
<!-- book now popup end here -->


<!-- Logn Popup -->
<!--<form name="loginform" id="loginform" method="post" action="{{ url('/studentlogin') }}">-->
<form name="loginform" id="loginform" method="post" action="">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
{{ csrf_field() }}

		
<div class="otp-popup">
	<div class="design-box">
		<span class="close-popup"><i class="fa fa-close"></i></span>
		<div class="display-setting">
			<h4 class="title">login</h4>
			
			<div class="caption print-error-msg" ><ul></ul></div>

			<div class="input-div margin-top-30px">
				<input type="text" name="email" id="login_email" class="input-box" placeholder="enter user id">
				@if ($errors->has('email'))
				<div class="error">{{ $errors->first('email') }}</div>
				@endif
			</div>
			<div class="input-div margin-top-30px">
				<input type="password" name="password" id="login_password" class="input-box" placeholder="password">
				@if ($errors->has('password'))
				<div class="error">{{ $errors->first('password') }}</div>
				@endif
			</div>
			<!-- <div class="revert-msg">
				<span class="error">Incorrect OTP.</span>
			</div> -->
			<ul class="buttons"><!-- 
				<li class="list"><span class="resend">Resend OTP</span></li> -->
				<li class="list"><input type="submit" name="loginbtn" id="loginbtn" class="submit-btn" value="submit"></li>
			</ul>
		</div>
	</div>
</div>
</form>

<?php //require_once('incl/loginpopup.php');?>

<!-- Logn Popup -->

<div class="se-pre-con"></div>
<div class="main-container">

<!-- header start here -->

<div class="header">
	<div class="top-bar">
		<div class="container">
			<ul class="link-list">
				<li class="list"><a href="{{ URL::asset('landing/images/assets/download.jpg') }}" download="" class="link">Download</a></li>
				<?php if(session('student_id')==''){?>
				<li class="list"><a href="#0" class="link login-btn">Stanzen Login</a></li>
				<?php } else{?>
				<li class="list"><a href="{{ url('/profile') }}" class="link">My Account</a></li>
				<li class="list"><a href="{{ url('/studentlogout') }}" class="link">Logout</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="middle-bar">
		<div class="container">
			<div class="display">
				<div class="coloum-div">
					<span class="logo"><a href="index.php" class="link"><img src="{{ URL::asset('landing/images/logo.png') }}"></a></span>
					<div class="toggle">
						<a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="coloum-div">
					<ul class="more-btn">
						<li class="list"><a href="pre-register" class="link">Book Online</a></li>
						<li class="list"><a href="javascript:void(0)"  id="arrng_viewing"  class="link openbookpopup">Arrange Viewing</a></li>
					</ul>
					<ul class="nav">
						<li class="list"><a href="index" class="link">Home</a></li>
						<li class="list"><a href="experience" class="link">Experience</a></li>
						<li class="list"><a href="residence" class="link">Residences</a></li>
						<li class="list"><a href="gallery" class="link">Gallery</a></li>
						<li class="list"><a href="blog" class="link">Blog</a></li>
						<li class="list"><a href="contact" class="link">Contact Us</a></li>
						<li class="list"><a href="residence" class="link">Book Online</a></li>
						<li class="list" ><a href="residence" class="link">Arrange Viewing</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php //require_once('incl/menu.php');?>
<!-- header end here -->


@yield('content')


<!-- footer start here -->

<div class="footer">
	<div class="container">
		<div class="display-set">
			<div class="coloum-div col-md-20">
				<ul class="social">
					<li class="list"><a href="tel:7678237696" class="link" title="+91 - 7678237696, 9958968129"><i class="fa fa-phone"></i></a></li>
					<li class="list"><a  href="mailto:ping@stanzaliving.com" target="_top"class="link"><i class="fa fa-envelope-o"></i></a></li>
					<li class="list"><a href="https://www.facebook.com/StanzaLiving/" class="link"><i class="fa fa-facebook"></i></a></li>
					<li class="list"><a href="https://twitter.com/stanza_living" class="link"><i class="fa fa-twitter"></i></a></li>
					<li class="list"><a href="https://www.instagram.com/stanzaliving/" class="link"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
			<div class="coloum-div">
				<div class="copyright center">&copy; Stanza Living 2017</div>
				<div class="copyright center">Design & Developed by IDIGITIE PVT. LTD.</div>
			</div>
			<div class="coloum-div col-md-20">
				<span class="right"><a href="#header" class="scroll-down" style="color: #fff;"><i class="fa fa-angle-up scroll-up-icon"></i></a></span>
			</div>
		</div>
	</div>
</div>

<?php //require_once('incl/footer.php');?>
<!-- footer end here -->

</div>
<script type="text/javascript">
	
// $(window).scroll(function(){
//   var megamenu = $('.header .middle-bar'),
//       scroll = $(window).scrollTop();

//   if (scroll >= 100) megamenu.addClass('fixedmenu');
//   else megamenu.removeClass('fixedmenu');


//   if (scroll >= 2500) megamenu.removeClass('fixedmenu');

// });

$(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top;
	
    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
});




if ($(window).width() < 800) {
   	$('.look-1st').click(function(){
   		if($('.toggle-div').is(":visible")){

   			$('.toggle-div').slideUp();
   		}
   		$(this).next('.toggle-div').slideDown();

   	});
}
else {
   $(".ac-list").hover(function(){
    $('.ac-list').css("width",'5%');
    $('.ac-list').css("transition",'.5 easing');
   $(this).next(".look-1st").slideToggle();
   $(this).css("width" , "90%");
   $('.service-name').addClass('active');
   $('.banner-holder').hide();
   $(this).find('.toggle-div').css('transform','scale(1)');
   $(this).find('.toggle-div').show();
  },
  function(){
    $(this).find('.service-name').removeClass('active');
     $('.ac-list').css("width",'33.3%');
    $('.banner-holder').show();
    $('.service-name').removeClass('active');
    $(this).find('.toggle-div').hide();
   $(this).find('.toggle-div').css('transform','scale(0)');
 
  }); 

}

</script>

<!-- Footer Common Start-->
<script>
$(".close-popup").click(function(){
	$(".otp-popup").fadeOut();
});

$(".login-btn").click(function(){
		$(".otp-popup").fadeIn();
});
	
$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});

	$(".toggle").click(function() {
		$(".nav").slideToggle();
	})

	$(".book-now-popup .style .view-more").click(function(){
		$(".book-now-popup .style .view-more").removeClass('active');
		$(this).addClass("active");
	});	

	$(".openbookpopup").click(function(){
		$('.book-now-popup').fadeIn();
	});	
	$(".book-now-popup .close-popup").click(function(){
		$(".book-now-popup").fadeOut();
	});	
</script>
<script>
	!function() {
	var t;
	if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
	t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
	t.factory = function(e) {
	return function() {
	var n;
	return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
	};
	}, t.methods.forEach(function(e) {
	t[e] = t.factory(e);
	}), t.load = function(t) {
	var e, n, o, i;
	e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
	o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
	n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
	});
	}();
	drift.SNIPPET_VERSION = '0.3.1';
	drift.load('u4a5wxr8pc8n'); 

</script>

<?php //require_once('incl/footercommonjs.php');?>

<!-- Footer Common End -->


<script type="text/javascript">

function validateEmail(emailAddress) {
	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);	
	return pattern.test(emailAddress);
}

//$(document).ready(function(){
$('#arrng_viewing').click(function(){
 
	alert('ddd');
    console.log('dddd');
//   $.ajax({
//     type:'GET',
//     cache: false,
//     url:'admin/student/findcities',
//     data:{s_id:s_id},
     
//     beforeSend:function(){
 
//     },
//     success:function(data){

//     	console.log(data);
//  	//alert(data);	
// 	//    $('#cities').html(data);


//     }
// });
});
//});

$(document).ready(function() {
	
	       $("#loginbtn").click(function(e){
			   
	    	e.preventDefault();

	    	var _token = $("input[name='_token']").val();	    	
	    	var email = $("#login_email").val();
	    	var password = $("#login_password").val();
			
			var validemail = validateEmail(email);	

			
		if(email ==''){
			$(".print-error-msg").find("ul").html('');
			$(".print-error-msg").find("ul").append('<li style="color:#FF0000">Please Enter Email</li>');	
			$('#login_email').focus();
			return false;
		}else if(validemail == false){
			$(".print-error-msg").find("ul").html('');
			$(".print-error-msg").find("ul").append('<li style="color:#FF0000">Please Enter Valid Email</li>');		
			$('#login_email').focus();
			return false;
		}else if(password == ''){
			$(".print-error-msg").find("ul").html('');
			$(".print-error-msg").find("ul").append('<li style="color:#FF0000">Please Enter Valid Email</li>');		
			$('#login_password').focus();
			return false;
		}else{
	
	        $.ajax({
	            //url: "/login-form",
				  url: "{{ url('/login-form') }}",
	            type:'POST',
	            data: {_token:_token, email:email, password:password},
	            success: function(data) {
					
					$(".print-error-msg").find("ul").html('');
					$(".print-error-msg").css('display','block');
					
					
	                if($.isEmptyObject(data.error)){
	                //alert(data.success);
					value = data.success;					
					$(".print-error-msg").find("ul").append('<li style="color:#329926">'+value+'</li>');
					window.location.href = '{{url("/profile")}}';
					
	                }else{						
	                 value = data.error;					
					$(".print-error-msg").find("ul").append('<li style="color:#FF0000">'+value+'</li>');
						
	                }
	            }
	        });
			
		}

	    }); 

	   
	});

</script>


@stack('scripts')
</body>
</html>