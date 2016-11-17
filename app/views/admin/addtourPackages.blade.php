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
    {{Form::open(['route' => 'tours.store', 'files' => true])}}
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
							<td colspan="8" ><strong><font>ADD NEW TOUR PACKAGE</font></strong></td>
							
						  </tr>

							
						<tr>
					<td colspan="2" style="height:25px;font-size:12px;width:auto">Name:</td>
					<td colspan="2"> 
					<div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-user"></i>
					  </div>
                    <input type="text" name= "name" class="form-control" style="width:300px;"  placeholder="Package Name" required>
					
                 
                    </div>
                    
                  </div>
				  </td>	
				  
				  <td colspan="2" style="height:25px;font-size:12px;width:auto">Filename:</td>
					<td rowspan=""><div id=""><br />
							<td>{{Form::file('file', ['required' => 'required'])}}</div></td>
							</td>

					
				  
						</tr>
	
		
							<tr>  
							<td colspan="2" style="height:25px;font-size:12px;width:auto">Location:</td>
					<td colspan="2"> 
				<div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-map-marker"></i>
					  </div>
                    <input type="text" name= "location" placeholder="Where" style="width:305px;" class="form-control" required>
					
                 
                    </div>
                    
                  </div>
				  </td>	
				  
				  <td colspan="2" style="height:25px;font-size:12px;width:auto">Travel Time:</td>
				<td colspan="2"><div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-users"></i>
					  </div>
                    <input type="text" name="travel_time" placeholder="Travel Time" style="width:297px;" class="form-control" required>
					
                 
                    </div>
                    
                  </div>
				  </td>
						
						</tr>
						
		
												  <tr>

									<td colspan="2" style="height:25px;font-size:12px;width:auto">Package Inclusion:</td>
				<td colspan="2"><div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-users"></i>
					  </div>
                    <input type="text" name="package_inclusion" placeholder="Package Inclusion" style="width:297px;" class="form-control" required>
					
                 
                    </div>
                    
                  </div>
				  </td>
						
					 <td colspan="2" style="height:25px;font-size:12px;width:auto">Package exclusion:</td>
				<td colspan="2"><div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-users"></i>
					  </div>
                    <input type="text" name="package_exclusion" placeholder="Package exclusion" style="width:297px;" class="form-control" required>
					
                 
                    </div>
                    
                  </div>
				  </td>
						
																	  <tr>

				<td colspan="2" style="height:25px;font-size:12px;width:auto">Avail:</td>
				<td colspan="2"><div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-users"></i>
					  </div>
                    <input type="text" name="avail" placeholder="Avail" style="width:297px;" class="form-control" required>
					
                 
                    </div>
                    
                  </div>
				  </td>
						
					 <td colspan="2" style="height:25px;font-size:12px;width:auto">No. of days:</td>
				<td colspan="2"><div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-users"></i>
					  </div>
                    <input type="text" name="no_of_days" placeholder="Ex. 1" style="width:297px;" class="form-control" required>
					
                 
                    </div>
                    
                  </div>
				  </td>
				
		
						 </tr>
						 
						 <tr>
							<td colspan="2" style="height:25px;font-size:12px;width:auto">Package Description:</td>
							<td colspan="2" ><textarea class="form-control" name="package_desc" rows="3" placeholder="Package Description..." style="width:340px;" required></textarea></td>


              <td colspan="2" style="height:25px;font-size:12px;width:auto">Folder:</td>
        <td colspan="2"><div class="bootstrap-timepicker">
             <div class="input-group">
           <div class="input-group-addon">
                      <i class="fa fa-users"></i>
            </div>
                    <input type="text" name="folder" placeholder="Folder Name" style="width:297px;" class="form-control" required>
          
                 
                    </div>
                    
                  </div>
          </td>

						 </tr>
						  
					
					
						  
</table>
</div>
	
				<button type="submit" name ="post" class="btn btn-block btn-lg btn-primary"><i class="fa fa-save"></i>&nbsp; POST</button>
						
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
    {{Form::close()}}
          </div>           
                    </br>  
					
@stop