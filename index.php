<?php
	include 'controllers/authController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=EDGE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<script src="js/func.js"></script>
</head>
<body data-spy="scroll" data-target="#navbarResposive">
	
	<div id="home">

		<nav class="navbar navbar-expand-md navbar-dark bg-dark justify-content-center fixed-top">
			<div class="container-fluid pl-5 pr-5">	
				<a class="navbar-brand" href="index.php"><h1>STONE</h1></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResposive">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResposive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="timetable.php" class="nav-link">Timetable</a></li>
						<li class="nav-item"><a href="trainers.php" class="nav-link">Trainers</a></li>
						<?php 
							if(isset($_SESSION['id']))
							{
								if($_SESSION['email'] === "narendramanipal2@gmail.com" || $_SESSION['email'] === "anishsjathan@gmail.com")
								{
						?>
						<li class="nav-item"><a href="users.php" class="nav-link">Users</a></li>
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
	          			<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Register modal -->
		<div class="modal fade" id="join-modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="row">
						<div class="col-12">
							<div class="modal-header">
								<h2>Sign Up<h2>
								<button type="button" class="close" data-dismiss="modal"> &times; </button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="modal-body">
								<form action="" method="POST">
									<div class="row">
										<div class="col-xs-6">
											<input class="form-control" type="text" name="firstname" value="" placeholder="Firstname" required>
										</div>
										<div class="col-xs-6">
											<input class="form-control" type="text" name="lastname" value="" placeholder="Lastname" required>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<input type="email" class="form-control" name="email" value="" placeholder="Email" required>
										</div>
										<div class="col-xs-6">
											<input type="password" class="form-control" name="password" value="" placeholder="Password" minlength="8" maxlength="15" required>
										</div>
									</div>
									<input class="form-control" type="phone" name="phoneno" value="" placeholder="Mobile Number" maxlength="10" required>
									<input type="text" class="form-control" name="address" value="" placeholder="Address" required>
									<div class="row">
										<div class="col-xs 6">
											<input type="text" class="form-control" name="city" value="" placeholder="City" required>
										</div>
										<div class="col-xs 6">
											<input type="number" class="form-control" name="postal_code" value="" placeholder="Postal Code" minlength="6" required>
										</div>
									</div>
									<button class="btn login-primary" type="submit" name="signup-btn" value="signup">Sign Up</button>
								</form>
							</div>
							<div class="modal-footer">
								<p>Already have an account?<a href="#login-modal" data-toggle="modal" data-dismiss="modal">Sign In</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- login modal -->
		<div class="modal fade" id="login-modal">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="row">
						<div class="col-12">
							<div class="modal-header">
								<h2>Sign In<h2>
								<button type="button" class="close" data-dismiss="modal" value="&times;"></button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="modal-body">
								<form action="" method="POST">
									<div class="form-group">
										<input class="form-control" type="email" placeholder="Email" name="username" value="" maxlength="50" required><br>
										<input class="form-control" id="showpassword" type="password" placeholder="password" name="password" value="" minlength="8" maxlength="15" required><br>
										<input type="checkbox" onclick="showPassword()"><label>Show Password</label><br>
										<button class="btn login-primary" type="submit" name="login-btn" value="Login">Login</button>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<p>Don't have an account?<a href="#join-modal" data-toggle="modal" data-dismiss="modal">Sign Up</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- image slider-->
		<div class="carousel-inner black " align="center">
			<div class="carousel-item active">
				<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" width="100%">
						<source src="video\fitness1.mp4" type="video/mp4">
				</video>
				<div class="overlay-carousel"></div>
				<div class="carousel-caption mt-5 pt-md-5">
					<h1 class="mb-3 carousel-h1"  data-aos="fade-up" data-aos-delay="100">Stone is for<span class="carousel-span">Everyone</span></h3>
					<h2 class="subheading text-center mt-md-5">Shape your body</h3>
				</div>
			</div>
		</div>

		<!--<div id="car_slides" class="carousel slide" data-ride="carousel" data-interval="12000">
			<ol class="carousel-indicators">
				<li data-target="#car_slides" data-slide-to="0" class="active"></li>
				<li data-target="#car_slides" data-slide-to="1"></li>
			</ol>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/bg_2.jpg">
					<div class="overlay"></div>
					<div class="carousel-caption mt-5 pt-md-5">
						<h1 class="mb-5">Stone is for<span>Everyone</span></h3>
						<h2 class="subheading text-center">Shape your body</h3>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/bg_1.jpg">
					<div class="overlay"></div>
					<div class="carousel-caption mt-5 pt-md-5">
						<h1 class="mb-5">Stone<span>gym</span></h3>
						<h2 class="subheading">get your body fit</h3>
					</div>
				</div>
				<a class="carousel-control-prev" href="#car_slides" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#car_slides" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>-->

	</div>

	<!--moto-->
	<div class="container-fluid padding ">
		<div class="row padding mx-md-5 my-md-5">
			<div class="col-xs-12 col-md-6">
				<div class="row">
					<div class="col-12">
						<img src="img/bg_1.jpg" class="card-img"></img>
					</div>
					<div class="row mx-1">
						<div class="col-4">
							<img src="img/program-1.jpg" class="card-img" height="100%"></img>
						</div>
						<div class="col-4">
							<img src="img/program-2.jpg" class="card-img" height="100%"></img>
						</div>
						<div class="col-4">
							<img src="img/program-3.jpg" class="card-img" height="100%"></img>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 heading-section" data-aos="fade-up">
				<span>Welcome</span>
				<h1 class="mt-2">Welcome To</h1>
				<h1><span>Stone GYM</span></h1>
				<p class="mt-5">Find motivation from training with others for an efficient and progressive workout. Offering interactive and energetic sessions, Freestyle™ Group Training incorporates the latest equipment and trained fitness staff. These classes are a great way to work the whole body and improve overall fitness.</p>
				<?php if(!isset($_SESSION['id'])): ?>
					<button class="btn btn-primary px-5 py-3 mt-md-2" data-target="#join-modal" data-toggle="modal">Join Us</button>
				<?php endif; ?>
				<?php if(isset($_SESSION['id'])): ?>
					<a class="btn btn-secondary" href="index.php?logout=1"><?php echo "Welcome, ".$_SESSION['firstname']." ".$_SESSION['lastname']; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!--Sevices-->

	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-12 heading-section text-center">
				<span>SERVICES</span>
			</div>
			<div class="col-12 heading-section text-center">
				<h1>Kick your <span>Feet</span> Up</h1>
			</div>
		</div>
		<div class="row padding mx-md-5 my-md-5">
			<div class="col-xs-12 col-sm-6 col-md-3 services" data-aos="fade-up" data-aos-delay="100">
				<div class="card">
					<div class="icon">
						<img class="card-img-top" src="img/icon/ruler.png" alt="">
					</div>
					<div class="card-body">
						<h4 class="card-title"><p>CARDIO TRAINING</p></h4>
						<p class="card-text text-center">Whether you want increased energy or reduced stress, cardio training helps you live a fitter life while strengthening your heart and lungs.</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 services" data-aos="fade-up" data-aos-delay="200">
				<div class="card">
					<div class="icon">
						<img class="card-img-top" src="img/icon/gym.png" alt="">
					</div>
					<div class="card-body">
						<h4 class="card-title"><p>STRENGTH TRAINING</p></h4>
						<p class="card-text text-center">Shape your body and burn fat with strength training. With the right equipment such as resistance machines and advice from our experts.</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 services" data-aos="fade-up" data-aos-delay="300">
				<div class="card">
					<div class="icon">
						<img class="card-img-top" src="img/icon/dish.png" alt="">
					</div>
					<div class="card-body">
						<h4 class="card-title"><p>DIET</p></h4>
						<p class="card-text text-center">Healthy eating is one of the best things you can do to prevent and control health problems such as heart disease.</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 services" data-aos="fade-up" data-aos-delay="400">
				<div class="card">
					<div class="icon">
						<img class="card-img-top" src="img/icon/waist.png" alt="">
					</div>
					<div class="card-body">
						<h4 class="card-title"><p>ONE-TO-ONE TRAINING</p></h4>
						<p class="card-text text-center">Tailored specifically around your individual fitness, one-to-one personal training ensures you get the most out of every workout.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Success stories-->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-12 heading-section text-center mt-5">
				<span>Testimonies</span>
			</div>
			<div class="col-12 heading-section text-center">
				<h1>Successful Stories</h1>
			</div>
		</div>
		<div class="row padding mx-md-5 my-md-5" data-aos="fade-up" data-aos-delay="100">
			<div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class="img-fluid" src="img/person_1.jpg" alt="card image"></p>
                                    <h4 class="card-title">Gabby Smith</h4>
                                    <p class="card-text">Gabby is a Syatem Analyst and Software Engineer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Gabby Smith</h4>
                                    <p class="card-text">The PF staff is extremely friendly and helpful. I am always greeted with a smile and feel that the staff is happy to be there and help me with questions.</p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/person_2.jpg" alt="card image"></p>
                                    <h4 class="card-title">Floyd Weather</h4>
                                    <p class="card-text">Floyd is a CA and Social Activist.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Floyd Weather</h4>
                                    <p class="card-text">There are people there of every age, shape, size and fitness level.</p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/person_3.jpg" alt="card image"></p>
                                    <h4 class="card-title">James Dee</h4>
                                    <p class="card-text">James is an Internet Enterprenuer and Public Speaker.</p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">James Dee</h4>
                                    <p class="card-text">The best gym I have ever belonged to... not intimidating because it attracts so many different types!</p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
		</div>
	</div>

	<!--Membership-->
	<div class="container-fluid padding classes">
		<div class="row padding">
			<div class="col-12 heading-section text-center mt-5">
				<span>GYM CLASSES</span>
			</div>
			<div class="col-12 heading-section text-center">
				<h1>What You Get From <span>Stone</span> Membership</h1>
			</div>
		</div>
		<div class="row padding">
			<div class="col-12">
				<div class="owl-carousel owl-theme">
					<div class="item membership" data-aos="fade-up" data-aos-delay="100">
						<img src="img/program-1.jpg" alt="">
						<div class="text text-center">
							<div class="desc">
								<h3>Muscle Sculpe</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="item membership" data-aos="fade-up" data-aos-delay="150">
						<img src="img/program-2.jpg" alt="">
						<div class="text text-center">
							<div class="desc">
								<h3>Fat Burn</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="item membership" data-aos="fade-up" data-aos-delay="200">
						<img src="img/program-3.jpg" alt="">
						<div class="text text-center">
							<div class="desc">
								<h3>Cycling</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="item membership" data-aos="fade-up" data-aos-delay="250">
						<img src="img/program-4.jpg" alt="">
						<div class="text text-center">
							<div class="desc">
								<h3>Pilates &amp; Stretching</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="item membership" data-aos="fade-up" data-aos-delay="300">
						<img src="img/program-5.jpg" alt="">
						<div class="text text-center">
							<div class="desc">
								<h3>Boxing</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="item membership" data-aos="fade-up" data-aos-delay="350">
						<img src="img/program-1.jpg" alt="">
						<div class="text text-center">
							<div class="desc">
								<h3>Muscle Sculpe</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="item membership" data-aos="fade-up" data-aos-delay="400">
						<img src="img/program-2.jpg" alt="">
						<div class="text text-center">
							<div class="desc">
								<h3>Fat Burn</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="item membership" data-aos="fade-up" data-aos-delay="450">
						<img src="img/program-3.jpg" alt="">
						<div class="text text-center">
							<div class="desc">
								<h3>Cycling</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="item membership" data-aos="fade-up" data-aos-delay="500">
						<img src="img/program-4.jpg" alt="">
						<div class="text text-center">
							<div class="desc">
								<h3>Pilates &amp; Stretching</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="item membership" data-aos="fade-up" data-aos-delay="550">
						<img src="img/program-5.jpg" alt="">
						<div class="text text-center">
							<div class="desc">
								<h3>Boxing</h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
				</div>
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
