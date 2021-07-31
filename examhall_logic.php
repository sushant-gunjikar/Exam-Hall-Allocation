<?php
	include_once("db.php");
	
	global $reg_array_sem2,$reg_array_sem4,$reg_array_sem6;
	$reg_array_sem2 = array();
	$reg_array_sem4 = array();
	$reg_array_sem6 = array();
	
	//To find count of student of sem 2
	$sql = "select count(*) from student where sem = '2'";
	$res = mysqli_query($con, $sql);
	
	$result=mysqli_fetch_array($res);
	global $total_students_sem2;
	$total_students_sem2 = $result[0];
	
	
	//To find count of student of sem 4
	$sql = "select count(*) from student where sem = '4'";
	$res = mysqli_query($con, $sql);
	
	$result=mysqli_fetch_array($res);
	global $total_students_sem4;
	$total_students_sem4 = $result[0];
	
	//To find count of students of sem 6
	$sql = "select count(*) from student where sem = '6'";
	$res = mysqli_query($con, $sql);
	
	$result=mysqli_fetch_array($res);
	global $total_students_sem6;
	$total_students_sem6 = $result[0];
	
	global $total_students;
	$total_students = $total_students_sem2 + $total_students_sem4 + $total_students_sem6;
	
	
	//echo "student of sem 2 :".$total_students_sem2; echo "<br>";
	//echo "student of sem 4 :".$total_students_sem4; echo "<br>";
	//echo "student of sem 6 :".$total_students_sem6; echo "<br>";
	//echo "total students : ".$total_students; echo "<br>";
	
	$sql = "select * from config";
	$res = mysqli_query($con, $sql);
	
	$result=mysqli_fetch_array($res);
	global $students_in_each_hall;
	$students_in_each_hall = $result[0];

	
	$s = 0;
	$reg_array_sem2[$s] = 0;
	$s = $s + 1;
	
	$sql = "select * from student where sem = '2'";
	$res = mysqli_query($con, $sql);
	while( $result=mysqli_fetch_array($res) )
	{
		$reg_array_sem2[$s] = $result[1];
		$s++;
	}
	
	$s = 0;
	$reg_array_sem4[$s] = 0;
	$s = $s + 1;
	
	$sql = "select * from student where sem = '4'";
	$res = mysqli_query($con, $sql);
	while( $result=mysqli_fetch_array($res) )
	{
		$reg_array_sem4[$s] = $result[1];
		$s++;
	}
	
	$s = 0;
	$reg_array_sem6[$s] = 0;
	$s = $s + 1;
	
	$sql = "select * from student where sem = '6'";
	$res = mysqli_query($con, $sql);
	while( $result=mysqli_fetch_array($res) )
	{
		$reg_array_sem6[$s] = $result[1];
		$s++;
	}
	
	//sem 2
	//echo "<br>Sem 2 : <br>";
	//for( $s = 1; $s <=$total_students_sem2; $s++)
	///{
	//	echo $reg_array_sem1[$s]."<br>";
	//}
	//sem 4
	//echo "<br>Sem 4 : <br>";
	//for( $s = 1; $s <=$total_students_sem4; $s++)
	//{
	//	echo $reg_array_sem4[$s]."<br>";
	//}
	//sem5
	//echo "<br>Sem 6 : <br>";
	///for( $s = 1; $s <=$total_students_sem6; $s++)
	//{
	//	echo $reg_array_sem6[$s]."<br>";
	//}

	$total_hall_required = ceil($total_students/$students_in_each_hall);
	
	//echo "Total Students : ", $total_students;
	//echo "<br>";
	//echo "Total Students in each hall : ", $students_in_each_hall;
	//echo "<br>";
	//echo "Total hall Required : ", $total_hall_required;
	//echo "<br>";
	
	$sem2= ceil($total_students_sem2 / $total_hall_required);	
	$sem4=ceil($total_students_sem4 / $total_hall_required);
	$sem6=ceil($total_students_sem6 / $total_hall_required);
	
	//echo "sem2 students in hall : ".$sem2;
	//echo "<br>";
	//echo "sem4 students in hall : ".$sem4;
	//echo "<br>";
	//echo "sem6 students in hall : ".$sem6;
	//echo "<br>";
	
	//hall allocation for sem 2
	$s2 = 1;
	$i = 0;
	$j = 0;
	$sm2 = $sem2;
	$students_in_hall = $total_students;
	//echo "<br>Sem 2 : ";
	for($i=1; $i<=$total_hall_required; $i++)
	{
		//echo "<br>sm2 : ".$sm2;
		while($s2<=$sm2)
		{
			//echo "<br>hall no : ".$i." Regno : ".$reg_array_sem2[$s2];
			$sql = "update student set hall_no = '".$i."' where reg_no = '".$reg_array_sem2[$s2]."'";
			$res = mysqli_query($con, $sql);
			$s2 = $s2 + 1;
		}
		$total_students_sem2=$total_students_sem2-$sem2;
	
		if($sem2 > $total_students_sem2)
			$sem2 = $total_students_sem2;
		$sm2 = $sm2 + $sem2;
	}
	
	//hall allocation for sem4
	$s4 = 1;
	$i = 0;
	$j = 0;
	$sm4 = $sem4;
	$students_in_hall = $total_students;
	//echo "<br>Sem 4 : ";
	for($i=1; $i<=$total_hall_required; $i++)
	{
		while($s4<=$sm4)
		{
			//echo "<br>hall no : ".$i." Regno : ".$reg_array_sem4[$s4];
			$sql = "update student set hall_no = '".$i."' where reg_no = '".$reg_array_sem4[$s4]."'";
			$res = mysqli_query($con, $sql);
			$s4 = $s4 + 1;
		}
		$total_students_sem4=$total_students_sem4 - $sem4;
	
		if($sem4 > $total_students_sem4)
			$sem4 = $total_students_sem4;
		$sm4 = $sm4 + $sem4;
	}
	
	//hall allocation for sem6
	$s6 = 1;
	$i = 0;
	$j = 0;
	$sm6 = $sem6;
	$students_in_hall = $total_students;
	//echo "<br>Sem 6 : ";
	for($i=1; $i<=$total_hall_required; $i++)
	{
		while($s6<=$sm6)
		{
			//echo "<br>hall no : ".$i." Regno : ".$reg_array_sem6[$s6];
			$sql = "update student set hall_no = '".$i."' where reg_no = '".$reg_array_sem6[$s6]."'";
			$res = mysqli_query($con, $sql);
			$s6 = $s6 + 1;
		}
		$total_students_sem6=$total_students_sem6 - $sem6;
	
		if($sem6 > $total_students_sem6)
			$sem6 = $total_students_sem6;
		$sm6 = $sm6 + $sem6;
	}
	
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Hall allocated successfully !!!');</script>";
		echo "<script>window.location = 'hall_allocation.php';</script>";
	}
	mysqli_close($con);
?>