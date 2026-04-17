<?php
require_once('db_connect.php'); // Database connection file
require_once('functions.php');  // PHP functions file
$page_id = 3;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<!-- <link rel="shortcut icon" href="favicon.png">-->

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!--<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">-->


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/faq1_css.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Digital Museum</title>
	  
</head>

<body>

 <h1>Frequently Asked Question</h1>
    <div class="faq-container">
        <div class="faq active">
            <h3 class="faq-title">
                Why we shouldn't we trust atoms?
            </h3>
            <p class="faq-text">
                They make up everything
            </p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>


        <div class="faq">
            <h3 class="faq-title">
                Why do you call someone with no body and no nose?
            </h3>
            <p class="faq-text">
                Nobody knows.
            </p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>


        <div class="faq">
            <h3 class="faq-title">
                What's the object oriented way to become wealthy?
            </h3>
            <p class="faq-text">
                inheritance.
            </p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>


        <div class="faq">
            <h3 class="faq-title">
                HOw many tickles it takes to tickle an actopus?
            </h3>
            <p class="faq-text">
                Ten-ticklles!
            </p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>


        <div class="faq">
            <h3 class="faq-title">
                What is 1 + 1?
            </h3>
            <p class="faq-text">
                Depends on who are you asking.
            </p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>


    </div>
	<script type="text/javascript" src="js/faq1.js"></script>
    
</body>
</html>