@extends('layouts.master.admin.index')


@section('content')
<link rel="stylesheet" media="screen" type="text/css" href="css/datepicker.css" />
<script type="text/javascript" src="js/datepicker.js"></script>
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
   <!-- Main content -->
    <section class="content">
	
	
	<form method="get">	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
  {{ csrf_field() }}
     <div class="row">
        <div class="col-xs-12 ">
           <div class="box">
             <div class="box-header">
               <div class="form">
			   
			   
                 <div class="col-xs-12 col-md-3">
                  <div class="form-group">
                    <label>Keywords</label><Br>
                     <input type="text" name="keyword" id="keyword" placeholder="Search by Name, UniqueID..." class="form-control" value="<?php if(isset($filter_data['keyword'])){echo $filter_data['keyword'];}?>" />
                   </div>
                 </div>
				 
				 <div class="col-xs-12 col-md-3">
                  <div class="form-group">
                     {!!Form::label('s_hostel', 'Hostel') !!}<Br>
					{!!     Form::select('s_hostel', $h, null,  ['class' => 'form-control', 'placeholder' => 'Select Hostel']) !!}
                   </div>
                 </div>
				 
				 <div class="col-xs-12 col-md-3">
                  <div class="form-group">
				{!!Form::label('s_room', 'Room Type') !!}


				{!!     Form::select('s_room', $r, null,  ['class' => 'form-control', 'placeholder' => 'Select Room']) !!}
                   </div>
                 </div>
				 
				 <div class="col-xs-12 col-md-3">
                  <div class="form-group">
                    <label>&nbsp;</label><Br>
					<input type="submit" name="apply_filter" id="apply_filter" value="Apply" class="btn btn-success pull-left" style="display: block;float:right;margin-left:-15px;">
					
                    
                   </div>
                 </div>
				 
				 
				 
				
				 
				 
               </div>
			   
			   
             </div>
           </div>
        </div>
     </div>
	 </form>
	 
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
         
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                  
                <tr>
                  <th>S. No.</th>
                  <th>Date of Joining</th>
                  <th>Student Name</th>
                  <th>Mobile No.</th>
                  <th>Hostel</th>
                  <th>Room</th>
                  <th>Food Type</th> 
                  <th>Options</th>
                </tr>


                </thead>
                <tbody>
            @foreach($students as $key=>$student)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$student->s_doj}}</td>
                    <td>{{$student->s_firstname}}</td>
                    <td>{{$student->s_contact}}</td>
                    <td>{{$h[$student->s_hostel]}}</td>
                    <td>{{$r[$student->s_room]}}</td>
                    <td>{{$student->s_veg}}</td>
                    <td>  <a title="View"  href="{{action('StudentController@show',['id'=>$student->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a title="Edit" href="{{action('StudentController@edit',['id'=>$student->id])}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
        <!--  <a data-toggle="modal" data-target="#myModal"><i class="fa fa-trash md-trigger" ></i></a>

@{{action('AccessController@edit',[$role->id])}}
         -->
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
<a  title="Delete" href="{{action('StudentController@destroy',['id'=>$student->id])}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
           </td>
                  </tr>
                  @endforeach
                        </tbody>
             <!--    <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<!-- Modal -->

</div>

    </section>
    <!-- /.content -->

@endsection

@push('scripts')
<script> 


$(document).ready(function(){
        setTimeout(function() {
          $('#successMessage').fadeOut('slow');
         // $('#errorMessage').fadeOut('slow');
        }, 4000); // <-- time in milliseconds
    });
</script>
@endpush