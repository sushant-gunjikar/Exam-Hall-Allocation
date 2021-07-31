<?php 
	include_once("db.php");
	
	$sql="select * from student where reg_no='".$_GET['fetch_reg_no']."'";
	$result=mysqli_query($con,$sql);
	
	$res=mysqli_fetch_array($result);
	echo json_encode(array('reg_no'=>$res[1],'name'=>$res[2],'address'=>$res[3],'phno'=>$res[4],'email'=>$res[5],'dob'=>$res[6],'sem'=>$res[7],'year'=>$res[8]));
	
?>