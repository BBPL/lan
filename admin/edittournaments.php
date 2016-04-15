<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="assets/scripts/scripts.js"></script>
	<title>Rediger users</title>
	<?php
		include_once '../functions/connect.php';
		include_once '../functions/functions.php';
		include_once 'functions/edittournaments.php';
	?>
</head>
<body>

	<?php
		if(admin_loggedin()){

			//include_once 'templates/navbar.php';
			include_once 'templates/header.php';

			?>
			<div class="container">
				<form method="post" id="edit_tournament">
					<table>
						<tr>
							<td class="e_info">Navn:</td>
							<td><input type="text" name="navn" placeholder="Navn" value="<?php echo $navn; ?>"></td>
						</tr>
						<tr>
							<td>Tournament ID:</td>
							<td><input type="text" name="tournament_id" placeholder="Klasse" value="<?php echo $tournament_id?>"></td>
						</tr>
						<tr>
							<td>Status:</td>
							<td><input type="text" name="open" placeholder="open" value="<?php echo $open; ?>"></td>
						</tr>
						<tr>
							<td>Description:</td>
							<td><input type="text" name="description" placeholder="Description" value="<?php echo $description; ?>"></td>
						</tr>
						<tr>
							<td>Img:</td>
							<td><input type="text" name="img" placeholder="Img" value="<?php echo $img; ?>"></td>
						</tr>
					</table>
					<input type="submit" name="submit_edit_tournament">
				</form>
			</div>


			<?php
		} else {
			header('location: login.php');
		}?>

</body>
</html>
