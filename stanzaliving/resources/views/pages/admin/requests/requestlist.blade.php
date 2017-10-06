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
     <div class="row">
        <div class="col-xs-12 ">
           <div class="box">
             <div class="box-header">
               <div class="form">
                 <div class="col-xs-3">
                  <div class="form-group">
                    <label>&nbsp;</label><Br>

                    
                   </div>
                 </div>
               </div>
             </div>
           </div>
        </div>
     </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
         
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                  
                <tr>
                  <th>S. No.</th>
                  <th>Student Name</th>
                  <th>Request Type</th>
                  <th>Date of Request</th>
                  <th>Time of Request</th>
                  <th>Status</th>
                  <th>Options</th>
                </tr>


                </thead>
                <tbody>
            @foreach($requests as $key=>$request)
                  <tr>
                  <?php $val=$request->status?'Approved':'Not Approved' ; ?>
                    <td>{{$key+1}}</td>
                    <td>{{$name[$request->r_student]}}</td>
                    <td>{{$myarr[$request->r_cat]}}</td>
                    <td>{{$request->r_date}}</td>
                    <td>{{$request->r_time}}</td>
                    <td>{{$val}}</td>
                    <td>  <a title="View"  href="{{action('RRequestController@edit',['id'=>$request->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a title="Edit" href="{{action('RRequestController@edit',['id'=>$request->id])}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
        <!--  <a data-toggle="modal" data-target="#myModal"><i class="fa fa-trash md-trigger" ></i></a>

@{{action('AccessController@edit',[$role->id])}}
         -->
       
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