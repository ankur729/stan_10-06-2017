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

			<div class="invoice-panel">
				<div class="invoice-bg">
					<h4 class="main-title">Rent Invoice </h4>
					<ul class="table-structure">
						<li class="list main">
							<div class="coloum-div col-md-15"><span class="title">Period</span></div>
							<div class="coloum-div col-md-15"><span class="title">Start date</span></div>
							<div class="coloum-div col-md-15"><span class="title">End date</span></div>
							<div class="coloum-div col-md-15"><span class="title">Rent Due</span></div>
							<div class="coloum-div"><span class="title">Payment Status</span></div>
							<div class="coloum-div col-px-150"><span class="title">Generate Invoice</span></div>
						</li>
						<li class="list">
							<div class="coloum-div col-md-15"><span class="title">1</span></div>
							<div class="coloum-div col-md-15"><span class="title">27-7-2017</span></div>
							<div class="coloum-div col-md-15"><span class="title">27-8-2017</span></div>
							<div class="coloum-div col-md-15"><span class="title b"> <i class="fa fa-inr"></i> 500</span></div>
							<div class="coloum-div"><span class="title  info">Paid</span></div>
							<div class="coloum-div col-px-150"><a href="#0" class="genrate-btn">Generate <br> Invoice</a></div>
						</li>
						<li class="list">
							<div class="coloum-div col-md-15"><span class="title">2</span></div>
							<div class="coloum-div col-md-15"><span class="title">27-7-2017</span></div>
							<div class="coloum-div col-md-15"><span class="title">27-8-2017</span></div>
							<div class="coloum-div col-md-15"><span class="title b"><i class="fa fa-inr"></i> 500</span></div>
							<div class="coloum-div"><span class="title lil-due">Due</span></div>
							<div class="coloum-div col-px-150"><a href="#0" class="genrate-btn">Generate <br> Invoice</a></div>
						</li>
						<li class="list">
							<div class="coloum-div col-md-15"><span class="title">3</span></div>
							<div class="coloum-div col-md-15"><span class="title">27-7-2017</span></div>
							<div class="coloum-div col-md-15"><span class="title">27-8-2017</span></div>
							<div class="coloum-div col-md-15">
								<div class="row"><span class="title b"><i class="fa fa-inr"></i> 500</span></div>
								<span class="title-panalty">Penalty of <i class="fa fa-inr"></i> 500</span>
							</div>
							<div class="coloum-div"><span class="title dead-due">Overdue</span></div>
							<div class="coloum-div col-px-150"><a href="#0" class="genrate-btn">Generate <br> Invoice</a></div>
						</li>
						<li class="list">
							<div class="coloum-div col-md-15"><span class="title">4</span></div>
							<div class="coloum-div col-md-15"><span class="title">27-7-2017</span></div>
							<div class="coloum-div col-md-15"><span class="title">27-8-2017</span></div>
							<div class="coloum-div col-md-15">
								<div class="row"><span class="title b"><i class="fa fa-inr"></i> 500</span></div>
								<span class="title-panalty">Penalty of <i class="fa fa-inr"></i> 500</span>
							</div>
							<div class="coloum-div"><span class="title dead-due">Overdue</span></div>
							<div class="coloum-div col-px-150"><a href="#0" class="genrate-btn">Generate <br> Invoice</a></div>
						</li>
						<li class="list  de-activated">
							<div class="coloum-div col-md-15"><span class="title">5</span></div>
							<div class="coloum-div col-md-15"><span class="title">27-7-2017</span></div>
							<div class="coloum-div col-md-15"><span class="title">27-8-2017</span></div>
							<div class="coloum-div col-md-15">
								<div class="row"><span class="title b"><i class="fa fa-inr"></i> 500</span></div>
								<span class="title-panalty">Penalty of <i class="fa fa-inr"></i> 500</span>
							</div>
							<div class="coloum-div"><span class="title dead-due">Overdue</span></div>
							<div class="coloum-div col-px-150"><a href="#0" class="genrate-btn">Generate <br> Invoice</a></div>
						</li>
					</ul>
				</div>
			</div>
	</div>

		<div class="work-body">
			<div class="invoice-panel">
			<div class="invoice-bg">
				<h4 class="main-title">Electricity Invoice </h4>
				<ul class="table-structure">
					<li class="list main">
						<div class="coloum-div col-px-100"><span class="title">Period</span></div>
						<div class="coloum-div"><span class="title">Start date</span></div>
						<div class="coloum-div col-px-150"><span class="title">Meter reading</span></div>
						<div class="coloum-div col-px-100"><span class="title">End date</span></div>
						<div class="coloum-div col-px-150"><span class="title">Meter reading</span></div>
						<div class="coloum-div col-px-100"><span class="title">Unit Consumed</span></div>
						<div class="coloum-div col-px-100"><span class="title">Total Bill</span></div>
						<div class="coloum-div col-px-100"><span class="title">Payment Status</span></div>
						<div class="coloum-div col-px-150"><span class="title">Generate Invoice</span></div>
					</li>
					<li class="list">
						<div class="coloum-div col-px-100"><span class="title">1</span></div>
						<div class="coloum-div"><span class="title">27-7-2017</span></div>
						<div class="coloum-div col-px-150"><span class="title"><a href="https://4.bp.blogspot.com/-NGvInHs8Jt0/WLZsnPTUa_I/AAAAAAAAAJE/rIQXf66K0fYPwN3LrKxz1stGL4fKFxUIgCPcB/s640/Image-4.png') }}" class="link">105</a></span></div>
						<div class="coloum-div col-px-100"><span class="title">27-8-2017</span></div>
						<div class="coloum-div col-px-150"><span class="title"><a href="https://4.bp.blogspot.com/-NGvInHs8Jt0/WLZsnPTUa_I/AAAAAAAAAJE/rIQXf66K0fYPwN3LrKxz1stGL4fKFxUIgCPcB/s640/Image-4.png') }}" class="link">205</a></span></div>
						<div class="coloum-div col-px-100"><span class="title">100</span></div>
						<div class="coloum-div col-px-100"><span class="title b"><i class="fa fa-inr"></i> 700</span></div>
						<div class="coloum-div col-px-100"><span class="title">Done</span></div>
						<div class="coloum-div col-px-150"><a href="#0" class="genrate-btn">Generate <br> Invoice</a></div>
					</li>
					<li class="list">
						<div class="coloum-div col-px-100"><span class="title">2</span></div>
						<div class="coloum-div"><span class="title">27-7-2017</span></div>
						<div class="coloum-div col-px-150"><span class="title"><a href="https://4.bp.blogspot.com/-NGvInHs8Jt0/WLZsnPTUa_I/AAAAAAAAAJE/rIQXf66K0fYPwN3LrKxz1stGL4fKFxUIgCPcB/s640/Image-4.png') }}" class="link">105</a></span></div>
						<div class="coloum-div col-px-100"><span class="title">27-8-2017</span></div>
						<div class="coloum-div col-px-150"><span class="title"><a href="https://4.bp.blogspot.com/-NGvInHs8Jt0/WLZsnPTUa_I/AAAAAAAAAJE/rIQXf66K0fYPwN3LrKxz1stGL4fKFxUIgCPcB/s640/Image-4.png') }}" class="link">205</a></span></div>
						<div class="coloum-div col-px-100"><span class="title">100</span></div>
						<div class="coloum-div col-px-100"><span class="title b"><i class="fa fa-inr"></i> 700</span></div>
						<div class="coloum-div col-px-100"><span class="title">Done</span></div>
						<div class="coloum-div col-px-150"><a href="#0" class="genrate-btn">Generate <br> Invoice</a></div>
					</li>
					<li class="list  de-activated">
						<div class="coloum-div col-px-100"><span class="title">3</span></div>
						<div class="coloum-div"><span class="title">27-7-2017</span></div>
						<div class="coloum-div col-px-150"><span class="title"><a href="https://4.bp.blogspot.com/-NGvInHs8Jt0/WLZsnPTUa_I/AAAAAAAAAJE/rIQXf66K0fYPwN3LrKxz1stGL4fKFxUIgCPcB/s640/Image-4.png') }}" class="link">105</a></span></div>
						<div class="coloum-div col-px-100"><span class="title">27-8-2017</span></div>
						<div class="coloum-div col-px-150"><span class="title"><a href="https://4.bp.blogspot.com/-NGvInHs8Jt0/WLZsnPTUa_I/AAAAAAAAAJE/rIQXf66K0fYPwN3LrKxz1stGL4fKFxUIgCPcB/s640/Image-4.png') }}" class="link">205</a></span></div>
						<div class="coloum-div col-px-100"><span class="title">100</span></div>
						<div class="coloum-div col-px-100"><span class="title b"><i class="fa fa-inr"></i> 700</span></div>
						<div class="coloum-div col-px-100"><span class="title">Done</span></div>
						<div class="coloum-div col-px-150"><a href="#0" class="genrate-btn">Generate <br> Invoice</a></div>
					</li>
				</ul>
			</div>
			</div>
	</div>

	

	</div>

	
	
@endsection

@push('scripts')
<script type="text/javascript">
	
$('#demo-1').fdatepicker();

	
$(".input-div .input-text").on('click keypress',function(){
	$(this).parent("label").addClass("active");
					
	$(this).blur(function(){
		var getitemval=$(this).val();						
			if(getitemval==''){
				$(this).parent("label").removeClass("active");
			}
	
	});
	
});

</script>
@endpush
