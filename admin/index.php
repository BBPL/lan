<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Admin Panel</title>
	
</head>
<body>
	<?php
		include_once '../functions/connect.php';
		include_once '../functions/functions.php';
	?>
	<?php
		if(admin_loggedin()){

			include_once 'templates/header.php';

			
		} else {
			header('location: login.php');
		}
	?>


</body>
</html>
