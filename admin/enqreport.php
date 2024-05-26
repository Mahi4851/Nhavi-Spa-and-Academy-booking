<?php 

include_once("config.php");


$result=mysqli_query($conn,"select * from enquiry");

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		

*{margin-top: 0px;padding: 0px;box-sizing:border-box;}

*{margin-top: 0px;padding: 0px;box-sizing:border-box;}



body{padding: 0px;margin: 0px;box-sizing: border-box; background-color: lightgoldenrodyellow;}
		/*background-image: url("image/img2.jpg");background-size: cover;}*/




.img1{ background-color: black;border: 10px black solid;
		width: 100%; line-height: 190px; background-size: ; text-align: center;color: lightcoral;font-size: 70px;background-repeat:1;font-family:Verdana;}
	.img1 img{width: 160px;border-radius: 100px;margin-left: 10px;}	
	.img2{width: 220px;border-radius: 50px;margin-top: 15px;margin-right: 10px;}	







		.rpt {color: darkblue;font-weight:bolder  ;}	
		h1{color: black;  text-align: center;margin-top: 150px;margin-bottom: 70px;font-size: 60px;text-decoration: underline;}
		th{padding: 20px;text-decoration: ; color: black; font-size: 25px	;}
	td{padding: 10px;}
	table{margin-bottom: 100px;}


	.menu-bar{text-align: center;background-color:rgba(0, 0, 0, 0.5);font-size: 20px;margin-left: 0px;margin-right: 0px; border-radius: 10px;}
	.menu-bar ul{display: inline-flex;list-style: none;color: white;}
	.menu-bar ul li{width: 170px;margin: 15px;padding: 0px;}
	.menu-bar ul li a{text-decoration: none;color: white;}
	.active,.menu-bar ul li:hover{background-color:plum;border-radius:4px;}	
	.sub-menu{display: none;}
	.menu-bar ul li:hover .sub-menu{display: block;position: absolute;background-color:grey;
		                           margin-top:15px;margin-left:15px;}
	.menu-bar ul li:hover .sub-menu ul{display: block;margin:10px;}
	.menu-bar ul li:hover .sub-menu ul li{width:180px;padding:10px;border-bottom:2px dotted white;
		                                background:transparent;border-radius:10px;text-align:left;}
    .menu-bar ul li:hover .sub-menu ul li:last-child{border-bottom:none;}
    .menu-bar ul li:hover .sub-menu ul li a:hover{color:orange;}









	</style>
</head>
<body>


<div class="img1"><img src="image\logo4.jpg" align="left">The Spa & Academy <img src="image\logo1.png" align="right" class="img2"></div>



	<div class="menu-bar">

	<ul>
	<li><a href="main.php">Home</a></li>
	<li><a href="">About Us</a></li>

	<li><a href="">Master</a>
    <div class="sub-menu">
    	<ul>
    		<li><a href="customer.php">Customer Entry Form</a></li>
    		<li><a href="employee.php">Employee Entry Form</a></li>
    		<li><a href="service.php">Service Entry Form</a></li> 
    		<li><a href="course.php">Course Entry Form</a></li>   		
    	</ul>
    </div>
	</li>
		<li><a href="">Transaction</a>
        <div class="sub-menu">
    	<ul>
    		<li><a href="apointment.php">Appointment Form</a></li> 
    		<li><a href="billing.php">Bill Entry Form</a></li>   		  		
    	</ul>
    </div>
	</li>			
			<li><a href="">Report</a>
        <div class="sub-menu">
    	<ul>
    		<li><a href="custreport.php">Customer Report</a></li>
    		<li><a href="empreport.php">Employee Report</a></li>
    		<li><a href="correport.php">Course Report</a></li>    		
    		<li><a href="servreport.php">Service Report</a></li>
            <li><a href="billreport.php">Bill Report</a></li>
            <li><a href="apointreport.php">Appointment Report</a></li>
            <li><a href="enqreport.php">Course Enquiry Report</a></li>
    	</ul>

    </div>
    <li><a href="index.php">Logout:<!--?php echo $uname; ?--></a></li>		
</div>














<h1>Enquiry Report</h1>
	
	<table width="65%" border="1" class="rpt" align="center"> 
		<tr>
			<th>Enquiry ID</th>
			<th>Enquiry Name</th>
			<th>Enquiry Date</th>
			<th>Course</th>
			<th>Course Duration</th>
			<th>Batch Time</th>
			<th>Start Date</th>
			<th>Contact</th>
			<th>Address</th>	
			<th>City</th>						
			<th>Update</th>
		</tr>
		<?php

		while($res=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$res['Id']."</td>";
			echo "<td>".$res['Name']."</td>";
			echo "<td>".$res['Date']."</td>";
			echo "<td>".$res['Course']."</td>";
			echo "<td>".$res['Duration']."</td>";
			echo "<td>".$res['B_Time']."</td>";
			echo "<td>".$res['S_Date']."</td>";
			echo "<td>".$res['Contact']."</td>";
			echo "<td>".$res['Address']."</td>";
			echo "<td>".$res['City']."</td>";
			
			
			echo "<td><a href=\"enqedit.php?Id=$res[Id]\">Edit</a> | <a href=\"enqdelete.php?Id=$res[Id]\" on
			Click=\" return confirm('Are you sure ,you want to delete?')\">Delete</a></td>";
		}

		?>
	</table>


</body>
</html>