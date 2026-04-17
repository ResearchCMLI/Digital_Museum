

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
	<link rel="stylesheet" href="css/faq_css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

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
					<h1 class="heading" data-aos="fade-up">FAQ</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">FAQ</li>
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
					<h2 class="font-weight-bold heading text-primary mb-4">Frequently Asked Questions</h2>
				</div>
				<div class="col-lg-6">
					
<div class="faq-container">
  <div class="faq">
    <h3 class="faq-title">
      1.Why digital museum is important?
    </h3>
    <p class="faq-text">Regardless of the location, the digital museums offer a platform where people are able to get an insight onto the specimens of their interest.</p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>

  <div class="faq">
    <h3 class="faq-title">
      2.How to navigate through the digital museum?
    </h3>
    <p class="faq-text">The homepage has several options such as species, contact us and so on which can be used to navigate through the digital museum. </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>

  <div class="faq">
    <h3 class="faq-title">
      3.What are the features of the digital museum?
    </h3>
    <p class="faq-text">The information on different species along with the images of preserved specimens and the relevant sources with links on the same have been provided.</p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>

  <div class="faq">
    <h3 class="faq-title">
      4.How digitalization is transforming the museum visitor experience?
    </h3>
    <p class="faq-text">      The digital tools are being used to create realistic experience to the visitors and are becoming more cost effective.</p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>

  <div class="faq">
    <h3 class="faq-title">
     5.How many species are there in the digital museum?
    </h3>
    <p class="faq-text">There are several examples for each phylum that have been digitalized. Many representative species of each phyla have been presented</p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  <div class="faq">
    <h3 class="faq-title">
     6.How many invertebrates and vertebrates are included in the digital museum?
    </h3>
    <p class="faq-text">There are 44 species of invertebrates from different phyla, viz., Protozoa, Porifera, Coelentrata, Platehelminthes, Annelida, Arthropoda, Mollusca, and Echinodermata, with examples. 36 species of vertebrates from various classes are listed, viz., Cephalochordates, Pisces, Amphibians, Reptiles, Aves, and Mammals, with examples.</p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  <div class="faq">
    <h3 class="faq-title">
    7.Why does an octopus have blue blood? 
    </h3>
    <p class="faq-text">Octopuses have a copper-based respiratory pigment called hemocyanin which turns their blood blue. This hemocyanin helps transport </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  <div class="faq">
    <h3 class="faq-title">
   8.What causes an octopus' blood to be blue? 
    </h3>
    <p class="faq-text">            Octopuses' blood is blue because of a copper-based pigment called hemocyanin. This hemocyanin aids in the delivery of oxygen at extremely low temperatures and when oxygen is limited. Octopuses have a powerful muscular tube in their body called a syphon, which is one of their three fundamental traits. It can be used by an octopus to blast water and even move backwards. They may also crawl around the ocean floor and feed by pulling their arms into small openings. Tyrosinase, a chemical component found in octopus ink, aids in the control of melanin formation. When sprayed in the eyes, tyrosinase can make the predator temporarily blind. </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  <div class="faq">
    <h3 class="faq-title">
    9.What is the number of hearts in an octopus? 
    </h3>
    <p class="faq-text">  There are three hearts. </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  <div class="faq">
    <h3 class="faq-title">
    10.	What type of animal is a Brittle Star? 
    </h3>
    <p class="faq-text">       Brittle Stars (class ophiuroidea) are marine animals that are closely related to starfish. They 
have five serpent-like arms attached to a distinct disk in the center of the body. There are over 2000 species of Brittle Star in the world.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  <div class="faq">
    <h3 class="faq-title">
    11.What class of animal does a Brittle Star belong to?
    </h3>
    <p class="faq-text">  The Brittle Star belongs to the class of ophiuroidea in the animal kingdom. Brittle Stars 
have a central disk at the middle of the body from which five long arms protrude that help this creature to move along the sea floor. This creature also makes use of its arms to trap bacteria and plankton for its diet. The mouth of these sea stars comprises five jaws as serves as the anus as well.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  <div class="faq">
    <h3 class="faq-title">
    12.How many Brittle Stars are there in the world?
    </h3>
    <p class="faq-text">       The exact number of Brittle Stars is difficult to find due to their tiny size and varied species 
range. However, the IUCN has not listed these Basket Stars under endangered status, and it is assumed its population is stable and increasing. Their tube feet serve the primary purpose of being a sense organ used for detecting light.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  
<div class="faq">
    <h3 class="faq-title">
    13.Where does a Brittle Star live?
    </h3>
    <p class="faq-text">  Brittle Stars are found near the shorelines of the British Isles. Sea Stars are also found along 
