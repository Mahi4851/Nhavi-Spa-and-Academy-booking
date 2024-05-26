<?php

include_once("config.php");


if (isset($_POST['submit']))
{
	$name=$_POST['Name'];
	$address=$_POST['Address'];
	$city=$_POST['city'];
	$cont=$_POST['cont'];
	$salary=$_POST['salary'];




$result=mysqli_query($conn,"insert into employee(Name,Address,city,contact,salary) values('$name' ,'$address' ,'$city','$cont',$salary)");


header("Location:employee.php");

}



?>