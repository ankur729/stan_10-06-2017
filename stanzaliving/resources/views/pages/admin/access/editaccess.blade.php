



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
              <h3 class="box-title">Edit  </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       
       
{!! Form::open(['url' => 'admin/access/update/{id}','method' => 'put']) !!}


{{ Form::macro('myCheckBox', function($name,$value = 1, $id= null, $class, $label, $checked) {


return '<label for="'.$name.'">
        <input id="'.$id.'" class="'.$class.'" name="'.$name.'" value="'.$value.'" type="checkbox" '.$checked.' >

        '.$label.'
        '.'&nbsp;&nbsp;'.'
        </label>';
}) 

}}

{!! Form::hidden('role_id', $role->id) !!}

              <div class="box-body">
               <div class="col-md-12">
                 <div class="form-group">
                  {!!Form::label('accessname', 'Access Name ') !!}
  

    {!!     Form::text('access_name', $role->access_name,  ['class' => 'form-control', 'placeholder' => 'Access Name']) !!}

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
     
       

@if(array_key_exists($pkey,$role->access_level))
<?php 
$set_checked='checked';
?>
@else
<?php $set_checked='';?>
@endif
      {!! Form::myCheckBox("parentcheckbox[$pkey]",$pkey,'id', 'parentcheckbox', $at['label'],$set_checked) !!}

        @if (count($at['child']) >0)
            <ul>
            <?php $x=0;?>
             @foreach($at['child'] as $ckey=>$compc)
            
            @if(@array_key_exists($ckey,$role->access_level[$pkey]['child']))
            <?php $child_checked='checked';?>
            @else
            <?php $child_checked='';?>
            @endif

            <li>

            
             {!! Form::myCheckBox("parentcheckbox[$pkey][child][$x]",$ckey,'id', 'childcheckbox', $compc['label'],$child_checked) !!}
             
               
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
                <button type="submit" class="btn btn-warning pull-right">Update Access Level</button>
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
          $('#successMessage').fadeOut('fast');
        }, 5000); // <-- time in milliseconds
    });
</script>

@endsection