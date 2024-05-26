<?php 
include_once("config.php");
if(isset($_POST['update']))
{
	$ID=$_POST['ID'];
	$course=$_POST['course'];
	$cdur=$_POST['cdur'];
	$camt=$_POST['camt'];
	

	$result=mysqli_query($conn,"update course set Course='$course',Duration='$cdur',Amount=$camt  where ID=$ID");
	header("Location:correport.php");
}
?>

<?php 
$ID=$_GET['ID'];
$result=mysqli_query($conn,"select * from course where ID=$ID");

while ($res=mysqli_fetch_array($result))
 {
 	
	$course=$res['Course'];
	$cdur=$res['Duration'];
	$camt=$res['Amount'];
 	
 	
}

?>



	<form action="coredit.php" method="post">
		<table width="50%" align="center">
	
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
		<td>Course Duration</td><td><input type="text" name="cdur" value="<?php echo $cdur; ?>"> </td>
	</tr>
	<tr>
		<td>Course Amount</td><td><input type="text" name="camt" value="<?php echo $camt; ?>"> </td>
	</tr>
	<tr>
		<td><input type="hidden" name="ID" value="<?php echo $_GET['ID']; ?>"></td>
        <td><input type="submit" name="update" value="Update" > </td>
	 </tr>

		</table>
	</form>
