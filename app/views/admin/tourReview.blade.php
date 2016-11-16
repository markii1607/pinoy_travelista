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
				<th>From</th>
				<th>Email<br></th>				
				<th>Tour Package<br></th>				
				<th>Review<br></th>				
				<th>Date Created<br></th>				
				<th>Action</th>
		
			
			</thead>
			<tbody>
          @foreach($reviews as $review)
            <tr>
							<td>{{$review->name}}</td>
							<td>{{$review->email}}</td>
							<td>{{$review->tour_package->name}}</td>
							<td>{{$review->review}}</td>
							<td>{{$review->created_at}}</td>
							
							<td class="pull-"><div><button type="button" href = "#" class="btn btn-success" data-toggle="modal" data-target="#myModal">
							<i class="fa fa-wrench"></i></i>&nbsp;Edit details</button>
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