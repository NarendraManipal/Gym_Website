<?php
    include 'controllers/authController.php';
    include 'controllers/trainerController.php';
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
    <link href="css/login-box.css" rel="stylesheet">
    <link href="css/trainers.css" rel="stylesheet">

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
                    <li class="nav-item active"><a href="trainers.php" class="nav-link">Trainers</a></li>
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
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
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
                    <h1 class="mb-md-3 mt-md-5 pt-md-5 bread" data-aos="fade-up" data-aos-delay="100">OUR COACHES</h1>
                    <p class="breadcrumbs text-center"><span class="mr-2"><a href="index.php">Home</a></span> <span>COACHES</span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Add trainer modal -->
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
								<form action="" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-xs-6">
											<input class="form-control" type="text" name="trainer-fname" value="" placeholder="Firstname" required>
										</div>
										<div class="col-xs-6">
											<input class="form-control" type="text" name="trainer-lname" value="" placeholder="Lastname" required>
										</div>
									</div>
                                    <input type="text" name="designation" class="form-control" placeholder="Designation" required>
									<input id="file" type="file" name="image" value="" placeholder="Select an Image" required>
									<label  class="my-4" for="file">Choose a Photo</label><br>
                                    <textarea class="form-control" name="discription" cols="40" rows="4" placeholder="Description..." required></textarea><br>
									<button class="btn login-primary mt-3" type="submit" name="upload-image" value="Submit">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


    <!--Coaches-->

    <div class="container-fluid">
        <div class="row padding mx-md-5 mt-5">
            <div class="col-12 heading-section text-center">
                <span>shape your body</span>
            </div>
            <div class="col-12 heading-section text-center">
                <h1>Our Coaches</h1>
            </div>
        </div>
        <div class="row padding mx-md-5 mt-md-5" id="content">
            <?php
                while($trainer_content = $trainer_fetch_result->fetch_assoc())
                {
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-3" id='img_div'>
                        <div class="card coach">
                            <img class="card-img-top" src=<?php echo "upload_images/".$trainer_content['image'];?>>
                            <div class="img-overlay"></div>
                            <div class="card-body heading-section">
                                <span><?php echo $trainer_content['designation'];?></span>
                                <h2 class="heading"><p><?php echo $trainer_content['fname']." ".$trainer_content['lname'];?></p></h2>
                                <p class="card-text" data-aos="fade-up" data-aos-delay="400"><?php echo $trainer_content['discription'];?></p>
                                <div class="container-fluid padding">
                                        <div class="row text-center padding">
                                            <div class="col-12 social padding">
                                                <a target="_blank" href="#" data-aos="fade-up" data-aos-delay="500"><i class="fab fa-instagram"></i></a>
                                                <a target="_blank" href="#" data-aos="fade-up" data-aos-delay="600"><i class="fab fa-facebook"></i></a>
                                                <a target="_blank" href="#" data-aos="fade-up" data-aos-delay="700"><i class="fab fa-twitter"></i></a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
            <?php
                if(isset($_SESSION['id']))
                {
                    if($_SESSION['admin'] === true)
                    {
                        ?>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="card coach admin-login">
                                <a data-target="#join-modal" data-toggle="modal"><img class="card-img model-img" src="img/icon/plus.png"></a>
                            </div>
                        </div>
                        <?php
                    }
                }
            ?>
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