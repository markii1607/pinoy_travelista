
<?php
include '../db/db.php';

$id=$_GET['id'];
 $result=mysql_query("select * from tour_reviews where id='$id' ")or die(mysql_error());
while($row=mysql_fetch_array($result)){ 
$id=$row['id'];
}
?>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      <div class="modal-header" align="center">
	   		   <h4 class="modal-title">Do you really want to delete this Tour Review?</h4>

			    </div><!-- /.modal-content -->

 <div class="modal-footer" align="center">

 <tr class="del<?php echo $id ?>">

			    <a  href="confirmDelReview.php<?php echo '?id='.$id; ?>" type="button">Yes</a>
				&nbsp;&nbsp;&nbsp;
                <a href="tourReview.php" type="button" class="btn btn-default pull-right" >No</a>


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

