
<?php
require_once('db_connect.php'); // Database connection file
require_once('functions.php');  // PHP functions file
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
	<link rel="stylesheet" href="css/magnific-popup.css">
<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="fonts/flaticon/font/icomoon.css">
	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<title>Digital Museum</title>
	<style>
	 .high{
		 
		 display:inline-block;
		 transition:transform 0.5s;
		 
		 overflow:hidden;
		 
	 }
	 .high img:hover
	 {
		 transform:scale(0.95);
		 filter:brightness(75%);
		 
	 }
	</style>
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
 
 
	<!--<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<a href="index.html" class="logo m-0 float-start">Property</a>

					<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li class="active"><a href="index.html">Home</a></li>
						<li class="has-children">
							<a href="properties.html">Properties</a>
							<ul class="dropdown">
								<li><a href="#">Buy Property</a></li>
								<li><a href="#">Sell Property</a></li>
								<li class="has-children">
									<a href="#">Dropdown</a>
									<ul class="dropdown">
										<li><a href="#">Sub Menu One</a></li>
										<li><a href="#">Sub Menu Two</a></li>
										<li><a href="#">Sub Menu Three</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="services.html">Services</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>

					<a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>

				</div>
			</div>
		</div>
	</nav> -->

	<div class="hero">


		<div class="hero-slide">
		     <div class="img overlay" style="background-image: url('images/museum_images7.jpg')"></div>
		     <div class="img overlay" style="background-image: url('images/museum_images.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/museum_images2.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/museum_images1.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/development stages.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/museum_images5.jpg')"></div>
            <div class="img overlay" style="background-image: url('images/museum_images9.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/museum_images3.jpg')"></div>
			
		</div>

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center">
					<!--<h1 class="heading" data-aos="fade-up">Digital Museum <br>Avinashilingam Institute for Home Science and Higher Education for Women</h1>--> 
					<form action="search.php"  method="post" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
						<input type="text" class="form-control px-4" placeholder="Species Name" name="a1">
						<button type="submit" class="btn btn-primary"value="search" id="search">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>



	<div class="section">
		<div class="container">
			<div class="row text-left mb-4">
				<div class="col-12">
					<h2 class="font-weight-bold heading text-primary mb-5">About the Museum</h2>
				</div>
				<div class="col-lg-12">
					<p class="text-black-50" style="text-align:justify;font-size:18px;">The museum of Zoology Department is a repository of collections with more 
					than 300 animal specimens. The museum was established in the year 1957 with variety of specimens collected from different habitats. The specimens were systematically classified and arranged in order spanning the entire 
					animal kingdom, from protozoan to human skeleton. The museum of the department is housed with extinct fossils, stuffed animals, skeletons and bones of 
					various animals, preserved specimens, molluscan shells, corals, wide range of butter fly collection, slides, charts and models related to biological sciences.
					The museum provides teaching and learning platform for the students with valuable resources.</p>
					
					<p class="text-black-50"style="text-align:justify;font-size:18px;">Digital museum, a collection of digitally recorded images, 
					sound files, text documents, and other data of historical, scientific, or cultural interest that are accessed through electronic media.
					A Digital museum does not house actual objects and therefore lacks the permanence and unique qualities of a museum in the institutional 
					definition of the term. In fact, most Digital museums are sponsored by institutional museums and are directly dependent upon their existing 
					collections. Nevertheless, through the hyperlinking and multimedia capabilities of electronic information media—particularly the World Wide Web 
					(a hypermedia system carried on the Internet)—digitized representations can be brought together from multiple sources for enjoyment and study in 
					a manner largely determined by the individual user. Digital museums of this type can be a powerful tool for comparative study and for research
					into a particular subject, material, or locality. </p> 
				
				<!--<div class="col-lg-6">
					<p class="text-black-50" style="text-align:justify;font-size:15px;">The specimens were systematically classified and arranged in order spanning the entire 
					animal kingdom, from protozoan to human skeleton. The museum of the department is housed with extinct fossils, stuffed animals, skeletons and bones of 
					various animals, preserved specimens, molluscan shells, corals, wide range of butter fly collection, slides, charts and models related to biological sciences.
					The museum provides teaching and learning platform for the students with valuable resources.</p> 
					<p class="text-black-50" style="text-align:justify;font-size:15px;">The museum Virtual dissections are a part of curriculum for the undergraduate students and help them in understanding the anatomy of animals. It can accommodate 15 students at a time and exclusive software’s Frog dissection App E-Mantra interactive technologies, are programmed for the ease of teaching and learning. welcomes students every year and fulfills significant teaching, research and educational role within the institute and to wider community. 
					The specimen in the museum provides information on the exploration, conservation and highlighted the biodiversity of animal kingdom. </p>
				</div> -->
			</div>

		</div>
	</div>


	<div class="section" >
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-6">
					<h2 class="font-weight-bold text-primary heading">Animal Kingdom</h2>
				</div>
				<div class="col-lg-6 text-lg-end">
					<p><a href="species.php" target="_blank" class="btn btn-primary text-white py-3 px-4">View all Species</a></p>
				</div>
			</div>
			<div class="row">

				<div class="col-12">


					<div class="property-slider-wrap">



						<div class="property-slider">

							<div class="property-item">

								<a href="\Museumnn/protozoa.php" class="img">
									<div class="high"><img src="images/animalkingdom/protozoa.jpg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
								<!--	<div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
									
										<span class="city d-block mb-3">PROTOZOA</span>
										
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">Protozoa are single celled organisms. They come in many different shapes and sizes ranging from an Amoeba which can change its shape to Paramecium </span> 
										
										<!--<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span> 
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div> -->

										<a href="\Museumnn/protozoa.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="\Museumnn/porifera.php" class="img">
									<div class="high"><img src="images/animalkingdom/porifera.jpg" alt="Image" class="img-fluid" name="Porifera"></div>
								</a>

								<div class="property-content">
								<!--	<div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
									
										<span class="city d-block mb-3">PORIFERA</span>
										 
								<span class="d-block mb-2 text-black-50" style="text-align:justify;">Phylum Porifera are the lowest multicellular animals belonging to the kingdom Animalia. The word “Porifera” mainly refers to the pore bearers or pore bearing    </span> 
							
										<!-- <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div> -->

										<a href="\Museumnn/porifera.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="\Museumnn/coelenterata.php" class="img">
									<div class="high"><img src="images/animalkingdom/coelenterata.jpg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
									<!-- <div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
										<span class="city d-block mb-3">COELENTERATA</span>
										
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">Phylum Coelenterata is a group of aquatic, or marine organisms and a member of the Animal kingdom. They are usually found attached to the rocks at the bottom </span>
											
										<!-- <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div> -->

										<a href="\Museumnn/coelenterata.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->

							

							<div class="property-item">

								<a href="\Museumnn/platyhelminthes.php" class="img">
									<div class="high"><img src="images/animalkingdom/platyhelminthes.jpg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
									<!--<div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
										<span class="city d-block mb-3">PLATYHELMINTHES</span>
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">Phylum Platyhelminthes belongs to kingdom Animalia. This phylum includes 13,000 species. The organisms are also known as flatworms. </span>
										
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

										<a href="\Museumnn/platyhelminthes.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="\Museumnn/aschelminuthes.php" class="img">
									<div class="high"><img src="images/animalkingdom/aschelminthes.jpg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
								<!--	<div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
										
										<span class="city d-block mb-3">ASCHELMINTHES</span>
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">Aschelminthes are commonly known as roundworms. They are characterized by the presence of a pseudocoelom.  It is now an obsolete phylum   </span>

										<!-- <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div> --> 

										<a href="\Museumnn/aschelminuthes.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="\Museumnn/annelida.php" class="img">
									<div class="high"><img src="images/animalkingdom/annelida.jpg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
									<!-- <div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
										<span class="city d-block mb-3">ANNELIDA</span>
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">Phylum Annelida is a very broad phylum belonging to the kingdom Animalia. The Annelids are found in aquatic as well as terrestrial environments. </span> 

									<!--	<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>  -->

										<a href="\Museumnn/annelida.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="\Museumnn/arthopoda.php" class="img">
									<div class="high"><img src="images/animalkingdom/arthropoda.jpg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
									<!-- <div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
										
										<span class="city d-block mb-3">ARTHOPODA</span>
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">The body is triploblastic, segmented, and bilaterally symmetrical.
They exhibit organ system level of organization.
The body is divided into head, thorax </span>

										<!-- <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div> -->

										<a href="\Museumnn/arthopoda.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="\Museumnn/mollusca.php" class="img">
									<div class="high"><img src="images/animalkingdom/mollusca.jpg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
									<!-- <div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
										
										<span class="city d-block mb-3">MOLLUSCA</span>
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">The animals belonging to the phylum Mollusca have soft-bodies, triploblastic and bilaterally symmetrical and coelomate.</span>

										<!-- <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div> -->

										<a href="\Museumnn/mollusca.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->


							<div class="property-item">

								<a href="\Museumnn/echinodermata.php" class="img">
									<div class="high"><img src="images/animalkingdom/echinodermata.jpg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
									<!-- <div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
										
										<span class="city d-block mb-3">ECHINODERMATA</span>
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">The organisms belonging to the phylum Echinodermata are exclusively marine. Till date, there have been no traces of any terrestrial or freshwater Echinoderms. </span>

										<!-- <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div> -->

										<a href="\Museumnn/echinodermata.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->
							<div class="property-item">

								<a href="\Museumnn/amphibian.php" class="img">
									<div class="high"><img src="images/animalkingdom/Amphibians1.jpeg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
									<!-- <div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
										
										<span class="city d-block mb-3">AMPHIBIANS</span>
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">These are cold-blooded or poikilothermal animals.
	They undergo hibernation or aestivation.The body is divided into the head and trunk.
	
