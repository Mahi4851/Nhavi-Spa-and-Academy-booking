<!DOCTYPE html>
<html>
<head>
	</*link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\Nhavi\css\employee.css"*/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">


		*{margin-top: 0px;padding: 0px;box-sizing:border-box;}

	.menu-bar{text-align: center;background-color:purple;font-size: 20px;margin-left: 0px;margin-right: 0px; border-radius: 0px;padding-top: 10px;}
	.menu-bar ul{display: inline-flex;list-style: none;color: white;}
	.menu-bar ul li{width: 180px;margin: 15px;padding: 0px;}
	.menu-bar ul li a{text-decoration: none;color: white;}
	.active,.menu-bar ul li:hover{background-color:plum;border-radius:4px; padding: px;}	
	.sub-menu{display: none;}
	.menu-bar ul li:hover .sub-menu{display: block;position: absolute;background-color:purple;
		                           margin-top:15px;margin-left:15px;}
	.menu-bar ul li:hover .sub-menu ul{display: block;margin:10px;}
	.menu-bar ul li:hover .sub-menu ul li{width:180px;padding:10px;border-bottom:2px dotted white;
		                                background:transparent;border-radius:10px;text-align:left;}
    .menu-bar ul li:hover .sub-menu ul li:last-child{border-bottom:none;}
    .menu-bar ul li:hover .sub-menu ul li a:hover{color:orange;}

	.d1{text-align:center;font-size: 30px;line-height:100px;}
/*background-image: url(C:/xampp/htdocs/Nhavi/image/mainimg.jpg);*/
	
	
.img1{ background-color: black;border: 10px black solid;
		width: 100%; line-height: 190px; background-size: ; text-align: center;color: lightcoral;font-size: 70px;background-repeat:1;font-family:Verdana;}
	.img1 img{width: 160px;border-radius: 100px;margin-left: 10px;}	
	.img2{width: 220px;border-radius: 50px;margin-top: 15px;margin-right: 10px;}	


.iii{width: 1000px; height: 1000px;background-color: none;}
	 .main1{}











			body{padding: 0px;margin: 0px;box-sizing: border-box; 
		}

	table{padding-top: 0px; padding-right: 60px;margin-right: 60px; width: 30%;}

	th{color: lightslategrey; font-size: 30px; padding: 20px; margin-right: 0px; }

	input{padding: 10px;border-radius: 50px; background-color: black;
	 color: floralwhite;width: 0%;font-size: 20px;	font-family: sans-serif;width: 330px;}
	 
	#label{color: black;font-weight: bold; text-align: center; font-size: 70px;font-family: gabriola;
		font-style: bold; word-spacing: 5px;letter-spacing: 5px;margin-right: 0px;}
	</style>
</head>
<body>


	<div class="img1"><img src="image\logo5.jpg" align="left">The Spa & Academy <img src="image\logo1.png" align="right" class="img2"></div>



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



















<?php
include_once('config.php');

$qry=mysqli_query($conn,"select max(id) from employee");
$row=mysqli_fetch_array($qry);
$id=$row[0]+1;

?>	



<img src="image/tt.jpg"  class="iii">
<table align="right" >
	
		
	<form action="employee1.php" method="post">
	

		<th><span id="label">Employee Entry Form</span><input type="text" name="id" value="<?php echo $id; ?>" placeholder="Enter Employee ID" readonly></th>
	</tr>
	<tr>
		

		<th><input type="text" name="Name" placeholder="Enter Employee Name"  required ></th>
	</tr>
	<tr>
		


		<th><input type="text" name="Address" placeholder="Enter Employee Address" required ></th>
	</tr>
	<tr>
		


		<th><input type="text" name="city" placeholder="Enter Employee City" required  ></th>
	</tr>
	<tr>
		


		<th><input type="text" name="cont" placeholder="Enter Employee Contact No." required ></th>
	</tr>
	<tr>
		


		<th><input type="text" name="salary" placeholder="Enter Employee Salary" required ></th>
	</tr>
	<tr>
		

		<th><input type="reset" name="cancel" value="Cancel"  style="width: 40%; color: wheat;  margin-left:10px;" >

		<input type="submit" name="submit" value="Submit"  style="width: 40%; color: wheat;  margin-left:30px;"></th>
	</tr>
	
	
	</form>


</table>


</body>
</html>