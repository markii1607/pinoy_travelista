@extends('../admin-master')

@section('content')
   <div class="content-wrapper">

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">

  <div  style="margin-left:0px;margin-right:" class="col-lg-10">     

        </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
	  

        
        <!-- Tab panes -->
        <div class="tab-content">
		
          <div class="tab-pane fade in active" id="PI">
 <h1 class="page-header">Tour Reviews</h1>

              <table id="example1" class="table table-bordered table-striped">
			<thead>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Action</th>
				
		
			
			</thead>
			<tbody>
            @foreach($users as $user)
            <tr>
              <td align="center">{{$user->lname.", ".$user->fname." ".$user->mname}}</td>
              <td align="center">{{$user->username}}</td>
              <td align="center">{{$user->email}}</td>
              <td align="center">{{$user->gender}}</td>
							
							
							<td align="center"> <a align="center" class="btn btn-success" href="{{ URL::to('users/'.$user->id.'') }}" data-gravity=n title="More details"><i class="fa fa-plus"></i>&nbsp;More details</a>
              </td>
            </tr>
            @endforeach

<!-- Modal -->
<div class="modal fade" id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">


	</table>
		</tbody>
	  </div>
		</div>
			</div>

@stop