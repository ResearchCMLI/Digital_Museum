

<?php
require_once('db_connect.php'); // Database connection file
require_once('functions.php');  // PHP functions file
$page_id = 1;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta name="author" content="Untree.co">  -->
	<!--<link rel="shortcut icon" href="favicon.png">-->

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">

	<title>Digital Museum</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

		
 <?php include "./nav.html" ?>

	<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg');">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">About</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">About</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row text-left mb-5">
				<div class="col-12">
					<h2 class="font-weight-bold heading text-primary mb-4">About Us</h2>
				</div>
				<!--<div class="col-lg-6">-->
					<p class="text-black-50" style="text-align:justify;font-size:18px";>Zoology, the study of animals is complex division of biological science wherein the student receives a highly comprehensive exposure to all levels of animal biology and biodiversity that includes not only animal behaviour and physiology, but also their development, ecology and evolution.	The zoology department of Avinashilingam Institute for Home Science and Higher education for women has been working towards disseminating knowledge in the field animal biology in an interdisciplinary manner since its inception in 1957. Its primary goals include providing education to students and contribution towards development of animal sciences and zoological studies in a global sense. </p>
					
				
			<!--</div>-->

		</div>
	</div>

	<div class="section pt-0">
		<div class="container">
			<div class="row justify-content-between mb-5">
				<div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
					<div class="img-about dots">
						<img src="images/zoo2.jpg" alt="Image" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-4">
				<h4 class="font-weight-bold heading text-primary mb-4">Vision of the Department</h4>
					<div class="d-flex feature-h">
						
						<p class="text-black-50" style="text-align:justify;font-size:18px";> Envisage to instil science and value education, concern for nature and ethical values among students through quality educational practices.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section pt-0">
		<div class="container">
			<div class="row justify-content-between mb-5">
				<div class="col-lg-7 mb-5 mb-lg-0">
					<div class="img-about dots">
						<img src="images/zoo4.jpg" alt="Image" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-4">
				<h4 class="font-weight-bold heading text-primary mb-4">Mission of the Department</h4>
					<div class="d-flex feature-h">
						<p class="text-black-50" style="text-align:justify;font-size:18px";>The holistic development of the student with knowledge, insight and expertise to make them contribute effectively to the society as educators, scientists, administrators and entrepreneurs.
To remain as a centre of excellence in zoological and environmental research to assist in the sustainable exploitation and conservation of natural resources
 </p>
					</div>

					

					
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			
			<div class="row section-counter mt-5">
				
				
				<!--<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">3918</span></span>
						<span class="caption text-black-50"># of Sell Properties</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">38928</span></span>
						<span class="caption text-black-50"># of All Properties</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">1291</span></span>
						<span class="caption text-black-50"># of Agents</span>
					</div>
				</div> -->
			</div>
		</div>
	</div>



	<div class="section sec-testimonials bg-light">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-md-6">
					<h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">Coordinators</h2>
				</div>
				<div class="col-md-6 text-md-end">
					<div id="testimonial-nav">
						<span class="prev" data-controls="prev">Prev</span>

						<span class="next" data-controls="next">Next</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">

				</div>
			</div>
			<div class="testimonial-slider-wrap">
				<div class="testimonial-slider">
					<div class="item">
						<div class="testimonial">
							<img src="images/zoo_mani.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<h3 class="h5 text-primary">Dr.(Ms.) K.Manimegalai</h3>
							<p class="text-black-50">Professor & HOD, Department of Zoology </p>

							
							<!--<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>-->

						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="images/zoo_poon.jpeg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<h3 class="h5 text-primary">Dr.(Mrs.)M. Poonkothai</h3>
							<p class="text-black-50">Associate Professor, Department of Zoology</p>

							
							<!--<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>-->


						</div>
					</div>

					

					<div class="item">
						<div class="testimonial">
							<img src="images/zoo_annapoorani.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<h3 class="h5 text-primary">Dr.(Mrs.)C.A.Annapoorani</h3>
							<p class="text-black-50">Assistant Professor (Temporary), Department of Zoology</p>

							
							<!--<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>-->


						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

<div class="row section-counter mt-5" data-aos="fade-up" data-aos-delay="300">
		
					<div class="counter-wrap mb-5 mb-lg-0" style="text-align:center;">
						<span class="number"><span class="countup text-primary">  
						
						<?php
							$total_page_views = total_views($conn, $page_id); // Returns total views of this page
							echo $total_page_views;
							?>
							</span></span>
						<span class="caption text-black-50"># Visitors count</span>

						</div>
					</div>


	
	 <?php include "./footer.html" ?>

			
				
    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
  </body>
  </html>
