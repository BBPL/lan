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
					INNER JOIN
						teams
					ON
						players.team_id = teams.team_id
					WHERE
						players.team_id = '" . $team_id . "'";

	$get_players = mysqli_query($connect, $sql);



	while($q = mysqli_fetch_assoc($get_players)){
		$p_navn = $q['navn'];
		$p_bordnr = $q['bordnr'];
		$p_uid = $q['user_id'];

		$sql = "SELECT captain_id FROM teams WHERE (captain_id = ". $p_uid .") AND (team_id = ".$team_id.")";
		$get_capid = mysqli_query($connect,$sql);
		$rows = mysqli_num_rows($get_capid);

		?>
		<tr>
			<td>
				<?php echo $p_navn ?>
			</td>
			<td>
				<?php echo $p_bordnr ?>
			</td>
			<td>
				<?php if ($rows >= 1): ?>
					Captain
				<?php else: ?>
					<a href="functions/removeFromTeam.php?tid=<?php echo $team_id; ?>&uid=<?php echo $p_uid; ?>">Remove</a>
				<?php endif; ?>

			</td>
		</tr>
		<?php
	}



?>
