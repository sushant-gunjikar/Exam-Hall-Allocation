<?php
	include_once("db.php");
	session_start();
	
	$sql = "INSERT INTO admin(name,address,phno,email,password) VALUES ('$_POST[name]', '$_POST[address]', '$_POST[phno]', '$_POST[email]', '$_POST[password]')";

	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
		
	}
	else
	{
		echo "<script>alert('Registered successfully !!!');</script>";
		echo "<script>window.location = 'index.html';</script>";
	}
	mysqli_close($con);
?>