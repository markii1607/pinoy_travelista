	<?php	
include('../db/db.php'); 
	
$id=$_GET['id'];

	
$sql_query=mysql_query("DELETE FROM tour_packages where id='$id' ")or die(mysql_error());


echo "<script>window.location.href=\"tourPackages.php\"	</script>";
	
	
	?>	