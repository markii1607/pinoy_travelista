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
 <h1 class="page-header">Price List</h1>

              <table id="example1" class="table table-bordered table-striped">
			<thead>
				<th>Tour Package</th>
				<th>Price Description<br></th>				
				<th>Date Created<br></th>				
				<th>Action</th>
		
			
			</thead>
			<tbody>
          @foreach($lists as $list)
			     <tr>
							<td>{{$list->tour_package->name}}</td>
							<td>{{$list->name}}</td>
							<td>{{$list->created_at}}</td>
							

              <td class="pull-"><div>
                 {{ Form::open(['method' => 'DELETE', 'route' => ['prices.destroy', $list->id]]) }}
                 {{ Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) }}
                 {{ Form::close() }}  
              </div></td>
  
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