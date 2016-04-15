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
		include_once 'functions/edituser.php';
	?>
</head>
<body>

	<?php
		if(admin_loggedin()){

			//include_once 'templates/navbar.php';
			include_once 'templates/header.php';

			?>
			<div class="edituser">
				<form method="post" id="edit_user">
					<table>
						<tr>
							<td class="e_info">Navn:</td>
							<td><input type="text" name="navn" placeholder="Navn" value="<?php echo $u_navn; ?>"></td>
						</tr>
						<tr>
							<td>Klasse:</td>
							<td><input type="text" name="klasse" placeholder="Klasse" value="<?php echo $u_klasse?>"></td>
						</tr>
						<tr>
							<td>User id:</td>
							<td><input type="text" name="user_id"placeholder="UserID" value="<?php echo $u_user_id; ?>"></td>
						</tr>
						<tr>
							<td>Bord Nr:</td>
							<td><input type="text" name="bordnr" placeholder="Bord Nr" value="<?php echo $u_bordnr; ?>"></td>
						</tr>
						<tr>
							<td>Billet Nr:</td>
							<td><input type="text" name="billetnr" placeholder="Billet Nr" value="<?php echo $u_billetnr; ?>"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="text" name="password" placeholder="Password" value="<?php echo $u_password; ?>"></td>
						</tr>
						<tr>
							<td>Mail:</td>
							<td><input type="text" name="mail" placeholder="Mail" value="<?php echo $u_mail; ?>"></td>
						</tr>
						<tr>
							<td>Type:</td>
							<td><input type="text" name="type" placeholder="Type" value="<?php echo $u_type; ?>"></td>
						</tr>

					</table>
					<input type="hidden" name="<?php echo $user_id?>">
					<input type="submit" name="submit_edit_user">
					
					
				</form>
			</div>
			

			<?php
		} else {
			header('location: login.php');
		}?>

</body>
</html>