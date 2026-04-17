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
 

	<div class="hero page-inner overlay" style="background-image: url('images/species.jpg');">

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

						<a href="\Museumnn/pages/animal/duck.php" class="img">
							<img src="images/species/duck.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Duck</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Ducks are smaller than their relatives (swans and geese).  </span>
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

								<a href="\Museumnn/pages/animal/duck.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/draco.php" class="img">
							<img src="images/species/draco.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Draco</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Draco is a genus of agamid lizards that are also known as flying lizards .</span>
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

								<a href="\Museumnn/pages/animal/draco.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/echeneis.php" class="img">
							<img src="images/species/eche.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Echeneis</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Commonly called as sucker fish. Sucking disk is found on head.  </span>
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

								<a href="\Museumnn/pages/animal/echeneis.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/enhydrina.php" class="img">
							<img src="images/species/Enhydrina.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Enhydrina</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">It is also known as the hook-nosed sea snake, the common sea snake, and the Valakadyn sea snake. </span>
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

								<a href="\Museumnn/pages/animal/enhydrina.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>


				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/eudendrium.php" class="img">
							<img src="images/species/endu.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Eudendrium</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Eudendrium is a large genus of hydroids, one of two in the family Eudendriidae.   </span>
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

								<a href="\Museumnn/pages/animal/eudendrium.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/euglena.php" class="img">
							<img src="images/species/Euglena.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Euglena</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The members of Euglena usually live in fresh and brackish water habitats such as ponds rich in
								organic matter and some even in marine waters.</span>
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

								<a href="\Museumnn/pages/animal/euglena.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/favia.php" class="img">
							<img src="images/species/favia2.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Favia</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Favia is a genus of reef-building stony corals in the family Mussidae.</span>
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

								<a href="\Museumnn/pages/animal/favia.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>


				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/flat_fish.php" class="img">
							<img src="images/species/flatfish.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Flat Fish</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The most obvious characteristic of the flatfish is its asymmetry, with both eyes lying on the same side of the head in the adult fish. </span>
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

								<a href="\Museumnn/pages/animal/flat_fish.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/garden_lizard.php" class="img">
							<img src="images/species/garden.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Garden Lizard</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The oriental garden lizards belongs to the family “Agamidae.” </span>
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

								<a href="\Museumnn/pages/animal/garden_lizard.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/gold_fish.php" class="img">
							<img src="images/species/gold.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Gold Fish </span></div>
							<div>
								<span class="d-block mb-2 text-black-50">When kept in small indoor aquariums, goldfish tend to stay about 1 inch (2.5 cm) to 2 inches (5.1 cm) long.  </span>
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

								<a href="\Museumnn/pages/animal/gold_fish.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/gorgonia.php" class="img">
							<img src="images/species/gorgonia.jpeg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Gorgonia</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Gorgonia is a genus of soft corals, sea fans in the family Gorgoniidae</span>
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

								<a href="\Museumnn/pages/animal/gorgonia.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/hedgehog.php" class="img">
							<img src="images/species/hog.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Hedge hog</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Most hedgehogs are 6-8 inches in length, but it is hard to accurately and consistently measure a hedgehog </span>
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

								<a href="\Museumnn/pages/animal/hedgehog.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/hippa.php" class="img">
							<img src="images/species/HIPPA.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Hippa</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Commonly called as mole crab. Body is somewhat reduced and the sub-cylindrical carapace is provided with wings which cover the legs.  </span>
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

								<a href="\Museumnn/pages/animal/hippa.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/hippo.php" class="img">
							<img src="images/species/hippo.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Hippocampus</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Head at an angle to the body. A deep compressed abdomen, a well-defined flexible neck, a prehensile tail without a caudal fin, the dorsal fin much closer </span>
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

								<a href="\Museumnn/pages/animal/hippo.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/jellyfish.php" class="img">
							<img src="images/species/jelly.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Jellyfish</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">As invertebrates they are, they lack a backbone and have two layers of tissue: an external ectoderm and an internal endoderm.</span>
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

								<a href="\Museumnn/pages/animal/jellyfish.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/kingfisher.php" class="img">
							<img src="images/species/king.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Kingfisher</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">All kingfishers have large heads, long, sharp, pointed bills, short legs, and stubby tails. </span>
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

								<a href="\Museumnn/pages/animal/kingfisher.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/lepsima.php" class="img">
							<img src="images/species/lepisma.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>lepisma</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The silverfish is a nocturnal insect typically 13–25 mm (0.5–1.0 in) long. Its abdomen tapers at the end, giving it a fish-like appearance. </span>
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

								<a href="\Museumnn/pages/animal/lepsima.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/leucosolenia.php" class="img">
							<img src="images/species/leu.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Leucosolenia</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Leucosolenia, genus of tubular branched sponges of the class Calcispongiae (phylum Porifera). 
										</span>
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

								<a href="\Museumnn/pages/animal/leucosolenia.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/butterfly.php" class="img">
							<img src="images/species/butter1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Life Cycle of Butterfly</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">There are two pairs of membranous. Wings are covered tiny scaly color strength. </span>
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

								<a href="\Museumnn/pages/animal/butterfly.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				  
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/frog.php" class="img">
							<img src="images/species/frog.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Life Cycle of Frog</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The wide-ranging frogs of order anura, containing several genera snd more than 600 species</span>
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

								<a href="\Museumnn/pages/animal/frog.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/mosquito.php" class="img">
							<img src="images/species/mosquito.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Life Cycle of Mosquito</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The Diodon hystrix gets its name from the numerous long spines located all over the head and body. </span>
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

								<a href="\Museumnn/pages/animal/mosquito.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						
				
				
				
			</div>
			<div class="row align-items-center py-5">
				<div class="col-lg-3">
					Pagination (2 of 4)
				</div>
				<div class="col-lg-6 text-center">
					<div class="custom-pagination">
						<a href="\Museumnn/species.php" class="active">1</a>
						<a href="\Museumnn/species2.php"  class="active">2</a>
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
