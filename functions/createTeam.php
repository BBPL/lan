<?php 

	include_once 'connect.php';
	include_once 'functions.php';

	if(!loggedin()){
		header('location: login.php');
	} else {
		$team_name = $_POST['team_name'];
		$team_tag = $_POST['team_tag'];
		$user_id = $_SESSION['userID'];
		$t_id = $_POST['tournament_id'];

		//check if user already has one team in a tournament
		$sql = "SELECT captain_id, user_id";
		//check if already exists
		$sql = "SELECT navn, tag FROM teams WHERE tournament_id = " . $t_id;
		$check_t = mysqli_query($connect,$sql);
		$rows = mysqli_num_rows($check_t);

		if($rows >= 1){
			echo "Team or tag is used";
		} else {
			$sql = "SELECT captain_id FROM teams WHERE (tournament_id = ' . $t_id . ') AND ( cpatain_id = " . $user_id .")";
			$check_cid = mysqli_query($connect,$sql);
			$num_cid = mysqli_num_rows($check_cid);

			if($num_cid >= 1){
				echo "You already have one team in this tournament";
			} else {
				$sql = "INSERT INTO teams VALUES ('$team_name','$team_tag','$user_id','$t_id',' ') ";
				mysqli_query($connect,$sql);

				$sql = "SELECT team_id FROM teams WHERE captain_id = " . $user_id;
				$get_teamid = mysqli_query($connect,$sql);
				$team_id = mysqli_fetch_assoc($get_teamid)['team_id'];

				$sql = "INSERT INTO players VALUES ('$team_id', '$user_id', ' ')";
				mysqli_query($connect,$sql);
				header('location: ../tournament.php?id=' . $t_id);
			}


			

		}


		

	}
?>