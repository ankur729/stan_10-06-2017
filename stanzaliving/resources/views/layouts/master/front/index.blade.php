<?php 
$page = basename($_SERVER['PHP_SELF']);
$full_url =  url()->current();
$ipaddress =  request()->server('SERVER_ADDR');
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$page_set = explode("/",$uri);
$current_page = $page_set[2];


$student_data = Commonhelper::StudentRecord();
//print_r($student_data);die;

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="row-md-100">
	<head>
		<title>{{$meta_title}}</title>
		<meta name="keyword" content="{{$meta_keyword}}">
		<meta name="description" content="{{$meta_description}}">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="{{ URL::asset('front/images/icon.png') }}" type="image/x-icon"/>

		<link rel="stylesheet" type="text/css" href="{{ URL::asset('front/css/reset.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('front/css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('front/css/media.css') }}">
		<link href="{{ URL::asset('front/plugin/calendar/css/1.css') }}" rel="stylesheet">

		<link href="{{ URL::asset('front/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		<script src="{{ URL::asset('front/js/min.js') }}"></script>
		<script src="{{ URL::asset('front/plugin/calendar/js/1.js') }}"></script> 
		<!-- css end here-->
		
		@yield('styles')
		
	</head>
<body>
<!-- 
<div class="se-pre-con"></div> -->
<div class="main-container">

<!-- header strat here -->




<!-- header start here -->
<div class="header">
	<div class="container">
		<div class="header-section"><!-- 
			<div class="coloum-div col-md-15">
				<a href="#0" class="home-btn"> home</a>
			</div> -->
			<div class="coloum-div"><span class="logo"><img src="{{ URL::asset('front/images/logo.png') }}"></span></div>
			<div class="coloum-div col-md-15">
				<div class="right-menu">
					<!-- <div class="notification">
						<a href="#0" class="icon">
							<i class="number">1</i>
							<i class="fa fa-bell-o" aria-hidden="true"></i>
						</a>
					</div> -->
					
					<div class="notification">
						<a href="#0" class="icon">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
						</a>
					</div>
					<!-- 
					<div class="account-dropdown">
						<span class="icon"><img src="{{ URL::asset('front/images/icon/profile.jpg') }}"></span>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- banner header start here -->
	<div class="banner-header">
		<div class="container">
			<div class="profile-display">
				<div class="coloum-div col-px-150">
				
				<?php if($student_data->s_image!=''){ ?>
									
									<span class="photo">
									<img src="{{ URL::to('public/images/student/'.$student_data->s_image)  }}">
									</span>
									<?php }else{ ?>								
									<span class="photo">
									<img src="{{ URL::asset('front/images/assets/photo.png') }}">
									</span>
									<?php } ?>
									
					
				</div>
				<div class="coloum-div">
					<div class="details">
						<h2 class="name"><?php echo $student_data['s_firstname']." ".$student_data['s_lastname'];?></h2>
						<span class="caption"> London House &nbsp; |  &nbsp; Stanza Unique Id &nbsp; :&nbsp;<?php echo $student_data['s_unique_id_no'];?></span>
					</div>
				</div>
				<div class="coloum-div last">
					<a href="{{ url('/student-profile-update') }}" class="update-btn">Update Profile</a>
				</div>
			</div>
		</div>
		<span class="banner" style="background: url('front/images/bg/banner.jpg') no-repeat center;  background-size: cover;"></span>
	</div>
	<!-- banner header end here -->
</div>
<!-- header end here -->



<?php //include 'incl/header.php'; ?>
<!-- header end here -->

<div class="account-body">


