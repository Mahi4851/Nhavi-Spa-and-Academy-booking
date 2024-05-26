<?php

include_once("config.php");


if (isset($_POST['submit']))
{
	$bid=$_POST['bid'];
	$bdate=$_POST['bdate'];
	$cid=$_POST['cid'];
	$cname=$_POST['cname'];
	$sname=$_POST['sname'];
	$sname2=$_POST['sname2'];
	$sname3=$_POST['sname3'];
	$sname4=$_POST['sname4'];
	$rate=$_POST['rate'];
	$rate2=$_POST['rate2'];
	$rate3=$_POST['rate3'];
	$rate4=$_POST['rate4'];
	$gst=$_POST['gst'];
	$damt=$_POST['damt'];
	$namt=$_POST['namt'];


$result=mysqli_query($conn,"insert into bill values(null,'$bdate',$cid ,'$cname','$sname','$sname2','$sname3','$sname4',$rate,$rate2,$rate3,$rate4,$gst,$damt,$namt)");

	header("Location:billing.php");


}



?>