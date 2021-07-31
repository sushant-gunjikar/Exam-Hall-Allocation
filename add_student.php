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
<script>
	function readURL(input)
	{
		if (input.files && input.files[0])
			
			{
				var reader = new FileReader();
				reader.onload = function (e)
				{
					$('#pics').attr('src', e.target.result);
				};
					reader.readAsDataURL(input.files[0]);
			}
	}
	
	function validate()
	{
		if(document.myForm.phno.value=="" || isNaN(document.myForm.phno.value) || document.myForm.phno.value.length !=10)
		{
			alert("please enter correct phone number");
			document.myForm.phno.focus();
			return false;
		}
	}
</script>

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
    
	<div class="container">
	  <div class="col-md-2"></div>
		<div class="col-md-8">
		  
		  <div class="panel panel-info">
		  
			<div class="panel-heading">
			  <h3>Add Student</h3>
			</div>
			
			<div class="panel-body">
			 
				<form action="ins_add_student.php" name="myForm" method="post" enctype="multipart/form-data" onsubmit="return validate();" >
					
					<div>
						<img src="" id="pics" class="img-thumbnail" title="&nbsp;Profile Photo" style="width:220px; height:120px;"/>
						<br><br>
						<input type="file" id="exampleInputFile" name="exampleInputFile" onchange="readURL(this);" required />
						<br>
					
					</div>
					
					<div>
						<b>1.</b>Register Number:
						<input type="text" id="reg_number" name="reg_number" autofocus class="form-control" required />
							<br/>
					</div>
					
					<div>
						<b>2.</b>Name:
						<input type="text" name="name" id="name" class="form-control" required />
							<br/>
					</div>
					
					<div>
						<b>3.</b>Address:
							<input type="text" name="address" id="address" class="form-control" required />
							<br/>
					</div>
					
					<div>
						<b>4.</b>Phone number:
							<input type="number" name="phno" id="phno" class="form-control" required />
							<br/>
					</div>
					
					<div>
						<b>5.</b>Email:
							<input type="email" name="email" id="email" class="form-control" required />
							<br/>
					</div>
					
					<div>
						<b>6.</b>Date Of Birth:
							<input type="date" name="dob" id="dob" required class="form-control"  />
							<br/>
					</div>
					
					<div>
						<b>7.</b>Semester:
							<!--<input type="text" name="semester" id="semester" required class="form-control"  />-->
							<select class="form-control" name="semester" id="semester" required>
								<option value="">Select Semester</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
							<br/>
					</div>
					
					<div>
						<b>8.</b>Year:
							<input type="text" name="year" id="year" required class="form-control"  />
							<br/>
					</div>
				
				
					<!--<div>
						<b>7.</b>Semester:
							<select>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
							<br/>
					</div>
					
					<div>
						<b>8.</b>Year:
							<select>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2014">2024</option>
								<option value="2015">2025</option>
								<option value="2026">2026</option>
								<option value="2027">2027</option>
								<option value="2028">2028</option>
								<option value="2029">2029</option>
							</select>
							<br/>
					</div>-->
					
					
					<div class="row">
						<div align="center">
							<button type="submit" class="btn btn-info btn-flat">submit</button>
							
						</div>
					</div>
				</form>
			  
			</div>
			
		  </div>
		
		</div>
	  </div>
	</div>




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