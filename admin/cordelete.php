<?php 
include_once("config.php");


	$ID=$_GET['ID'];
	

	$result=mysqli_query($conn,"delete from course where ID=$ID");
	
	header("Location:correport.php");

?>