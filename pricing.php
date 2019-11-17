<?php
	require 'controllers/authController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stone Is For Everyone</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--AOS-->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<!--owl carousel-->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/others.css" rel="stylesheet">
    <link href="css/pricing.css" rel="stylesheet">

</head>
<body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark justify-content-center fixed-top">
        <div class="container-fluid pl-5 pr-5">	
            <a class="navbar-brand" href="index.php"><h1>STONE</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResposive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResposive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Programs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Trainers</a></li>
                    <li class="nav-item active"><a href="pricing.php" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div id="car_slides" class="carousel slide" data-ride="carousel" data-interval="7000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg_2.jpg">
                <div class="overlay"></div>
                <div class="carousel-caption mt-5 pt-md-5">
                    <h1 class="mb-md-3 mt-md-5 pt-md-5 bread">Pricing</h1>
                    <p class="breadcrumbs text-center"><span class="mr-2"><a href="index.php">Home</a></span> <span>Pricing</span></p>
                </div>
            </div>
        </div>
    </div>

    <!--Pricing-->
    <div class="container-fluid">
        <div class="row padding mx-md-5 mt-5">
            <div class="col-12 heading-section text-center">
                <span>Pricing Tables</span>
            </div>
            <div class="col-12 heading-section text-center">
                <h1>Membership plans</h1>
            </div>
        </div>
        <div class="row padding mx-md-5 mt-md-5">
			<div class="col-xs-12 col-sm-6 col-md-4 services" data-aos="fade-up" data-aos-delay="100">
				<div class="card">
					<div class="card-body text-center">
                        <h2 class="heading"><p>ONE DAY TRAINING</p></h2>
                        <span class="price text-center"><sup>&#8377;</sup> <span class="number">149</span></span>
						<span class="excerpt d-block">100% free. Forever</span>
                        <a href="#" class="btn btn-primary d-block px-2 py-4 mb-4">Get Started</a>
                        
                        <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
                        
                        <ul class="pricing-text">
                        <li>Onetime Access To All Club</li>
                        <li>Group Trainer</li>
                        <li>Book A Group Class</li>
                        <li>Fitness Orientation</li>
                        </ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 services" data-aos="fade-up" data-aos-delay="200">
				<div class="card">
					<div class="card-body text-center">
						<h2 class="heading"><p>PAY EVERY MONTH</p></h2>
                        <span class="price text-center"><sup>&#8377;</sup> <span class="number">899</span></span>
                        <span class="excerpt d-block">All features are included</span>
                        <a href="#" class="btn btn-primary d-block px-3 py-4 mb-4">Get Started</a>
                        
                        <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
                        
                        <ul class="pricing-text">
                        <li>Group Classes</li>
                        <li>Discuss Fitness Goals</li>
                        <li>Group Trainer</li>
                        <li>Fitness Orientation</li>
                        </ul>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 services" data-aos="fade-up" data-aos-delay="300">
				<div class="card">
					<div class="card-body text-center">
						<h2 class="heading"><p>1 YEAR MEMBERSHIP</p></h2>
                        <span class="price text-center"><sup>&#8377;</sup> <span class="number">8,999</span></span>
                        <span class="excerpt d-block">All features are included</span>
                        <a href="#" class="btn btn-primary d-block px-3 py-4 mb-4">Get Started</a>
                        
                        <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
                        
                        <ul class="pricing-text">
                        <li>Group Classes</li>
                        <li>Discuss Fitness Goals</li>
                        <li>Group Trainer</li>
                        <li>Fitness Orientation</li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
    </div>

    <div class="container-fluid price-disc">
        <div class="row padding mx-md-3">
            <div class="col-xs-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-2">
                            <img src="img/icon/ruler-price.png" class="card-img" alt="...">
                        </div>
                        <div class="col-10">
                            <div class="card-body">
                                <h5 class="card-title heading-2">1K+ Equipment</h5>
                                <p class="card-text">Whether it is cardio or strength training machines, we offer the widest range of commercial gym products that use the latest innovation, design and technology.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-2">
                            <img src="img/icon/gym-price.png" class="card-img" alt="...">
                        </div>
                        <div class="col-10">
                            <div class="card-body">
                                <h5 class="card-title heading-2">Open 24/7 Helpline</h5>
                                <p class="card-text">Affordable, friendly and stylish boutique gym with 24/7 customer support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-2">
                            <img src="img/icon/stopwatch-price.png" class="card-img" alt="...">
                        </div>
                        <div class="col-10">
                            <div class="card-body">
                                <h5 class="card-title heading-2">Food Supply</h5>
                                <p class="card-text">Our scientifically-designed programs are painstakingly crafted to drive results in your health and fitness levels.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>

    <!-- footer -->

	<footer>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4">
					<a class="navbar-brand" href="#"><h1>Stone</h1></a>
					<hr class="light">
					<p>+91 9876543210</p>
					<p>stone@gmail.com</p>
					<p>Katpady</p>
					<p>Udupi, Karnataka, 576101</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Timings</h5>
					<hr class="light">
					<p>Monday: 4am - 10pm</p>
					<p>Saturday: 5am - 8pm</p>
					<p>Sunday: 5am - 1pm</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Classes</h5>
					<hr class="light">
					<p>Yoga</p>
					<p>Zumba</p>
					<p>Fitness Classes</p>
					<p>MMA</p>
				</div>
				<div class="col-12">
					<hr class="light-100">
					<h2 class="foo-text">Copyright ©Stone gym 2019. All rights reserved</h2>
				</div>
			</div>
		</div>
	</footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/animate.js"></script>
</body>
</html>