<?php

include_once("config.php");


if (isset($_POST['submit']))
{
	$bid=$_POST['bid'];
	$bdate=$_POST['bdate'];
	$sid=$_POST['sid'];
	$sname=$_POST['sname'];
	$cname=$_POST['cname']
	$rate=$_POST['rate'];
	$duration=$_POST['duration'];
	$damt=$_POST['damt'];
	$namt=$_POST['namt'];


$result=mysqli_query($conn,"insert into coursebill values(null,'$bdate',$sid ,'$sname','$cname',$rate,'$duration',$damt,$namt)");

	header("Location:coursebill.php");


}



?>