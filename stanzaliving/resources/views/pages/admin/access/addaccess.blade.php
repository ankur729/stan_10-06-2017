



@extends('layouts.master.admin.index')


@section('content')

	 <?php $left_menu=Helper::leftMenu()?>
    	     <?php usort($left_menu,'Helper::lmsort');?>
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
  </div>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add/Edit  </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
       

{!! Form::open(['url' => '/access/save','method' => 'post']) !!}


{{ Form::macro('myCheckBox', function($name,$value = 1, $id= null, $class, $label) {
return '<label for="'.$name.'">
        <input id="'.$id.'" class="'.$class.'" name="'.$name.'" value="'.$value.'" type="checkbox">

        '.$label.'
        '.'&nbsp;&nbsp;'.'
        </label>';
}) }}

              <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('accessname', 'Access Name ') !!}
	

    {!!     Form::text('access_name', null,  ['class' => 'form-control', 'placeholder' => 'Access Name']) !!}

				  <div class="form_error"></div>
                 </div>
               </div>
			   
			   <div class="col-md-12">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Access Modules:-</label>
                  <div class="col-md-12 access-item-list">
		 <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <ul>
        @foreach($left_menu as $pkey=>$at)
    <li>
     
      {!! Form::myCheckBox("parentcheckbox[$pkey]",$pkey,'id', 'parentcheckbox', $at['label']) !!}

        @if (count($at['child']) >0)
            <ul>
            <?php $x=0;?>
             @foreach($at['child'] as $ckey=>$compc)
          
            <li>
            
             {!! Form::myCheckBox("parentcheckbox[$pkey][child][$x]",$ckey,'id', 'childcheckbox', $compc['label']) !!}
             
               
            </li>
            <?php $x++;?>
             @endforeach
        </ul>

        @endif

        
    </li>
    	@endforeach

</ul>
 
               </div>	
              </div>
			  </div>
              <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-success pull-right">Save Access Level</button>
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
<style>
.child_checkbox_div{
	margin-left:20px;
}
.access-item-list{
	margin-left:50px;
}
</style>

<script>
$('.parentcheckbox').click(function(){

	if($('.parentcheckbox').is(":checked")){
			$(this).parent().next('ul').find('.childcheckbox').click();
	
	}else{
			$(this).parent().next('ul').find('.childcheckbox').click();
	}
});


$(document).ready(function(){
        setTimeout(function() {
          $('#successMessage').fadeOut('slow');
           $('#errorMessage').fadeOut('slow');
        }, 5000); 
        // <-- time in milliseconds
      
    });
</script>

@endsection