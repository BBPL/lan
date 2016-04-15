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

	<div class="create-teams">
		<div class="create">
			<form method="post" action="functions/createTeam.php">
				<div>
					<input type="text" name="team_name" placeholder="Team Name" required/>
				</div>
				
				<div>
					<input type="text" name="team_tag" placeholder="Team Tag" required/>
				</div>
				
				<div>
					<input type="hidden" name="tournament_id" value="<?php echo $_GET['tid']?>" >
				</div>
				
				<div>
					<input type="submit" name="submit_newteam" value="Add this team" />
				</div>
			</form>
		</div>
	</div>




</body>
</html>