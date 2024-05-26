<?php 
include_once("config.php");
$qry=mysqli_query($conn,"select uname from login");

while ($res=mysqli_fetch_array($qry))
 {

$uname=$res['uname'];

	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">
		
		*{margin: 0px;padding: 0px;box-sizing:border-box;}
		
	.menu-bar{text-align: center;background-color:purple;font-size: 20px;}
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
	.img1{ background-color: black;border: 10px black solid;
		width: 100%; line-height: 190px; background-size: ; text-align: center;color: lightcoral;font-size: 70px;background-repeat:1;font-family:Verdana;}
	.img1 img{width: 160px;border-radius: 100px;margin-left: 10px;}	
	.img2{width: 220px;border-radius: 50px;margin-top: 15px;margin-right: 10px;}	






  .au{text-align: center; font-size: 60px; margin-top: 70px; color: green;}
  #about{color:darkcyan;  margin-top: 50px; margin-bottom: 100px; margin-left: 40px; margin-right: 30px; font-size: 20px; box-sizing: content-box; line-height: 30px; word-spacing: 0.5px;}
  #about b{color: red;}








#footer{background-color: #292424; color: whitesmoke; font-size: 20px;letter-spacing: 0.7px;}
.foot{width: 100%;}
	.foot td{text-align: center;padding-top: 40px; text-decoration: none;}
	.foot li{ list-style-type: none;padding: 20px; }
	.foot a{text-decoration: ; font-weight: bolder; color: whitesmoke;}
	.foot th{color: white; font-size: 30px;text-decoration: underline; font-family: vardhana;	}



.my{color: whitesmoke; padding: 20px;background-color: darkgray; font-size: 20px; text-align: center;}


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






<div class="au">About Us
			<div id="about"> 


					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At the <b>The Nhavi Spa & Academy,</b> we have confidence in excellence with a heart. We Have made a salon that offers the most noteworthy quality hair benefits in a setting that is more advantageous for the earth,our visitors, and our staff. we convay top-notch proficient hair items intended to gaurantee our visitors put their best self forword, noth in the salon and at home.The hair care items we convey have been cautiously picked put together both respect to both with respect to exicution and eco-affectibility.
				As a spotless air salon, we offer smelling salt-free shading administration with almost no fragrance properties or substance spread.Giving best service is our first priority.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>The Nhavi Spa & Academy</b> is the ideal place to get a remarkeble haircut from first class, univercially prepared beautician and colorists. Giving best service is our first priority. Our commited group of beauticians, nails, hair and skin specialist accompany innumerable long period of envolvement in the magnificant bussiness.<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Looks has advanced throughout the years; with new methods and styles while continually refreshing its beauticians with the regularly developing pattern in the national and global market.

					 The Nhavi Spa & Academy always endeavors to teach and prepare their beautician about the most recent procedures and styles with cutting-edge innovation,by sending the beautician to different classes and by taking an intreste in different occasions of all kinds.
					
						"Our Customers are vital to us, so we constantly train our specialist to guarantee that all medicines are of the most astounding standard and that every customer gets the best consideration" <br>
					<b>The Nhavi Spa & Academy</b> will unable us to give customer the full range of coreective, remedial, and preparing medications with the most expert and classified administration.

			</div>
		</div>







<div id="footer">
	<div>
		<table  width="100%" class="foot" cellspacing="20px">
			<tr>
				<th>About</th>
				<th>Contact</th>
				<th>Address</th>
			</tr>
			<tr>
				<td>
					<ul>
						<li><a href="">Enquiry</a></li>
						<li><a href="">Service</a></li>
						<li><a href="">Course</a></li>
					</ul>
				</td>
				<td><ul>
						<li><b>E-mail:</b><i>Nhavisa@gmail.com</i></li>
						<li><b>Mobile:</b><i>1234567890</i></li>
						<li><b>W/A</b><i>0987654321</i></li>
					</ul></td>
				<td><ul>
						<li><b><i>Datt Nagar, near Bus Stand </i></b></li>
						<li><b><i>Sakri Road,Samode</i></b></li>
						<li><b><i>Tal-Sakri, Dist-Dhule, Maharashtra</i></b></li>
					</ul></td>
				<td><ul>
						<li><b><i>Time:</i></b></li>
						<li><b>From</b><i>09:00AM</i></li>
						<li><b>To</b><i>10:00PM</i></li>
					</ul></td>
			</tr>
		</table>
	</div>
</div>
















<div class="my">All Rights reserved. The Nhavi Spa & Academy. Designed & Develop By Mahendra M. Yais</div>
		
</body>
</html>
