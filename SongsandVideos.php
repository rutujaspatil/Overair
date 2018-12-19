<?php
	$con=mysqli_connect("localhost","root","root");
					//("server name","username","password")
	if($con){
		//echo "Connection done!!<br>";
	}
	else{
		die("Connection failed".mysqli_error($con));
	}
	
	mysqli_select_db($con,"Songs");
	
	$songid=$_REQUEST['id'];

	// SUBSTRING_INDEX(myFileName, '\\', -1)


	$str="select * from Rain where ID=$songid";
	$result=mysqli_query($con,$str);
	
	if($result)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			
			$jasonArr[]=$row;
		}
			echo json_encode($jasonArr);

	}
	else{
		echo mysqli_error($con);
	
	}
	 mysqli_close($con);
?>