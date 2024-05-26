<!DOCTYPE html>
<html>
<head>
	</*link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\Nhavi\css\course.css"*/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">


*{margin-top: 0px;padding: 0px;box-sizing:border-box;}

*{margin-top: 0px;padding: 0px;box-sizing:border-box;}

	.menu-bar{text-align: center;background-color:purple;font-size: 20px;margin-left: 0px;margin-right: 0px; border-radius: 10px;}
	.menu-bar ul{display: inline-flex;list-style: none;color: white;}
	.menu-bar ul li{width: 160px;margin: 15px;padding: 0px;}
	.menu-bar ul li a{text-decoration: none;color: white;}
	.active,.menu-bar ul li:hover{background-color:plum;border-radius:4px;}	
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
	.img1 img{width: 170px;border-radius: 100px;margin-left: 10px; }	
	.img2{width: 220px;border-radius: 100px;margin-top: 15px;margin-right: 10px;}	










	/*body{ background-image: url("image/iq2.jpg");background-repeat: no-repeat;background-size: cover;}*/

*{margin-top: 0px;padding: 0px;box-sizing:border-box;}
	table{margin-top: 0px	;margin-right: 0px;}

	th{padding: 30px; background-color: ghostwhite;}

	input{padding: 15px;border-radius: 50px; background-color: #EAECEE;
	 color: black;width: 100%;font-size: 25px;	font-family: sans-serif; border: none; }
		
		p{text-align: center; color: #17202A;
			padding-right: 0px;margin-top: 0px; font-size: 70px; font-family:Gabriola ; font-weight: bolder;}
	.s1{padding: 15px;border-radius: 50px; background-color: #EAECEE;
	 color: black;width: 105%;font-size: 25px;	font-family: sans-serif; border: none; }
	 .iii{width: 950px; height: 1100px;background-color: none;}
	 .main1{}
</style>

<body>
<!--div class="img1"><img src="admin\image\logo5.jpg" align="left" style="padding-top: 10px;">The Spa & Academy <img src="image\logo1.png" align="right" class="img2"></div-->


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




















<?php
include_once('config.php');

$qry=mysqli_query($conn,"select max(ID) from course");
$row=mysqli_fetch_array($qry);
$id=$row[0]+1;

?>	

<div class="main1">
	<table>
		<tr>
			<th style="background-color:transparent; border-radius: 30px; padding: 0px;"><img src="image/employee1.jpg"  class="iii"></th>
			<th><div >
	<p class="p">!!Course Entry Details!!</p>
	<form method="post" action="course1.php">
	<table align="right">

		<tr>
			<th> <input type="text" name="ID" value="<?php echo $id; ?>" placeholder="Enter Course Id"  readonly> </th>
		</tr>
		<tr>
			<!--th> <select name="course" class="s1" >
					<option>Courses are Available </option>
					<option>Make-Up</option>
					<option>Cosmetology</option>
					<option>Nail-Art</option>
					<option>Hairstyling</option>
					<option>Beauty Therapy</option>
					<option>Skin Care </option>
					<option>Manicure and Pedicure</option>
					<option>Massage Therapy</option>
					<option>Hair-Coloring</option>
					<option>Waxing & Clean-up</option>
					<option>Straitning & Wella With Keratin Treatment</option>
				</select></th-->

				<th> <input type="text" name="course" placeholder="Enter Course Name" required autofocus>  </th>

		</tr>
		<tr>
			<th> <input type="text" name="cdur" placeholder="Enter Course Duration" required autofocus>  </th>
		</tr>
		<tr>
			<th> <input type="text" name="camt" placeholder="Enter Course Amount" required autofocus> </th>
		</tr>
		<tr>
			<th>
				<input type="reset" name="cancel" value="Cancel" style="width: 130px; margin-right:20px;margin-left: 20px; " >
				<input type="submit" name="submit" value="Submit" autofocus style="width:130px; margin-left: 30px;" >
			</th>
		</tr>



		
	</table>
	</form>
</div></th>
		</tr>
	</table>
</div>
					

</body>
</html>