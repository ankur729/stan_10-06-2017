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
              <h3 class="box-title" style="padding-left: 10px">Social Settings</h3>
            </div>
            <br>

         
            <!-- form start -->
			
            {!! Form::model($setting,['url' => 'admin/setting/social/update','method' => 'put']) !!}



              <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
    
          {!!Form::label('facebook', 'Facebook') !!}
        

          {!!     Form::text('facebook', null,  ['class' => 'form-control', 'placeholder' => 'Facebook URL']) !!}

              </div>
              </div>



                

              </div>

               <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">


          {!!Form::label('google', 'Google Plus') !!}
        

          {!!     Form::text('google', null,  ['class' => 'form-control', 'placeholder' => 'Google Plus URL']) !!}

                 </div>
                 </div>

                 </div>


               <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">


          {!!Form::label('youtube', 'YouTube') !!}
        

          {!!     Form::text('youtube', null,  ['class' => 'form-control', 'placeholder' => 'Youtube URL']) !!}

                 </div>
                 </div>

                 </div>

         


     <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-success">Save Settings</button>
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


$(document).ready(function(){
        setTimeout(function() {
          $('#successMessage').fadeOut('slow');
          $('#errorMessage').fadeOut('slow');
        }, 4000); // <-- time in milliseconds
    });
</script>
@endpush
