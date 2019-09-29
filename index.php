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
				<a class="navbar-brand" href="#"><h1>Stone Gym</h1></a>
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
							<button class="btn btn-primary" data-target="#login-modal" data-toggle="modal">Login</button>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- login popup -->
		<div class="modal fade" id="login-modal">
			<div class="modal-dialog modal-dialog-centered modal-sm">
				<div class="modal-content">
					<div class="row">
						<div class="col-12">
							<div class="modal-header">
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

	</div>
</body>
</html>