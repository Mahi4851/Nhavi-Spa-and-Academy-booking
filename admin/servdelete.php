<?php 
include_once("config.php");


	$sid=$_GET['sid'];
	

	$result=mysqli_query($conn,"delete from service where sid=$sid");
	
	header("Location:servreport.php");

?>