<?php 
	include_once("db.php");
	
	$sql="select * from config";
	$result=mysqli_query($con,$sql);
	
	$res=mysqli_fetch_array($result);
	echo json_encode(array('no_of_stud'=>$res[0]));
	
?>