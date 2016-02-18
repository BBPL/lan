<?php

	include_once 'functions/connect.php';
	include_once 'functions/functions.php';

	$text = "";
	$searchq = "";

	if (isset($_POST['searchVal'])) {
		$searchq = $_POST['searchVal'];

		$sql = "SELECT navn, user_id FROM users WHERE navn LIKE '%$searchq%'";
		$get_data = mysqli_query($connect,$sql);

		$count = mysqli_num_rows($get_data);

		if($count == 0){
			$output = "There is no result";
		} else {
			while($q = mysqli_fetch_assoc($get_data)){
				$navn = $q['navn'];
				$uid = $q['user_id'];

				$text .= "<div>" . $navn ;
				$text .= "<a href='functions/addToTeam.php?uid=".$uid."'>Tilføj</a></div>";

			}
		}
	}

	//print("$text");
	echo $text;
	$output = "";


?>
