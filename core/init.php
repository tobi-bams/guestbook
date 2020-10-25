<?php  
	error_reporting('E_ERROR');
	$db = mysqli_connect('localhost', 'root', '','guestbook');
	if(mysqli_connect_errno()){
		echo 'Database connection failed with the following errors'.mysqli_connect_error();
		die();
	}
?>