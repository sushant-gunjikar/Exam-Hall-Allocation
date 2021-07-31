<?php
//session_start();
//global $flag;
//$flag = "1";
$con=mysqli_connect("localhost","root","","exam_hall_allocation_system");

if(mysqli_connect_errno())
{
	echo "failed";
	mysqli_connect_error();
}

?>