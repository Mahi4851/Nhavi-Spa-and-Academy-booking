<!DOCTYPE html>
<html>
<head>
	</*link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\Nhavi\css\service.css"*/>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		
		*{margin-top: 0px;padding: 0px;box-sizing:border-box;}

	.menu-bar{text-align: center;background-color:grey;font-size: 20px;margin-left: 0px;margin-right: 0px; border-radius: 30px;}
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

	.d1{text-align:center;font-size: 30px;line-height:100px;}
/*background-image: url(C:/xampp/htdocs/Nhavi/image/mainimg.jpg);*/
	
	
.img1{ background-color: black;border: 10px black solid;
		width: 100%; line-height: 190px; background-size: ; text-align: center;color: lightcoral;font-size: 70px;background-repeat:1;font-family:Verdana;}
	.img1 img{width: 160px;border-radius: 100px;margin-left: 10px;}	
	.img2{width: 220px;border-radius: 50px;margin-top: 15px;margin-right: 10px;}	














		#label{color: lightsalmon; text-align: ; font-size: 70px;
	font-family: gabriola;font-style: bold;margin-bottom: 30px;margin-top: 100px;}

	body{padding: 0px;margin: 0px;background-image:  }


table{background-image: url("image/service2.jpg" ); 
		background-repeat: no-repeat;width: 100%;background-position: right top;background-size: cover;width: 100%;}
	table,td{ padding: 20px;margin-top: 0px;margin-left: 0px; border: none;
	 border-radius: 0px; font-size: 40px;  color: black; text-align: ;}
	 
		input{padding: 10px;border-radius: 50px;
		 background-color: mintcream; color: black;width: 30%;font-size: 20px;	font-family: sans-serif; }
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













	<div>
		<form action="service1.php" method="post">
		<table >
			
				<tr><td><p id="label"> Service Entry Form</p></th></tr>
				<tr>
					<td>
						<input type="text" name="sid" placeholder="Enter Service ID" required >
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Service" placeholder="Enter Service Name" required >
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Cost" placeholder="Enter Service Cost/Amount" required >
					</td>
				</tr>
				<tr>
					<td>
						<input type="reset" name="" value="Cancel" style="width: 12%; color: black;  margin-left:10px;">		
						<input type="submit" name="submit" value="Submit" style="width: 12%; color:black; margin-left: 30px;"  >
					</td>
				</tr>
				<tr><th></th><th></th><th></th></tr>
				<tr><th></th><th></th><th></th></tr>
				<tr><th></th><th></th><th></th></tr>
				<tr><th></th><th></th><th></th></tr>
				<tr><th></th><th></th><th></th></tr>
				<tr><th></th><th></th><th></th></tr>
				<tr><th></th><th></th><th></th></tr>
				

				

				
			
		</table>
	</form>

	</div>

</body>
</html>