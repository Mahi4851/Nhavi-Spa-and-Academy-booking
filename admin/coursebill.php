<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
<style type="text/css">
	/*body{background-image: url("image/apoint2.jpg");background-repeat: no-repeat;background-size: cover;}*/
	body{background-color: lightseagreen;}

	input{padding: 10px;border-radius: 50px; background-color:black;
	 color: whitesmoke;font-size: 35px;	font-family: sans-serif; border: none;width: 350px; margin-top: 30px;}

	 table{margin-top: 100px; margin-bottom: 200px; }
	 th{margin-top:  margin-left: 50px;}

	 .p1{font-size: 100px;text-align: center; color:black;padding-top:70px;font-weight: bolder; font-family:Gabriola  ;}

th label{color: red; padding-top: 50px; font-size: 40px;padding-bottom: 0px; padding-top: 50px;}







.img1{ background-color: black;border: 10px black solid;
		width: 100%; line-height: 190px; background-size: ; text-align: center;color: lightcoral;font-size: 70px;background-repeat:1;font-family:Verdana;}
	.img1 img{width: 160px;border-radius: 100px;margin-left: 10px;}	
	.img2{width: 220px;border-radius: 50px;margin-top: 15px;margin-right: 10px;}	







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
select{width: 350px;padding: 10px;border-radius: 50px;font-size: 35px;font-family: sans-serif; margin-top: 30px;  background-color: black;color: white;}
}
	

</style>
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
    		<li><a href="apointreport.php">Appointment Report</a></li>
            <li><a href="enqreport.php">Course Enquiry Report</a></li>
    		<li><a href="custreport.php">Customer Report</a></li>
    		<li><a href="empreport.php">Employee Report</a></li>
    		<li><a href="correport.php">Course Report</a></li>    		
    		<li><a href="servreport.php">Service Report</a></li>
            <li><a href="billreport.php">Bill Report</a></li>
            
    	</ul>

    </div>
    <li><a href="index.php">Logout:<!--?php echo $uname; ?--></a></li>		
</div>




<?php
require('config.php');
//auto increment code--------------------
$query =mysqli_query($conn,"SELECT MAX(bid) FROM bill");
$qry=mysqli_query($conn,"SELECT * FROM  customer");
$qry1=mysqli_query($conn,"SELECT * FROM service");
$row = mysqli_fetch_row($query);
$id=$row[0]+1;
//auto increment code end --------------------

?>	

			<p class="p1"> Course Bill Entry Form</p>
<form action="coursebill1.php" method="post">
	<table align="center" >


		<tr>
			<th><label>Bill Id:</label></th>
			<th><label>Bill Date:</label></th>
		</tr>
		<tr>
			<th> <input type="text" name="bid" value="" placeholder="Enter Bill ID" required >	</th>
			<th><input type="date" name="bdate"required style="margin-left: 90px;"></th>
		</tr>




		<tr>
			<th><label>Student Id:</label></th>
			<th><label>Student Name:</label></th>
		</tr>
		<tr>
			<th><select name="sid" id="sid">
  <?php
  while($row1=mysqli_fetch_array($qry))
  {
    echo"<option>".$row1[0]."</option>";
  }
  ?>
</select></th>
			<th><input type="text" name="sname" id="sname" placeholder="Enter Student Name" required readonly style="margin-left: 90px;"></th>
		</tr>


		
		<tr>
			<th><label>1.Course Name:</label></th>
			<th><label>1.Course Rate:</label></th>
		</tr>
		<tr>
			<th><select name="cname" id="sname">
  <?php
  while($row2=mysqli_fetch_array($qry1))
  {
    echo"<option>".$row2[1]."</option>";
  }
  ?>
</select></th>
			<th><input type="text" name="rate" id="rate" placeholder="Enter Rate "  readonly style="margin-left: 90px;"></th>
		</tr>

























<tr>
			<th><label>Duration:</label></th>
			<th><label>Discount Rate:</label></th>
		</tr>

		<tr>
			<th ><input type="text" name="duration" id="gst" placeholder="Enter Duration Amount" required style="margin-left:;" ></th>
			<input type="hidden" name="amt" id="amt" placeholder="Amount" readonly required style="margin-left:;" >
			<th><input type="text" name="damt" id="damt" placeholder="Enter Discount" required style="margin-left:90px;"></th>
		</tr>


		<tr>
			<th colspan="2"><label>Total Amount:</label></th>
			
		</tr>
		<tr>
			<th colspan="2"><input type="text" name="namt" id="namt" placeholder="Enter Net Amount" readonly required style="margin-left:;"></th>
			<th></th>
		</tr>
		<tr>
			<th><input type="reset" name="cancle" value="Cancel" required style="width: 45%;"></th>
			<th><input type="submit" name="submit" value="Submit" required style="width: 40%;margin-left: 70px;"></th></th>
		</tr>
	</table>
</form>
<!--script type="text/javascript">
  $(function() {
    $("#rate, #gst,#damt").on("keydown keyup", sum);
  function sum() 
  {
   var a = (Number($("#rate").val()) * Number($("#gst").val()) / 100);
  $("#amt").val(Number($("#rate").val()) + a );
  $("#namt").val(Number($("#amt").val()) - Number($("#damt").val()));
  
  }
  
});
</script-->

</body>
</html>
<!--script type="text/javascript">
  $(document).ready(function (e){
    $('#cid').change(function(){
      $.post("f1.php",{
        parent_id: $('#cid').val(),
      }, function(response){
        $('#cname').val(response);
      
      });
      return false;
    });

    $('#sname').change(function(){
      $.post("f1.php",{
        parent_id1: $('#sname').val(),
      }, function(response){
        $('#rate').val(response);
      
      });
      return false;
    });

  });




  /*$(".rt,.gst,.damt").keyup(function(){
  	var rt = $(".rt").val();
  	var gst = $(".gst").val();
  	var gamt = rt * gst / 100;
  	var damt = $(".damt").val();
  	$(".namt").val(gamt - damt );
  })*/
</script-->
