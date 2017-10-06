



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

<span id="verrormsg"></span>
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

			{!!     Form::text('from_date', null,  ['id' => 'dpd1', 'class' => 'form-control span2', 'placeholder' => 'From Date','data-date-format'=>'yyyy-mm-dd']) !!}
			<div class="form_error"></div>
			</div>
				 
				 
			</div>

		<div class="col-md-3">
			<div class="form-group">
			{!!Form::label('name', 'To Date') !!}

			{!!     Form::text('to_date', null,  ['id' => 'dpd2', 'class' => 'form-control span2', 'placeholder' => 'From Date','data-date-format'=>'yyyy-mm-dd']) !!}
			<div class="form_error"></div>
			</div>
		</div>
		
		  <div class="col-md-3">
                 <div class="form-group">
                  {!!Form::label('name', 'Food Type') !!}
  

    {!!     Form::select('f_type', array('veg'=>'veg','non-veg'=>'non-veg'), null,  ['id' => 'f_type','class' => 'form-control', 'placeholder' => '---Select Food Type---']) !!}

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
		
		<div id="fooditemdata"></div>
		
		
		 
		<!--<div class="box-body">		
		<div class="box-body after-add-more">           
	<div class="col-xs-8" style="background-color: #34d9f1; border-radius: 4px; list-style: outside none none; color:#fff; font-weight:bold; text-align:center; line-height:40px;">Click to add your Items</div>
	<div class="col-md-4">
		<div class="form-group">
			<div class="coloum-div center">
			<a href="#0" class="add-more btn btn-success" onclick="addAttribute();"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
		<div class="clearfix"></div> 

		<div id="attribute"></div>	
				 
				 
         </div>
		 </div>	-->
		
         
		 
		  
		  


          <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('stat', 'Status') !!}
  

    {!!     Form::select('status', array('1'=>'Active','0'=>'Deactive'), null,  ['class' => 'form-control']) !!}

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

  <script type="text/javascript">
// remove
$(document).on("click" , ".remove-row" , function(){
	$(this).parents(".list").remove();
});




var menu_row = 0;
function addAttribute() {

var fact_id = $('#food_cat').val();	
	
var f_type = $('#f_type').val();

	if(f_type =='' && f_type<1){
		
		alert('Please select food type first');
		
	}else if(fact_id =='' && fact_id<1){
		
		alert('Please select food category first');
		
	}else{
	
	$.ajax({
    type:'GET',
    url:'findfooditemrec',
    data:{fact_id:fact_id,f_type:f_type},     
    beforeSend:function(){ 
    },
    success:function(data){	    
	$('#fooditemidjquery').html(data);
	//alert(data);		
    }
   });
   
  
  
			
     html = "<div class='box-body list'>";
     html += "<div class='col-xs-4'>";	
	 html += "<div class='form-group'>";
	 html += "<label>Menu Days</label>";
	 html +=	"<select class='form-control' name='foodmenu[" + menu_row + "][days]' required><option value=''>--Choose Menu Day--</option>";
	<?php foreach($weekdays as $days => $dayvalue){?>
	html +=	"<option value='<?=$days?>'><?=$dayvalue?></option>";
	<?php } ?>
	html += "</select>";
	html +=  "</div>";
	html +=  "</div>";
	html +=	'<input type="hidden" name="foodmenu[' + menu_row + '][fmenuid]" value="" id="fmenuid">';

	 html += "<div class='col-xs-4'>";	
	 html += "<div class='form-group'>";
	 html += "<label>Select Fooditem</label>";
	 
	html +=	"<select class='form-control' name='foodmenu[" + menu_row + "][items][]' multiple='multiple' id='fooditemidjquery' required><option value=''>--Choose Items--</option>";
	<?php /*foreach($fooditem as $foodsdata){?>
	html +=	"<option value='<?=$foodsdata['id']?>'><?=$foodsdata['f_name']?></option>";
	<?php }*/ ?>
	html += "</select>";
	html +=  "</div>";
	html +=  "</div>";

	html += "<div class='col-xs-4'>";	
	 html += "<div class='form-group'>";
	 html += "<label></label>";
	html += "<a href='#0' class='remove-row btn  btn-danger'><i class='fa fa-minus-circle' aria-hidden='true'></i></a>";
	html +=  "</div>";
	html +=  "</div>";
	html += "</div>";
	html += "<div class='clearfix'></div>";
	
	$('#attribute').prepend(html);

	//attributeautocomplete(menu_row);

	menu_row++;
	
	
}
}





$('#attribute .form-field').each(function(index, element) {
	//alert(index);
	attributeautocomplete(index);
});
//-->
</script>


<script> 
$('#food_cat,#dpd1,#dpd2,#f_type').change(function(){
  //var fact_id=$(this).val(); 
  var fact_id=$('#food_cat').val(); 
  var fromdate=$('#dpd1').val(); 
  var todate=$('#dpd2').val();
  var ftype=$('#f_type').val();
	
  $('#verrormsg').html('');  

if(fromdate==''){
	//alert('Please select from date');
	$('#verrormsg').html('<div class="alert alert-danger alert-box danger">Please select from date</div>');
	$('#dpd1').focus();	
	return false;
}else if(todate==''){
	//alert('Please select to date');	
	$('#verrormsg').html('<div class="alert alert-danger alert-box danger">Please select to date</div>');
	$('#dpd2').focus();	
	return false;
}else if(ftype==''){
	//alert('Please select type');
	$('#verrormsg').html('<div class="alert alert-danger alert-box danger">Please select type</div>');
	$('#f_type').focus();
    return false;	
}else if(fact_id==''){
	//alert('Please select category');
	$('#verrormsg').html('<div class="alert alert-danger alert-box danger">Please select category</div>');
	$('#food_cat').focus();
    return false;	
}else{	
  
  $.ajax({
    type:'GET',
    url:'findfooditemsdisplay',
    data:{from_date:fromdate,to_date:todate,f_type:ftype,f_cat:fact_id},
     
    beforeSend:function(){
 
    },
    success:function(data){	

		    //alert(data);
			var obj = $.parseJSON(data);

			if(obj['nowreturn'] == 'SUCCESS'){						
			$("#fooditemdata").html(obj['message']);
				
			}else if(obj['nowreturn'] == 'ERROR'){
				alert(obj['message']);				
				$("#fooditemdata").html('');
				$('#dpd1').val('');
				$('#dpd2').val('');
 				$('#verrormsg').html('<div class="alert alert-danger alert-box danger">'+obj['message']+'</div>');
			
			}else{
				alert('Some thing worng please try again later');
				$("#fooditemdata").html('');
				$('#dpd1').val('');
				$('#dpd2').val('');
			}


		
		//$('#fooditemdata').html(data);
    }
});
}
});


/* 
$('#food_cat').change(function(){
	
	
  var fact_id=$(this).val();

  alert(fact_id);
  
  
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




function readURL(input) {
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


/* $(document).ready(function(){
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

}); */
  


</script>



@endpush