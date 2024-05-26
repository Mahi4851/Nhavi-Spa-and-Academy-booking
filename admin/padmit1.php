<!DOCTYPE html>
<html><?php
include 'config.php';


$qry=mysqli_query($conn,"select * from register");

while ($res=mysqli_fetch_array($qry)) 
{
  $unm=$res['name'];

}

?>
<head>
<style>
* {
  box-sizing: border-box;
}
body{background-image: url('#');background-size:cover;}
input[type=text], select, textarea ,input[type=date]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;border:2px solid blue;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;color:white;
  font-size:25px; 
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width:100%;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-size:cover;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
h1{text-align:center;font-size:60px;color:cyan;}
h1:hover{color:red;}
p{color:purple;font-size:30px;text-align:right;}
.p1{color:white;font-size:20px;}
.p2{color:cyan;font-size:40px;text-align:center;}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: cyan;color:Blue;cursor:pointer;}

.dropdown:hover .dropdown-content {
  display: block;
}
.a1{text-decoration:none;background-color:cyan;color:blue;padding:10px;}
.f1{border:4px solid white; border-radius:20px;padding:100px;
	background-color:white;background-image:url('ff1.jpg');
	background-size:cover;padding-right:400px;}.l1{float: right;background-color: red;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>


<ul>
  <li><a href="main.php">Home</a></li>
<li><a href="#">About us</a></li> 
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Transaction</a>
    <div class="dropdown-content">
      <a href="doctor1.php">Add Doctor</a>
      <a href="ward1.php">Add Ward</a>
      <a href="patient1.php">Add Apoint</a>
<a href="padmit1.php">Patient Admit</a>
<a href="pdischarge1.php">Patient Discharge</a>


    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Reports</a>
    <div class="dropdown-content">
      <a href="doclist.php">Doctor List</a>
      <a href="wardlist.php">Ward List</a>
      
<a href="padlist.php">Admit List</a>
   <a href="pdislist.php">Discharge List</a> 
<a href="apointlist.php">Appointment List</a> 


    </div>
  </li>

<li class="l1"><a href="index.php">Logout<?php echo ":-$unm"; ?></a></li>
</ul>

<?php
require('config.php');
//auto increment code--------------------
$query = "SELECT MAX(aid) FROM padmit";
$qry=mysqli_query($conn,"SELECT * FROM  apoint");
$qry1=mysqli_query($conn,"SELECT * FROM ward");
$result = mysqli_query($conn,  $query);
$row = mysqli_fetch_row($result);
$id=$row[0]+1;
//auto increment code end --------------------

?>

<div class="f1">
  <center>
<form name=frm method=post action="padmit.php">
<h1>Patient admit</h1>
<table border=0>
<tr>
<td><font color=white size=5>Admit Id</font></td>
 <td><input type=text readonly name=aid value=<?php echo $id; ?>></td>
 <td><font color=white size=5>Admit Date</font></td>
<td><input type=date name=adate required></td>
</tr>
<tr>
<td><font color=white size=5>Patient ID</font></td>
<td><select name="pid" id="pid">
  <?php
  while($row=mysqli_fetch_array($qry))
  {
    echo"<option>".$row[0]."</option>";
  }
  ?>
</select></td>
<td><font color=white size=5>Patient Name</font></td>
<td><input type="text" name="pname" readonly id="txt2"></td>
</tr>
<tr>
<td><font color=white size=5>Ward Name</font></td>
<td><select name="wtype" id="wname" >
  <?php
  while($rw=mysqli_fetch_array($qry1))
  {
    echo"<option>".$rw[1]."</option>";
  }
  ?>
</select></td>
<td><font color=white size=5>Ward Rate</font></td>
<td><input type=text name=wrate id="txt1" readonly placeholder="Enter ward rate" value=<?php echo $var1;?>></td>
</tr>
<tr>

</tr>
<tr>
<td><font color=white size=5>Patient Problems</font></td>
<td><input type=text name=ptreatment  placeholder="Enter Problems"></td>
<td><font color=white size=5>Patient Condition</font></td>
<td><select name="condi"> 
  <option>Critical</option>
  <option>Normal</option>
</select></td>
</tr>
<tr>

</tr>
<tr>
<td><font color=white size=5>Deposit Amount</font></td>
<td><input type=text name=aamt  placeholder="Enter amt"></font></td>
</tr>
<tr>
<td></td>
<td><input type=submit name=submit value=save></td>
</tr>
</table>
</center>
</form>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function (e){
    $('#wname').change(function(){
      $.post("f1.php",{
        parent_id: $('#wname').val(),
      }, function(response){
        $('#txt1').val(response);
      
      });
      return false;
    });

    $('#pid').change(function(){
      $.post("f1.php",{
        parent_id1: $('#pid').val(),
      }, function(response){
        $('#txt2').val(response);
      
      });
      return false;
    });

  });
</script>