</span>

										<!-- <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div> -->

										<a href="\Museumnn/amphibian.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->
							<div class="property-item">

								<a href="\Museumnn/aves.php" class="img">
									<div class="high"><img src="images/animalkingdom/Aves1.jpeg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
									<!-- <div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
										
										<span class="city d-block mb-3">AVES</span>
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">Aves is a taxonomic group that includes all the birds.Usually, the birds with feathers and wings are classified under Aves </span>

										<!-- <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div> -->

										<a href="\Museumnn/aves.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->
							<div class="property-item">

								<a href="\Museumnn/mammals.php" class="img">
									<div class="high"><img src="images/animalkingdom/Mammals2.jpeg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
									<!-- <div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
										
										<span class="city d-block mb-3">MAMMALS</span>
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">Mammals are one of the most evolved species in the animal kingdom.
They are classified as vertebrates.Mammary glands are present 
</span>

										<!-- <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div> -->

										<a href="\Museumnn/mammals.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->
							<div class="property-item">

								<a href="\Museumnn/pices.php" class="img">
									<div class="high"><img src="images/animalkingdom/Pisces1.jpeg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
									<!-- <div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
										
										<span class="city d-block mb-3">PISCES</span>
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">They are aquatic, either freshwater or marine, herbivorous or carnivorous, cold-blooded, oviparous, or ovoviviparous vertebrates.
	
