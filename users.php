<?php
    include 'controllers/authController.php';
    include 'controllers/usersController.php';
    include 'controllers/trainerController.php';
    include 'controllers/pricingController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stone Is For Everyone</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--AOS-->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<!--owl carousel-->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/others.css" rel="stylesheet">
    <link href="css/trainers.css" rel="stylesheet">
    <link href="css/easyTable.css"  rel="stylesheet">
</head>
<body onload="userfun()">
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
                            if($_SESSION['email'] === "narendramanipal2@gmail.com" || $_SESSION['email'] === "anishsjathan@gmail.com")
                            {
                    ?>
                    <li class="nav-item active"><a href="users.php" class="nav-link">Admin</a></li>
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
                    <h1 class="mb-md-3 mt-md-5 pt-md-5 bread" data-aos="fade-up" data-aos-delay="100">Welcome</h1>
                    <p class="breadcrumbs text-center"><span class="mr-2"><a href="index.php">Home</a></span> <span>users</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row padding" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 heading-section text-center mt-5">
                <span>users</span>
            </div>
            <div class="col-12 heading-section text-center">
                <h1>User details</h1>
            </div>
        </div>
        <div class="row padding table-select" data-aos="fade-up" data-aos-delay="250" id="tableContent">
            <div class="container">
                <ul class="nav nav-pills">
                    <li><a class="nav-item nav-link active" data-toggle="pill" href="#users" onclick="userfun()">Users</a></li>
                    <li><a class="nav-item nav-link" data-toggle="pill" href="#trainers" onclick="trainerfun()">Trainers</a></li>
                    <li><a class="nav-item nav-link" data-toggle="pill" href="#members" onclick="memberfun()">Members</a></li>
                </ul>
            </div>
        </div>

        <!--Content display-->
        <div class="tab-content" data-aos="fade-up" data-aos-delay="400">
            <div  class="row padding tab-pane fade show active" id="users">
                <div class="container">
                    <div class="col-12 panel panel-default">
                        <div class="table100 ver6 panel-body">
                            <table id="user-table">
                                <thead class="text-center" data-vertable="ver6">
                                    <tr class="row100 head">
                                        <th class="column100 column1">Id</th>
                                        <th class="column100 column2">Name</th>
                                        <th class="column100 column3">Email</th>
                                        <th class="column100 column4" hidden></th>
                                        <th class="column100 column5"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php 
                                        $cnt = 1;
                                        while($user_content = $user_result->fetch_assoc()) 
                                        { 
                                            if($user_content['email'] != "narendramanipal2@gmail.com" and $user_content['email'] != "anishsjathan@gmail.com")
                                            {
                                            ?>
                                                <tr class="row100">
                                                    <form action="" method="post">
                                                        <td class="column100 column1"><?php echo $cnt++; ?></td>
                                                        <td class="column100 column2"><?php echo ucwords($user_content['firstname']." ".$user_content['lastname']); ?></td>
                                                        <td class="column100 column3"><?php echo $user_content['email']; ?></td>
                                                        <td class="column100 column4" hidden><input type="hidden" name="userToDelete" value="<?php echo $user_content['id']; ?>"></td>
                                                        <td class="column100 column5"><input class="btn btn-secondary" type="submit" name="user-delete" value="delete"></td>
                                                    </form>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="row padding tab-pane fade" id="trainers">
                <div class="container">
                    <div class="col-12 panel panel-default">
                        <div class="table100 ver6 panel-body">
                            <table id="trainer-table">
                                <thead class="text-center" data-vertable="ver6">
                                    <tr class="row100 head">
                                        <th class="column100 column1">Id</th>
                                        <th class="column100 column2">Name</th>
                                        <th class="column100 column3">Designation</th>
                                        <th class="column100 column4" hidden></th>
                                        <th class="column100 column5"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php 
                                        $cnt = 1;
                                        while($trainer_content = $trainer_fetch_result->fetch_assoc()) 
                                        { ?>
                                        <tr class="row100">
                                            <form action="" method="post">
                                                <td class="column100 column1"><?php echo $cnt++; ?></td>
                                                <td class="column100 column2"><?php echo ucwords($trainer_content['fname']." ".$trainer_content['lname']); ?></td>
                                                <td class="column100 column3"><?php echo ucwords($trainer_content['designation']); ?></td>
                                                <td class="column100 column4" hidden><input type="hidden" name="trainerToDelete" value="<?php echo $trainer_content['id']; ?>"></td>
                                                <td class="column100 column5"><input class="btn btn-secondary" type="submit" name="trainer-delete" value="delete"></td>
                                            </form>
                                        </tr>
                                    <?php
                                        }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="row padding tab-pane fade" id="members">
                <div class="container">
                    <div class="col-12 panel panel-default">
                        <div class="table100 ver6 panel-body">
                            <table id="member-table">
                                <thead class="text-center" data-vertable="ver6">
                                    <tr class="row100 head">
                                        <th class="column100 column1">Id</th>
                                        <th class="column100 column2">Firstname</th>
                                        <th class="column100 column3">Email</th>
                                        <th class="column100 column4">From</th>
                                        <th class="column100 column5">To</th>
                                        <th class="column100 column6" hidden></th>
                                        <th class="column100 column7"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php 
                                        $cnt=1;
                                        while($member_content = $allMember_result->fetch_assoc()) 
                                        { ?>
                                        <tr class="row100">
                                            <form action="" method="post">
                                                <td class="column100 column1"><?php echo $cnt++; ?></td>
                                                <td class="column100 column2"><?php echo $member_content['firstname']." ".$member_content['lastname']; ?></td>
                                                <td class="column100 column3"><?php echo $member_content['email']; ?></td>
                                                <td class="column100 column4"><?php echo $member_content['start']; ?></td>
                                                <td class="column100 column5"><?php echo $member_content['end']; ?></td>
                                                <td class="column100 column6" hidden><input type="hidden" name="memberToDelete" value="<?php echo $member_content['id']; ?>"></td>
                                                <td class="column100 column7"><input class="btn btn-secondary" type="submit" name="member-delete" value="delete"></td>
                                            </form>
                                        </tr>
                                    <?php
                                        }?>
                                </tbody>
                            </table>
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
							<li><span> <img class="icon mr-3" src="img/icon/envelope.png" alt=""></span><span class="text">cse.parallax@gmail.com</span></li>
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
    <script src="js/easyTable.js"></script>
    <script>
        function userfun()
        {
            $("#user-table").easyTable();
        }
        function trainerfun()
        {
            $("#trainer-table").easyTable();
        }
        function memberfun()
        {
            $("#member-table").easyTable();
        }
    </script>
</body>
</html>