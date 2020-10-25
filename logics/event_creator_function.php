<?php  
	include 'core/init.php';
	include 'logics/guest_function.php';
	session_start();
	

	if(isset($_POST['event_creator'])){

		$event = $_POST['event_name'];
		$event_date = $_POST['event_date'];

		$insert_event = $db->query("INSERT INTO `events` (`user_id`, `event_name`, `date_of_event`) VALUES ('$s_id', '$event', '$event_date')");

	}

	
?>