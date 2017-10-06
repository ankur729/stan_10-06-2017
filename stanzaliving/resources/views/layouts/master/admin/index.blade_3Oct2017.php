<!DOCTYPE HTML>
<html>
<head>
<title>Easy Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{ URL::asset('public/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ URL::asset('public/css/style.css') }}"  type='text/css'  rel="stylesheet"/>
<link href="{{ URL::asset('public/css/font-awesome.css') }}"   type='text/css'  rel="stylesheet"> 
<link rel="stylesheet" href="{{ URL::asset('public/css/icon-font.min.css') }}" type='text/css' />
<link rel="stylesheet" href="{{ URL::asset('public/css/popup.css') }}" type='text/css' />
<script src="js/Chart.js"></script>
<link href="{{ URL::asset('public/css/animate.css') }}"  rel="stylesheet" type="text/css">
<script src="{{ URL::asset('public/js/wow.min.js') }}"></script>
<link href="{{ URL::asset('public/css/bootstrap-multiselect.css') }}"  rel="stylesheet" type="text/css">
<link href="{{ URL::asset('public/css/jquery.multiselect.css') }}" rel="stylesheet" type="text/css">

@yield('styles')

<script> new WOW().init(); </script>

<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

<script  src="{{ URL::asset('public/js/jquery-1.10.2.min.js') }}" ></script>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/datepicker.css') }}"/>
<link href="{{ URL::asset('public/plugin/jquery-ui.css') }}" rel="stylesheet">  

<link href="{{ URL::asset('public/plugin/calendar/css/1.css') }}" rel="stylesheet">
<script src="{{ URL::asset('public/plugin/calendar/js/1.js') }}"></script>
 
</head> 
<body class="sticky-header left-side-collapsed"  >
<section>

		<div class="left-side sticky-left-side" >

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="{{ url('admin/dashboard') }}">Stanza <span>Mgmt.</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="{{ url('admin/dashboard') }}"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">
	<?php $left_menu=Helper::leftMenu()?>
   	<?php usort($left_menu,'Helper::lmsort');?>
				<!--sidebar nav start-->
	<ul class="nav nav-pills nav-stacked custom-nav">
	<?php foreach($left_menu as $lm):?>
	<?php if(count($lm['child'])>0){?>
		<li class="menu-list">
							<a href="javascript:void(0)"><?php echo $lm['icon_label'];?></i>
								<span><?php echo $lm['label'];?></span></a>
							<?php if(count($lm['child'])>0){?>
								<ul class="sub-menu-list">
								<?php foreach($lm['child'] as $lmc){?>
									<li><a href="<?php echo $lmc['link'];?>"><?php echo $lmc['label'];?></a> </li>
								<?php } ?>
								</ul>
							<?php }?>
		</li>
		<?php }else{?> 
		<li><a href="<?php echo $lm['link'];?>"><?php echo $lm['icon_label'];?><span><?php echo $lm['label'];?></span></a></li>
		<?php } ?>
      
	<?php endforeach; ?>
 
     </ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    

    			<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p> {{Auth::user()->name }}<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="{{ url('admin_logout') }}" ><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					<!-- <div class="social_icons">
						<div class="col-md-4 social_icons-left">
							<a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
						</div>
						<div class="col-md-4 social_icons-left pinterest">
							<a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
						</div>
						<div class="col-md-4 social_icons-left twi">
							<a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
						</div>
						<div class="clearfix"> </div>
					</div> -->            	
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>


			@yield('content')
		<!-- //header-ends -->
		</div>

		 <!--footer section start-->
			<footer>
			   <p>&copy 2017 Stanza. All Rights Reserved | Design & Developed by <a href="http://www.idigitie.com/" target="_blank">Idigitie Pvt. Ltd.</a></p>
			</footer>
        <!--footer section end-->




    </section>


    <script src="{{ URL::asset('public/js/jquery.nicescroll.js') }}"></script>
	<script src="{{ URL::asset('public/js/scripts.js') }}" ></script>
	<!-- Bootstrap Core JavaScript -->
    <!--<script src="{{ URL::asset('public/js/bootstrap.min.js') }}" ></script>-->

    <script src="{{ URL::asset('public/js/classie.js') }}" ></script>
    <script src="{{ URL::asset('public/js/modalEffects.js') }}" ></script>
     <script src="{{ URL::asset('public/js/bootstrap-multiselect.js') }}" ></script>
      <!--<script src="{{ URL::asset('public/js/jquery-1.9.1.min.js') }}" type="text/javascript"></script>-->
   <script src="{{ URL::asset('public/plugin/jquery-ui.js') }}" type="text/javascript"></script>




     <script type="text/javascript">
	
     	   $(document).ready(function() {
        $('#example-multiple-optgroups').multiselect();
    });
	
	
     </script>
<script type="text/javascript">
	//$('#dpd1').fdatepicker();
	var nowTemp = new Date();
	var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
	var checkin = $('#dpd1').fdatepicker({
		onRender: function (date) {
		return date.valueOf() < now.valueOf() ? 'disabled' : '';
		}
		}).on('changeDate', function (ev) {
			if (ev.date.valueOf() > checkout.date.valueOf()) {
				var newDate = new Date(ev.date)
				newDate.setDate(newDate.getDate() + 1);
				checkout.update(newDate);
			}
		checkin.hide();
		$('#dpd2')[0].focus();
		}).data('datepicker');
		
	var checkout = $('#dpd2').fdatepicker({
			onRender: function (date) {
			return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
		}
	}).on('changeDate', function (ev) {
		checkout.hide();
}).data('datepicker');
</script>


    @stack('scripts')
    </body>
    </html>