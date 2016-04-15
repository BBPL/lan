<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<?php
	include_once '../functions/functions.php';
	include_once '../functions/connect.php';
	include_once 'templates/header.php';
?>
	<div class="login-box">
		<form method="post" id="admin-login" name="adminForm" action="functions/login.php">
		<table>
			<tr>
				<td><input type="text" name="mail" placeholder="Mail"></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
		</table>
		<input type="submit" name="submit_admin_login" value="Login"/>
		
	</form>
	</div>
	


</body>
</html>