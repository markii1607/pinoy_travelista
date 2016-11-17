@extends('../admin-master')

@section('content')
    <script type="text/javascript">
 function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#chng_dpic')
						
                        .attr('src', e.target.result)
                        .width(137)
                        .height(175);
                };
				
                reader.readAsDataURL(input.files[0]);
				//document.getElementById('dpic').style.visibility='visible';
				return true;
            }else{
			alert('Please Select Your Photo');
			return false;
			}
			
        }
		
</script>
 <script type="text/javascript">
 function readURL2(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#chng_dpic2')
						
                        .attr('src', e.target.result)
                        .width(137)
                        .height(175);
                };
				
                reader.readAsDataURL(input.files[0]);
				//document.getElementById('dpic').style.visibility='visible';
				return true;
            }else{
			alert('Please Select Your Photo');
			return false;
			}
			
        }
		
</script>
	
  

	  <div class="content-wrapper">
    @if (Session::get('message'))
    <div class="alert alert-info">
      <font color="white">{{ Session::get('message') }}</font>
    </div>
    @endif
    {{ Form::open(['route' => 'itinerary.store'])}}
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">

  <div  style="margin-left:10px;margin-right:" class="col-lg-10">     

        </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
	  

        
        <!-- Tab panes -->
        <div class="tab-content">
		
          <div class="tab-pane fade in active" id="PI">
          
          <table class="table" wpersonnel_idth="816" >
						
							  <tr>
							<td colspan="8" ><strong><font>ADD NEW ITINERARY</font></strong></td>
							
						  </tr>

							<tr>
							
							<td colspan="2" style="height:25px;font-size:12px;width:auto">Event Name:</td>
					<td colspan="2"> 
					<div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-user"></i>
					  </div>
                    {{ Form::text('event', '', ['class' => 'form-control', 'style' => 'width:300px;', 'placeholder' => 'Event Name']) }}
					
                 
                    </div>
                    
                  </div>
                    {{ $errors->first('event', '<font color="red">* :message</font>')}}
				  </td>	
				  
				  <td colspan="2" style="height:25px;font-size:12px;width:auto">No of Day/s:</td>
					<td colspan="2"> 
					<div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-user"></i>
					  </div>
                    {{ Form::number('day', '', ['class' => 'form-control', 'min' => '1', 'style' => 'width:300px;', 'placeholder' => '1']) }}
					
                 
                    </div>
                    
                  </div>
                    {{ $errors->first('day', '<font color="red">* :message</font>') }}
				  </td>	
							 

							</tr>
						<tr>
					
					<td colspan="2" style="height:25px;font-size:12px;width:auto">Time:</td>
				<td colspan="2">
				<div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
					  </div>
                    {{ Form::text('time', '', ['class' => 'form-control timepicker', 'style' => 'width:300px;', 'placeholder' => 'HH:MM:SS']) }}
					
                 
                    </div>
                    
                  </div>
                    {{ $errors->first('time', '<font color="red">* :message</font>') }}
				  </td>	
					
				  <td colspan="2" style="height:25px;font-size:12px;width:auto">Tour Packages:</td>
				  	<td colspan="2"> 
					<div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-list"></i>
					  </div>
					 <select name="tour_package_id"  class="form-control"  style="width:300px;" >
                    <option value="" selected>---Select---</option>
                  @foreach($packs as $pack)
                    <option value="{{ $pack->id }}">{{ $pack->name }}</option>
                  @endforeach
                                    </select>

									 
                    </div>
                    
                  </div>
                    {{ $errors->first('tour_package_id', '<font color="red">* :message</font>') }}
				  </td>	
				 
</table>
</div>
	       {{ Form::button('<i class="fa fa-save"></i>&nbsp; POST', ['type' => 'submit', 'class' => 'btn btn-block btn-lg btn-primary']) }}
						
          </div>
        
        
        
        
        
        
  
        </div>
      </div>
    <!-- /.panel-body --> 		

    </div>
  <!-- /.panel -->
  
  </div>
  
  
  </div>					   
  </div>   
  
  
              </div>
            {{ Form::close() }}
          </div>           
                    </br>  
@stop