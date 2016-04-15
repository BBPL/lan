<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
			include_once 'templates/header.php';

			?>
			<div class="users-box">
				<div>
					<a href="adduser.php" class="index-button btn-one">Tilføj bruger</a>
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
			</div>

			<?php
		} else {
			header('location: login.php');
		}
	?>


</body>
</html>
