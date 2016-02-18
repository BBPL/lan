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
		include_once 'functions/edittournaments.php';
	?>
</head>
<body>

	<?php
		if(admin_loggedin()){

			//include_once 'templates/navbar.php';
			include_once 'templates/sidebar.php';

			?>
			<div class="container">
				<form method="post" id="edit_tournament">
					Navn:<input type="text" name="navn" placeholder="Navn" value="<?php echo $navn; ?>"><br/>
					Tournament ID:<input type="text" name="tournament_id" placeholder="Klasse" value="<?php echo $tournament_id?>"><br/>
					Status:<input type="text" name="open" placeholder="open" value="<?php echo $open; ?>"><br/>
					Description:<input type="text" name="description" placeholder="Description" value="<?php echo $description; ?>"><br/>
					Img:<input type="text" name="img" placeholder="Img" value="<?php echo $img; ?>"><br/>
					<input type="submit" name="submit_edit_tournament">
				</form>
			</div>


			<?php
		} else {
			header('location: login.php');
		}?>

</body>
</html>
