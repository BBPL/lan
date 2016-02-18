<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>


	<form method="post" id="admin-login" name="adminForm" action="functions/login.php">
		<table>
			<tr>
				<td><input type="text" name="mail" placeholder="Mail"></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="password"></td>
			</tr>
		</table>
		<input type="submit" name="submit_admin_login" value="Login"/>
		
	</form>


</body>
</html>