<?php 
include_once("config.php");
if(isset($_POST['update']))
{
	$Id=$_POST['Id'];
	$name=$_POST['name'];
	$date=$_POST['date'];
	$course=$_POST['course'];
	$cdur=$_POST['cdur'];
	$btime=$_POST['btime'];
	$sdate=$_POST['sdate'];
	$cont=$_POST['cont'];
	$address=$_POST['Address'];
	$city=$_POST['city'];
	

	$result=mysqli_query($conn,"update enquiry set Name='$name',Date='$date',Course='$course',Duration='$cdur',B_Time='$btime',S_Date='$sdate',Contact='$cont',Address='$address', City='$city'  where Id=$Id");
	header("Location:enqreport.php");
}
?>

<?php 
$Id=$_GET['Id'];
$result=mysqli_query($conn,"select * from enquiry where Id=$Id");

while ($res=mysqli_fetch_array($result))
 {
 	$name=$res['Name'];
 	$date=$res['Date'];
	$course=$res['Course'];
	$cdur=$res['Duration'];
	$btime=$res['B_Time'];
	$sdate=$res['S_Date'];
	$cont=$res['Contact'];
	$address=$res['Address'];
	$city=$res['City'];
 	
 	
}

?>



	<form action="enqedit.php" method="post">
		<table width="50%" align="center">
	<tr>
		<td> Name</td><td><input type="text" name="name" value="<?php echo $name; ?>"></td>
	</tr>
		<tr>
		<td> Date</td><td><input type="date" name="date" value="<?php echo $date; ?>"></td>
	</tr>
	<tr>
		<td> Course</td><td><select name="course" class="s1"  value="<?php echo $course; ?>">
					<option>Select Course Intrested In</option>
					<option>Make-Up</option>
					<option>Cosmetology</option>
					<option>Nail-Art</option>
					<option>Hairstyling</option>
					<option>Beauty Therapy</option>
					<option>Skin Care </option>
					<option>Manicure and Pedicure</option>
					<option>Massage Therapy</option>
					<option>coloring</option>
					<option>Waxing & Clean-up</option>
				</select></td>
	</tr>
	<tr>
		<td> Duration</td><td><input type="text" name="cdur" value="<?php echo $cdur; ?>"> </td>
	</tr>
	<tr>
		<td> Batch Time</td><td><input type="time" name="btime" value="<?php echo $btime; ?>"> </td>
	</tr>
	<tr>
		<td> Start Date</td><td><input type="date" name="sdate" value="<?php echo $sdate; ?>"> </td>
	</tr>
	<tr>
		<td>Contact</td><td><input type="text" name="cont" value="<?php echo $cont; ?>"> </td>
	</tr>
	<tr>
		<td> Address</td><td><input type="text" name="Address" value="<?php echo $address; ?>"> </td>
	</tr>
	<tr>
		<td>City</td><td><input type="text" name="city" value="<?php echo $city; ?>"> </td>
	</tr>
	<tr>
		<td><input type="hidden" name="Id" value="<?php echo $_GET['Id']; ?>"></td>
        <td><input type="submit" name="update" value="Update" > </td>
	 </tr>

		</table>
	</form>
