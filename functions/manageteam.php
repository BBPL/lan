<?php

	$team_id = $_GET['teamid'];

	$sql = "SELECT * FROM teams WHERE team_id = '".$team_id."'";
	$get_team = mysqli_query($connect, $sql);
	$team = mysqli_fetch_assoc($get_team);

	$sql = "SELECT *, users.navn
					FROM
						players
					INNER JOIN
						users
					ON
						players.user_id = users.user_id
					WHERE
						team_id = '" . $team_id . "'";

	$get_players = mysqli_query($connect, $sql);
	while($q = mysqli_fetch_assoc($get_players)){
		$p_navn = $q['navn'];
		$p_bordnr = $q['bordnr'];
		?>
		<tr>
			<td>
				<?php echo $p_navn ?>
			</td>
			<td>
				<?php echo $p_bordnr ?>
			</td>
			<td>
				<a href="functions/removeFromTeam.php">Remove</a>
			</td>
		</tr>
		<?php
	}


?>
