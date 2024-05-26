<?php

include_once("config.php");


if (isset($_POST['submit']))
{
	$id=$_POST['Id'];
	$date=$_POST['Date'];
	$time=$_POST['Time'];
	$name=$_POST['Name'];
	$address=$_POST['Address'];
	$city=$_POST['City'];
	$cont=$_POST['Cont'];
	$desc=$_POST['desc'];




$result=mysqli_query($conn,"insert into appointment values(null,'$date','$time','$name' ,'$address' ,'$city','$cont','$desc')");

	
		
		header("Location:apointment.html");


		
}



?>