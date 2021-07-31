<?php
	session_start();
	$_SESSION['$flag'] = "1";
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
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mastering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/JiSlider.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- banner -->
<div class="main_section_agile">
		<div class="w3_agile_banner_top">
			<div class="agile_phone_mail">
				
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+(000) 123 456 232</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:education@w3layouts.com">Education@w3layouts.com</a></li>
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
					<h1><a class="navbar-brand" href="index.html"><span>Exam Hall Allocation System</span></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="admin_dashboard.php" class="menu__link">Home</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">STUDENT<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="add_student.php">ADD</a></li>
									<li><a href="view_student.php">VIEW</a></li>
								</ul>
							</li>
							
							<li class="menu__item"><a href="hall_allocation.php" class="menu__link">Hall Allocation</a></li>
							<li class="menu__item"><a href="config.php" class="menu__link">Configuration</a></li>
							<li class="menu__item"><a href="logout.php" class="menu__link">Logout</a></li>
						</ul>
						
					</nav>
				</div>
			</nav>
		</div>
</div>

<br/><br/><br/>
	<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="panel panel-info">
				<div class="panel-heading"><b>View Students</b></div>
				<div class="panel-body">
				
					<form action="view_student.php" name="myForm" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-4">
								<b>1.</b>Semester:
								<select class="form-control" width="25" name="sem">
									<option value="">choose semester</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
								</select>
								<br/>
							</div>
						</div>
						<br/>
						<div class="row">
							<div align="center">
								<button type="submit" class="btn btn-info btn-flat">Search</button>
							</div>
						</div><br/><br/>
					</form>
				
					<div class="table-responsive">
						<table class="table table bordered">
							<tr class="info">
								<th></th>
								<th></th>
								<th>Reg_NO</th>
								<th>Name</th>
								<th>Address</th>
								<th>Phone No.</th>
								<th>Email Id</th>
								<th>DOB</th>
								<th>Semester</th>
								<th>Year</th>
							</tr>
							
							<?php
								include_once("db.php");
								
								if(isset($_POST['sem']))
								{									
									$qry = "select * from student where sem= '".$_POST['sem']."'";
									$res = mysqli_query($con,$qry);
													
									while($result = mysqli_fetch_array($res))
									{
										echo'
											<tr>
												<td><a data-toggle="modal" data-target="#myModal" onclick=fetch_data("'.$result[1].'") style="cursor:pointer;">Edit</a></td>
												<td><a href=""  style="cursor:pointer;">Delete</a></td>
												<td>'.$result[1].'</td>
												<td>'.$result[2].'</td>	
												<td>'.$result[3].'</td>		
												<td>'.$result[4].'</td>
												<td>'.$result[5].'</td>
												<td>'.$result[6].'</td>
												<td>'.$result[7].'</td>
												<td>'.$result[8].'</td>
											</tr>';				
									}
										
									if(mysqli_num_rows($res)== 0)
									{
										echo "<script>alert('No student details found !!!');</script>";
										echo "<script>window.location = 'view_student.php';</script>";	
									}
								}
								else
								{
									$qry = "select * from student";
									$res = mysqli_query($con,$qry);
													
									while($result = mysqli_fetch_array($res))
									{
										echo'
											<tr>
												<td><a data-toggle="modal" data-target="#myModal" onclick=fetch_data("'.$result[1].'") style="cursor:pointer;">Edit</a></td>
												<td><a href="delete_student.php?reg_no='.$result[1].'"  style="cursor:pointer;">Delete</a></td>
												<td>'.$result[1].'</td>
												<td>'.$result[2].'</td>	
												<td>'.$result[3].'</td>		
												<td>'.$result[4].'</td>
												<td>'.$result[5].'</td>
												<td>'.$result[6].'</td>
												<td>'.$result[7].'</td>
												<td>'.$result[8].'</td>
											</tr>';
									}
								}
								
							?>
						</table>
					
					</div>
				</div>
			</div>
		</div>
		
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="modal-title text-center text-dark mb-4">Update</h5>
                        <form action="update_student.php" method="post">
							<div class="form-group">
                                <label class="col-form-label">Reg_NO</label>

                                <input type="text" class="form-control" name="reg_no" id="reg_no" tabindex="1" readonly required="" />
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Name</label>

                                <input type="text" class="form-control" name="name" id="name" required=""  />
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="address" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2 col-form-label">Phone No.</label>
                                <input type="text" class="form-control" name="phno" maxlength="10" id="phno" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" required="">
                            </div>
							
							<div class="form-group">
								<label class="mb-2 col-form-label">Date Of Birth</label>
								<input type="text" class="form-control" name="dob" id="dob" required="" >
							</div>
							
							<div class="form-group">
								<label class="mb-2 col-form-label">Semester</label>
								<input type="text" class="form-control" name="semester" id="semester" required="" >
							</div>
							
							
							<div class="form-group">
								<label class="mb-2 col-form-label">Year</label>
								<input type="text" class="form-control" name="year" id="year" required="" >
							</div>
							
							<div class="reg-w3l">
								<button type="submit" class="btn btn-agile btn-block w-100">Update</button>
                           </div>
						   
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

<script language="javascript">
		
			function fetch_data(rec_data)
			{
				$.ajax({
					type: "GET",
					url: "fetch_data.php",
					data: "fetch_reg_no="+rec_data,
					dataType:"json",
					success: function(data)
					{
						document.getElementById('reg_no').value=data.reg_no;
						document.getElementById('name').value=data.name;
						document.getElementById('address').value=data.address;
						document.getElementById('phno').value=data.phno;
						document.getElementById('email').value=data.email;
						document.getElementById('dob').value=data.dob;
						document.getElementById('semester').value=data.sem;
						document.getElementById('year').value=data.year;
						
					}
				});
				return false;
			}
	</script>

<!-- //footer -->
<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/JiSlider.js"></script>
<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- //footer -->
<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
  </script>
<!-- //flexSlider -->


<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>