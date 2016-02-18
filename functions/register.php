<?php

	include_once('connect.php');

	if(isset($_POST['submit_register'])){
		global $connect;

		$navn = $_POST['navn'];
		$billetnr = $_POST['billetnr'];
		//$avatar = $_POST['avatar'];
		$klasse = $_POST['klasse'];
		$bordnr = $_POST['bordnr'];
		$password = $_POST['password'];
		$mail = $_POST['mail'];

		$sql = "SELECT * FROM users";
		$get_users = mysqli_query($connect, $sql);

		$check_billetnr = mysqli_query($connect, "SELECT billetnr, status FROM billetnr WHERE billetnr = " . $billetnr);
		while($r = mysqli_fetch_assoc($check_billetnr)){
			if($r['billetnr'] == $billetnr){
				echo $r['billetnr']."<br>";
				echo $billetnr;
				if($r['status'] == 'open'){
					echo "faggot";
				$sql = "INSERT INTO users (navn, klasse, bordnr, billetnr, password, mail, type) VALUES('$navn','$klasse','$bordnr','$billetnr','$password', '$mail','u')";
				echo $sql;
				mysqli_query($connect,$sql);
				//Luk for det gamle billetnr
				$sql = "UPDATE billetnr SET status = 'closed' WHERE billetnr = " . $r['billetnr'];
				$upadte_billetnr= mysqli_query($connect,$sql);
				mysqli_fetch_assoc($upadte_billetnr);


				$sql = "SELECT userID FROM users WHERE mail = " . $mail;
				$search_userid = mysqli_query($connect,$sql);
				$get_userid = mysqli_fetch_assoc($search_userid);

				session_start();
				$_SESSION['userID'] = $get_userid['user_id'];
				echo $_SESSION['userID'];
				header('location: ../index.php');

			} elseif($r['status'] == 'closed'){
				header('location: ../register.php');
			}

		}



	}
}

?>
