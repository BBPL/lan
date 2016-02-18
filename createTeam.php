<!DOCTYPE html>
<html>
<head>
	<title>Opret dit hold</title>
</head>
<body>

<?php
	include_once 'functions/connect.php';
	include_once 'functions/functions.php';

	include_once 'temps/header.php';

?>

	<form method="post" action="functions/createTeam.php">
		<input type="text" name="team_name" placeholder="Team Name" required/>
		<input type="text" name="team_tag" placeholder="Team Tag" required/>
		<input type="hidden" name="tournament_id" value="<?php echo $_GET['tid']?>" >
		<input type="submit" name="submit_newteam" value="Add this team"/>
	</form>


</body>
</html>