
<?php
include '../db/db.php';

$id=$_GET['id'];
 $result=mysql_query("select * from contacts where id='$id' ")or die(mysql_error());
while($row=mysql_fetch_array($result)){ 
$id=$row['id'];
}
?>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      <div class="modal-header">
	   		   <h4 class="modal-title">Do you really want to delete this contact?</h4>

			    </div><!-- /.modal-content -->

 <div class="modal-footer">

 <tr class="del<?php echo $id ?>">

			    <a  href="confirmDelContact.php<?php echo '?id='.$id; ?>"><button type='button' class='btn btn-danger' ><font color='White'>Yes</a>

                <a href="viewContacts.php" type="button" class="btn btn-default pull-right" >No</button>


  <!-- /.content-wrapper --> 
  
<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

