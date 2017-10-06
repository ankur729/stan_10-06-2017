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
                  <div class="form-group"  style="margin-left: -17px;">
                    <label> &nbsp;</label><Br>
                     <a href="{{ url('admin/user/create') }}" class="btn btn-success pull-left" >Add User</a>
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
                  <th style="text-align: center;">S. No.</th>
                  <th  style="text-align: center;">Full Name</th>
        				  <th  style="text-align: center;">Email</th>
        				  <th  style="text-align: center;">Designation</th>
        				  <th  style="text-align: center;">Role</th>
                  <th  style="text-align: center;">Status</th>
                  <th  style="text-align: center;">Options</th>
                </tr>


                </thead>
                <tbody>
				    @foreach($users as $key=>$user)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$user->name}}</td>
					 <td>{{$user->email}}</td>
					<td>{{$user->desig}}</td>
					<td>{{$user->roles[0]->access_name}}</td>
                    <td>{{$user->status}}</td>
                    <td>
					<a href=" {{  url('admin/user/edit/'.$user->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
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
    </section>
    <!-- /.content -->

@endsection