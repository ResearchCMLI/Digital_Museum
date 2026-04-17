<?php
require_once('db_connect.php'); // Database connection file
require_once('functions.php');  // PHP functions file
$page_id = 2;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<!--<link rel="shortcut icon" href="favicon.png"> -->

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
					<h1 class="heading" data-aos="fade-up">View Species</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">All Species</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>


	<!-- <div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-6 text-center mx-auto">
					<h2 class="font-weight-bold text-primary heading">Featured Properties</h2>
				</div>
				
			</div>
			<div class="row">

				<div class="col-12">


					<div class="property-slider-wrap">



						<div class="property-slider">

							<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="images/img_1.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

					<!--		<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="images/img_2.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

					<!--		<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="images/img_3.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

				<!--			<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="images/img_4.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

					<!--		<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="images/img_5.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

					<!--		<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="images/img_6.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

					<!--		<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="images/img_7.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

						<!--	<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="images/img_8.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

						<!--	<div class="property-item">

								<a href="property-single.html" class="img">
									<img src="images/img_1.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>$1,291,000</span></div>
									<div>
										<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
										<span class="city d-block mb-3">California, USA</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->


						<!--</div>


						<div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
							<span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
							<span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>--> 


	<div class="section section-properties">
	
	
			<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-6 text-center mx-auto">
					<h2 class="font-weight-bold text-primary heading">Animal Kingdom</h2>
				</div>
				
			</div>
				<div class="container">
			<div class="row">
			   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/sparrow.php" class="img">
							<img src="images/species/sparrow.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Sparrow</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Sparrows have beautiful voices and their chirping and singing can be heard all over. </span>
								<!-- <span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/sparrow.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/squirrel.php" class="img">
							<img src="images/species/squirrel1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Squirrel Embryo </span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Squirrels includes medium sized or small rodents.</span>
							<!--	<span class="city d-block mb-3">California, USA</span>-->

							<!--	<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/squirrel.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/syngnathus.php" class="img">
							<img src="images/species/Syngnathus.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Syngnathus</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Compressed and elongated fish covered by ring-like exoskeletal bands is divided into head, trunk and tail. 
								Anteriorly half of the head is produced into a suctorial snout having mouth and eyes.  </span>
							<!--	<span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/syngnathus.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/tapeworm.php" class="img">
							<img src="images/species/tapeworm1.jpeg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Tapeworm</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Tapeworms live in almost all land, sea, and freshwater habitats where vertebrates live. 
										They are mostly found in the marine areas. </span>
								<!-- <span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/tapeworm.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>


				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/terebella.php" class="img">
							<img src="images/species/terebella1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Terebella</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The body is elongated, cylindrical and divided into head and trunk. The head is horseshoe-shaped, made up of prostomium and peristomium.</span>
								<!--<span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/terebella.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/thenus.php" class="img">
							<img src="images/species/thenu1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Thenus Orientalis</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">T. orientalis has a strongly depressed body and grows to a maximum body length of 25 centimeters (9.8 in), or a carapace length of 8 cm. 
										Specimens of this species are commonly about 16 cm long, with a maximum of 25 cm </span>
								<!-- <span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/thenus.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/toad.php" class="img">
							<img src="images/species/toad.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Toad</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The common toad can reach about 15 cm (6 in) in length. Females are normally stouter than males and southern specimens tend to be larger than northern ones. </span>
							<!--	<span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/toad.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>


				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/tortoise.php" class="img">
							<img src="images/species/tortoise.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Tortoise</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Tortoises are particularly distinguished from other turtles, but they are being exclusively land dwelling while turtles are aquatic. </span>
							<!--	<span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/tortoise.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/tubipora.php" class="img">
							<img src="images/species/tubipora1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Tubipora Musica</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">It is commonly called as the organ pipe coral and is much calcified anthozoan consisting of compact bright red coloured vertical tubes and transverse platforms. </span>
								<!-- <span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/tubipora.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/turritella.php" class="img">
							<img src="images/species/turritela1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Turritela</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The tall, conical shell is brownish-yellow to white. It is sharply pointed and contains 16-20 enlarged whorls. 
										The spiral ridges are numerous (with 3 – 6 more prominent) and may have a beaded appearance.</span>
								<!-- <span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/turritella.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/uromastyx.php" class="img">
							<img src="images/species/uromastyx.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Uromastyx</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">North African spiny tailed lizard attains maximum total body length of 40 – 43 cm & adult mass of 450g. Lizards have a dorsally flattened body & tail. 
								Large & covered with ringed spines. </span>
								<!-- <span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/uromastyx.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/varanus.php" class="img">
							<img src="images/species/Varanus.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Varanus</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The genus Varanus is considered unique among animals in that its members are relatively morphologically conservative, yet show a very large size range. </span>
								<!-- <span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/varanus.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/viper.php" class="img">
							<img src="images/species/catla2.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Viper</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">A viper has a stocky body, a large head, and long, hinged fangs for injecting venom in the front of its mouth.  </span>
								<!-- <span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/viper.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/virgularia.php" class="img">
							<img src="images/species/virgularia1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Virgularia</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Very slender sea-pen, up to 60 cm long with the axial polyp 2-4 mm in diameter.  Axis round in cross-section. </span>
								<!-- <span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/virgularia.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/woodpecker.php" class="img">
							<img src="images/species/wood.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>WoodPecker</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The members of this family Picidae are found worldwide except for Australia, New Guinea, New Zealand and the extreme Polar regions. </span>
								<!-- <span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/woodpecker.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/zoea.php" class="img">
							<img src="images/species/zoea.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Zoea Larva</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">They are found only in members of Malacostraca.
										They swim with the appendages in the thoracic region. </span>
								<!-- <span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/zoea.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/zooanthus.php" class="img">
							<img src="images/species/zoo1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Zooanthus</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Body differentiated into column and oral disc having mouth and marginal tentacles.  
										Polyps of colony are united by basal stolons attached to substratum. </span>
								<!-- <span class="city d-block mb-3">California, USA</span>

								<div class="specs d-flex mb-4">
									<span class="d-block d-flex align-items-center me-3">
										<span class="icon-bed me-2"></span>
										<span class="caption">2 beds</span>
									</span>
									<span class="d-block d-flex align-items-center">
										<span class="icon-bath me-2"></span>
										<span class="caption">2 baths</span>
									</span>
								</div> -->

								<a href="\Museumnn/pages/animal/zooanthus.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
				
				
				
			</div>
			<div class="row align-items-center py-5">
				<div class="col-lg-3">
					Pagination (4 of 4)
				</div>
				<div class="col-lg-6 text-center">
					<div class="custom-pagination">
						<a href="\Museumnn/species.php" class="active">1</a>
						<a href="\Museumnn/species2.php" class="active">2</a>
						<a href="\Museumnn/species3.php"  class="active">3</a>
						<a href="\Museumnn/species4.php"  class="active">4</a>
						
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
