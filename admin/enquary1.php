<?php

include_once("config.php");


if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$date=$_POST['date'];
	$course=$_POST['course'];
	$cdur=$_POST['cdur'];
	$btime=$_POST['btime'];
	$sdate=$_POST['sdate'];
	$cont=$_POST['cont'];
	$address=$_POST['add'];
	$city=$_POST['city'];
	
	




$result=mysqli_query($conn,"insert into enquiry values(null,'$name','$date','$course','$cdur','$btime','$sdate','$cont','$address','$city')");

header("Location:enquary.php");
}



?>