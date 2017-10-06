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
                  <div class="form-group"  style="margin-left: -30px;">
                    <label> &nbsp;</label><Br>

                     <a href=" {{ url('admin/information/add') }}" class="btn btn-success pull-left" style="margin:15px;display: block;float:right; ">Add New Page</a>
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
              <table id="example1" class="table table-bordered table-striped" style="text-align: center;">
                <thead>

                  
                <tr>
                  <th style="text-align: center;">S. No.</th>
                  <th style="text-align: center;">Information Title</th>
                  <th style="text-align: center;">Options</th>
                   <!-- <th>Delete</th> -->
                </tr>


                </thead>
                <tbody>
		        @foreach($infos as $key=>$info)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$info->title}}</td>
                   
                    <td>
					<a href="{{action('InformationController@edit',['id'=>$info->id])}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
				<!-- 	<a data-toggle="modal" data-target="#myModal"><i class="fa fa-trash md-trigger" ></i></a>

@{{action('AccessController@edit',[$role->id])}}
         -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="{{action('InformationController@destroy',['id'=>$info->id])}}" data-method="delete" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
					</td>
          <!--  <td>
           <a href="{{action('InformationController@destroy',['id'=>$info->id])}}" data-method="delete" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
           </td> -->
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
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Want To Edit Role</h4>
        </div>
       <!--  <div class="modal-body">
          <p>This is a small modal.</p>
        </div> -->
        <div class="modal-footer text-center">
       <a href="url('admin/access/edit')">   <button type="button" class="btn btn-warning" data-dismiss="modal">Yes</button> </a>
           <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>
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