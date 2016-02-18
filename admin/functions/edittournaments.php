<?php

	$tournament_id = $_GET['tid'];

	$sql = "SELECT * FROM tournaments WHERE tournament_id = '" . $tournament_id . "'";
	$get_userdata = mysqli_query($connect, $sql);

	$num_rows = mysqli_num_rows($get_userdata);

	if($num_rows == 1){
		while ($q = mysqli_fetch_assoc($get_userdata)) {
			$navn = $q['navn'];
			$tournament_id = $q['tournament_id'];
			$open = $q['open'];
			$description = $q['description'];
			$img = $q['img'];
		}
	}

	if(isset($_POST['submit_edit_tournament'])){
		$navn = $_POST['navn'];
		$tournament_id = $_POST['tournament_id'];
		$open = $_POST['open'];
		$description = $_POST['description'];
		$img = $_POST['img'];

		$sql = "UPDATE tournaments
				SET navn = '" .$navn. "',
					tournament_id='" .$tournament_id. "',
					open ='" .$open. "',
					description='" .$description. "',
					img='" .$img. "'
				WHERE
					tournament_id = '".$tournament_id."'";

		$update_user = mysqli_query($connect, $sql);

		header('location: tournaments.php');

	}


?>
