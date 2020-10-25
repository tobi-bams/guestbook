<?php
	include 'logics/register_event_function.php';
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
				<h2 class="card-title text-center">List of events you can Attend</h2>
				<div class="card-text">
					<form method="post">
						<table class="table">
							<thead>
								<th scope="col">Event Name</th>
								<th scope="col">Event Date</th>
								<th scope="col">Event Host</th>
								<th scope="col">Attend</th>
							</thead>
							<?php while($rows4 = mysqli_fetch_array($select4)):
								$event_name1 = $rows4['event_name'];
								$event_date1 = $rows4['date_of_event'];
								$event_creator = $rows4['user_id'];
								$event_id1 = $rows4['id'];

								$select5 = $db->query("SELECT * FROM `user_information` WHERE `id`= '$event_creator'");
									while($rows5 = mysqli_fetch_array($select5)){
										$event_creator_name1 = $rows5['fname'];
										$event_creator_name2 = $rows5['lname'];
									}
											?>
								
								<tbody>
									<td><?php echo $event_name1;?></td>
									<td><?php echo $event_date1;?></td>
									<td><?php echo $event_creator_name1. " ".$event_creator_name2;?></td>
									<td><button type="submit" class="btn btn-success" name="attend"><a href="event.php?even_id=<?= $event_id1 ;?>" style="color: #fff;">Attend</a></button></td>
								</tbody>
							<?php endwhile?>
						</table>
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