<?php 
include_once("config.php");


	$id=$_GET['id'];
	

	$result=mysqli_query($conn,"delete from employee where id=$id");
	
	header("Location:empreport.php");

?>