the coast bordering the North Sea and the eastern Atlantic Ocean as far as the Cape of Good Hope. Basket Stars are basically found through the coral reefs in oceans of the world in deep water and near the shorelines.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>  
  <div class="faq">
    <h3 class="faq-title">
    14.Who do Brittle Star live with? 
    </h3>
    <p class="faq-text">  The Brittle Star lives in large colonies known as Brittle Star beds. Sea Stars are active 
members of reef communities. Brittles spend most of their time walking on the bottom of the sea or under other sea animals. These spiny marine creatures share the reef or rocky with other animals. In deep water they can be found on their own, too.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  
 <div class="faq">
    <h3 class="faq-title">
    15.How long does a Brittle Star live? 
    </h3>
    <p class="faq-text">  The Brittle Star (class ophiuroidea) has a lifespan of 5-10 years. Not much is revealed and 
known about their lifespan in captivity.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  <div class="faq">
    <h3 class="faq-title">
    16.What are the modes of respiration seen in frogs? 
    </h3>
    <p class="faq-text"> They respire through gills, lungs and cutaneous respiration is also seen here.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    17.What do frogs eat?  
    </h3>
    <p class="faq-text"> They feed on small invertebrates such as snails and worms. 
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    18.What is the difference between frog and toad?  
    </h3>
    <p class="faq-text">Toads have rough dry skin, whereas the frogs have smooth wet skin. Frogs are slender ones whereas the toads are bulkier ones. 
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
 
<div class="faq">
    <h3 class="faq-title">
    19.What is the common name of Eunicidae? 
    </h3>
    <p class="faq-text">Eunicidae is a family of marine polychaete (Bristle worms).
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 

