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
		include_once 'functions/edituser.php';
	?>
</head>
<body>

	<?php
		if(admin_loggedin()){

			//include_once 'templates/navbar.php';
			include_once 'templates/sidebar.php';

			?>
			<div class="container">
				<form method="post" id="edit_user">
					Navn:<input type="text" name="navn" placeholder="Navn" value="<?php echo $u_navn; ?>"><br/>
					Klasse:<input type="text" name="klasse" placeholder="Klasse" value="<?php echo $u_klasse?>"><br/>
					user id:<input type="text" name="user_id"placeholder="UserID" value="<?php echo $u_user_id; ?>"><br/>
					Bord Nr:<input type="text" name="bordnr" placeholder="Bord Nr" value="<?php echo $u_bordnr; ?>"><br/>
					Billet Nr:<input type="text" name="billetnr" placeholder="Billet Nr" value="<?php echo $u_billetnr; ?>"><br/>
					Password:<input type="text" name="password" placeholder="Password" value="<?php echo $u_password; ?>"><br/>
					Mail:<input type="text" name="mail" placeholder="Mail" value="<?php echo $u_mail; ?>"><br/>
					Type:<input type="text" name="type" placeholder="Type" value="<?php echo $u_type; ?>"><br/>
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