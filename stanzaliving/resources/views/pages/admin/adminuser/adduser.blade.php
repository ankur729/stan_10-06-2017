@extends('layouts.master.admin.index')


@section('content')


 <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
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


          <div class="box box-primary">
            <div class="box-header with-border">
            <br><br>
              <h3 class="box-title" style="padding-left: 10px;margin-bottom:70px;">Add New Admin User </h3>
            </div>
             <div class="col-md-8">
            <br>

            <?php //print_r($roles[0]->name) ?>
            <!-- /.box-header -->
            <!-- form start -->
			
            {!! Form::open(['url' => 'admin/user/create','method' => 'post','files' => true]) !!}



              <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
    
          {!!Form::label('username', 'User Full Name') !!}
        

          {!!     Form::text('username', null,  ['class' => 'form-control', 'placeholder' => 'Enter Full Name']) !!}

              </div>
              </div>


               <div class="col-xs-6">
                 <div class="form-group">

                  {!!Form::label('email', 'Email') !!}
        

                 {!!     Form::text('email', null,  ['class' => 'form-control', 'placeholder' => 'Enter Email']) !!}

                 </div>
               </div>

                  <div class="col-xs-6">
                 <div class="form-group">

                  {!!Form::label('mobile', 'Mobile') !!}
        

                 {!!     Form::text('contact', null,  ['class' => 'form-control', 'placeholder' => 'Enter Mobile']) !!}

                 </div>
               </div>

              </div>


                <div class="col-xs-6">
                 <div class="form-group">

                    {!!Form::label('desig', 'Designation') !!}
        

                 {!!     Form::text('desig', null,  ['class' => 'form-control', 'placeholder' => 'Enter Designation']) !!}

                 </div>
                 </div>

               <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">


                 {!!    Form::label('password', 'Password')      !!}
        

                 {!!     Form::text('password', null,  ['class' => 'form-control', 'placeholder' => 'Enter Password']) !!}
                 </div>
                 </div>


                 <div class="col-xs-6">
                 <div class="form-group">


                  {!!Form::label('conf_password', 'Confirm Password') !!}
        

                 {!!     Form::text('conf_password', null,  ['class' => 'form-control', 'placeholder' => 'Enter Password Again']) !!}
                 </div>
                 </div>



              </div>




             <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('role', 'Select User Role') !!}
        
                    {!!  Form::select('role', $myarr, 'null', array('class' => 'form-control','placeholder' => 'Please select a User Role',)) !!}
                 </div>
                 </div>

                 <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('status', 'Status') !!}
        
                    {!!  Form::select('status', ['enable'=>'Enable','disable'=>'Disable'], 'null', array('class' => 'form-control','placeholder' => 'Please select Status',)) !!}
                 </div>
                 </div>

            </div>


<!--                 <div class="col-xs-6">
                 <div class="form-group">

                    {!!Form::label('desig', 'Designation') !!}
        

                 {!!     Form::text('desig', null,  ['class' => 'form-control', 'placeholder' => 'Enter Designation']) !!}

                 </div>
                 </div> -->


            </div>

            </div>

          <div class="col-md-4">
             <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">

                  
                <img id="img_view" src=" {{ URL::to('images/blank_user.png')  }}" alt="your image"  style="width:100px;height:100px" />
              <!--    <img src="{{ asset('images/1.jpg')}}" alt="no logo" -->
                {!!       Form::file('image',array('id' => 'imgInp')) !!}
                 </div>
                 </div>



            </div>

           </div>

     <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                 <button type="submit" class="btn btn-back " style="margin-bottom:65px;margin-left:-15px;">Back</button>
                <button type="submit" class="btn btn-success" style="margin-bottom:65px;">Save Admin user</button>
              </div>
      </div>


{!! Form::close() !!}

      
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


$(document).ready(function(){
        setTimeout(function() {
          $('#successMessage').fadeOut('slow');
          $('#errorMessage').fadeOut('slow');
        }, 4000); // <-- time in milliseconds



       


    //      $.get("http://localhost/stanza/public/admin/test", function(data, status){
    //     alert("Data: " + data + "\nStatus: " + status);
    // });
});
    });

</script>
@endpush