<!-- popup-scroll -->
<div class="all-notification-popup">
	<div class="design-box">
			<span class="main-title">All Notification</span>
		<span class="close-popup"><i class="fa fa-close"></i></span>
		<div class="display-setting">
			<ul class="notification-list">
				<li class="list">
					<div class="coloum-div new center col-px-40">
						<span class="icon"><i class="fa fa-bell-o" aria-hidden="true"></i></span>
					</div>
					<div class="coloum-div">
						<div class="title">Fee Pending <span class="date">24-7-2017</span></div>
						<span class="caption">This is an fee alert please pay your monthly installment</span>
					</div>
				</li>
				<li class="list">
					<div class="coloum-div center col-px-40">
						<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
					</div>
					<div class="coloum-div">
						<div class="title">Fee Pending <span class="date">24-7-2017</span></div>
						<span class="caption">This is an fee alert please pay your monthly installment</span>
					</div>
				</li>
				<li class="list">
					<div class="coloum-div center col-px-40">
						<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
					</div>
					<div class="coloum-div">
						<div class="title">Fee Pending <span class="date">24-7-2017</span></div>
						<span class="caption">This is an fee alert please pay your monthly installment</span>
					</div>
				</li>
				<li class="list">
					<div class="coloum-div new center col-px-40">
						<span class="icon"><i class="fa fa-bell-o" aria-hidden="true"></i></span>
					</div>
					<div class="coloum-div">
						<div class="title">Fee Pending <span class="date">24-7-2017</span></div>
						<span class="caption">This is an fee alert please pay your monthly installment</span>
					</div>
				</li>
				<li class="list">
					<div class="coloum-div center col-px-40">
						<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
					</div>
					<div class="coloum-div">
						<div class="title">Fee Pending <span class="date">24-7-2017</span></div>
						<span class="caption">This is an fee alert please pay your monthly installment</span>
					</div>
				</li>
				<li class="list">
					<div class="coloum-div center col-px-40">
						<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
					</div>
					<div class="coloum-div">
						<div class="title">Fee Pending <span class="date">24-7-2017</span></div>
						<span class="caption">This is an fee alert please pay your monthly installment</span>
					</div>
				</li>
				<li class="list">
					<div class="coloum-div new center col-px-40">
						<span class="icon"><i class="fa fa-bell-o" aria-hidden="true"></i></span>
					</div>
					<div class="coloum-div">
						<div class="title">Fee Pending <span class="date">24-7-2017</span></div>
						<span class="caption">This is an fee alert please pay your monthly installment</span>
					</div>
				</li>
				<li class="list">
					<div class="coloum-div center col-px-40">
						<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
					</div>
					<div class="coloum-div">
						<div class="title">Fee Pending <span class="date">24-7-2017</span></div>
						<span class="caption">This is an fee alert please pay your monthly installment</span>
					</div>
				</li>
				<li class="list">
					<div class="coloum-div center col-px-40">
						<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
					</div>
					<div class="coloum-div">
						<div class="title">Fee Pending <span class="date">24-7-2017</span></div>
						<span class="caption">This is an fee alert please pay your monthly installment</span>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
	<!-- pop-scroll -->

	


	<div class="menu-body">
		<div class="container">
			<ul class="panel-tabs">
				<li class="list <?php if($current_page=='profile'){ echo "active";}?>"><a href="{{ url('/profile') }}" class="link">Dashboard</a></li>
				<li class="list <?php if($current_page=='student-complaint'){ echo "active";}?>"><a href="{{ url('/student-complaint') }}" class="link">Complaint</a></li>
				<li class="list <?php if($current_page=='food-menu'){ echo "active";}?>"><a href="{{ url('/food-menu') }}" class="link">Food</a></li>
				<li class="list <?php if($current_page=='invoice'){ echo "active";}?>"><a href="{{ url('/invoice') }}" class="link">Invoice</a></li>
				<li class="list <?php if($current_page=='student-profile'){ echo "active";}?>"><a href="{{ url('/student-profile') }}" class="link">Profile</a></li>
				<li class="list <?php if($current_page=='vox-populi'){ echo "active";}?>"><a href="{{ url('/vox-populi') }}" class="link">Vox Populi</a></li>
				<li class="list <?php if($current_page=='late-night-out'){ echo "active";}?>"><a href="{{ url('/late-night-out') }}" class="link">Night Requests</a></li>
				<li class="list <?php if($current_page=='stanza-social'){ echo "active";}?>"><a href="{{ url('/stanza-social') }}" class="link">Social</a></li>
				<li class="list <?php if($current_page=='stanza-board'){ echo "active";}?>"><a href="{{ url('/stanza-board') }}" class="link">Spring Board</a></li>
				<li class="list <?php if($current_page=='download'){ echo "active";}?>"><a href="{{ url('/download') }}" class="link">Downloads</a></li>
			</ul>
		</div>
	</div>

	<div class="dashboard">


	


		@yield('content')


	
	
	</div>




