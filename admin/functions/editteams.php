<?php 

	$team_id = $_GET['tid'];

	$sql = "SELECT * FROM teams WHERE team_id = '" . $team_id . "'";
	$get_userdata = mysqli_query($connect, $sql);

	$num_rows = mysqli_num_rows($get_userdata);

	if($num_rows == 1){
		while ($q = mysqli_fetch_assoc($get_userdata)) {
			$t_navn = $q['navn'];
			$t_tag = $q['tag'];
			$captain_id = $q['captain_id'];
			$tournament_id = $q['tournament_id'];
			$team_id = $q['team_id'];
		}
	}

	if(isset($_POST['submit_edit_team'])){
		$navn = $_POST['navn'];
		$tag = $_POST['tag'];
		$capid = $_POST['captain_id'];
		$tournament_id = $_POST['tournament_id'];
		$team_id = $_POST['team_id'];

		$sql = "UPDATE teams 
				SET navn = '" .$navn. "', 
					tag='" .$tag. "', 
					captain_id ='" .$capid. "', 
					tournament_id='" .$tournament_id. "', 
					team_id='" .$team_id. "'
				WHERE 
					team_id = '".$team_id."'";
		$update_user = mysqli_query($connect, $sql);

		header('location: teams.php');

	}


?>