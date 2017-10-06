@extends('layouts.master.admin.index')


@section('content')

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
                  <div class="form-group" style="margin-left: -34px;">
                    <label> &nbsp;</label><Br>

                     <a href=" {{ url('admin/hostel/add') }}" class="btn btn-success pull-left" style="margin:15px;display: block;float:right; ">Add New Hostel</a>
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
              <table id="example1" class="table table-bordered table-striped"  style="text-align: center;">
                <thead>

                  
                <tr>
                  <th  style="text-align: center;">S. No.</th>
                  <th   style="text-align: center;">Hostel Name</th>
                  <th  style="text-align: center;">Options</th>
                </tr>


                </thead>
                <tbody>
		        @foreach($hostels as $key=>$hostel)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$hostel->name}}</td>
                   
                    <td>
                    <a title="View" href="{{action('HostelController@show',['id'=>$hostel->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					          <a title="Edit" href="{{action('HostelController@edit',['id'=>$hostel->id])}}"><i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a title="Delete" href="{{action('HostelController@destroy',['id'=>$hostel->id])}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
			   	          <!-- 	<a data-toggle="modal" data-target="#myModal"><i class="fa fa-trash md-trigger" ></i></a>

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