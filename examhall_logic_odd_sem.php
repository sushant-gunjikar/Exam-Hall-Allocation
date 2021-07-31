<?php
	include_once("db.php");
	
	global $reg_array_sem1,$reg_array_sem3,$reg_array_sem5;
	$reg_array_sem1 = array();
	$reg_array_sem3 = array();
	$reg_array_sem5 = array();
	
	//To find count of student of sem 1
	$sql = "select count(*) from student where sem = '1'";
	$res = mysqli_query($con, $sql);
	
	$result=mysqli_fetch_array($res);
	global $total_students_sem1;
	$total_students_sem1 = $result[0];
	
	
	//To find count of student of sem 3
	$sql = "select count(*) from student where sem = '3'";
	$res = mysqli_query($con, $sql);
	
	$result=mysqli_fetch_array($res);
	global $total_students_sem3;
	$total_students_sem3 = $result[0];
	
	//To find count of students of sem 5
	$sql = "select count(*) from student where sem = '5'";
	$res = mysqli_query($con, $sql);
	
	$result=mysqli_fetch_array($res);
	global $total_students_sem5;
	$total_students_sem5 = $result[0];
	
	global $total_students;
	$total_students = $total_students_sem1 + $total_students_sem3 + $total_students_sem5;
	
	
	echo "student of sem 1 :".$total_students_sem1; echo "<br>";
	echo "student of sem 3 :".$total_students_sem3; echo "<br>";
	echo "student of sem 5 :".$total_students_sem5; echo "<br>";
	echo "total students : ".$total_students; echo "<br>";
	
	$sql = "select * from config";
	$res = mysqli_query($con, $sql);
	
	$result=mysqli_fetch_array($res);
	global $students_in_each_hall;
	$students_in_each_hall = $result[0];

	
	$s = 0;
	$reg_array_sem1[$s] = 0;
	$s = $s + 1;
	
	$sql = "select * from student where sem = '1'";
	$res = mysqli_query($con, $sql);
	while( $result=mysqli_fetch_array($res) )
	{
		$reg_array_sem1[$s] = $result[1];
		$s++;
	}
	
	$s = 0;
	$reg_array_sem3[$s] = 0;
	$s = $s + 1;
	
	$sql = "select * from student where sem = '3'";
	$res = mysqli_query($con, $sql);
	while( $result=mysqli_fetch_array($res) )
	{
		$reg_array_sem3[$s] = $result[1];
		$s++;
	}
	
	$s = 0;
	$reg_array_sem5[$s] = 0;
	$s = $s + 1;
	
	$sql = "select * from student where sem = '5'";
	$res = mysqli_query($con, $sql);
	while( $result=mysqli_fetch_array($res) )
	{
		$reg_array_sem5[$s] = $result[1];
		$s++;
	}
	
	//sem 1
	//echo "<br>Sem 1 : <br>";
	//for( $s = 1; $s <=$total_students_sem1; $s++)
	///{
	//	echo $reg_array_sem1[$s]."<br>";
	//}
	//sem 3
	//echo "<br>Sem 3 : <br>";
	//for( $s = 1; $s <=$total_students_sem3; $s++)
	//{
	//	echo $reg_array_sem3[$s]."<br>";
	//}
	//sem5
	//echo "<br>Sem 5 : <br>";
	///for( $s = 1; $s <=$total_students_sem5; $s++)
	//{
	//	echo $reg_array_sem5[$s]."<br>";
	//}

	$total_hall_required = ceil($total_students/$students_in_each_hall);
	
	//echo "Total Students : ", $total_students;
	echo "<br>";
	echo "Total Students in each hall : ", $students_in_each_hall;
	echo "<br>";
	echo "Total hall Required : ", $total_hall_required;
	echo "<br>";
	
	$sem1= ceil($total_students_sem1 / $total_hall_required);	
	$sem3=ceil($total_students_sem3 / $total_hall_required);
	$sem5=ceil($total_students_sem5 / $total_hall_required);
	
	echo "sem1 students in hall : ".$sem1;
	echo "<br>";
	echo "sem3 students in hall : ".$sem3;
	echo "<br>";
	echo "sem5 students in hall : ".$sem5;
	echo "<br>";
	
	//hall allocation for sem 1
	$s1 = 1;
	$i = 0;
	$j = 0;
	$sm1 = $sem1;
	$students_in_hall = $total_students;
	echo "<br>Sem 1 : ";
	for($i=1; $i<=$total_hall_required; $i++)
	{
		echo "<br>sm1 : ".$sm1;
		while($s1<=$sm1)
		{
			echo "<br>hall no : ".$i." Regno : ".$reg_array_sem1[$s1];
			$sql = "update student set hall_no = '".$i."' where reg_no = '".$reg_array_sem1[$s1]."'";
			$res = mysqli_query($con, $sql);
			$s1 = $s1 + 1;
		}
		$total_students_sem1=$total_students_sem1-$sem1;
	
		if($sem1 > $total_students_sem1)
			$sem1 = $total_students_sem1;
		$sm1 = $sm1 + $sem1;
	}
	
	//hall allocation for sem3
	$s3 = 1;
	$i = 0;
	$j = 0;
	$sm3 = $sem3;
	$students_in_hall = $total_students;
	echo "<br>Sem 3 : ";
	for($i=1; $i<=$total_hall_required; $i++)
	{
		while($s3<=$sm3)
		{
			echo "<br>hall no : ".$i." Regno : ".$reg_array_sem3[$s3];
			$sql = "update student set hall_no = '".$i."' where reg_no = '".$reg_array_sem3[$s3]."'";
			$res = mysqli_query($con, $sql);
			$s3 = $s3 + 1;
		}
		$total_students_sem3=$total_students_sem3 - $sem3;
	
		if($sem3 > $total_students_sem3)
			$sem3 = $total_students_sem3;
		$sm3 = $sm3 + $sem3;
	}
	
	//hall allocation for sem5
	$s5 = 1;
	$i = 0;
	$j = 0;
	$sm5 = $sem5;
	$students_in_hall = $total_students;
	echo "<br>Sem 5 : ";
	for($i=1; $i<=$total_hall_required; $i++)
	{
		while($s5<=$sm5)
		{
			echo "<br>hall no : ".$i." Regno : ".$reg_array_sem5[$s5];
			$sql = "update student set hall_no = '".$i."' where reg_no = '".$reg_array_sem5[$s5]."'";
			$res = mysqli_query($con, $sql);
			$s5 = $s5 + 1;
		}
		$total_students_sem5=$total_students_sem5 - $sem5;
	
		if($sem5 > $total_students_sem5)
			$sem5 = $total_students_sem5;
		$sm5 = $sm5 + $sem5;
	}
	
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Hall allocated successfully !!!');</script>";
		//echo "<script>window.location = 'hall_allocation.php';</script>";
	}
	mysqli_close($con);
?>