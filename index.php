<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stone Gym</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/login-box.css" rel="stylesheet">
	<script src="js/func.js"></script>
</head>
<body data-spy="scroll" data-target="#navbarResposive">

	<div id="home">

		<nav class="navbar navbar-expand-md navbar-dark bg-dark justify-content-center fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><h1>Stone</h1></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResposive">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResposive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#service">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
						<li class="nav-item">
							<button class="btn btn-primary" data-target="#join-modal" data-toggle="modal">Join Us</button>
						</li>
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
									<input class="form-control" type="phone" name="phoneno" value="" placeholder="Mobile Number" maxlength="10" required>
									<input type="email" class="form-control" name="reg-email" value="" placeholder="Email" required>
									<input type="text" class="form-control" name="address" value="" placeholder="Address" required>
									<div class="row">
										<div class="col-xs 6">
											<input type="text" class="form-control" name="city" value="" placeholder="City" required>
										</div>
										<div class="col-xs 6">
											<input type="number" class="form-control" name="pincode" value="" placeholder="Postal Code" minlength="6" required>
										</div>
									</div>
									<button class="btn login-primary" type="submit" name="submit" value="Sign Up">Sign Up</button>
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
										<input class="form-control" type="email" placeholder="Email or username" name="username" value="" maxlength="50" required><br>
										<input class="form-control" id="showpassword" type="password" placeholder="password" name="password" value="" minlength="8" maxlength="15" required><br>
										<input type="checkbox" onclick="showPassword()"><label>Show Password</label><br>
										<button class="btn login-primary" type="submit" name="submit" value="Login">Login</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- image slider-->
		<div id="slides" class="carousel slide" data-ride="carousel" data-interval="12000">
			<ol class="carousel-indicators">
				<li data-target="#slides" data-slide-to="0" class="active"></li>
				<li data-target="#slides" data-slide-to="1"></li>
				<li data-target="#slides" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img\img2.png">
					<div class="carousel-caption">
						<h2>FEEL</h2><h1>GOOD</h1><h3>BREATH</h3>
						<a href="#service" class="btn btn-outline-light btn-lg">Services</a>
						<a href="#about" class="btn btn-primary btn-lg">About Us</a>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img\img5.png">
				</div>
				<div class="carousel-item">
					<img src="img\img4.png">
				</div>

				<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#slides" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<!-- services -->
		<div class="container-fluid padding">
			<div class="row welcome text-center">
				<div class="col-12">
					<h1 class="display-4">Services</h1>
				</div>
				<hr>
			</div>
		</div>

	</div>
</body>
</html>
