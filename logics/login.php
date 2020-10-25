<?php
	include 'core/init.php';
	session_start();

	
	if(isset($_POST['login'])){
		$uname = $_POST['uname'];
		$pword = $_POST['password'];


/** PHP Code for Selection from the Database **/

$select1 = $db->query("SELECT * FROM `user_information` WHERE `username` = '$uname' AND `password` = '$pword'");
		if(mysqli_num_rows($select1) > 0){
			while($rows1 = mysqli_fetch_array($select1)){
				if($rows1['username'] == "$uname" && $rows1['password'] == "$pword"){
					$_SESSION['id'] = $rows1['id'];
					echo "<script>window.open('guest.php','_self')</script>";
				}
				else {
					
				}
			}
		}
	}

?>


