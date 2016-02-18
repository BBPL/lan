<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
	<script src="assets/scripts/scripts.js"></script>
	<title>Admin Panel</title>
	<?php
		include_once '../functions/connect.php';
		include_once '../functions/functions.php';
	?>
</head>
<body>

	<?php
		if(admin_loggedin()){

			//include_once 'templates/navbar.php';
			include_once 'templates/sidebar.php';

			?>
			<a href="addteam.php">Tilføj et hold</a>
			<table>
				<thead>
					<th>Team navn</th>
					<th>team tag</th>
					<th>Captain Id</th>
					<th>Tournament</th>
					<th>Team ID</th>
				</thead>
				<?php
					include_once 'functions/teams.php';
				?>
			</table>

			<?php
		} else {
			header('location: login.php');
		}
	?>


</body>
</html>
