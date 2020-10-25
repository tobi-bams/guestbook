<?php
	include 'logics/register.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="bg-dark">
			<nav class="container">
				<div class="row">
					<div class="col navbar navbar-expand-lg navbar-dark">
						<a class="navbar-brand" href="index.html">Guest-Book</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
	       					<span class="navbar-toggler-icon"></span>
	   					</button>
	   					<div id="navbarContent" class="collapse navbar-collapse justify-content-end">
							<div class="navbar-nav ">
								
							 <form class="form-inline" method="post">
	   							 
	  						</form>
	   					</div>
						</div>

					</div>
				</div>
			</nav>
	</div>
	<div class="container ">
		<div class="card my-lg-4">
			<div class="card-body">
				<h2 class="card-title text-center">Registration Form</h2>
				<hr>
				<form action="" method="post">
					<div class="form-group">
						<label>First Name:</label>
					</div>
					<div class="form-group">
						<input type="text" name="fname" class="form-control">
					</div>
					<div class="form-group">
						<label>Last Name:</label>
						<input type="text" name="lname" class="form-control">
					</div>
					<div class="form-group">
						<label>Other Name:</label>
						<input type="text" name="oname" class="form-control">
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Gender:</label>
						</div>
						<div class="form-check col">
							<input type="radio" name="gender" class="form-check-input" value="Male">
							<label class="form-check-label">Male</label>
						</div>
						<div class="form-check col">
							<input type="radio" name="gender" class="form-check-input" value="Female">
							<label class="form-check-label">Female</label>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-lg-1">
							<label>State:</label>
						</div>
						<div class="form-group col-lg-11">
							<select class="form-control" name="state">
								<option value="Lagos">Lagos</option>
								<option value="Oyo">Oyo</option>
								<option value="Imo">Imo</option>
								<option value="Benin">Benin</option>
								<option value="Osun">Osun</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-lg-1">
							<label>Email:</label>
						</div>
						<div class="form-group col-lg-11">
							<input type="email" name="email" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-lg-1">
							<label>Username:</label>
						</div>
						<div class="form-group col-lg-11">
							<input type="text" name="uname" class="form-control" id="username" placeholder="Choose a username of your Choice!!">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-lg-1">
							<label>Password:</label>
						</div>
						<div class="form-group col-lg-11">
							<input type="password" name="password" class="form-control" id="password" placeholder="Choose a Password!!">
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-1">
							
						</div>
						<div class="col-lg-11">
							<button class="btn btn-success" name="submit" type="submit">Register Now</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="jquery-3.1.1.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>