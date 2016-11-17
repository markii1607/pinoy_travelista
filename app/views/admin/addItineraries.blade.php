@extends('../admin-master')
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
<form action="addItineraries.php"  method="post" enctype="multipart/form-data" >
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
                    <input type="text" name= "name" class="form-control" style="width:300px;"  placeholder="Event Name" required>
					
                 
                    </div>
                    
                  </div>
				  </td>	
				  
				  <td colspan="2" style="height:25px;font-size:12px;width:auto">No of Day/s:</td>
					<td colspan="2"> 
					<div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-user"></i>
					  </div>
                    <input type="text" name= "days" class="form-control" style="width:300px;"  placeholder="Ex. 1" required>
					
                 
                    </div>
                    
                  </div>
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
                    <input type="text" name="time" class="form-control timepicker" style="width:300px;" required>
					
                 
                    </div>
                    
                  </div>
				  </td>	
					
				  <td colspan="2" style="height:25px;font-size:12px;width:auto">Tour Packages:</td>
				  	<td colspan="2"> 
					<div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-list"></i>
					  </div>
					 <select name="package"  class="form-control"  style="width:300px;" >
								<option value="">--SELECT--</option>
                                    
                                    <option value=""></option>
                                   
                                    </select>
									 
                    </div>
                    
                  </div>
				  </td>	
				 
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
            </form>
          </div>           
                    </br>  
@stop