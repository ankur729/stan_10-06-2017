



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
              <h3 class="box-title">Update Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
       

{!! Form::model($category,['url' => 'admin/foodmenu/menuupdate','method' => 'put']) !!}

{!! Form::hidden('id', $category->id) !!}


		<div class="box-body">

				<div class="col-md-3">		
				<div class="form-group">
				{!!Form::label('name', 'From Date') !!}
				{!! Form::text('from_date', null,  ['id' => 'dpd1n', 'class' => 'form-control span2', 'placeholder' => 'From Date','data-date-format'=>'yyyy-mm-dd','readonly'=>'readonly']) !!}
				<div class="form_error"></div>
				</div>		 
				</div>

				<div class="col-md-3">
					<div class="form-group">
					{!!Form::label('name', 'To Date') !!}

					{!!     Form::text('to_date', null,  ['id' => 'dpd2n', 'class' => 'form-control span2', 'placeholder' => 'From Date','data-date-format'=>'yyyy-mm-dd','readonly'=>'readonly']) !!}
					<div class="form_error"></div>
					</div>
				</div>
				
				<div class="col-md-3">
				<div class="form-group">
				{!!Form::label('name', 'Food Type') !!}
				<select class="form-control" name="f_type" readonly>				
				<option value="<?=$category['f_type']?>"><?=$category['f_type']?></option>				
				</select>
				<div class="form_error"></div>
				</div>
				</div>
				
			   <div class="col-md-3">
                 <div class="form-group">
				 {!!Form::label('name', 'Food Category') !!}
				 <select class="form-control" name="f_cat" readonly>				
				 <option value="<?=$category['f_cat']?>"><?=$category['fcatname']?></option>				
				</select>
				<div class="form_error"></div>
                 </div>
               </div>
			   
			   
		</div>
		
		
		<div id="fooditemdata">
		<div class="box-body">
		
		<?php 
		
		$i=0;
		foreach ($menuitems as $menurec){
		
		?>
            <div class="col-xs-3">
				<div class="form-group">
				{!!Form::label('name', 'Menu Days') !!}
				<select class="form-control" name="foodmenu[<?php echo $i;?>][days]">				
				<option value="<?=$menuitems[$i]['menuday']?>"><?=date('D',strtotime($menuitems[$i]['menudates']));?></option>				
				</select>
				<div class="form_error"></div>
				</div>
            </div>
			
			<div class="col-xs-3">
				<div class="form-group">
				{!!Form::label('name', 'Menu Dates') !!}
				<select class="form-control" name="foodmenu[<?php echo $i;?>][dates]">			
				<option value="<?=$menuitems[$i]['menudates']?>"><?=$menuitems[$i]['menudates']?></option>
			
				</select>
				<div class="form_error"></div>
				</div>
            </div>


			<div class="col-md-3">
				<div class="form-group">
				{!!Form::label('name', 'Select Fooditem ') !!}

				<select name="foodmenu[<?php echo $i;?>][items][]" id="fooditemid"  multiple="multiple" style="height: 100px;width:100%;float:left;margin-left: 10px;">		
				
				<?php foreach($fooditemdata as $menuvalue){?>
				<option value="<?=$menuvalue['id']?>" <?php if(in_array($menuvalue['id'],explode(",",$menuitems[$i]['items']))){ echo "selected";}?>><?=$menuvalue['f_name']?></option>
				<?php } ?>
				</select>
				<div class="form_error"></div>
				</div>
			</div>		
				
			
			
			<div class="col-xs-3">
				<div class="form-group">
				<label>&nbsp;</label>
				&nbsp;				
				<div class="form_error"></div>
				</div>
            </div>
			
		
		<div class="clearfix"></div> 
		
			
		<?php $i++; } ?>
		
		
		 </div>
		 </div>	
		 
		 <?php /* ?>
		 
		<div class="box-body">
		
		<div class="box-body after-add-more" >
		
		
		<div class="col-xs-8" style="background-color: #34d9f1; border-radius: 4px; list-style: outside none none; color:#fff; font-weight:bold; text-align:center; line-height:40px;">Click to add your Items</div>
	<div class="col-md-4">
		<div class="form-group">
			<div class="coloum-div center">
			<a href="#0" class="add-more btn btn-success" onclick="addAttribute();"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
		<div class="clearfix"></div> 
		
		
		
		<?php 
		
		$i=0;
		foreach ($menuitems as $menurec){
		
		?>
            <div class="col-xs-4">
				<div class="form-group">
				{!!Form::label('name', 'Menu Days') !!}
				<select class="form-control" name="foodmenu[<?php echo $i;?>][days]">
				<option value="">--Choose Menu Day--</option>
				<?php foreach($weekdays as $days => $dayvalue){?>
				<option value="<?=$days?>" <?php if($menuitems[$i]['menuday'] == $days){ echo "selected";}?>><?=$dayvalue?></option>
				<?php } ?>
				</select>
				<div class="form_error"></div>
				</div>
            </div>


			<div class="col-md-4">
				<div class="form-group">
				{!!Form::label('name', 'Select Fooditem ') !!}

				<select name="foodmenu[<?php echo $i;?>][items][]" id="fooditemid"  multiple="multiple" style="height: 100px;width:100%;float:left;margin-left: 10px;">		
				
				<?php foreach($fooditemdata as $menuvalue){?>
				<option value="<?=$menuvalue['id']?>" <?php if(in_array($menuvalue['id'],explode(",",$menuitems[$i]['items']))){ echo "selected";}?>><?=$menuvalue['f_name']?></option>
				<?php } ?>
				</select>
				<div class="form_error"></div>
				</div>
			</div>		
				
			
		<div class="col-md-4">
		<div class="form-group">
		<div class="coloum-div center">
		<a href='#0' class="remove-row btn  btn-danger"><i class='fa fa-minus-circle' aria-hidden='true'></i></a>		
		</div>
		</div>
		</div>
		<div class="clearfix"></div> 
		
			
		<?php $i++; } ?>
			
			
			
			
	

		<div id="attribute"></div>	
				 
				 
         </div>
		 </div>	
		 
		 
		 <?php */ ?>
		 

          <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('stat', 'Status') !!}
  

    {!!     Form::select('status', array('0'=>'Deactive','1'=>'Active'), null,  ['class' => 'form-control', 'placeholder' => '---Select Category---']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


              <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-4">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-success" style="margin-bottom:65px;margin-top: 23px;">Update</button>
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

$(document).on("click" , ".remove-row" , function(){
	$(this).parents(".list").remove();
});


var menu_row = <?=count($menuitems)?>;
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
	attributeautocomplete(index);
});

</script>

@endpush
