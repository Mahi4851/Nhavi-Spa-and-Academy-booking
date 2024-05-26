<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="my1.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	
	*{margin: 0px;padding: 0px;box-sizing:border-box;}
		
*{margin: 0px;padding: 0px;box-sizing: border-box;}
#logo{width: 100%;min-height: 100px;background-color: white;  color: black;  font-family: Lucida Calligraphy; 
	letter-spacing: 5px; word-spacing: 5px;font-size: 50px;line-height: 50px; }
#logo img{border-radius: 100px; height:150px; width: 150px; margin: 0px; margin-top: 10px;}
.img2{float: right; }
header{width: 100%;min-height: 500px;}
nav{width: 100%;min-height: 30px; }

.menu-bar{text-align: center;background-color:grey;font-size: 20px;margin-left: 0px;margin-right: 0px; border-radius: 10px; }
	.menu-bar ul{display: inline-flex;list-style: none;color: white;}
	.menu-bar ul li{width: 160px;margin: 15px;padding: 0px;}
	.menu-bar ul li a{text-decoration: none;color: white;}
	.active,.menu-bar ul li:hover{background-color:plum;border-radius:4px;}	
	.sub-menu{display: none;}
	.menu-bar ul li:hover .sub-menu{display: block;position: absolute;background-color:grey;
		                           margin-top:15px;margin-left:15px;}
	.menu-bar ul li:hover .sub-menu ul{display: block;margin:10px;}
	.menu-bar ul li:hover .sub-menu ul li{width:180px;padding:5px;border-bottom:2px dotted white;
		                                background:transparent;border-radius:10px;text-align:left;}
    .menu-bar ul li:hover .sub-menu ul li:last-child{border-bottom:none;}
    .menu-bar ul li:hover .sub-menu ul li a:hover{color:orange;}





	/*.menu-bar{text-align: center;background-color:purple;font-size: 20px;}
	.menu-bar ul{display: inline-flex;list-style: none;color: white;}
	.menu-bar ul li{width: 160px;margin: 15px;padding: 10px;}
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
	/*.img1{ background-color: black;border: 10px black solid;
		width: 100%; line-height: 190px; background-size: ; text-align: center;color: lightcoral;font-size: 70px;background-repeat:1;font-family:Verdana;}
	.img1 img{width: 160px;border-radius: 100px;margin-left: 10px;}	
	.img2{width: 220px;border-radius: 50px;margin-top: 15px;margin-right: 10px;}*/	




header{background-image: url("image/img1.jpg"); width: 100%; height: 500px;
 background-repeat: no-repeat;background-attachment:scroll; background-size: cover; font-size: 80px;
  color: whitesmoke; padding-top: 100px;font-family: Lucida Handwriting;padding-left: 40px;}



#footer{background-color: #292424; color: whitesmoke; font-size: 20px;letter-spacing: 0.7px; margin-top: 100px;}
.foot{width: 100%;}
	.foot td{text-align: center;padding-top: 40px; text-decoration: none;}
	.foot li{ list-style-type: none;padding: 20px; }
	.foot a{text-decoration: ; font-weight: bolder; color: whitesmoke;}
	.foot th{color: white; font-size: 30px;text-decoration: underline; font-family: vardhana;	}



.my{color: whitesmoke; padding: 20px;background-color: darkgray; font-size: 20px; text-align: center;}



	body{/*padding: 0px;margin: 0px;box-sizing: border-box; 
		background-image: url("image/bill.jpeg");background-size: cover;*/}


	.form table{padding-top: 0px; padding-right: 60px;margin-right: 50px;margin-bottom: 30px;margin-top: 30px;}

	.form th{color: black; font-size: 30px; padding: 20px;}

	.form input{padding: 10px;border-radius: 50px; background-color: black;
	 color: floralwhite;width: 120%;font-size: 20px;	font-family: sans-serif;}
	 
	#label{color: black;font-weight: bold; text-align: center; font-size: 70px;font-family: gabriola;
		font-style: bold; word-spacing: 5px;letter-spacing: 5px;margin-top: 80px; margin-right: 50px;}



</style>
<body>


<div id="wrop">
		<div id="logo">
			<table width="100%">
				<tr>
					<td><img src="image\logo2.png" style="height: 150px; width: 150px;"></td>
					<td  style="text-align: center; font-size:70px; font-weight: bolder; " ><i>It's your time to Shine!!!</i></td>
					<td align="right" ><img src="image\logo1.png" align="right" style="height: 150px; width: 200px; margin: 10px;float: right;" class="img2"></td>
				</tr>
			</table>

