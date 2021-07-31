<?php
	session_start();
	include_once("db.php");
	
	$image1 = $_FILES['exampleInputFile']['name'];
	$tmp1 = $_FILES['exampleInputFile']['tmp_name'];
	
	$pathAndName = "uploads/".$image1;
	if(!empty($_FILES) && file_exists($tmp1) && is_uploaded_file($tmp1))
	{
		move_uploaded_file($tmp1,$pathAndName);
	}
	else
	{
		$pathAndName="";
	}
	
	$sql = "INSERT INTO student(pics,reg_no,name,address,phno,email,dob,sem,year) VALUES ('".$pathAndName."', '$_POST[reg_number]', '$_POST[name]', '$_POST[address]', '$_POST[phno]', '$_POST[email]', '$_POST[dob]', '$_POST[semester]', '$_POST[year]')";

	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('1 Record added successfully !!!');</script>";
		echo "<script>window.location = 'add_student.php';</script>";
	}
	mysqli_close($con);
?>
