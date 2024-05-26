<?php 
include_once("config.php");
if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$name=$_POST['Name'];
	$address=$_POST['Address'];
	$city=$_POST['city'];
	$cont=$_POST['cont'];
	$salary=$_POST['salary'];

	$result=mysqli_query($conn,"update employee set Name='$name',Address='$address', city='$city',contact='$cont', salary=$salary where id=$id");
	header("Location:empreport.php");
}
?>

<?php 
$id=$_GET['id'];
$result=mysqli_query($conn,"select * from employee where id=$id");

while ($res=mysqli_fetch_array($result))
 {
 	$name=$res['Name'];
 	$address=$res['Address'];
 	$city=$res['city'];
 	$cont=$res['contact'];
 	$salary=$res['salary'];

}

?>



	<form action="empedit.php" method="post">
		<table width="50%" align="center">
			<tr>
		<td>Employee Name</td><td><input type="text" name="Name" value="<?php echo $name; ?>"></td>
	</tr>
	<tr>
		<td>Employee Address</td><td><input type="text" name="Address" value="<?php echo $address; ?>"> </td>
	</tr>
	<tr>
		<td>City</td><td><input type="text" name="city" value="<?php echo $city; ?>"> </td>
	</tr>
	<tr>
		<td>Contact</td><td><input type="text" name="cont" value="<?php echo $cont; ?>"> </td>
	</tr>
	<tr>
		<td>Salary</td><td><input type="text" name="salary" value="<?php echo $salary; ?>"> </td>
	</tr>
	<tr>
		<td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td>
        <td><input type="submit" name="update" value="Update" > </td>
	 </tr>

		</table>
	</form>
