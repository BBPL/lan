<?php 
	//Admin Login

	include_once '../../functions/connect.php';
	include_once '../../functions/functions.php';

	if(isset($_POST['submit_admin_login'])){
		$mail = $_POST['mail'];
		$password = $_POST['password'];

		$check_login = "SELECT user_id, type FROM users WHERE (mail = '" . $mail . "') AND (password = '" . $password . "')";
		$get_user_info = mysqli_query($connect,$check_login);
		$count = mysqli_num_rows($get_user_info);

		if($count == 1){
			$run = mysqli_fetch_assoc($get_user_info);

			$user_type = $run['type'];

			if($user_type == "a"){
				$user_id = $run['user_id'];

				$_SESSION['adminID'] = $user_id;

				header('location: ../index.php');
			} else {
				echo "<p>You are not allowed to view this site<p>";
				header('location: ../../index.php');
			}

		} else {
			header('location: ../../index.php');
		}


	}


?>