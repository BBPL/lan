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
	include_once('temps/header.php');
?>

<?php
	if(loggedin()){
		header('location: /lan');
	}
?>
<div class="body">
	<div class="container">
		<div class="login">
			<h1>Log Ind</h1>

			<form method="post" id="login" name="loginForm" action="functions/login.php">

				<div>
					<input type="text" name="mail" placeholder="Mail" class="input" required/>
				</div>
				<div>
					<input type="password" class="input" name="password" placeholder="Password"required/>
				</div>

				<div>
					<input type="submit" name="submit_login" value="Log Ind"/>
				</div>
				
				<a href="#">Glemt kode?</a> eller <a href="registrering">Registrer her</a>
			</form>
		</div>
	</div>
</div>


</body>
</html> 