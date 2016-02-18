<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HCØ LAN</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="scripts/search.js"></script>
</head>
<body>
<?php
	include_once 'functions/connect.php';
	include_once 'functions/functions.php';
	include_once 'temps/header.php';
	include_once 'search.php';
?>

<div class="body">
	<div class="container">
		<div class="redigerteam">
			<?php if(!loggedin()){
				header('location: /lan');
			} else {
				$sql = "SELECT captain_id FROM teams WHERE captain_id = " . $_SESSION['userID'];
				$get_capid = mysqli_query($connect,$sql);
				$rows = mysqli_num_rows($get_capid);

				if($rows == 0){
					header('location: /lan');
				} else {
					?>
					<table>
						<tr>
							<th>Name</th>
							<th>Bordnr</th>
							<th>Remove</th>
						</tr>
						<?php include_once 'functions/manageteam.php'; ?>
					</table>
					<form action="manageteam.php" name="searchform" method="post">
							<input type="text" name="search" placholder="Search" autocomplete="off" onkeyup="searchq();"/>
					</form>
					<div id="results">

					</div>


					<?php

				}
			}
			?>
		</div>
	</div>
</div>



</body>
</html>