</span>

										<!-- <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div> -->

										<a href="\Museumnn/pices.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->
							<div class="property-item">

								<a href="\Museumnn/reptile.php" class="img">
									<div class="high"><img src="images/animalkingdom/reptile.jpg" alt="Image" class="img-fluid"></div>
								</a>

								<div class="property-content">
									<!-- <div class="price mb-2"><span>$1,291,000</span></div> -->
									<div>
										
										<span class="city d-block mb-3">REPTILES</span>
										<span class="d-block mb-2 text-black-50" style="text-align:justify;">Reptiles are vertebrates and they have backbones.
	Their bodies are completely covered with scales.They are cold-blooded.
</span>

										<!-- <div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div> -->

										<a href="\Museumnn/reptile.php" class="btn btn-primary py-2 px-3">More...</a>
									</div>
								</div>
							</div> <!-- .item -->



						</div>


						<div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
							<span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
							<span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>


	<div class="section sec-testimonials">
		<div class="container">
			<div class="row mb-5 align-items-center">
					<div class="col-lg-12">
					<h2 class="font-weight-bold text-primary heading" style="text-align:center;">Watch Our Videos</h2>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
				
						<div class="gtco-video gtco-video-sm gtco-bg" style="background-image: url(images/videoimage/vi1.jpg); ">
						<a href="https://www.youtube.com/watch?v=9r8_gkHG8e0" class="popup-vimeo"><i class="fa fa-video-camera" style="font-size:48px;color:maroon;"></i></a>
						<div class="overlay"></div>
					</div>
								
				</div>
				<div class="col-md-4">
					<div class="gtco-video gtco-video-sm gtco-bg" style="background-image: url(images/videoimage/vi2.jpg); ">
						<a href="https://www.youtube.com/watch?v=9r8_gkHG8e0" class="popup-vimeo"><i class="fa fa-video-camera" style="font-size:48px;color:maroon;"></i></a>
						<div class="overlay"></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="gtco-video gtco-video-sm gtco-bg" style="background-image: url(images/videoimage/vi3.jpg); ">
						<a href="https://www.youtube.com/watch?v=9r8_gkHG8e0" class="popup-vimeo"><i class="fa fa-video-camera" style="font-size:48px;color:maroon;"></i></a>
						<div class="overlay"></div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- <section class="features-1">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="300">
					<div class="box-feature">
						<span class="flaticon-house"></span>
						<h3 class="mb-3">Our Properties</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
						<p><a href="#" class="learn-more">Learn More</a></p>
					</div>
				</div>
				<div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="500">
					<div class="box-feature">
						<span class="flaticon-building"></span>
						<h3 class="mb-3">Property for Sale</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
						<p><a href="#" class="learn-more">Learn More</a></p>
					</div>
				</div>
				<div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="400">
					<div class="box-feature">
						<span class="flaticon-house-3"></span>
						<h3 class="mb-3">Real Estate Agent</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
						<p><a href="#" class="learn-more">Learn More</a></p>
					</div>
				</div>
				<div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="600">
					<div class="box-feature">
						<span class="flaticon-house-1"></span>
						<h3 class="mb-3">House for Sale</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
						<p><a href="#" class="learn-more">Learn More</a></p>
					</div>
				</div>	
			</div>
		</div>
	</section>  -->



 	<!-- <div class="section sec-testimonials">
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
							
							<h3 class="h5 text-primary mb-4">Dr.(Ms.) K.Manimegalai</h3>
							<blockquote>
								<p>&ldquo;M.Sc., M.Phil., Ph.D&rdquo;</p>
							</blockquote>
							<p class="text-black-50">Professor & HOD, Department of Zoology</p>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="images/zoo_annapoorani.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							
							<h3 class="h5 text-primary mb-4">Dr.(Mrs.)C.A.Annapoorani</h3>
							<blockquote>
								<p>&ldquo;M.Sc., M.Phil., B.Ed., M.Ed., Ph.D.,&rdquo;</p>
							</blockquote>
							<p class="text-black-50">Assistant Professor (Temporary), Department of Zoology </p>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="images/zoo_annapoorani.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							
							<h3 class="h5 text-primary mb-4">Dr.(Mrs.)C.A.Annapoorani</h3>
							<blockquote>
								<p>&ldquo;M.Sc., M.Phil., B.Ed., M.Ed., Ph.D.,&rdquo;</p>
							</blockquote>
							<p class="text-black-50">Assistant Professor (Temporary), Department of Zoology </p>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="images/person_4-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">Dave Smith</h3>
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
							<p class="text-black-50">Designer, Co-founder</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div> -->


