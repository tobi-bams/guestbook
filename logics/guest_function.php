<?php
	include 'core/init.php';

	session_start();

	$s_id = $_SESSION['id'];
	$select2 = $db->query("SELECT * FROM `user_information` WHERE `id` = '$s_id'");

	if(mysqli_num_rows($select2) > 0){
		while($rows2 = mysqli_fetch_array($select2)){
			$fname = $rows2['fname'];
			$lname = $rows2['lname'];
		}
	}

	$select3 = $db->query("SELECT * FROM `events` WHERE `user_id` = '$s_id'");

	if(isset($_POST['create_event'])){

		echo "<script>window.open('event_creation.php', '_self')</script>";
	}

	if(isset($_POST['register_event'])){
		echo "<script>window.open('register_for_event.php', '_blank')</script>";
	}
	if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		echo "<script>window.open('login.php', '_self')</script>";
	}

	$select6 = $db->query("SELECT * FROM `event_register_one` WHERE `user_id` = '$s_id' AND `event_id` != 0");
?>