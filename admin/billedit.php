


<?php /*
include_once("config.php");
if(isset($_POST['update']))
{
	$bid=$_POST['bid'];
	$bdate=$_POST['bdate'];
	$cid=$_POST['cid'];
	$cname=$_POST['cname'];
	$sname=$_POST['sname'];
	$rate=$_POST['rate'];
	$gst=$_POST['gst'];
	$damt=$_POST['damt'];
	$namt=$_POST['namt'];

	$result=mysqli_query($conn,"update bill set bdate='$bdate',cid=$cid,cname='$cname',sname='$sname',rate=$rate,gst=$gst,damt=$damt,namt=$namt  where bid=$bid");
	header("Location:billreport.php");
}
?>

<?php 
$bid=$_GET['bid'];
$result=mysqli_query($conn,"select * from bill where bid=$bid");

while ($res=mysqli_fetch_array($result))
 {
 	$bdate=$_POST['bdate'];
	$cid=$_POST['cid'];
	$cname=$_POST['cname'];
	$sname=$_POST['sname'];
	$rate=$_POST['rate'];
	$gst=$_POST['gst'];
	$damt=$_POST['damt'];
	$namt=$_POST['namt'];
 	
 	
}
*/
?>


/*
	<!--form action="billedit.php" method="post">
		<table width="50%" align="center">
	<tr>
		<td> Date</td><td><input type="date" name="bdate" value="<?php// echo $bdate; ?>"></td>
	</tr>
		<tr>
		<td> Customer Id</td><td><input type="date" name="date" value="<?php// echo $date; ?>"></td>
	</tr>
	<tr>
		<td> Course</td><td><select name="course" class="s1"  value="<?php// echo $course; ?>">
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
		<td> Duration</td><td><input type="text" name="cdur" value="<?php// echo $cdur; ?>"> </td>
	</tr>
	<tr>
		<td> Batch Time</td><td><input type="time" name="btime" value="<?php //echo $btime; ?>"> </td>
	</tr>
	<tr>
		<td> Start Date</td><td><input type="date" name="sdate" value="<?php// echo $sdate; ?>"> </td>
	</tr>
	<tr>
		<td>Contact</td><td><input type="text" name="cont" value="<?php// echo $cont; ?>"> </td>
	</tr>
	<tr>
		<td> Address</td><td><input type="text" name="Address" value="<?php// echo $address; ?>"> </td>
	</tr>
	<tr>
		<td>City</td><td><input type="text" name="city" value="<?php //echo $city; ?>"> </td>
	</tr>
	<tr>
		<td><input type="hidden" name="Id" value="<?php// echo $_GET['Id']; ?>"></td>
        <td><input type="submit" name="update" value="Update" > </td>
	 </tr>

		</table>
	</form-->
*/