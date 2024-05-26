<?php 
include_once("config.php");


	$cid=$_GET['cid'];
	

	$result=mysqli_query($conn,"delete from customer where cid=$cid");
	
	header("Location:custreport.php");

?>