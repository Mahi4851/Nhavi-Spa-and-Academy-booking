<?php 
include_once("config.php");
if(isset($_POST['update']))
{
	$sid=$_POST['sid'];
	$service=$_POST['Service'];
	$cost=$_POST['Cost'];
	

	$result=mysqli_query($conn,"update service set Service='$service', Cost=$cost where sid=$sid");
	header("Location:servreport.php");
}
?>

<?php 
$sid=$_GET['sid'];
$result=mysqli_query($conn,"select * from service where sid=$sid");

while ($res=mysqli_fetch_array($result))
 {
 	$service=$res['Service'];
 	$cost=$res['Cost'];
 	
}

?>



	<form action="servedit.php" method="post">
		<table width="50%" align="center">
			<tr>
		<td>Service Name</td><td><input type="text" name="Service" value="<?php echo $service; ?>"></td>
	</tr>
	<tr>
		<td>Service Cost</td><td><input type="text" name="Cost" value="<?php echo $cost; ?>"> </td>
	</tr>
	<tr>
		<td><input type="hidden" name="sid" value="<?php echo $_GET['sid']; ?>"></td>
<td>
	<input type="submit" name="update" value="Update" >
</td>
	 </tr>

		</table>
	</form>
