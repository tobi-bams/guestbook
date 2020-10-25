<?php
	include 'core/init.php';
	session_start();

	$s_id = $_SESSION['id'];
	$id1 = $_GET['event_id'];

	$select_5 = $db->query("SELECT * FROM `event_register_one` WHERE `event_id` = '$id1'");

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
				<h1 class="card-title text-center">Individuals that Registered for your Event</h1>
				<div class="card-text">
					<table class="table">
						<thead>
							<th scope="col">Name</th>
							<th scope="col">Registration Date</th>
						</thead>
						<?php while($rows_5 = mysqli_fetch_array($select_5)):
								$date_of_register6 = $rows_5['date_of_register'];
								$user_that_registered = $rows_5['user_id'];

								$select_6 = $db->query("SELECT * FROM `user_information` WHERE `id` = '$user_that_registered'");
								while($rows_6 = mysqli_fetch_array($select_6)){
									$registered_user_fname = $rows_6['fname'];
									$registered_user_lname = $rows_6['lname'];
								}
							?>
							<tbody>
								<td><?php echo $registered_user_fname." ".$registered_user_lname;?></td>
								<td><?php echo $date_of_register6;?></td>
							</tbody>
						<?php endwhile;?>
					</table>
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