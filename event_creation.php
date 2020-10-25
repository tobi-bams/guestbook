<?php
	include 'logics/event_creator_function.php';
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
	   							  <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit" name="go_back">Go Back</button>
	  						</form>
	   					</div>
						</div>

					</div>
				</div>
			</nav>
	</div>
	<div class="container">
		<div class="card my-lg-5">
			<div class="card-body">
				<?php if($insert_event):?>
					<h1><?php echo "You Have Successfully Created an Event"?></h1>
				<?php endif?>
				<h2 class="card-title text-center">Create Event</h2>
				<hr>
				<br>
				<div class="card-text">
				<form method="post">
					<div class="form-row">
						<div class="form-group col-lg-2">
							<label>Event Name:</label>
						</div>
						<div class="form-group col-lg-10">
							<input type="text" name="event_name" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-lg-2">
							<label>Event Date:</label>
						</div>
						<div class="form-group col-lg-10">
							<input type="date" name="event_date" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-lg-2"></div>
						<div class="form-group col-lg-10">
							<button type="submit" class="btn btn-success" name="event_creator">Create</button>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	if(isset($_POST['go_back'])){
		echo "<script>window.open('guest.php', '_self')</script>";
	}
?>