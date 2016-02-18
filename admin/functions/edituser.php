<?php 

	$user_id = $_GET['uid'];

	$sql = "SELECT * FROM users WHERE user_id = '" . $user_id . "'";
	$get_userdata = mysqli_query($connect, $sql);

	$num_rows = mysqli_num_rows($get_userdata);

	if($num_rows == 1){
		while ($q = mysqli_fetch_assoc($get_userdata)) {
			$u_navn = $q['navn'];
			$u_klasse = $q['klasse'];
			$u_user_id = $q['user_id'];
			$u_bordnr = $q['bordnr'];
			$u_billetnr = $q['billetnr'];
			$u_password = $q['password'];
			$u_mail = $q['mail'];
			$u_type = $q['type'];
		}
	}

	if(isset($_POST['submit_edit_user'])){
		$navn = $_POST['navn'];
		$klasse = $_POST['klasse'];
		$user_id = $_POST['user_id'];
		$bordnr = $_POST['bordnr'];
		$billetnr = $_POST['billetnr'];
		$password = $_POST['password'];
		$mail = $_POST['mail'];
		$type = $_POST['type'];	

		$sql = "UPDATE users 
				SET navn = '" .$navn. "', 
					klasse='" .$klasse. "', 
					user_id ='" .$user_id. "', 
					bordnr='" .$bordnr. "', 
					billetnr='" .$billetnr. "', 
					password ='" .$password. "', 
					mail='" .$mail. "', 
					type='" .$type. "' 
				WHERE 
					user_id = '".$user_id."'";
		$update_user = mysqli_query($connect, $sql);

		header('location: users.php');

	}


?>