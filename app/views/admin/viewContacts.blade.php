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
				<th>Email</th>
				<th>Subject</th>
				<th>Message<br></th>				
				<th>Date Created<br></th>				
				<th>Action</th>
		
			
			</thead>
			<tbody>
          @foreach($contacts as $contact)
            <tr>
							<td>{{$contact->name}}</td>
							<td>{{$contact->email}}</td>
							<td>{{$contact->subject}}</td>
							<td>{{$contact->message}}</td>
							<td>{{$contact->created_at}}</td>
							
							<td class="pull-"><div><button type="button" href = "#" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
							<i class="fa fa-trash"></i></i>&nbsp;Delete</button>
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