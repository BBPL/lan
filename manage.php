<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HCØ LAN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	include_once 'functions/connect.php';
	include_once 'functions/functions.php';
	include_once 'temps/header.php';

?>

<div class="body">
	<div class="manage-teams">
		<div class="rediger">
			<?php
				if(!loggedin()){
					header('location: /lan');
				} else {
					$sql = "SELECT captain_id FROM teams WHERE captain_id = " . $_SESSION['userID'];
					$get_capid = mysqli_query($connect,$sql);
					$rows = mysqli_num_rows($get_capid);

					if($rows == 0){
						header('location: index.php');
					} else {
						include_once 'functions/manage.php';
					}

				}
			?>
		</div>
	</div>
</div>



</body>
</html>
