<?php 

include_once("config.php");

if(isset($_POST['submit']))
{
	
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];



$res=mysqli_query($conn,"select * from login where uname='$uname' and pass='$pass'" );

$result=mysqli_fetch_array($res);

		if ($result)
					 {

					header("Location:main.php");

 					}
}

?>