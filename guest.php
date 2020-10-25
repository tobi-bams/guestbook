<?php
	include 'logics/guest_function.php';
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
	   					<div id="navbarContent" class="collapse navbar-collapse">
							<div class="navbar-nav ">
								
							 <form class="form-inline" method="post">
	   							  <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-3" type="submit" name="create_event">Create Event</button>
	   							 <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit" name="register_event">View Events</button>
	   							  
	  						</form>
	   					</div>
						</div>
						<div id="navbarContent" class="collapse navbar-collapse justify-content-end">
							<div class="navbar-nav ">
								
							 <form class="form-inline" method="post">
	   							  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout">Logout</button>
	  						</form>
	   					</div>
						</div>

					</div>
				</div>
			</nav>
	</div>
	<div class="container">
		<div class="row">
			<div class="col my-lg-4 text-center">
				<?php echo "<h1>".$fname." ".$lname." Welcome to Guest-Book</h1>";?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card mb-lg-5">
					<div class="card-body">
						<h3 style="text-align: center;" class="card-title">Events that you Created</h3>
						<div class="card-text">
							<table class="table table-bordered">
								<thead class="thead-dark">
									<th>Date of Creation</th>
									<th>Name of Event</th>
									<th>Date of Events</th>
									<th>People who registered for your event</th>
								</thead>
								<?php while($rows2 = mysqli_fetch_assoc($select3)):
									$date_of_event_creation = $rows2['date_of_event_creation'];
									$event_name = $rows2['event_name'];
									$date_of_event = $rows2['date_of_event'];
									$event_id_5 = $rows2['id'];
								?>	
									<tbody>
										<td><?php echo $date_of_event_creation;?></td>
										<td><?php echo $event_name;?></td>
										<td><?php echo $date_of_event;?></td>
										<td><a href="registered_users.php?event_id=<?=$event_id_5;?>"><button type="submit" class="btn btn-success">Registered Users</button></a></td>
										
									</tbody>
								<?php endwhile;?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h3 style="text-align: center;" class="card-title">Events you registered</h3>
						<div class="card-text">
							<form method="post">
								<table class="table table-bordered">
									<thead class="thead-dark">
										<th scope="col">Event Name</th>
										<th scope="col">Event Host</th>
										<th scope="col">Event Date</th>
										<th scope="col">Date you registered</th>
									</thead>
									<?php while($rows6 = mysqli_fetch_array($select6)):
											$present_user = $rows6['user_id'];
											$event_id3 = $rows6['event_id'];
											$date_of_register = $rows6['date_of_register'];

											$select7 = $db->query("SELECT * FROM `events` WHERE `id` = '$event_id3'");
											while($rows7 = mysqli_fetch_array($select7)){
												$event_host_id = $rows7['user_id'];
												$event_name7 = $rows7['event_name'];
												$event_date7 = $rows7['date_of_event'];

												$select8 = $db->query("SELECT * FROM `user_information` WHERE `id` = '$event_host_id'");
												while($rows8 = mysqli_fetch_array($select8)){
													$event_host_fname = $rows8['fname'];
													$event_host_lname = $rows8['lname'];
												}
											}
										?>
										<tbody>
											<td><?php echo $event_name7;?></td>
											<td><?php echo $event_host_fname." ".$event_host_lname;?></td>
											<td><?php echo $event_date7;?></td>
											<td><?php echo $date_of_register;?></td>
										</tbody>
									<?php endwhile;?>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="jquery-3.1.1.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>		
</body>
</html>