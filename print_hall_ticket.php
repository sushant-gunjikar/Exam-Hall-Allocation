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
</head>
	
<body onload="window.print();">
<!-- banner -->


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