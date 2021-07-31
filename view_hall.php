<?php
	session_start();
	if(!isset($_SESSION['SESS']))
	{
		echo"<script>alert('Login to access this page');
		window.location = 'index.html';</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Exam Hall Allocation System</title>

<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/JiSlider.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 

</head>
	
<body onload="window.print();">
<!-- banner -->
<div class="main_section_agile">
		<div class="w3_agile_banner_top">
			<div class="agile_phone_mail">
				
				<ul>
					<li>GSS college of BCA Belgaum</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="">gssbca.belgaum@gmail.com</li>
				</ul>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="agileits_w3layouts_banner_nav">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html"><span>Exam Hall Allocation System</span></a> <p></p></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="student_dashboard.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="view_hall.php" class="menu__link">View Hall Ticket</a></li>
							<li class="menu__item"><a href="logout.php" class="menu__link">Logout</a></li>
						</ul>
						
					</nav>
				</div>
			</nav>
		</div>
</div>

<br/><br/><br/>
	<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading"><b>View Hall Ticket</b></div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table bordered">
				
						<?php
							include_once("db.php");
							
							$qry = "select * from student  where email='".$_SESSION['SESS']."'";
							$res = mysqli_query($con,$qry);
					
							$result=mysqli_fetch_array($res);
					
						
				
							echo'
								<tr>
									<th><b>Reg_NO</b></th>
									<td>'.$result[1].'</td>
								</tr>
								<tr>
									<th>Name</th>
									<td>'.$result[2].' </td>
								</tr>
								<tr>
									<th>Address</th>
									<td>'.$result[3].'</td>
								</tr>
								<tr>
									<th>Phone No.</th>
									<td>'.$result[4].'</td>
								</tr>
								<tr>
									<th>Email Id</th>
									<td>'.$result[5].'</td>
								</tr>
								<tr>
									<th>DOB</th>
									<td>'.$result[6].'</td>
								</tr>
								<tr>
									<th>Semester</th>
									<td>'.$result[7].'</td>
								</tr>
								<tr>
									<th>Year</th>
									<td>'.$result[8].'</td>
								</tr>
								<tr>
									<th>Hall No</th>
									<td>'.$result[9].'</td>
								</tr>';
								
							?>
						</table>
					
					</div>
					<div align="center">
						<form action="view_hall.php" method="post">
							<input type="submit" class="btn btn-info btn-flat" value="Print Hall Ticket" />
						</form>
					</div>
				</div>
			</div>
		</div>




</body>
</html>