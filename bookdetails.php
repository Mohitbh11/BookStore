<?php
// mysqli_connect() function opens a new connection to the MySQL server. 
$conn = mysqli_connect("localhost", "root", "", "account"); 
// SQL Query To Fetch Complete Information Of User 
//$query = "SELECT * from products where product_cat = '101'"; 
//$result = mysqli_query($conn, $query); 
//$row = mysqli_fetch_assoc($result);
//$login_session = $row[''];
//$book=$_POST[101];
$sql="SELECT * FROM products";

//$product_query="SELECT * FROM products ";
$run_query = mysqli_query($conn,$sql);

echo '<!DOCTYPE html>
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

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div id="top"></div>
<a href="#top" class="scrl-down" id="myBtn" title="Go to top"><i class="fa fa-angle-up fa-2x " aria-hidden="true"></i></a>

<!--Start Main Menu Logo-->
<div class="menubar-area">
	<div class="container">
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="#home"><img src="./assets/img/logo-2.png" alt="" class="logo logo-bg"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a  href="home.html">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a  href="home.html#category">Category</a>
					</li>
					<li class="nav-item">
						<a  href="#about">About Us</a>
					</li>
					<li class="nav-item">
						<a  href="#contact">Contact Us</a>
					</li>
					<li class="nav-item">
						<a  href="#cart">Cart</a>
                    </li>
                    <li class="nav-item">
						<a href="Login.php">Login</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!--End Main Menu Logo-->';


if(mysqli_num_rows($run_query)){
	while($row=mysqli_fetch_array($run_query)){
		$pro_id=$row['product_id'];
		$pro_cat=$row['product_cat'];
		$title=$row['product_title'];
		$price=$row['product_price'];
		$desc = $row['product_desc'];
		$img=$row['product_image'];
		
echo "<form action='cart.php' method='post'>
<div class='col-md-4'>
<div class='panel panel-info'>
	<div class='panel-heading'>$title</div>
	<div class='panel-body'>
	<a href='#' class='imageproduct' pid='$pro_id'>
		<img src='assets/img/$img' style='width:200px; height:250px;' >
	</a>
	</div>
	<div class='panel-heading'>$desc</div>
	<div class='panel-heading'>Rs $price
	
	<button pid='$pro_id' >Add to Cart</button>
	</div>
</div></div></form>";
	}
}

echo '<div class="footer-area">
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

</html>';

?>