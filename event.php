<?php
include 'core/init.php';
$id = $_GET['event_id'];

	session_start();
	$s_id = $_SESSION['id'];
										
											
		$insert4 = $db->query("INSERT INTO `event_register_one` (`event_id`, `user_id`) VALUES ('$id', '$s_id')");
		
			if(isset($_POST['go_back'])){
				echo "<script>window.open('guest.php', '_self')</script>";
			}		


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
	<div class="container my-lg-5">
		<div class="row">
			<div class="col">
				<?php if($insert4):
					$select_10 = $db->query("SELECT * FROM `events` WHERE `id` = '$id'");
						while($rows_10 = mysqli_fetch_array($select_10)){

							$event_name_10 = $rows_10['event_name'];
				
			}
					?>
						<h1 class="text-center"><?php echo "You Have Successfully Registered For ".$event_name_10." Event.";?></h1>
				<?php endif?>
			</div>
		</div>
	</div>
</body>
</html>

		

