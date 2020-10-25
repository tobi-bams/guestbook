<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css_design/style.css">
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
	   							  <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit" name="sign_in">Sign In</button>
	   							 <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sign_out">Sign Up</button>
	  						</form>
	   					</div>
						</div>

					</div>
				</div>
			</nav>
	</div>
	<div class=" background text-center">
		<h1>Welcome to Guest-Book</h1>
		<h3>A little About this Website</h3>
		<h4>In this Website you will be required to Register to the Page then you will have access to creating an event and also viewing other events that has been created by other Users you will also have access to attend events created by other users and view the users that have registered for your event. </h4>
	</div>
<script src="jquery-3.1.1.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
	if(isset($_POST['sign_in'])){
		echo "<script>window.open('login.php', '_self')</script>";
	}
	if(isset($_POST['sign_out'])){
		echo "<script>window.open('registration.php', '_self')</script>";
	}
?>