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
			
			
<?php



  $sql="SELECT * from users where priv_level='1' ";

	
						$query = mysql_query($sql) or die (mysql_error());
						while($row = mysql_fetch_assoc($query)){

						if($query){
					
						mysql_query("COMMIT");
						mysql_query("UNLOCK TABLES");
							echo "<tr>";
							?> 
							
							<td><?php echo $row['fname'].' '. $row['lname'];?></td>
							<td><?php echo $row['username'];?></td>
							<td><?php echo $row['email'];?></td>
							<td><?php echo $row['gender'];?>.</td>
							
							
							<td align="center"> <a align="center" class="btn btn-success" href="viewAccount.php?id=<?php echo $row['id']; ?>" data-gravity=n title="More details"><i class="fa fa-plus"></i>&nbsp;More details</a>										

							<?php
													
														}else{
											mysql_query("ROLLBACK");
											mysql_query("UNLOCK TABLES");
											}
										}
  
										
					
					
?>

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
	
</body>
<!-- jQuery 2.2.0 -->
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>

</html>