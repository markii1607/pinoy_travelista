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
 <h1 class="page-header">Contacts</h1>

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
							
							<td class="pull-"><div>
                 {{ Form::open(['method' => 'DELETE', 'route' => ['contacts.destroy', $contact->id]]) }}
                 {{ Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) }}
                 {{ Form::close() }}

              </div></td>
        </tr>
        @endforeach



	</table>
		</tbody>
	  </div>
		</div>
			</div>
@stop