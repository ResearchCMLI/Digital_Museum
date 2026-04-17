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

						<a href="\Museumnn/pages/animal/marphysa.php" class="img">
							<img src="images/species/marphysa1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Marphysa</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The Prostomium bilobed, with two small eyes. 
										It has five antennae, short, smooth or indistinctly annulated. </span>
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

								<a href="\Museumnn/pages/animal/marphysa.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/megalopa.php" class="img">
							<img src="images/species/megalopa.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Megalopa Larva</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">In true crabs, the zoaea larva or metazoaea larva passes through successive moults into the post larval megalopa stage. 
										 </span>
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

								<a href="\Museumnn/pages/animal/megalopa.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/millipede.php" class="img">
							<img src="images/species/millipede.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Millipede</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Millipedes come in a variety of body shapes and sizes, ranging from 2 mm (1⁄16 in) to around 35 cm (14 in) in length, 
										and can have as few as eleven to over three hundred segments. </span>
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

								<a href="\Museumnn/pages/animal/millipede.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/millipora.php" class="img">
							<img src="images/species/miilipoda.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Millipora</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Commonly called as stinging coral. 
										Colony varies in form, consisting of a broad basal mass which is incrusted on the rocks and from which short irregular branches are thrown into the water. 
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

								<a href="\Museumnn/pages/animal/millipora.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>


				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/nepa.php" class="img">
							<img src="images/species/nepa.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Nepa Cinerea</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Water scorpions are blackish brown in colour and measure about 25 to 52 millimetres (1 to 2 inches) in length. The different species vary somewhat in shape. </span>
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

								<a href="\Museumnn/pages/animal/nepa.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/ostracion.php" class="img">
							<img src="images/species/Ostracion.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Ostracion</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">O. cubicum reaches a maximum length of 45 centimeters (18 in). As the name suggests, it is box-shaped. </span>
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

								<a href="\Museumnn/pages/animal/ostracion.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>


				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/ostrea.php" class="img">
							<img src="images/species/ostrea1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Ostrea</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">They are commonly called as edible oyster. 
								Shell valves are irregular and variable in shape. </span>
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

								<a href="\Museumnn/pages/animal/ostrea.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/paramecium.php" class="img">
							<img src="images/species/paramecium.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Paramecium</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Paramecium has a worldwide distribution and is a free-living organism.</span>
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

								<a href="\Museumnn/pages/animal/paramecium.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/patella.php" class="img">
							<img src="images/species/patella1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Patella Vulgata</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The conical shell of Patella vulgata is up to 6 cm long with radiating ridges and the apex central or slightly anterior.</span>
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

								<a href="\Museumnn/pages/animal/patella.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/pangolin.php" class="img">
							<img src="images/species/Pangolin3.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Pangolin</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Pangolins have short legs, a long snout and a thick prehensile tail. The head is small and cone-shaped. </span>
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

								<a href="\Museumnn/pages/animal/pangolin.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/pearl.php" class="img">
							<img src="images/species/pearl1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Pearl Oyster</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">It is commonly called as Indian pearl oyster. 
										The Shell valves are unequal and the hinge line is straight, produced at each end into a short ear or wing like process.</span>
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

								<a href="\Museumnn/pages/animal/pearl.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/physalia.php" class="img">
							<img src="images/species/physalia3.jpeg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Physalia</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">It is also Commonly called as Portuguese man of war.
                                        And also named because of its sudden appearance and disappearance like Portuguese ships during war </span>
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

								<a href="\Museumnn/pages/animal/physalia.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/picn.php" class="img">
							<img src="images/species/web.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Picnogonads</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Sea spiders have long legs in contrast to a small body size. 
										The number of walking legs is usually eight (four pairs), but species with five and six pairs exist.  </span>
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

								<a href="\Museumnn/pages/animal/picn.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/planaria.php" class="img">
							<img src="images/species/planaria.jpeg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Planaria</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">They are triploblastic, acoelomate, and bilaterally symmetrical. They may be free-living or parasites. </span>
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

								<a href="\Museumnn/pages/animal/planaria.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/plasmodium.php" class="img">
							<img src="images/species/Plasmodium.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Plasmodium</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Plasmodium, which infects red blood cells in mammals (including humans), birds, and reptiles, 
										occurs worldwide, especially in tropical and temperate zones.</span>
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

								<a href="\Museumnn/pages/animal/plasmodium.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/rabbit.php" class="img">
							<img src="images/species/rabbbit1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Rabbit Embryo</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Rabbits are small, furry mammals with long ears, short fluffy tails, and strong, large hind legs. </span>
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

								<a href="\Museumnn/pages/animal/rabbit.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/sabella.php" class="img">
							<img src="images/species/sabella1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Sabella</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The body may reach 30 cm and include as many as 600 segments. 
										The body is protected by a tube with a diameter of 8 mm or less. </span>
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

								<a href="\Museumnn/pages/animal/sabella.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/sea.php" class="img">
							<img src="images/species/sea1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Sea Anemone</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">Sea anemones are a group of predatory marine invertebrates of the order Actiniaria. 
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

								<a href="\Museumnn/pages/animal/sea.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				  
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/seaurchin.php" class="img">
							<img src="images/species/seaurchin1.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Sea Urchin</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">They are a group of echinoderms. They are globular to varied in their shape and size.  </span>
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

								<a href="\Museumnn/pages/animal/seaurchin.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/sealily.php" class="img">
							<img src="images/species/sealily.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Sea Lily</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The sea lily is a class of marine invertebrates that are attached to the stalk.   </span>
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

								<a href="\Museumnn/pages/animal/sealily.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">

						<a href="\Museumnn/pages/animal/shark.php" class="img">
							<img src="images/species/shark.jpg" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>Shark</span></div>
							<div>
								<span class="d-block mb-2 text-black-50">The shark is a marine, carnivorous and predaceous animal. It eats small pelagic schooling and bottom living bony fishes.  </span>
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

								<a href="\Museumnn/pages/animal/shark.php" class="btn btn-primary py-2 px-3">See details</a>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
				
						
				
				
				
			</div>
			<div class="row align-items-center py-5">
				<div class="col-lg-3">
					Pagination (3 of 4)
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
