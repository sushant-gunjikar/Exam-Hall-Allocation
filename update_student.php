<?php

	include_once("db.php");
	session_start();
	
	
	$sql = "update student set   name='".$_POST['name']."', address='".$_POST['address']."', phno='".$_POST['phno']."', email='".$_POST['email']."', dob='".$_POST['dob']."', sem='".$_POST['semester']."', year='".$_POST['year']."' where reg_no='".$_POST['reg_no']."'";

	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('updated successfully!!!');</script>";
		echo "<script>window.location = 'view_student.php';</script>";
	}
	mysqli_close($con);
?>
