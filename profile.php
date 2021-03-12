<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: Login.php"); // Redirecting To Home Page 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Book Store</title>
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="./assets/css/animate.css">
	<link rel="stylesheet" href="./assets/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/normalize.css">
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="./assets/css/responsive.css">
	<link rel="icon" href="./assets/img/logo-2.png">
	<script src="./assets/js/jquery-1.12.4.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" class="login-bg">

<div id="top"></div>
<a href="#top" class="scrl-down" id="myBtn" title="Go to top"><i class="fa fa-angle-up fa-2x " aria-hidden="true"></i></a>

<!--Start Main Menu Logo-->
<div class="menubar-area">
	<div class="container">
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="home.html"><img src="./assets/img/logo-2.png" alt="" class="logo logo-bg"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a  href="profile.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a  href="profile.php#category">Category</a>
					</li>
					<li class="nav-item">
						<a  href="#about">About Us</a>
					</li>
					<li class="nav-item">
						<a  href="contact.html">Contact Us</a>
					</li>
					<li class="nav-item">
						<a  href="#cart">Cart</a>
					</li>
					<li class="nav-item">
						<a  href="logout.php">LogOut</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!--End Main Menu Logo-->


<!--Start Hero Area-->
<div id="home" class="hero-area">
		<div class="owl-carousel hero-area-slider">
			<div class="hero-bg mobile-hero bg-1 banner1">
				<div class="d-table hero-area-wrapper">
					<div class="d-table-cell hero-area-inner">
						<div class="container">
							<div class="row justify-content-end">
								<div class="col-lg-9">
									<h1 class="heading">Online Book Store</h1>
									<!--<a href="#" class="btn hero-btn">learn more</a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-bg mobile-hero bg-2 banner2">
				<div class="d-table hero-area-wrapper">
					<div class="d-table-cell hero-area-inner">
						<div class="container">
							<div class="row justify-content-end">
								<div class="col-lg-9">
									<h1 class="heading">Online Book Store</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-bg mobile-hero bg-3 banner3">
				<div class="d-table hero-area-wrapper">
					<div class="d-table-cell hero-area-inner">
						<div class="container">
							<div class="row justify-content-end">
								<div class="col-lg-9">
									<h1 class="heading">Online Book Store</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Hero Area-->



	<!--Start Tartget-->
	<div class="target-area">
		<div class="container">
				<h1>Trending</h1>
			<div class="row">
				<div class="col-lg-4">
					<div class="single-target-box">
						<img src="./assets/img/best-book.jpg" alt=""  width="70%" >
					</div>
				</div>	
				<div class="col-lg-4">
					<div class="single-target-box">
						<img src="./assets/img/best-saller.jpg" alt="" width="70%" >
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-target-box">
						<img src="./assets/img/best-book-marathi.jpg" alt=""  width="70%" >
					</div>
				</div>
			</div>
		</div>
			<!--End of row-->
	</div>
		<!--End of container-->
	<!--End of Target area-->

	

	
	<!--start education-->
	<div id="skill" class="skill-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="skillbar">
						<h1>Best Seller</h1>
						<p>These are the best seller books till now.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="skill-progress">
						<p>For the love of god</p>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
								<p>90%</p>
							</div>
						</div>
						<p class="author-name">Author: D.A.Carson</p><br>
						<p>Everyone has a story</p>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
								<p>80%</p>
							</div>
						</div>
						<p class="author-name">Author: Savi sharma</p><br>
						<p>Very good lives</p>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
								<p>70%</p>
							</div>
						</div>
						<p class="author-name">Author:J.K.Rowlling</p><br>
						<p>The monk who sold his ferrari</p>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
								<p>75%</p>
							</div>
						</div>
						<p class="author-name">Author: robin sharma</p><br>
					</div>
				</div>
				<!--End of col lg 6-->
			</div>
			<!--End of row-->
		</div>
		<!--End of container-->
	</div>
	<!--end education-->


	

	<!--Start Portfolio-->
	<div id="category" class="portfolio-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 text-center">
					<div class="protfolio-title">
						<h1>Category</h1>
						<!--<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. </p>-->
					</div>
				</div>
			</div>
			<div class="portfolio-container">
				
				<div class="portfolio-content portfolio-items theme icon">
					<div class="portfolio-bg-items">
						<div class="portfolio-bg protfolio-bg-1">
						<a href="bookdetails.php"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<div class="portfolio-content portfolio-items theme icon">
					<div class="portfolio-bg-items">
						<div class="portfolio-bg protfolio-bg-2">
							<a href="#"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<div class="portfolio-content portfolio-items icon mockup">
					<div class="portfolio-bg-items">
						<div class="portfolio-bg protfolio-bg-3">
							<a href="#"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<div class="portfolio-content portfolio-items mockup icon">
					<div class="portfolio-bg-items">
						<div class="portfolio-bg protfolio-bg-4">
							<a href="#"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<div class="portfolio-content portfolio-items ui mockup">
					<div class="portfolio-bg-items">
						<div class="portfolio-bg protfolio-bg-5">
							<a href="#"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<div class="portfolio-content portfolio-items patterns icon">
					<div class="portfolio-bg-items">
						<div class="portfolio-bg protfolio-bg-6">
							<a href="#"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<div class="portfolio-content portfolio-items theme patterns">
					<div class="portfolio-bg-items">
						<div class="portfolio-bg protfolio-bg-7">
							<a href="#"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<div class="portfolio-content portfolio-items icon patterns">
					<div class="portfolio-bg-items">
						<div class="portfolio-bg protfolio-bg-8">
							<a href="#"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<div class="portfolio-content portfolio-items patterns icon">
					<div class="portfolio-bg-items">
						<div class="portfolio-bg protfolio-bg-9">
							<a href="#"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End of portfolio-->



	<div class="footer-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<p class="copyright">
						Copyright© 2019 - Built With Passion
					</p>
					<div class="footer-social-links">
						<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
						<a href="https://www.linkedin.com/in//"><i class="fa fa-linkedin"></i></a>
						<a href="https://github.com/"><i class="fa fa-github"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>



	<script src="./assets/js/popper.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/owl.carousel.min.js"></script>
	<script src="./assets/js/isotope.pkgd-3.0.4.min.js"></script>
	<script src="./assets/js/masonry.pkgd.min-4.2.0.js"></script>
	<!--	<script src="./assets/js/jquery.mCustomScrollbar.concat.min.js"></script>-->
	<script src="./assets/js/main.js"></script>

	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};
		
		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}
		
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
		</script>

</body>

</html>
