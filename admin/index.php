<!DOCTYPE html>
<html>
<head>
	</*link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\Nhavi\css\login.css"*/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{ background-image: url("image/emp4.jpg");background-repeat: no-repeat;background-size: cover;}


	table{margin-top: 0px;margin-right: 50px;}

	th{padding: 30px;}

	input{padding: 10px;border-radius: 50px; background-color: whitesmoke; color: black;
		width: 100%;font-size: 25px;	font-family: sans-serif; border: none; }
	</style>
</head>
<body>
	
<div style="text-align: right; padding: 30px;line-height: 30px;">
	<form method="post" action="main.php">
		<p style="font-size: 70px; color: wheat; text-align: right; padding-right: 150px;font-family: Javanese Text; font-weight: bolder;margin-top: 120px;">Login</p>
		<table align="right">
			<tr>
			<th><input type="text" name="uname" required placeholder="Enter Username" autofocus></th>
		</tr>
		<tr>
			<th><input type="PASSWORD" name="pass" required placeholder="Enter Password" autofocus></th>
		</tr>
		<tr>
			<th><input type="reset" name="cancel" value="Cancel" style="width:130px; margin-right: 30px;">
				<input type="submit" name="
				" value="Submit" style="width:130px;margin-left: 20px;" autofocus></th>
		</tr>
		<tr><th></th></tr><tr><th></th></tr>
	</table>
	</form>
</div>
</body>
</html>