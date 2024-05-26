<?php   

include_once("config.php");


if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$address=$_POST['add'];
	$city=$_POST['city'];
	$cont=$_POST['cont'];




$result=mysqli_query($conn,"insert into customer(name,address,city,cont) values('$name' ,'$address' ,'$city','$cont')");


header("Location:customer.php");

}



?>