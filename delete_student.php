<?php

	include_once("db.php");
	session_start();
	
	
	$sql = "delete from student where reg_no='".$_GET['reg_no']."'";

	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Student Record deleted successfully!!!');</script>";
		echo "<script>window.location = 'view_student.php';</script>";
	}
	mysqli_close($con);
?>
