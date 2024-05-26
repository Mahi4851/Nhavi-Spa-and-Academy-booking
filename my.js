function valid()
	 {
	 	x = document.frm.t1.value;
	 	y = /^[a-z   A-Z]+$/;
	 	if (!y.test(x)) 
	 	{
	 		//alert("invalid name");
	 		document.getElementById("nm").innerHTML="<font color='red' size='3'>*Only enter characters</font>";
	 	}
	 }