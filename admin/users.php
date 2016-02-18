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
			<div>
				<a href="adduser.php">Tilføj bruger</a>
			</div>
			<table>
				<thead>
					<th>Navn</th>
					<th>Klasse</th>
					<th>User Id</th>
					<th>Bordnr</th>
					<th>Billetnr</th>
					<th>Password</th>
					<th>Mail</th>
					<th>Type</th>
					<th>Edit</th>
					<th>Fjern</th>
				</thead>
				<?php
					include_once 'functions/users.php';
				?>
			</table>

			<?php
		} else {
			header('location: login.php');
		}
	?>


</body>
</html>
