<?php

include_once("config.php");


if (isset($_POST['submit']))
{
	$service=$_POST['Service'];
	$cost=$_POST['Cost'];
	



$result=mysqli_query($conn,"insert into service(Service,Cost) values('$service' ,$cost)");

header("Location:service.php");

}



?>