<!--	<div class="section section-4 bg-light">
		<div class="container">
			<div class="row justify-content-center  text-center mb-5">
				<div class="col-lg-5">
					<h2 class="font-weight-bold heading text-primary mb-4">Let's find home that's perfect for you</h2>
					<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique debitis vel nisi qui reprehenderit.</p>
				</div>
			</div>
			<div class="row justify-content-between mb-5">
				<div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
					<div class="img-about dots">
						<img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-home2"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">2M Properties</h3>
							<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>   
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-person"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Top Rated Agents</h3>
							<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>   
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-security"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Legit Properties</h3>
							<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>   
						</div>
					</div>
				</div>
			</div>
			<div class="row section-counter mt-5">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">3298</span></span>
						<span class="caption text-black-50"># of Buy Properties</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">2181</span></span>
						<span class="caption text-black-50"># of Sell Properties</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">9316</span></span>
						<span class="caption text-black-50"># of All Properties</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">7191</span></span>
						<span class="caption text-black-50"># of Agents</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="row justify-content-center footer-cta" data-aos="fade-up">
			<div class="col-lg-7 mx-auto text-center">
				<h2 class="mb-4 ">Be a part of our growing real state agents</h2>
				<p><a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Apply for Real Estate agent</a></p>
			</div> <!-- /.col-lg-7 -->
		<!--</div> <!-- /.row -->
	<!--</div> -->

	<div class="section section-5 bg-light">
		<div class="container">
			<div class="row justify-content-center  text-center mb-5">
				<div class="col-lg-6 mb-5">
					<h2 class="font-weight-bold heading text-primary mb-4">Coordinators</h2>
					<!-- <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique debitis vel nisi qui reprehenderit totam? Quod maiores.</p> -->
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
					<div class="h-100 person">

						<img src="images/zoo_mani.jpg" alt="Image"
						class="img-fluid">

						<div class="person-contents">
							<h2 class="mb-0"><a href="#">Dr.(Ms.) K.Manimegalai</a></h2>
							<span class="meta d-block mb-3">M.Sc., M.Phil., Ph.D</span>
							<p>Professor & HOD,<br> Department of Zoology <br>
							Mail ID: manimegalai_zoo@avinuty.ac.in </p>
							<!--<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>-->
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
					<div class="h-100 person">

						<img src="images/zoo_poon.jpeg" alt="Image"
						class="img-fluid">

						<div class="person-contents">
							<h2 class="mb-0"><a href="#">Dr.(Mrs.)M. Poonkothai</a></h2>
							<span class="meta d-block mb-3">M.Sc., M.Phil., Ph.D.,</span>
							<p>Associate Professor, <br> Department of Zoology<br>
							Mail ID: poonkothaii_zoo@avinuty.ac.in </p>
							<!--<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>-->
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
					<div class="h-100 person">

						<img src="images/zoo_annapoorani.jpg" alt="Image"
						class="img-fluid">

						<div class="person-contents">
							<h2 class="mb-0"><a href="#">Dr.(Mrs.)C.A.Annapoorani</a></h2>
							<span class="meta d-block mb-3">M.Sc., M.Phil., B.Ed., M.Ed., Ph.D.,</span>
							<p>Assistant Professor (Temporary),<br> Department of Zoology<br>
							Mail ID: annapoorni_zoo@avinuty.ac.in </p>

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
						<span class="number"><span class="countup text-primary">  <?php
						$total_website_views = total_views($conn); // Returns total website views
							echo $total_website_views;
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
