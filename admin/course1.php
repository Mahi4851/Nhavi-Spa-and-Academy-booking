<?php

include_once("config.php");


if (isset($_POST['submit']))
{
	$id=$_POST['ID'];
	$course=$_POST['course'];
	$cdur=$_POST['cdur'];
	$camt=$_POST['camt'];
	




$result=mysqli_query($conn,"insert into course values(null,'$course','$cdur',$camt)");


header("Location:course.php");

}



?>