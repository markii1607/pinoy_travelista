<?php
include('../db/db.php'); 
if (isset($_POST['save'])){


$count=0;
$get_id=$_POST['id'];
$name=$_POST['name'];
$package=$_POST['package'];

		$sql=mysql_query("UPDATE sites set tour_package_id='$package', name='$name' where id='$get_id' ") or die(mysql_error());
		?>
		<script>
		alert('Saved!');
        window.location.href='viewSites.php?success';
        </script>
		<?php
	
}

?>