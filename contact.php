<?php
    include 'controllers/authController.php';
    include 'controllers/contactController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stone Is For Everyone</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--AOS-->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<!--owl carousel-->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link href="css/style.css" rel="stylesheet">
	<link href="css/login-box.css" rel="stylesheet">
    <link href="css/others.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    <script src="js/func.js"></script>
    
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
                    <li class="nav-item"><a href="timetable.php" class="nav-link">Timetable</a></li>
                    <li class="nav-item"><a href="trainers.php" class="nav-link">Trainers</a></li>
                    <?php 
                        if(isset($_SESSION['id']))
                        {
                            if($_SESSION['admin'] === true)
                            {
                    ?>
                    <li class="nav-item"><a href="users.php" class="nav-link">Admin</a></li>
                    <?php
                            }
                            else
                            {
                    ?>
                    <li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
                    <?php
                            }
                        }
                        else
                        {
                    ?>
                    <li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
                    <?php
                        }
                    ?>
                    <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div id="car_slides" class="carousel slide" data-ride="carousel" data-interval="7000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg_1.jpg">
                <div class="overlay"></div>
                <div class="carousel-caption mt-5 pt-md-5">
                    <h1 class="mb-md-3 mt-md-5 pt-md-5 bread"  data-aos="fade-up" data-aos-delay="100">Contact Us</h1>
                    <p class="breadcrumbs text-center"><span class="mr-2"><a href="index.php">Home</a></span> <span>contact</span></p>
                </div>
            </div>
        </div>
    </div>

    <!--contact info-->
    <div class="container padding contact-section mt-5">
	    <div class="row padding block-9 mx-md-5 my-md-5 pr-md-5" data-aos="fade-up" data-aos-delay="100">
			<div class="col-xs-12 col-md-6  my-md-5 pr-md-5">
                <h2 class="h4">Contact Information</h2>
                <p class="mt-5"><span>Address:</span> Stone, Katpady, Udupi</p>
                <p><span>Phone:</span> <a class="ml-2" href="tel://1234567920">+91 7411522246</a></p>
                <p><span>Email:</span> <a class="ml-2" href="mailto:info@yoursite.com">info@stone.com</a></p>
                <p><span>Website:</span> <a class="ml-2" href="index.php">stone.com</a></p>
            </div>
            
            <div class="col-xs-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <form action="" class="contact-form" method="POST">
                    <?php
                        if($success === '')
                        {
                            ?>
                                <div class=""></div>
                            <?php
                        }
                        else if($success === 'Success')
                        {
                            ?>
                                <div class="alert alert-success">Message Sent!!!</div>
                            <?php
                        }
                        else
                        {
                            ?>
                                <div class="alert alert-danger">Sending failed Try again later!!!</div>
                            <?php
                        }
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                    <input type="text" class="form-control" name="sender-name" placeholder="Your Name" <?php if(isset($_SESSION['id'])){?> value="<?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?>" <?php }?> required>
                        </div>
                        <div class="col-md-6">
                    <input type="text" class="form-control" name="sender-mail" placeholder="Your Email" <?php if(isset($_SESSION['id'])){?> value="<?php echo $_SESSION['email']; ?>" <?php } ?> required>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    <textarea name="message-body" id="" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                    <input type="submit" value="Send Message" name="msg-submit" class="btn btn-primary py-3 px-5 mt-5">
                </form>
            </div>
		</div>
	</div>

   

    <!-- footer -->

	<footer>
		<div class="container-fluid padding px-5">
			<div class="row text-center">
				<div class="col-md-3">
					<h5 class="mb-5">About Us</h5>
					<p>Push your fitness further with our mix of facilities and we'll support you with advice on new and better ways to train.</p>
					<ul class="list-inline">
						<li class="list-inline-item">
							<a class="social-icon text-xs-center" target="_blank" href="#">
								<i class="fab fa-facebook"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a class="social-icon text-xs-center" target="_blank" href="#">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a class="social-icon text-xs-center" target="_blank" href="#">
								<i class="fab fa-skype"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a class="social-icon text-xs-center" target="_blank" href="#">
								<i class="fab fa-google"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h5 class="mb-5">Timings</h5>
					<p>Monday: &nbsp; 4am - 10pm</p>
					<p>Saturday: &nbsp; 5am - 8pm</p>
					<p>Sunday: &nbsp; 5am - 1pm</p>
				</div>
				<div class="col-md-3">
					<h5 class="mb-5">Classes</h5>
					<p>FREESTYLE™ GROUP TRAINING</p>
					<p>PRECISIONCYCLING</p>
					<p>BODYBALANCE®</p>
					<p>MMA</p>
				</div>
				<div class="col-md-3">
					<h5 class="mb-5">Have a question?</h5>
					<div class="block-23 mb-3">
						<ul>
							<li><span> <img class="icon  mr-1" src="img/icon/map-marker.png" alt=""> </span><span class="text">Stone gym, Katpady, Udupi</span></li>
							<li><span> <img class="icon mr-3" src="img/icon/phone-call.png" alt=""></span><span class="text"> +91 7411522246</span></li>
							<li><span> <img class="icon mr-3" src="img/icon/envelope.png" alt=""></span><span class="text">info@stone.com</span></li>
						</ul>
					</div>
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