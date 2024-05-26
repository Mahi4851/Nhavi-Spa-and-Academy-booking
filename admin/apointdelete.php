<?php 
include_once("config.php");


	$id=$_GET['Id'];
	

	$result=mysqli_query($conn,"delete from appointment where Id=$id");
	
	header("Location:apointreport.php");

?>