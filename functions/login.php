<?php
	//User login
	include_once 'connect.php';
	include_once 'functions.php';

	if(isset($_POST['submit_login'])){

		$mail = $_POST['mail'];
		$password = $_POST['password'];

		$check_login = "SELECT user_id FROM users WHERE (mail = '" . $mail . "') AND (password = '" . $password . "')";
		$get_userid = mysqli_query($connect, $check_login);
		$count = mysqli_num_rows($get_userid);

		if($count == 1){

			$run_userid = mysqli_fetch_assoc($get_userid);

			$userid = $run_userid['user_id'];

			$_SESSION['userID'] = $userid;
			echo $_SESSION['userID'] = $userid;

			header('location: ../');



		} else {
			echo "<p>Mail or password is incorrect</p>";
		}


	}


?>