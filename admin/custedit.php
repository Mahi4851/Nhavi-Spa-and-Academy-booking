<?php 
include_once("config.php");
if(isset($_POST['update']))
{
	$cid=$_POST['cid'];
	$name=$_POST['name'];
	$address=$_POST['add'];
	$city=$_POST['city'];
	$cont=$_POST['cont'];

	$result=mysqli_query($conn,"update customer set name='$name',address='$address', city='$city',cont='$cont' where cid=$cid");
	header("Location:custreport.php");
}
?>

<?php 
$cid=$_GET['cid'];
$result=mysqli_query($conn,"select * from customer where cid=$cid");

while ($res=mysqli_fetch_array($result))
 {
 	$cname=$res['name'];
 	$address=$res['address'];
 	$city=$res['city'];
 	$cont=$res['cont'];

}

?>



	<form action="custedit.php" method="post">
		<table width="50%" align="center">
			<tr>
		<td>Customer Name</td><td><input type="text" name="name" value="<?php echo $cname; ?>"></td>
	</tr>
	<tr>
		<td>Customer Address</td><td><input type="text" name="add" value="<?php echo $address; ?>"> </td>
	</tr>
	<tr>
		<td>City</td><td><input type="text" name="city" value="<?php echo $city; ?>"> </td>
	</tr>
	<tr>
		<td>cont</td><td><input type="text" name="cont" value="<?php echo $cont; ?>"> </td>
	</tr>
	<tr>
		<td><input type="hidden" name="cid" value="<?php echo $_GET['cid']; ?>"></td>
<td>
	<input type="submit" name="update" value="Update" >
</td>
	 </tr>

		</table>
	</form>
