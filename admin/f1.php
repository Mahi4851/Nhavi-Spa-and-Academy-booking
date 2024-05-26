<?php

include 'config.php';

if(isset($_POST['parent_id']))
{
	extract($_POST);
	$qry=mysqli_query($conn,"select * from customer where cid=$parent_id");
	while ($res = mysqli_fetch_array($qry)) 
	{
		$cname=$res['name'];
		echo $cname;
	}
}

if(isset($_POST['parent_id1']))
{
	extract($_POST);
	$qry=mysqli_query($conn,"select * from service where service='$parent_id1'");
	while ($res = mysqli_fetch_array($qry)) 
	{
		$cost=$res['Cost'];
		echo $cost;
	}
}
if(isset($_POST['parent_id2']))
{
	extract($_POST);
	$qry=mysqli_query($conn,"select * from service where service='$parent_id2'");
	while ($res = mysqli_fetch_array($qry)) 
	{
		$cost=$res['Cost'];
		echo $cost;
	}
}
if(isset($_POST['parent_id3']))
{
	extract($_POST);
	$qry=mysqli_query($conn,"select * from service where service='$parent_id3'");
	while ($res = mysqli_fetch_array($qry)) 
	{
		$cost=$res['Cost'];
		echo $cost;
	}
}
if(isset($_POST['parent_id4']))
{
	extract($_POST);
	$qry=mysqli_query($conn,"select * from service where service='$parent_id4'");
	while ($res = mysqli_fetch_array($qry)) 
	{
		$cost=$res['Cost'];
		echo $cost;
	}
}

if(isset($_POST['parent_id5']))
{
	extract($_POST);
	$qry=mysqli_query($conn,"select * from service where service='$parent_id5'");
	while ($res = mysqli_fetch_array($qry)) 
	{
		$cost=$res['Cost'];
		echo $cost;
	}
}
if(isset($_POST['parent_id6']))
{
	extract($_POST);
	$qry=mysqli_query($conn,"select * from course where Course='$parent_id6'");
	while ($res = mysqli_fetch_array($qry)) 
	{
		$cdur=$res['Duration'];
		echo $cdur;
	}
}





?>