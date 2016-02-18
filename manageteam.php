<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HCØ LAN</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">

</head>
<body>
<?php
	include_once 'functions/connect.php';
	include_once 'functions/functions.php';
	include_once 'temps/header.php';
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
					<form>
						<input type="text" size="30" onkeyup="showResult(this.value)">
						<div id="livesearch"></div>
					</form>
					<?php
				}
			}
			?>
		</div>
	</div>
</div>

<script src="scripts/search.js" />

</body>
</html>
