<?php
	include_once("db.php");
	session_start();
	$sql = "update config set no_of_stud='".$_POST['nos']."'";

	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('updated successfully!!!');</script>";
		echo "<script>window.location = 'config.php';</script>";
	}
	mysqli_close($con);
?>
