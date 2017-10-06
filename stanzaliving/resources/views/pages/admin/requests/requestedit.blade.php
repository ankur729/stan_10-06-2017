



@extends('layouts.master.admin.index')


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
              <h3 class="box-title">Approve Request   </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

     
            <div class="col-md-2">
            <div class="form-group" style="margin-top: 20px;">
               <button type="submit" class="btn btn-back " style="margin-top: 70px;float: right;">Back</button>
            </div>
          </div>
          </div>
{!! Form::model($request,['url' => 'admin/request/update','method' => 'put']) !!}
{!! Form::hidden('id', $request->id) !!}


       <div class="Form box-primary">
            <div class="student-prsl-Details  with-border">
              <h3 class="std-heading">Student Details</h3>
            </div>
       


   
             <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('name', 'Name of Student') !!}
  

    {!!     Form::text('r_student', $name[$request->r_student],  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
             <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('s_email', 'Email Id') !!}
    {!!     Form::text('s_email', $email[$request->r_student],  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
         

			 <div class="Form box-primary">
            <div class="student-edit-Details  with-border">
              <h3 class="std-heading">Request Details</h3>
            </div>
       







          
            <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('r_date', 'Date') !!}
  

    {!!     Form::text('r_date', null,  ['class' => 'form-control fname', 'disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('r_time', 'Time') !!}
  

    {!!     Form::text('r_time', null,  ['class' => 'form-control', 'disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


       <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('r_l_date', 'Leaving Date') !!}
  

    {!!     Form::text('r_l_date', null,  ['class' => 'form-control','disabled'=>'disabled' ]) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('r_l_time', 'Leaving Time') !!}
  

    {!!     Form::text('r_l_time', null,  ['class' => 'form-control', 'disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('r_r_date', 'Return Date') !!}
  

    {!!     Form::email('r_r_date', null,  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                   <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('r_r_time', 'Return Time') !!}
  

    {!!     Form::text('r_r_time', null,  ['class' => 'form-control','disabled'=>'disabled' ]) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('status', 'Status') !!}
  

    {!!     Form::select('status', array('0' => 'Rejected', '1' => 'Approved'), null,  ['class' => 'form-control']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>



      
        
              <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-back " style="margin-bottom:65px;margin-left:-15px;">Back</button>
                <button type="submit" class="btn btn-success" style="margin-bottom:65px;padding: 10px 35px;">Save</button>
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
   
   <script src="../../../public/js/jquery.multiselect.js" type="text/javascript"></script>
<script>




</script>
@endpush