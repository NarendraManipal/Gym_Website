<?php
	include 'controllers/authController.php';
	include 'controllers/pricingController.php';
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
    <link href="css/login-box.css" rel="stylesheet">
    <link href="css/others.css" rel="stylesheet">
    <link href="css/pricing.css" rel="stylesheet">

</head>
<body>

	<!--Check for membership-->
		<div class="modal fade" id="subscribed">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="row">
						<div class="col-12">
							<div class="modal-body">
								<h3 class="ml-5">You are already a member!!!</h3>
								<h4 class="ml-5">Thanks for joining us.</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    <!-- Day membership modal -->
		<div class="modal fade" id="join-modal-day">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="row">
						<div class="col-12">
							<div class="modal-header">
								<h2>One Day Membership<h2>
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
											<input class="form-control" type="text" name="mfirstname" value="<?php echo $membershipCheckValues['firstname'];?>" placeholder="Firstname" required>
										</div>
										<div class="col-xs-6">
											<input class="form-control" type="text" name="mlastname" value="<?php echo $membershipCheckValues['lastname'];?>" placeholder="Lastname" required>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<input type="email" class="form-control" name="memail" value="<?php echo $membershipCheckValues['email'];?>" placeholder="Email" required>
										</div>
									</div>
									<input class="form-control" type="phone" name="mphoneno" value="<?php echo $membershipCheckValues['phoneno'];?>" placeholder="Mobile Number" maxlength="10" required>
									<input type="text" class="form-control" name="maddress" value="<?php echo $membershipCheckValues['address'];?>" placeholder="Address" required>
									<div class="row">
										<div class="col-xs 6">
											<input type="text" class="form-control" name="mcity" value="<?php echo $membershipCheckValues['city'];?>" placeholder="City" required>
										</div>
										<div class="col-xs 6">
											<input type="number" class="form-control" name="mpostal_code" value="<?php echo $membershipCheckValues['postal_code'];?>" placeholder="Postal Code" minlength="6" required>
										</div>
									</div>
									<button class="btn login-primary" type="submit" name="day-membership-btn" value="signup">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Month membership modal -->
		<div class="modal fade" id="join-modal-month">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="row">
						<div class="col-12">
							<div class="modal-header">
								<h2>One Month Membership<h2>
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
											<input class="form-control" type="text" name="mfirstname" value="<?php echo $membershipCheckValues['firstname'];?>" placeholder="Firstname" required>
										</div>
										<div class="col-xs-6">
											<input class="form-control" type="text" name="mlastname" value="<?php echo $membershipCheckValues['lastname'];?>" placeholder="Lastname" required>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<input type="email" class="form-control" name="memail" value="<?php echo $membershipCheckValues['email'];?>" placeholder="Email" required>
										</div>
									</div>
									<input class="form-control" type="phone" name="mphoneno" value="<?php echo $membershipCheckValues['phoneno'];?>" placeholder="Mobile Number" maxlength="10" required>
									<input type="text" class="form-control" name="maddress" value="<?php echo $membershipCheckValues['address'];?>" placeholder="Address" required>
									<div class="row">
										<div class="col-xs 6">
											<input type="text" class="form-control" name="mcity" value="<?php echo $membershipCheckValues['city'];?>" placeholder="City" required>
										</div>
										<div class="col-xs 6">
											<input type="number" class="form-control" name="mpostal_code" value="<?php echo $membershipCheckValues['postal_code'];?>" placeholder="Postal Code" minlength="6" required>
										</div>
									</div>
									<button class="btn login-primary" type="submit" name="month-membership-btn" value="signup">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Year membership modal -->
		<div class="modal fade" id="join-modal-year">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="row">
						<div class="col-12">
							<div class="modal-header">
								<h2>One Year Membership<h2>
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
											<input class="form-control" type="text" name="mfirstname" value="<?php echo $membershipCheckValues['firstname'];?>" placeholder="Firstname" required>
										</div>
										<div class="col-xs-6">
											<input class="form-control" type="text" name="mlastname" value="<?php echo $membershipCheckValues['lastname'];?>" placeholder="Lastname" required>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<input type="email" class="form-control" name="memail" value="<?php echo $membershipCheckValues['email'];?>" placeholder="Email" required>
										</div>
									</div>
									<input class="form-control" type="phone" name="mphoneno" value="<?php echo $membershipCheckValues['phoneno'];?>" placeholder="Mobile Number" maxlength="10" required>
									<input type="text" class="form-control" name="maddress" value="<?php echo $membershipCheckValues['address'];?>" placeholder="Address" required>
									<div class="row">
										<div class="col-xs 6">
											<input type="text" class="form-control" name="mcity" value="<?php echo $membershipCheckValues['city'];?>" placeholder="City" required>
										</div>
										<div class="col-xs 6">
											<input type="number" class="form-control" name="mpostal_code" value="<?php echo $membershipCheckValues['postal_code'];?>" placeholder="Postal Code" minlength="6" required>
										</div>
									</div>
									<button class="btn login-primary" type="submit" name="year-membership-btn" value="signup">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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
								<button type="button" class="close" data-dismiss="modal"> &times; </button>
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
                    <li class="nav-item active"><a href="pricing.php" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
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
                    <h1 class="mb-md-3 mt-md-5 pt-md-5 bread" data-aos="fade-up" data-aos-delay="100">Pricing</h1>
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
                        <span class="price text-center"><sup>&#8377;</sup> <span class="number">89</span></span>
						<span class="excerpt d-block">100% free. Forever</span>
						<?php
							if(isset($_SESSION['id']))
							{
								if($member == "1")
								{
									?>
									<a href="#subscribed" data-toggle="modal" data-dismiss="modal" class="btn btn-primary d-block px-2 py-4 mb-4" name="day_submit">Get Started</a>
									<?php
								}
								else
								{
									?>
									<a href="#join-modal-day" data-toggle="modal" data-dismiss="modal" class="btn btn-primary d-block px-2 py-4 mb-4" name="day_submit">Get Started</a>
									<?php
								}
							}
							else
							{
								?>
								<a href="#login-modal" data-toggle="modal" data-dismiss="modal" class="btn btn-primary d-block px-2 py-4 mb-4" name="day_submit">Get Started</a>
								<?php
							}
						?>
                        
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
                        <?php
							if(isset($_SESSION['id']))
							{
								if($member == "1")
								{
									?>
									<a href="#subscribed" data-toggle="modal" data-dismiss="modal" class="btn btn-primary d-block px-2 py-4 mb-4" name="day_submit">Get Started</a>
									<?php
								}
								else
								{
									?>
									<a href="#join-modal-month" data-toggle="modal" data-dismiss="modal" class="btn btn-primary d-block px-2 py-4 mb-4" name="month_submit">Get Started</a>
									<?php
								}
							}
							else
							{
								?>
								<a href="#login-modal" data-toggle="modal" data-dismiss="modal" class="btn btn-primary d-block px-2 py-4 mb-4" name="month_submit">Get Started</a>
								<?php
							}
						?>
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
                        <?php
							if(isset($_SESSION['id']))
							{
								if($member == "1")
								{
									?>
									<a href="#subscribed" data-toggle="modal" data-dismiss="modal" class="btn btn-primary d-block px-2 py-4 mb-4" name="day_submit">Get Started</a>
									<?php
								}
								else
								{
									?>
									<a href="#join-modal-year" data-toggle="modal" data-dismiss="modal" class="btn btn-primary d-block px-2 py-4 mb-4" name="year_submit">Get Started</a>
									<?php
								}
							}
							else
							{
								?>
								<a href="#login-modal" data-toggle="modal" data-dismiss="modal" class="btn btn-primary d-block px-2 py-4 mb-4" name="year_submit">Get Started</a>
								<?php
							}
						?>
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