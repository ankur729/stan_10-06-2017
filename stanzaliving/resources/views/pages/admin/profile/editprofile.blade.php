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
              <h3 class="box-title" style="padding-left: 10px;margin-bottom:106px;">Edit Admin Profile</h3>
            </div>
<!--             <br> -->

            <?php //print_r($roles[0]->name) ?>
            <!-- /.box-header -->
            <!-- form start -->
			
            {!! Form::open(['url' => 'admin/profile/update','method' => 'put','files' => true]) !!}


              <div class="col-md-8">
              <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
    
          {!!Form::label('username', 'User Full Name') !!}
        

          {!!     Form::text('username', $user->name,  ['class' => 'form-control', 'placeholder' => 'Enter Full Name']) !!}

              </div>
              </div>

                <div class="col-xs-6">
                 <div class="form-group">

                    {!!Form::label('desig', 'Designation') !!}
        

                 {!!     Form::text('desig', $user->desig,  ['class' => 'form-control', 'placeholder' => 'Enter Designation']) !!}

                 </div>
                 </div>
              </div>

<div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">


                 {!!    Form::label('password', 'Password (Enter only if want to change)')      !!}
        

                 {!!     Form::text('password', null,  ['class' => 'form-control', 'placeholder' => 'Enter Password']) !!}
                 </div>
                 </div>


                 <div class="col-xs-6">
                 <div class="form-group">


                  {!!Form::label('conf_password ', 'Confirm Password (Enter only if want to change)') !!}
        

                 {!!     Form::text('conf_password', null,  ['class' => 'form-control', 'placeholder' => 'Enter Password Again']) !!}
                 </div>
                 </div>



              </div>


              <div class="box-body">

               <div class="col-xs-6">
                 <div class="form-group">

                  {!!Form::label('email', 'Email') !!}
        

                 {!!     Form::text('email', $user->email,  ['class' => 'form-control', 'placeholder' => 'Enter Email']) !!}

                 </div>
               </div>
            </div>
              </div>
             <div class="col-md-4">
               <div class="col-xs-4">
                 <div class="form-group">
               <img id="img_view" src=" {{ URL::to('images/'.$user->profile_img)  }}" alt="your image"  style="width:100px;height:100px" />
              <!--    <img src="{{ asset('images/1.jpg')}}" alt="no logo" -->
               {!!       Form::file('image',array('id' => 'imgInp')) !!}

                 </div>
                 </div>
                 </div>
     <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                 <button type="submit" class="btn btn-back " style="margin-bottom:65px;margin-left:-2px;">Back</button>
                <button type="submit" class="btn btn-success " style="margin-left:8px;margin-bottom: 63px">Update Admin user</button>
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
    });
</script>
@endpush
  