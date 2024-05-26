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

	
		//header("Location:index.html");

echo "<h1 style='color:red; font-size:50px; margin-top:300px; margin-left:400px;' > Thank You...<br> Your Appointment is Fixed.....:)</h1><br><br><span style='color:blue; font-size:50px; margin-top:100px; margin-left:400px;' >Please go Back</span>";


}



?>