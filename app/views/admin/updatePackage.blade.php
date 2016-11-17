<?php
include('../db/db.php'); 
if (isset($_POST['save'])){


$count=0;
$get_id=$_POST['id'];
$name=$_POST['name'];
$location=$_POST['location'];
$travel_time=$_POST['travel_time'];
$package_in=$_POST['package_in'];
$package_ex=$_POST['package_ex'];
$package_desc=$_POST['package_desc'];
$avail=$_POST['avail'];
$days=$_POST['days'];

$query=mysql_query("SELECT * FROM tour_packages where id='$get_id' ")or die(mysql_error());
		while($query2=mysql_fetch_array($query)){
		$img=$query2['filename'];

	$file = rand(1000,100000)."-".$_FILES['file']['name'];			
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
			

	
		if(move_uploaded_file($file_loc,$folder.$final_file)){
				
		$sql=mysql_query("UPDATE tour_packages set name='$name', filename='$final_file', location='$location', description='$package_desc', 
		travel_time='$travel_time', package_inclusion='$package_in', package_exclusion='$package_ex',
		avail='$avail' , no_of_days='$days' where id='$get_id' ") or die(mysql_error());
		?>
		<script>
		alert('Saved!');
        window.location.href='tourPackages.php?success';
        </script>
		<?php
	}else{
				
			$sql_query=mysql_query("UPDATE tour_packages set name='$name', filename='$img', location='$location', description='$package_desc', 
		travel_time='$travel_time', package_inclusion='$package_in', package_exclusion='$package_ex',
		avail='$avail', no_of_days='$days' where id='$get_id' ") or die(mysql_error());
		?>
		<script>
		alert('Saved!');
        window.location.href='tourPackages.php?success';
        </script>
					<?php
			}
		
		}
					
	############################# /FILE UPLOAD ###########################
}

?>