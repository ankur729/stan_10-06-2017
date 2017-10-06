@extends('layouts.master.admin.index')


@section('content')


   <!-- Main content -->
    <section class="content">
     <div class="row">
        <div class="col-xs-12 ">
           <div class="box">
             <div class="box-header">
               <div class="form">
                 <div class="col-xs-3">
                  <div class="form-group" style="margin-left: -31px;">
                    <label> &nbsp;</label><Br>

                     <a href=" {{ url('admin/access/create') }}" class="btn btn-success pull-left" style="margin:15px;display: block;float:right; ">Add New Role</a>
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
                  <th style="text-align: center;">Access Name</th>
                  <th style="text-align: center;">Status</th>
                </tr>


                </thead>
                <tbody>
				@foreach($roles as $key=>$role)
                  <tr>
                    <td>{{$key+1}} </td>
                    <td>{{$role->access_name}}</td>
                    <td>
                      <i class="fa fa-check" aria-hidden="true"></i>
                      &nbsp;
                      &nbsp;
                      <a href="{{action('AccessController@edit',[$role->id])}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    </td>
                   <!--  <td>
				          	<a href="{{action('AccessController@edit',[$role->id])}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
			             	<!- 	<a data-toggle="modal" data-target="#myModal"><i class="fa fa-trash md-trigger" ></i></a> 
				
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