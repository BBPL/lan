<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HCØ LAN</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="scripts/search.js"></script>
</head>
<body>
<?php
	include_once 'functions/connect.php';
	include_once 'functions/functions.php';
	include_once 'temps/header.php';
	include_once 'search.php';

	$_SESSION['teamid'] = $_GET['teamid'];
	//if(!is_int($_GET['teamid'])){header('location: rediger');}
	$sql = "SELECT * FROM teams WHERE team_id = '" . $_GET['teamid'] . "'";
	$get_team = mysqli_query($connect,$sql);
	$rows = mysqli_num_rows($get_team);
?>
<?php if ($rows == 1): ?>


<div class="body">
	<div class="container manage-teams">
		<div class="redigerteam">
			<?php if(!loggedin()){
				header('location: /lan');
			} else {
				$team_id = $_GET['teamid'];
				$sql = "SELECT captain_id FROM teams WHERE (captain_id = ". $_SESSION['userID'] .") AND (team_id = ".$team_id.")";
				$get_capid = mysqli_query($connect,$sql);
				$rows = mysqli_num_rows($get_capid);

				if($rows == 0){
					header('location: /lan');
				} else {
					$sql = "SELECT spillere FROM teams WHERE team_id = ".$team_id;
					$get_info = mysqli_query($connect,$sql);
					$spillere = mysqli_fetch_assoc($get_info)['spillere'];

					echo $spillere . "/5"
					?>
					<table>
						<tr>
							<th>Name</th>
							<th>Bordnr</th>
							<th>Remove</th>
						</tr>
						<?php include_once 'functions/manageteam.php'; ?>
					</table>
					<?php


					if ($spillere < 5): ?>
						<form action="manageteam.php?tid=<?php $tid ?>" name="searchform" method="post">
								<input type="text" name="search" placholder="Search" autocomplete="off" onkeyup="searchq();"/>
						</form>
						<div id="results"></div>
					<?php else:?>

						You have a full team

					<?php endif; ?>



					<?php

				}
			}
			?>
		</div>
	</div>
</div>
<?php endif; ?>


</body>
</html>
