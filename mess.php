<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Intrend Interior Category Flat Bootstrap Responsive Website Template | Contact : W3layouts</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
		
	<!-- css files -->
	<link rel="stylesheet" href="web_home/css_home/mess2.css">  <!-- Bootstrap-Core-CSS  -->
	<link rel="stylesheet" href="web_home/css_home/mess.css" type="text/css" media="all" />
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home" > 	   
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<h1><a class="navbar-brand" href="home.php">MEC<span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="services.php">Hostels</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="mess.php">Mess</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="message_user.php">Message Received</a>
					</li>
						<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['roll']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="profile.php">My Profile</a>
							</li>
							<li>
								<a href="includes/logout.inc.php">Logout</a>
							</li>
						</ul>
					</li>
					</ul>
				</div>
			  
			</nav>
		</div>
	</header>
	<!--Header-->
</div>
<!-- //banner --> 

<!-- contact -->
<section class="contact py-5">
<div class="mess">
	

	<form action="includes/messd.php" method="POST">
			<div class="select-menu">
				<div class="select-btn">
					<span class="sBtn-text">Select your Lunch </span>
					<i class='fas fa-angle-down'></i>
					
				</div>

			
				<ul class="options">
					<li class="option">
					<input type="radio" name="lunchOption1" value="idiappam">
						<span class="option-text">idiappam</span>
                       
					</li>
					<li class="option">
					<input type="radio" name="lunchOption1" value="appam">
						<span class="option-text">appam</span>
						
					</li>
					<li class="option">
					<input type="radio" name="lunchOption1" value="puttu">
						<span class="option-text">puttu</span>
						
					</li>
					<li class="option">
					<input type="radio" name="lunchOption1" value="dosa">
						<span class="option-text">dosa</span>
						
					</li>
					<li class="option">
						
					<input type="radio" name="lunchOption2" value="idly">
						<span class="option-text">idly</span>
						
					</li>
				</ul>
			</div> 
			<div class="select-menu">
				<div class="select-btn">
					<span class="sBtn-text">Select your Lunch </span>
					<i class='fas fa-angle-down'></i>
					
				</div>

			
				<ul class="options">
					<li class="option">
					    <input type="radio" name="lunchOption2" value="idiappam">
						<span class="option-text">idiyappam</span>
						
					</li>
					<li class="option">
					    <input type="radio" name="lunchOption2" value="appam">
						<span class="option-text">appam</span>
						
					</li>
					<li class="option">
					    <input type="radio" name="lunchOption2" value="puttu">
						<span class="option-text">puttu</span>
						
					</li>
					<li class="option">
					    <input type="radio" name="lunchOption2" value="dosa">
						<span class="option-text">dosa</span>
						
					</li>
					<li class="option">
					<input type="radio" name="lunchOption2" value="idly">
						<span class="option-text">idly</span>
						
					</li>
				</ul>
			</div>
			<button type="submit">Submit</button>
	</form>
		
</div>
<script src="web_home\js\mess.js"></script>
</section>
<!-- //contact -->


<!-- footer -->
<div id="home">
	<footer class="py-5">
		<div class="container py-md-5">
			<div class="footer-logo mb-5 text-center">
				<a class="navbar-brand" href="https://www.mec.ac.in/" target="_blank">MEC<span class="display"></span></a>
			</div>
			<div class="footer-grid">
				
				<div class="list-footer">
					<ul class="footer-nav text-center">
						<li>
							<a href="home.php">Home</a>
						</li>
						<li>
							<a href="services.php">Hostels</a>
						</li>
						
						<li>
							<a href="contact.php">Contact</a>
						</li>
						<li>
							<a href="profile.php">Profile</a>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
	</footer>
</div>
<!-- footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->

	<!-- start-smoth-scrolling -->
	<script src="web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="web_home/js/move-top.js"></script>
	<script type="text/javascript" src="web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
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
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>

<?php
if(isset($_POST['submit'])){
	/*echo "<script type='text/javascript'>alert('hello')</script>";*/
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$hostel_name = $_POST['hostel_name'];

    $query7 = "SELECT * FROM Hostel WHERE Hostel_name = '$hostel_name'";
    $result7 = mysqli_query($conn,$query7);
    $row7 = mysqli_fetch_assoc($result7);
    $hostel_id = $row7['Hostel_id'];

    $query6 = "SELECT * FROM Hostel_Manager WHERE Hostel_id = '$hostel_id'";
    $result6 = mysqli_query($conn,$query6);
    $row6 = mysqli_fetch_assoc($result6);
    $hos_man_user = $row6['Hostel_man_id'];

	$roll = $_SESSION['roll'];

    $today_date =  date("Y-m-d");
    $time = date("h:i A");

	$query = "INSERT INTO Message (sender_id,receiver_id,hostel_id,subject_h,message,msg_date,msg_time) VALUES ('$roll','$hos_man_id','$hostel_id','$subject','$message','$today_date','$time')";
    $result = mysqli_query($conn,$query);
    if($result){
         echo "<script type='text/javascript'>alert('Message sent Successfully!')</script>";
    }
    else{
         echo "<script type='text/javascript'>alert('Error in sending message!!! Please try again.')</script>";
   }
  }


?>