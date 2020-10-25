<?php
	include 'core/init.php';
	
	
	session_start();
	$s_id = $_SESSION['id'];

	$select4 = $db->query("SELECT * FROM `events` ");
	
	$event_id1 = $rows4['id'];

	
?>