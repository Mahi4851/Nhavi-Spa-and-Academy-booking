	<!DOCTYPE html>
	<html>
	<head>
		</*link rel="stylesheet" type="text/css" href=C:\xampp\htdocs\Nhavi\css\enquaryform.css*/>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<style type="text/css">

body{background-color: black;}
*{margin-top: 0px;padding: 0px;box-sizing:border-box;}

*{margin-top: 0px;padding: 0px;box-sizing:border-box;}

	.menu-bar{text-align: center;background-color:purple;font-size: 20px;margin-left: 0px;margin-right: 0px; border-radius: 10px;padding-top: 10px;}
	.menu-bar ul{display: inline-flex;list-style: none;color: white;}
	.menu-bar ul li{width: 170px;margin: 15px;padding: 0px;}
	.menu-bar ul li a{text-decoration: none;color: white;}
	.active,.menu-bar ul li:hover{background-color:plum;border-radius:4px;}	
	.sub-menu{display: none;}
	.menu-bar ul li:hover .sub-menu{display: block;position: absolute;background-color:lightpurple;
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







					#label{color: whitesmoke; text-align: center; font-size: 50px;
		font-family: gabriola;font-style: bold;}


		.bg{background-image: url("image/back1.webp"); 
			background-repeat: no-repeat; background-size: cover; }

		table{ ;margin: 0px; border: none; border-radius: 20px; font-size: 30px;  color: whitesmoke;}
		th{ padding: 20px;margin: 0px; border: none; border-radius: 20px; font-size: 30px;  color: whitesmoke;}

		input{padding: 10px;border-radius: 50px; background-color: black; color: floralwhite;
			width: 50%;font-size: 20px;	font-family: sans-serif;}
			
		table{width: 100%; border-radius: 20px; margin-right: 0px;margin-left: 0px;}
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


<?php
include_once('config.php');

$qry=mysqli_query($conn,"select max(cid) from customer");
$row=mysqli_fetch_array($qry);
$id=$row[0]+1;

?>	
		<div id="back">

			<div class="bg">
<table>

		<form method="post"  action="customer1.php">
			
				
			
			<tr><td><img  style="border-radius: 100px; padding-left: 0px;margin-top: 0px; background-color: black; font-size: 30px;"><p id="label">Customer Entry Form</p></t></tr>
			<tr>
			<th>
			<input type="text" name="cid" required placeholder="Enter Customer ID" autofocus value="<?php echo $id; ?>" readonly>
			</th>
			<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
		</tr>
		<tr>
			<th>
			<input type="text" name="name"  required placeholder="Enter Customer Name" >		
			</th><th></th><th></th><th></th><th></th><th><th></th><th></th></th><th></th><th></th><th></th><th></th>
		</tr>
		<tr>
			<th>			
			<input type="text" name="add"  required placeholder="Enter Address" >		
			</th><th></th><th></th><th></th><th></th><th></th><th></th><th><th></th><th></th></th><th></th><th></th>
		</tr>
		<tr>		
			<th>
			<input type="text" name="city"  required placeholder="Enter City" >		
				</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
		</tr>
		<tr>
			<th>
			<input type="text" name="cont"  required placeholder="Enter Contact No." >
			</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
		</tr>
		<tr>
			<th>
			<input type="reset" name="cancel" value="Cancel" style="width: 25%; color: floralwhite; border-color: whitesmoke;">		
			<input type="submit" name="submit" value="Submit" autofocus style="width: 25%; color:floralwhite; border-color: whitesmoke; ">
			</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
		</tr>
<tr></tr>

		</form>
	</table>

</div>

</div>
	
	</body>
	</html>