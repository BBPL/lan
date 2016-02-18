<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
	<script src="assets/scripts/scripts.js"></script>
	<title>Rediger users</title>
	<?php
		include_once '../functions/connect.php';
		include_once '../functions/functions.php';
		include_once 'functions/editteams.php';
	?>
</head>
<body>

	<?php
		if(admin_loggedin()){

			//include_once 'templates/navbar.php';
			include_once 'templates/sidebar.php';

			?>
			<div class="container">
				<form method="post" id="edit_team">
					Navn:<input type="text" name="navn" placeholder="Navn" value="<?php echo $t_navn; ?>"><br/>
					Tag:<input type="text" name="tag" placeholder="Klasse" value="<?php echo $t_tag?>"><br/>
					Captain id:<input type="text" name="user_id"placeholder="captain_id" value="<?php echo $captain_id; ?>"><br/>
					Tournamnt ID:<input type="text" name="tournament_id" placeholder="Bord Nr" value="<?php echo $tournament_id; ?>"><br/>
					Team ID:<input type="text" name="team_id" placeholder="Billet Nr" value="<?php echo $team_id; ?>"><br/>
					<input type="submit" name="submit_edit_team">
				</form>
			</div>
			

			<?php
		} else {
			header('location: login.php');
		}?>

</body>
</html>