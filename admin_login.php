<?php

	include_once("db.php");
	session_start();

	$sql="select * from admin where email='".$_POST['email']."' and password='".$_POST['password']."'";
	$result=mysqli_query($con,$sql); //true if Succedded
	$result1=mysqli_fetch_array($result);

	if(mysqli_num_rows($result) == 1) //Fetch atleast 1 row from db
	{
		$_SESSION['SESS'] = $_POST['email'];
		$_SESSION['SESS2'] = $result1[1];
		echo "<script>window.location = 'admin_dashboard.php';</script>"; //Login Successful
	}
	else
	{
		echo "<script>alert('Invalid Details');</script>";
		echo "<script>window.location = 'index.html';</script>";
	}
mysqli_close($con);
?>