
@extends('layouts.master.admin.index')

@section('styles')

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
              <h3 class="box-title">Billed To :<br> {{$payment->std_name}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
      
       

{!! Form::model($payment,['url' => 'admin/payment/update','method' => 'put']) !!}
{!! Form::hidden('id', null) !!}
<!-- Login-Field -->




<div class="col-md-2">
  <div class="form-group" style="margin-top: 20px;">
    <button type="submit" class="btn btn-back " style="margin-top: 70px;float: right;">Back</button>
  </div>
</div>
</div>


<div class="Login-header with-border   after-border">
   <h3 class="login-details">Student Details</h3>
</div>





 <div class="box-body">
   <div class="col-xs-6 ">
    <div class="form-group">
       {!!Form::label('reg_no', 'Student Registration Number') !!}
  

    {!!     Form::text('std_reg_no', null,  ['class' => 'form-control reg', 'placeholder' => 'Registration Number', 'disabled'=>'disabled']) !!}

      <div class="form_error"></div>
       </div>
      </div>
    </div>

     <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('std_name', 'Student Name') !!}
  

    {!!     Form::text('std_name', null,  ['class' => 'form-control std_name', 'placeholder' => 'Student Name', 'disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
    </div>



<!-- Login fields ends -->




<!-- Personal-Field -->

<div class="Login-header with-border  Personal-border">
   <h3 class="login-details">Personal Details</h3>
 </div>

<div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('inv_id', 'Invoice ID') !!} 

    {!!     Form::text('inv_id', null,  ['class' => 'form-control inv_id','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('inv_date', 'Invoice Date') !!}
  

    {!!     Form::text('inv_date', null,  ['class' => 'form-control inv_date','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         

    <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('due_date', 'Due Date') !!}
  

    {!!     Form::text('due_date', null,  ['class' => 'form-control due_date','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('electricity', 'Total Electricity Charges') !!}
  

    {!!     Form::text('electricity', null,  ['class' => 'form-control elec','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


     <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('arrears', 'Arrears') !!}
  

    {!!     Form::text('arrears', null,  ['class' => 'form-control arrears','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
                       <div class="col-xs-6">
                         <div class="form-group">
                          {!!Form::label('room_rent', 'Room Rent') !!}
          

            {!!     Form::text('room_rent', null,  ['class' => 'form-control room','disabled'=>'disabled']) !!}

                  <div class="form_error"></div>
                         </div>
                       </div>
                 </div>

                 <div class="box-body">
                       <div class="col-xs-7">
                         <div class="form-group">
                          {!!Form::label('inv_amt', 'Invoice Amount') !!}
          

            {!!     Form::text('inv_amt', null,  ['class' => 'form-control inv_amt','disabled'=>'disabled']) !!}

                  <div class="form_error"></div>
                         </div>
                       </div>
                 </div>
                
                   <div class="box-body">
                       <div class="col-xs-7">
                         <div class="form-group">
                          {!!Form::label('tax', 'Tax') !!}
          

            {!!     Form::select('tax', $myarr, null,  ['class' => 'form-control tax', 'placeholder' => '---Please Select Tax---','disabled'=>'disabled']) !!}

                  <div class="form_error"></div>
                         </div>
                       </div>
                 </div>



              <div class="box-body">
               <div class="col-xs-7">
                 <div class="form-group">
                  {!!Form::label('amt_pay', 'Amount Payable') !!}
  

    {!!     Form::text('amt_pay', null,  ['class' => 'form-control amt_pay', 'placeholder' => 'Amount Payable','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
         <div class="box-body">
                       <div class="col-xs-7">
                         <div class="form-group">
                          {!!Form::label('status', 'Status') !!}
          

            {!!     Form::select('status', array('0'=>'Not Paid', '1'=>'Paid'), null,  ['class' => 'form-control tax','placeholder'=>'---Please Select Tax---','disabled'=>'disabled']) !!}

                  <div class="form_error"></div>
                         </div>
                       </div>
                 </div>

                    <div class="box-body">
                       <div class="col-xs-7">
                         <div class="form-group">
                         <br><br><br><br>

                  <div class="form_error"></div>
                         </div>
                       </div>
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


<script> 


</script>
  



@endpush


