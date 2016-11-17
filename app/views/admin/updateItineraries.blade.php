<?php
include('../db/db.php'); 
if (isset($_POST['save'])){


$count=0;
$get_id=$_POST['id'];
$name=$_POST['name'];
$time=$_POST['time'];
$days=$_POST['days'];
$package=$_POST['package'];

		$sql=mysql_query("UPDATE itineraries set tour_package_id='$package', day='$days', time='$time', event='$name' where id='$get_id' ") or die(mysql_error());
		?>
		<script>
		alert('Saved!');
        window.location.href='viewItineraries.php?success';
        </script>
		<?php
	
}

?>