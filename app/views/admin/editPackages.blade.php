<?php 
include('includes/header.php');
include('../db/db.php');

?>

<?php
$get_id=$_GET['id'];
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Advanced form elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
<style>

.table{
	font-family: Arial;
	font-size: 12px;
	
}
</style>
</script>
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

	<?php $result=mysql_query("select * from tour_packages where id='$get_id'")or die(mysql_error());
	$row=mysql_fetch_array($result);
	?>
	
	  <div class="content-wrapper">
<form action="updatePackage.php"  method="post" enctype="multipart/form-data" >
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
                    <input type="text" name= "name" class="form-control" style="width:300px;"  value="<?php echo $row['name']; ?>" >
					
                 
                    </div>
                    
                  </div>
				  </td>	
				  
				  <td colspan="2" style="height:25px;font-size:12px;width:auto">Filename:</td>
					<td rowspan=""><div id=""><center><img src = "uploads/<?php echo $row['file'];?>" height="20" width="20"/><center><br />
							<td><input  type="file" name="file" id="file"/></div></td>
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
                    <input type="text" name= "location" placeholder="Where" style="width:305px;" class="form-control"  value="<?php echo $row['location']; ?>" required>
					
                 
                    </div>
                    
                  </div>
				  </td>	
				  
				  <td colspan="2" style="height:25px;font-size:12px;width:auto">Travel Time:</td>
				<td colspan="2"><div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-users"></i>
					  </div>
                    <input type="text" name="travel_time"  value="<?php echo $row['travel_time']; ?>" style="width:297px;" class="form-control" required>
					
                 
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
                    <input type="text" name="package_in"  value="<?php echo $row['package_inclusion']; ?>" style="width:297px;" class="form-control" required>
					
                 
                    </div>
                    
                  </div>
				  </td>
						
					 <td colspan="2" style="height:25px;font-size:12px;width:auto">Package exclusion:</td>
				<td colspan="2"><div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-users"></i>
					  </div>
                    <input type="text" name="package_ex"  value="<?php echo $row['package_exclusion']; ?>" style="width:297px;" class="form-control" required>
					
                 
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
                    <input type="text" name="avail"  value="<?php echo $row['avail']; ?>" style="width:297px;" class="form-control" required>
					
                 
                    </div>
                    
                  </div>
				  </td>
						
					 <td colspan="2" style="height:25px;font-size:12px;width:auto">No. of days:</td>
				<td colspan="2"><div class="bootstrap-timepicker">
				     <div class="input-group">
					 <div class="input-group-addon">
                      <i class="fa fa-users"></i>
					  </div>
                    <input type="text" name="days"  value="<?php echo $row['no_of_days']; ?>" style="width:297px;" class="form-control" required>
					
                 
                    </div>
                    
                  </div>
				  </td>
				
		
						 </tr>
						 
						 <tr>
							<td colspan="2" style="height:25px;font-size:12px;width:auto">Package Description:</td>
							<td colspan="2" ><textarea class="form-control" value="<?php echo $row['description']; ?>" name="package_desc" rows="3" style="width:340px;"></textarea></td>

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
					
 <script type="text/javascript">
 
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "custom");
 </script>
</body>
</html>	  
   
		</div>   
			</div>			
  </form>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	
  </div>
  <!-- /.content-wrapper --> 
   
  <!-- jQuery 2.2.0 -->
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'YYYY/MM/DD h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>>




