



@extends('layouts.master.admin.index')

@section('styles')

<link href="text/css" src="{{ URL::asset('public/css/jquery.multiselect.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            @if (count($errors) > 0)
    <div class="alert alert-danger" id="errorMessage">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
              <div class="flash-message">
 @if(Session::has('message'))
    <div class="alert-box success" id="successMessage">
      <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
    </div>
@endif
@if(Session::has('duplicate'))
    <div class="alert-box danger" id="successMessage">
      <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('duplicate') }}</p>
    </div>
@endif
  </div>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Your Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
       

{!! Form::open(['url' => 'admin/foodmenu/menusave','method' => 'post']) !!}


              
		<div class="box-body">
			<div class="col-md-3">	
			
			<div class="form-group">
			{!!Form::label('name', 'From Date') !!}

			{!!     Form::text('from_date', null,  ['id' => 'dpd1', 'class' => 'form-control span2', 'placeholder' => 'From Date']) !!}
			<div class="form_error"></div>
			</div>
				 
				 
			</div>

		<div class="col-md-3">
			<div class="form-group">
			{!!Form::label('name', 'To Date') !!}

			{!!     Form::text('to_date', null,  ['id' => 'dpd2', 'class' => 'form-control span2', 'placeholder' => 'From Date']) !!}
			<div class="form_error"></div>
			</div>
		</div>
		
		  <div class="col-md-3">
                 <div class="form-group">
                  {!!Form::label('name', 'Food Type') !!}
  

    {!!     Form::select('f_type', array('veg'=>'veg','non-veg'=>'non-veg'), null,  ['class' => 'form-control', 'placeholder' => '---Select Food Type---']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
			   
			   
			   <div class="col-md-3">
                 <div class="form-group">
                  {!!Form::label('name', 'Food Category') !!}
  

    {!!     Form::select('f_cat', $myarr, null,  ['id' => 'food_cat', 'class' => 'form-control', 'placeholder' => '---Select Category---']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
			   
			   
		</div>
		 
		<div class="box-body">
		
		<div class="box-body after-add-more">
            <div class="col-xs-4">
				<div class="form-group">
				{!!Form::label('name', 'Menu Days') !!}
				<select class="form-control" name="weekday[]">
				<option value="">--Choose Menu Day--</option>
				<?php foreach($weekdays as $days => $dayvalue){?>
				<option value="<?=$days?>"><?=$dayvalue?></option>
				<?php } ?>
				</select>
				<div class="form_error"></div>
				</div>
            </div>


			<div class="col-md-4">
				<div class="form-group">
				{!!Form::label('name', 'Select Fooditem ') !!}

				<select name="fooditem[]" id="fooditemid"  multiple="multiple" style="height: 100px;width:100%;float:left;margin-left: 10px;">		
				
				</select>
				<div class="form_error"></div>
				</div>
			</div>

               <div class="col-md-4">
                 <div class="form-group change">
    
          <a class="btn btn-warning add-more" style="margin-top: 22px;">+ Add More</a>
          <div class="form_error"></div>
                 </div>
               </div>
                 <div class="clearfix"></div> 
         </div>

		</div>			 
         


          <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('stat', 'Status') !!}
  

    {!!     Form::select('status', array('0'=>'Deactive','1'=>'Active'), null,  ['class' => 'form-control', 'placeholder' => '---Select Status---']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


             
		<div class="box-footer">
			<div class="col-md-4">               
			<button type="submit" class="btn btn-success" style="margin-bottom:65px;margin-top: 23px;">Add Food Menu</button>
			</div>
		</div>         

        {!! Form::close() !!}

          </div>
          <!-- /.box -->


        </div>
        <!--/.col (left) -->
        <!-- right column -->
      
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->




@endsection


@push('scripts')
   
  <script src="{{ URL::asset('public/js/jquery.multiselect.js') }}" type="text/javascript"></script>

<script> 

$('#food_cat').change(function(){
	
  var fact_id=$(this).val();

  $.ajax({
    type:'GET',
    url:'findfooditems',
    data:{fact_id:fact_id},
     
    beforeSend:function(){
 
    },
    success:function(data){		
		$('#fooditemid').html(data);
    }
});
});

/* function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#img_view').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});

$(document).ready(function() {
	$('#demo').multiselect();
});

$(function(){
	$users_list = $('#users_list');
	$users_list.multiselect();
}); */


$(document).ready(function(){
        setTimeout(function() {
          $('#successMessage').fadeOut('slow');
          $('#errorMessage').fadeOut('slow');
        }, 4000); // <-- time in milliseconds
		
  

  $(document).ready(function() {
    $("body").on("click",".add-more",function(){

	var fcat = $('#food_cat').val();
	var length = $('#fooditemid > option').length;
	
	
	if(fcat!='' && fcat>0 && length>0){
	
    var html = $(".after-add-more").first().clone();
      
    $(html).find(".change").html("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>-Remove1</a>");
      
      
        $(".after-add-more").last().after(html);
      
	}else{
		
		alert('Please select Existing food category first');
	}
       
    });

    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more").remove();
    });
});  

});
  


</script>



@endpush