</div>


<!-- footer start here -->

<div class="footer">
	<div class="container">
		<div class="display-set">
			<!-- <div class="coloum-div col-md-20">
				<ul class="social">
					<li class="list"><a href="tel:7678237696" class="link" title="+91 - 7678237696, 9958968129"><i class="fa fa-phone"></i></a></li>
					<li class="list"><a  href="mailto:ping@stanzaliving.com" target="_top"class="link"><i class="fa fa-envelope-o"></i></a></li>
					<li class="list"><a href="https://www.facebook.com/StanzaLiving/" class="link"><i class="fa fa-facebook"></i></a></li>
					<li class="list"><a href="https://twitter.com/stanza_living" class="link"><i class="fa fa-twitter"></i></a></li>
					<li class="list"><a href="https://www.instagram.com/stanzaliving/" class="link"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div> -->
			<div class="coloum-div">
				<div class="copyright center">&copy; Stanza Living 2017</div>
				<div class="copyright center">Design & Developed by IDIGITIE PVT. LTD.</div>
			</div>
			<!-- <div class="coloum-div col-md-20">
				<span class="right"><a href="#header" class="scroll-down" style="color: #fff;"><i class="fa fa-angle-up scroll-up-icon"></i></a></span>
			</div> -->
		</div>
	</div>
</div>



<?php //require_once('incl/footer.php');?>
<!-- footer end here -->

</div>

<script type="text/javascript">
	
$('#demo-1').fdatepicker();



$("document").ready(function(){
  $(".tab-slider--body").hide();
  $(".tab-slider--body:first").show();
});



var slidechild=$('.tab-slider--trigger.active').width();
$('.slide-trigger').css('width',slidechild+'px');


//console.log(window.location.hash);

$(".tab-slider--nav li").click(function() {
  $(".tab-slider--body").hide();
  var activeTab = $(this).attr("rel");
  $("#"+activeTab).fadeIn();
  history.pushState({}, '', $(this).attr("href"));
  var setindex=$(this).index();
  var totalliwidth=0;
  var alltoatalliwidth=0;
  $(".tab-slider--nav li").each(function(){

        var setliwidth=$(this).width();
        
        var nsetndex=$(this).index();
        if(nsetndex<setindex){
                
            totalliwidth+=setliwidth;
        }
        alltoatalliwidth+=setliwidth;
        

  });
//console.log(totalliwidth);
 $('.slide-trigger').css('left',totalliwidth);
 $('.slide-trigger').css('width',$(this).width()+'px');
 $('.tab-slider--trigger').removeClass('active');
 $(this).addClass('active');
    
});




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



$(".notification-btn").click(function(){
	$(".all-notification-popup").fadeIn();
});	


$(".all-notification-popup .close-popup").click(function(){
	$(".all-notification-popup").fadeOut();
});	


</script>


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
<!--<script src="{{ URL::asset('front/js/timejquery.min.js') }}"></script>-->
<script src="{{ URL::asset('front/js/timepicki.js') }}"></script>
<script>
$('#timepicker1, #timepicker2, #timepicker3, #timepicker4').timepicki();
</script>
<script src="{{ URL::asset('front/js/timebootstrap.min.js') }}"></script>


<?php //require_once('incl/footercommonjs.php');?>

@stack('scripts')

</body>
</html>