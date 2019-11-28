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
    <link href="css/blog.css" rel="stylesheet">

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
                    <li class="nav-item active"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="car_slides" class="carousel slide" data-ride="carousel" data-interval="7000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg_3.jpg">
                <div class="overlay"></div>
                <div class="carousel-caption mt-5 pt-md-5">
                    <h1 class="mb-md-3 mt-md-5 pt-md-5 bread" data-aos="fade-up" data-aos-delay="100">blog</h1>
                    <p class="breadcrumbs text-center"><span class="mr-2"><a href="index.php">Home</a></span> <span>blog</span></p>
                </div>
            </div>
        </div>
    </div>

    <!--blog-->
    <div class="container blog">
        <div class="col-md-12 col-sm-12 text-center mt-5">
			<h5>Here, you'll discover what's new in the fitness world, including the latest views on 
			nutrition and sports supplements as well as little known tips and secrets that will help fast 
			track your success.</h5>
		</div>
        <div class="row">
			<div class="col-md-6 col-sm-12">
			    <img src="img/1blog.jpg" class="w-100 mb-5 mr-5" data-aos="fade-left" data-aos-delay="100"></img>
			</div>
			<div class="col-md-6 mt-5" data-aos="fade-left" data-aos-delay="100">
				<h1>Feeling Scared of the Gym? You’re Not Alone</h1>
				<h6 class="mt-3">There’s no getting around the fact that for some of us the gym can 
				feel like an intimidating place when you’re first starting out. Our latest research
				shows that 50% of non-gym members say they find the idea of going to the gym scary, 
				with one in five saying they would find it very scary.  
				But don't worry, because we have found the best ways of overcoming this.</h6>
			</div>
		</div>
        <div class="row">
			<div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-delay="100">
				<h6 class="mt-5">To learn more about the concept of ‘gym fear’ we asked people about other 
				fears they have, to see how they compare.  So, how scary is the gym? Well some are so spooked 
				by gym that one in four people said they would rather choose
				to have an injection with a needle, or be alone in a room with a spider than go to the gym!<h6>
			</div>
			<div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-delay="100">
				<img src="img/2blog.gif" class="w-100 mb-5 mr-5">
			</div>
		</div>
        <div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="img/4blog.jpg" class="w-100" data-aos="fade-left" data-aos-delay="100">
			</div>
			<div class="col-md-6 col-sm-12 mt-5" data-aos="fade-left" data-aos-delay="100">
				
				<h6>30% of millennials said they’d rather give up their phone for a day 
				instead of going to the gym alone, and 25% of females said they’d rather 
				go on a rollercoaster than head to the gym.<h6>
			</div>
		</div>
        <div class="row">
			<div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-delay="100">
				<h4 class="mt-5">WHY DOES THE GYM MAKE US SO ANXIOUS?<h4>
				<h6>Exercising provides many benefits, but other things that are
				good for us, like eating healthily or 
				brushing our teeth, doesn’t seem to fill many of us with the same dread as working out does.</h6>
				<h6 class="mt-2">Dr. Margee Kerr teaches and researches everything ‘fear’ related at the 
				University of Pittsburgh. She explains the reason why the gym is different to 
				other healthy activity in our minds is because “Going to the gym is a social experience, 
				meaning it carries all the potential gains that come with socializing, but also all the
				fears and anxieties too.</h6>
				<h6 class="mt-2">In terms of understanding and overcoming your anxiety, it’s better to 
				compare going to the gym with other social situations. Dr. Kerr says going to the gym 
				can tap into the same insecurities as starting a new job, a new school or giving a 
				presentation to peers. She says “We, as humans, are constantly comparing ourselves 
				to our peers, analysing how we’re similar, better, or worse. We also compare ourselves
				to our own expectations of what we think we should be capable of, our internal representation
				of our ‘best’ self.</h6>
				<h6 class="mt-2">Where we might be able to hide some of our vulnerabilities in the workplace
				or school, our weaknesses feel on full display in the gym, inciting intense feelings of 
				vulnerability, of self-doubt, of fear.”</h6>
				<h6 class="mt-2">Roxy, 37, shares what makes her the most nervous about visiting the gym: “The aspect 
				of being on my own in a gym isn’t an issue for me, as my nerves come more from the busyness.
				This really brings my feelings of low self-esteem to the fore, especially in situations such 
				as the changing rooms, where I would find myself comparing my body to the other women. Put 
				simply, the busier the gym is, the more intimidated I am.”</h6>
			</div>
			<div class="col-md-6 col-sm-12"  data-aos="fade-right" data-aos-delay="100">
				<img src="img/3blog.png" class="w-100 mt-5">
			</div>
		</div>
    </div>

    <!--info-->
	<div class="container my-5">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
				<div class="card">
					<div>
						<a href="pricing.php"><img src="img/gym1.png" class="card-img model-img "></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
				<div class="card">
					<div>
						<a href="trainers.php"><img src="img/gym2.png" class="card-img model-img"></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
				<div class="card">
					<div>
						<a href="index.php#service"><img src="img/gym3.png" class="card-img model-img"></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
				<div class="card">
					<div>
						<a href="index.php#testimonials"><img src="img/gym4.png" class="card-img model-img"></a>
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

    <!--<nav class="social float-right mt-3 fixed-top">
		<ul>
			<li><a href="#ref"><i class="fab fa-facebook social-icon"></i><b class="ml-2">facebook</b></a></li>							
			<li><a href="#ref"><i class="fab fa-twitter social-icon"></i><b class="ml-2">Twitter</b></a></li>
			<li><a href="#ref"><i class="fab fa-instagram social-icon"></i><b class="ml-2">Instagram</b></a></li>
			<li><a href="#ref"><i class="fab fa-reddit social-icon"></i><b class="ml-2">Reddit</b></a></li>
	    </ul>
	</nav>-->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/animate.js"></script>
</body>
</html>