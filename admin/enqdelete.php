<?php 
include_once("config.php");


	$Id=$_GET['Id'];
	

	$result=mysqli_query($conn,"delete from enquiry where Id=$Id");
	
	header("Location:enqreport.php");

?>