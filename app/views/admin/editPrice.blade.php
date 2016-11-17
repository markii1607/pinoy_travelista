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

	<?php $result=mysql_query("select * from price_lists where id='$get_id'")or die(mysql_error());
	$row=mysql_fetch_array($result);
	?>
	
	  <div class="content-wrapper">
<form action="updatePrice.php"  method="post" enctype="multipart/form-data" >
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
			
			<input type="hidden" name="id" class="get_id" value="<?php echo $get_id; ?>"> 


  <div  style="margin-left:10px;margin-right:" class="col-lg-10">     

        </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
	  


        <!-- Tab panes -->
        <div class="tab-content">
		
          <div class="tab-pane fade in active" id="PI">
          
         <table class="table" wpersonnel_idth="816" >
						
							  <tr>
							<td colspan="8" ><strong><font>EDIT PRICE</font></strong></td>
							
						  </tr>

		<td colspan="2" style="height:25px;font-size:12px;width:auto">Name:</td>
					<td colspan="2"> 
					<div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-user"></i>
					  </div>
                    <input type="text" name= "name" class="form-control" style="width:300px;"  value="<?php echo $row['name']; ?>" >
					
                 
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
					 <select name="package"  class="form-control"  style="width:300px;">
								
                                  
                                    <?php 
                                    $qry_id =mysql_query("SELECT * FROM tour_packages");
                                    while($id=mysql_fetch_assoc($qry_id)){
                                    
                                     ?>
                                    
                                    <option value="<?php echo $id['id']; ?>"><?php echo $id['name']; ?></option>

                                                                                                                
                                    <?php 
                                    
                                    }
                                    ?>
                                   
                                    </select>
									 
                    </div>
                    
                  </div>
				  </td>	
						</tr>
					  
</table>
</div>
	
				<button type="submit" name ="save" class="btn btn-block btn-lg btn-primary"><i class="fa fa-save"></i>&nbsp; POST</button>
						
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




