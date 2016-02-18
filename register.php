<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HCØ LAN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

	include_once('functions/connect.php');
	include_once('functions/functions.php');

?>
<?php
	include_once('temps/header.php');
?>
<div class="body">
	<?php
	if(loggedin()){
		header('location: /lan');
	} else { ?>
		<div class="container">
			<div class="register">
				<h1>Tilmeld dig her</h1>
				<form method="post" id="register" name="registerForm" action="functions/register.php">
					<div>
						<input type="text" name="navn" placeholder="Navn" required/>
					</div>
					<div>
						<input type="text" name="mail" placeholder="Mail" required/>
					</div>
					<div>
						<input type="text" name="billetnr" placeholder="Billetnummer" required/>
					</div>
					<div>
						Klasse: <select name="klasse" required>
							<option value="1a">1a</option>
							<option value="1b">1b</option>
							<option value="1c">1c</option>
							<option value="1d">1d</option>
							<option value="1e">1e</option>
							<option value="1f">1f</option>
							<option value="2a">2a</option>
							<option value="2b">2b</option>
							<option value="2c">2c</option>
							<option value="2d">2d</option>
							<option value="2e">2e</option>
							<option value="2f">2f</option>
							<option value="3a">3a</option>
							<option value="3b">3b</option>
							<option value="3c">3c</option>
							<option value="3d">3d</option>
							<option value="3e">3e</option>
							<option value="3f">3f</option>
						</select>
					</div>
					<div>
						Bord nr.: <select name="bordnr" required>
							<?php for($i = 1; $i <= 60; $i++){
								?>
								<option value="<?php echo $i ?>"><?php  echo $i ?></option>
								<?php
							}
							?>	
						</select>
					</div>
					<div>
						<input type="password" name="password" placeholder="Password"required/>
					</div>
					<div>
						<input type="submit" name="submit_register" value="Tilmeld dig">
					</div>

				</form>
			</div>
		</div>
	<?php }
?>
</div>





</body>
</html>