<?php 
include_once("config.php");
if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$date=$_POST['Date'];
	$time=$_POST['Time'];
	$name=$_POST['Name'];
	$address=$_POST['Address'];
	$city=$_POST['City'];
	$cont=$_POST['Cont'];
	$desc=$_POST['desc'];

	$result=mysqli_query($conn,"update appointment set Date='$date',Time='$time', Name='$name',Address='$address', City='$city',Contact='$cont', Description='$desc' where Id=$id");
	header("Location:apointreport.php");
}
?>

<?php 
$id=$_GET['Id'];
$result=mysqli_query($conn,"select * from appointment where Id=$id");

while ($res=mysqli_fetch_array($result))
 {
 	$date=$res['Date'];
 	$time=$res['Time'];
 	$name=$res['Name'];
 	$address=$res['Address'];
 	$city=$res['City'];
 	$cont=$res['Contact'];
 	$desc=$res['Description'];

}

?>



	<form action="apointedit.php" method="post">
		<table width="50%" align="center">
	<tr>
		<td>Appointment Date</td><td><input type="date" name="Date" value="<?php echo $date; ?>"></td>
	</tr>	
	<tr>
		<td>Appointment Time</td><td><input type="time" name="Time" value="<?php echo $time; ?>"></td>
	</tr>		
	<tr>
		<td>Customer Name</td><td><input type="text" name="Name" value="<?php echo $name; ?>"></td>
	</tr>
	<tr>
		<td>Customer Address</td><td><input type="text" name="Address" value="<?php echo $address; ?>"> </td>
	</tr>
	<tr>
		<td>City</td><td><input type="text" name="City" value="<?php echo $city; ?>"> </td>
	</tr>
	<tr>
		<td>Contact</td><td><input type="text" name="Cont" value="<?php echo $cont; ?>"> </td>
	</tr>
	<tr>
		<td>Description</td><td><input type="text" name="desc" value="<?php echo $desc; ?>"> </td>
	</tr>
	<tr>
		<td><input type="hidden" name="id" value="<?php echo $_GET['Id']; ?>"></td>
        <td><input type="submit" name="update" value="Update" > </td>
	 </tr>

		</table>
	</form>