<div class="faq">
    <h3 class="faq-title">
    20.What is the  unique feature about the reproduction cycle of the genus Eunice?
    </h3>
    <p class="faq-text">Reproduce for only a few days in conjunction with a particular phase of the moon.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    21.	What is the scientific name for polynoe?
    </h3>
    <p class="faq-text">Polymorph gracilis.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  <div class="faq">
    <h3 class="faq-title">
    22.How many segments are present in the body of a polynoe?
    </h3>
    <p class="faq-text">The polynoe has 12 to 15 segments on its body with a distinct head.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
 <div class="faq">
    <h3 class="faq-title">
    23.How many Eyes does Cicadas have?
    </h3>
    <p class="faq-text">Cicadas have two obvious compound eyes and three ocelli,which are believed to detect light and darkness.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
 
 
 <div class="faq">
    <h3 class="faq-title">
    24.Which organism prey on Cicadas?
    </h3>
    <p class="faq-text">Cicadas are a valuable food source for birds and others predator.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
 <div class="faq">
    <h3 class="faq-title">
    25.What is the Favourite food of Cicadas?
    </h3>
    <p class="faq-text">Their favourite food is Tree sap.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
 
 <div class="faq">
    <h3 class="faq-title">
    26.How do crabs communicate? 
    </h3>
    <p class="faq-text">By using their pincers 
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
 
 <div class="faq">
    <h3 class="faq-title">
    27.How do crabs reproduce? 
    </h3>
    <p class="faq-text">Via eggs  
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
 
 <div class="faq">
    <h3 class="faq-title">
    28.What is the biggest species of crabs? 
    </h3>
    <p class="faq-text">Japanese Spider crabs   
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
 <div class="faq">
    <h3 class="faq-title">
    29.What are the two main body parts of decapods? 
    </h3>
    <p class="faq-text">1.The cephalothorax 2.Abdomen 
   
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
 <div class="faq">
    <h3 class="faq-title">
    30.What type of brain does decapods have? 
    </h3>
    <p class="faq-text">Crustacean brain
   
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
 
 <div class="faq">
    <h3 class="faq-title">
    31.What is cocoon in silkworm?
    </h3>
    <p class="faq-text">Eri silkworm cocoons (E cocoons) are natural composite biopolymers formed by continuous twin silk filaments (fibroin) bonded by sericin. As a kind of wild species, E cocoons have characteristics different from those of Bombyx mori cocoons (B cocoons).
   
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
 
 <div class="faq">
    <h3 class="faq-title">
    32.What is the pupa stage of a silkworm?
    </h3>
    <p class="faq-text">The motionless stage of a silkworm is called the pupa stage. The cocoon is plunged by putting it into boiling water and the silk threads are disentangled from it. In the pupa stage, the worm is killed to obtain the raw silk.
   
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
 <div class="faq">
    <h3 class="faq-title">
    33.Limulus belongs to which class? 
    </h3>
    <p class="faq-text">Merostomata 
   
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    34.Another name of Limulus and where it present?  
    </h3>
    <p class="faq-text">Horseshoe crab, present in Atlantic 
   
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  
  <div class="faq">
    <h3 class="faq-title">
    35.What is the importance of Sacculina?  
    </h3>
    <p class="faq-text">       It cause significant economic losses to fisheries by killing, stunting, or damaging these crabs. 
   
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    36.What is Sacculina also known as? 
    </h3>
    <p class="faq-text"> crab hacker barnacle.
   
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
    <div class="faq">
    <h3 class="faq-title">
    37.Which one is known as king crab?
    </h3>
    <p class="faq-text">king crab, also called Alaskan king crab, or Japanese crab.
   
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  <div class="faq">
    <h3 class="faq-title">
    38.Which is the most venomous scorpion?
    </h3>
    <p class="faq-text"> The most venomous scorpion is the deathstalker.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    39.What is the largest scorpion in the world?
    </h3>
    <p class="faq-text">          Heterometrus swammerdami, commonly called the Giant Forest Scorpion, which is about 23cm in length and 56g in weight.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  <div class="faq">
    <h3 class="faq-title">
    40.What is the lifespan of scorpion?
    </h3>
    <p class="faq-text">On average about 4 to 5 years.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  
  
  <div class="faq">
    <h3 class="faq-title">
    41.What is the other name of Squilla?
    </h3>
    <p class="faq-text">Squilla is also known as a Pacchero (or) Canocchia
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  <div class="faq">
    <h3 class="faq-title">
    42.What are the main uses of Squilla?
    </h3>
    <p class="faq-text">It mainly used to cure throat related problems such as asthma to bronchitis and problems related to the digestive system
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  <div class="faq">
    <h3 class="faq-title">
    43.Where does Squilla can be seen predominantly?
    </h3>
    <p class="faq-text"> Mantis shrimp (Squilla mantis ) is an edible crustacean native to Mediterranean sea and Eastern Atlantic ocean
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    44.Is vinegaroon poisonous?  
    </h3>
    <p class="faq-text"> Vinegaroons are not dangerous in the way that very venomous scorpions or spiders are dangerous, the acid that they spray can cause irritations, especially if it gets in the eyes and the larger whip scorpions can bite and deliver a pinch with their pedipalps. However they don’t usually attach humans. 
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    45.Can whip spider be pets? 
    </h3>
    <p class="faq-text"> Whip spiders are not venomous. They don’t sting and they rarely bite. This makes them suitable pets for beginners. Adult whip spiders can live for upto 20 years depending on species. 
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
    <div class="faq">
    <h3 class="faq-title">
    46.How many eyes does a whip scorpion have? 
    </h3>
    <p class="faq-text"> Giant whip scorpions are dark brown and have eight eyes. Two eyes are positioned at the front of the head and the sides of their head house the other six. 
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
    <div class="faq">
    <h3 class="faq-title">
    47.Which organisms are the most infected by dracunculiasis? 
    </h3>
    <p class="faq-text">Reptiles
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
   <div class="faq">
    <h3 class="faq-title">
    48.Which is the second infectious disease of humans to be eradicated? 
    </h3>
    <p class="faq-text">Guinea worm disease
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  <div class="faq">
    <h3 class="faq-title">
    49.Is there any treatment for dracunculiasis? 
    </h3>
    <p class="faq-text">No there is no medicine to kill D. medinensis. 
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    50.Is coral an animal or plant?
    </h3>
    <p class="faq-text">Corals are in fact animals. The branch or mound that we often call “a coral” is actually made up of thousands of tiny animals called polyps 
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  <div class="faq">
    <h3 class="faq-title">
    51.Why is coral alive?
    </h3>
    <p class="faq-text">Corals are considered living animals because they fit into the five criteria that define them. 
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    52.What are corals?
    </h3>
    <p class="faq-text">They are sessile invertebrate marine organisms that usually form compact colonies. 
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  <div class="faq">
    <h3 class="faq-title">
    53.What is Madrepora commonly called as?
    </h3>
    <p class="faq-text">Madrepora is called as ‘stony coral’ or ‘zigzag coral’.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  <div class="faq">
    <h3 class="faq-title">
    54.What is a coenosarc?
    </h3>
    <p class="faq-text">It refers to the tissue that lies over the living skeletal material of the coral. 
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    55.What is a zooid?
    </h3>
    <p class="faq-text">It is a living part of the living colony of a colonial organism.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    56.Is a blue button jellyfish poisonous?
    </h3>
    <p class="faq-text">Blue button jellies do not have a lethal sting, but they can cause skin irritation when touched.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  <div class="faq">
    <h3 class="faq-title">
    57.Is it safe to touch a jellyfish?
    </h3>
    <p class="faq-text"> Jellyfish that have washed up on a beach may still release venomous stingers if touched.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  <div class="faq">
    <h3 class="faq-title">
    58.What are the varieties of sea cucumbers?
    </h3>
    <p class="faq-text"> cucumbers come in a wide range of kinds, but the edible ones can be categorised into three groups: prickly sea cucumbers, bald sea cucumbers, and white teat sea cucumbers. The pricy kind of sea cucumber is elongated, black in colour, and has a spiny surface. Its crisp and slightly springy texture makes it highly regarded.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
 <div class="faq">
    <h3 class="faq-title">
    59.Why can’t you touch a sea cucumber?
    </h3>
    <p class="faq-text"> We can’t touch a sea cucumber because when the Cuvierian tubules from sea cucumber venom come in contact with the eyes, it can cause irreversible blindness in people.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    60.Do starfish have a brain?
    </h3>
    <p class="faq-text"> They have no brain or blood .Instead of blood, seawater is pumped through their body as a replacement, with the water providing key nutrients to starfish which allows its organs to function properly. And since there’s no shortage of water around them, they’ll never run out of it!
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div> 
  
  <div class="faq">
    <h3 class="faq-title">
    61.Can humans eat starfish?
    </h3>
    <p class="faq-text">Since starfish is edible and safe to consume, it has become a popular component of street food cuisine in places like China, Indonesia, and Thailand. However, certain species are highly poisonous and dangerous for consumption, such as the crown-of-thorn starfish.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  <div class="faq">
    <h3 class="faq-title">
    62.How is the embryo formed?
    </h3>
    <p class="faq-text"> First, the zygote becomes a solid ball of cells.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  <div class="faq">
    <h3 class="faq-title">
    63.Who is the father of embryo transfer?
    </h3>
    <p class="faq-text"> Walter Heape
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  <div class="faq">
    <h3 class="faq-title">
    64.What stage are embryos transferred?
    </h3>
    <p class="faq-text">IVF embryos are usually transferred on the second or third day after egg retrieval, at the four to eight-cell stage.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  
  <div class="faq">
    <h3 class="faq-title">
    65.what does Arca(arc shell) tastes like? 
    </h3>
    <p class="faq-text"> The flesh is soft and firm, and should be enjoyed slowly to allow the sweet flavors and aromas to be released during consumption. </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  <div class="faq">
    <h3 class="faq-title">
    66.Are ark shells safe to eat? 
    </h3>
    <p class="faq-text">                         Seafood does carry some risk if it is not handled, stored or prepared properly. Eating raw or undercooked seafood, especially clams, mollusks, oysters and scallops can be dangerous.
 </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  
  
  <div class="faq">
    <h3 class="faq-title">
    65.Are ark shells edible? 
    </h3>
    <p class="faq-text"> Yes these are marine edible mollusks.  </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  
  <div class="faq">
    <h3 class="faq-title">
    66.Why do octopus have 3 hearts?
    </h3>
    <p class="faq-text"> Octopuses have three hearts. Two of the hearts work exclusively to move blood beyond the animal's gills, while the third keeps circulation flowing for the organs.   </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  
  <div class="faq">
    <h3 class="faq-title">
    67.When Antennarius genus fish spend most of their lives?
    </h3>
    <p class="faq-text"> These fish spend most of their lives on the bottom in relatively shallow water( Between 20 to 100 m ).  </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  <div class="faq">
    <h3 class="faq-title">
    68.How are the snails used in medicines?       
    </h3>
    <p class="faq-text">These snails have been used in traditional medicine  purposes, including treating headaches, fever, and stomachaches.          </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  
  <div class="faq">
    <h3 class="faq-title">
    69.How many taste buds does a catfish have?     
    </h3>
    <p class="faq-text">Catfish have over 100,000 taste buds with some species having closer to 175,000.  </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  
  
  
  <div class="faq">
    <h3 class="faq-title">
    70.Why are Puffer fish immune to poision?    
    </h3>
    <p class="faq-text">The pufferfish itself has immunity to the poison due to a mutation in the protein sequence of the sodium channel pump on the cell membranes.  </p>
    <button class="faq-toggle">
      <i class="fas fa-angle-down"></i>
    </button>
  </div>
  
  
  
  
  
  
  
  
  
  
</div>
				</div>
				
				
				
<div class="col-lg-6">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdMifFo05nZObqu5p8DysZBcnM-V6LuIqGYHmkNeaNNyQRdEQ/viewform?embedded=true" width="640" height="950" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

</div>	
				
				
				
			</div>

		</div>
	</div>

	

	<!--<div class="section pt-0">
		<div class="container">
			<div class="row justify-content-between mb-5">
				
				<div class="col-lg-4">
					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-home2"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Quality properties</h3>
							<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>   
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-person"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Top rated agents</h3>
							<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>   
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-security"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Easy and safe</h3>
							<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.</p>   
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
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
	<script src="js/faq.js"></script>
  </body>
  </html>