<nav><div class="menu-bar">

	<ul>
	<li><a href="\Nhavi\index.html">Home</a></li>
	<li><a href="\Nhavi\about.html">About Us</a></li>
	<li><a href="\Nhavi\serviceinfo.html">Services</a></li>
	<li><a href="\Nhavi\style.html">Styles</a></li>			
	<li><a href="\Nhavi\courseinfo.html">Courses</a></li>	
	<li><a href="#footer">Contact </a></li>	
	<li><a href="#appintment">Book Now </a>

		<div class="sub-menu">
				<ul>
    		<li><a href="apointment.php"> Appointment</a></li>
    		<li><a href="enquary.php"> Course</a></li>

    	</ul>
    </div>
</li>	
	</ul>	
</div></nav>
	


		 </div>
		<header> The <b><i> NHAVI </i></b> <br> Spa & Academy <br> <p style="color: red; font-size: 50px ; font-family: cursive;padding-left: 90px;">Your Personal Stylist!!<p>

		</header>


<!--div class="img1"><img src="image\logo4.jpg" align="left">The Spa & Academy <img src="image\logo1.png" align="right" class="img2"></div>




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
    <li><a href="index.php">Logout:<//?php echo $uname; ?></a></li>		
</div-->









<?php
include_once('config.php');

$qry=mysqli_query($conn,"select max(Id) from appointment");
$row=mysqli_fetch_array($qry);
$id=$row[0]+1;

?>

<!--div style="background-color: lightcyan; margin-bottom:50px; border-radius: 100px 0px 100px 0px;margin: 200px;margin-top: 10px; border:5px dotted indianred;"-->

	<div class="form">

<center><table>
	
		<p id="label">Appointment</p>
	<form action="/Nhavi/admin/apointment1.php" method="post" name="frm">
	<tr>
		<th><label></label><input type="hidden" name="Id" placeholder="Enter Appointment ID" readonly value="<?php echo $id; ?>" ></th>
	</tr>
	<tr><th><label>Date  :</label></th>
		<th><input type="date" name="Date" placeholder=""  required ></th>
	</tr>
	<tr><th><label>Time :</label></th>
		<th><input type="time" name="Time" placeholder="Time"  required ></th>
	</tr>
	<tr><th><label>Name :</label></th>
		<th><input type="text" name="t1" placeholder="Enter Customer Name" required><br><span id="nam"></span></th>
	</tr>
	<tr><th><label>Address :</label></th>
		<th><input type="text" name="Address" placeholder="Enter Customer Address" required onclick="nitin()"></th>
	</tr>
	<tr><th><label>City :</label></th>
		<th><input type="text" name="City" placeholder="Enter Customer City" required ></th>
	</tr>
	<tr><th><label>Contact No. :</label></th>
		<th><input type="text" name="Cont" placeholder="Enter Customer Contact No." required ></th>
	</tr>
	<tr>
		<th><label>Description   :</label></th>
		<th><input type="textarea" name="desc" placeholder="Description" required ></th>
	</tr>
	
	<tr>
		<th><input type="reset" name="cancel" value="Cancel"  style="width: 70%; color: wheat;  margin-left:20px;" ></th>

		<th><input type="submit" name="submit" value="Submit"  style="width: 40%; color: wheat;  margin-left:20px;margin-right: 0px;"></th>
	</tr>
	</form>


</table>

</center>


</div>










<div id="footer" >
	<div >
		<table  width="100%" class="foot" cellspacing="20px" name="#footer" >
			<tr>
				<th>About</th>
				<th>Contact</th>
				<th>Address</th>
				<th><a href="admin\apointment.php">Appointment</a></th>
			</tr>
			<tr>
				<td>
					<ul>
						<li><a href="admin\enquary.php">Enquiry</a></li>
						<li><a href="serviceinfo.html">Service</a></li>
						<li><a href="courseinfo.html">Course</a></li>
					</ul>
				</td>
				<td><ul>
						<li><b>E-mail:</b><i>Nhavisa@gmail.com</i></li>
						<li><b>Mobile:</b><i>1234567890</i></li>
						<li><b>W/A</b><i>0987654321</i></li>
					</ul></td>
				<td><ul>
						<li><b><i>Datt Nagar, near Bus Stand </i></b></li>
						<li><b><i>Pimpalner Road,Samode</i></b></li>
						<li><b><i>Tal-Sakri, Dist-Dhule, Maharashtra</i></b></li>
					</ul></td>
				<td><ul>
						<li><b><i>Time:</i></b></li>
						<li><b>From:</b><i>09:00AM</i></li>
						<li><b>To:</b><i>10:00PM</i></li>
					</ul></td>
			</tr>
		</table>
	</div>
</div>
















<div class="my">All Rights reserved. The Nhavi Spa & Academy. Designed & Develop By Mahendra M. Yais</div>





</body>
</html>