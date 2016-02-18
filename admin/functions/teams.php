<?php 

	$sql = "SELECT * FROM teams";
	$get_teams = mysqli_query($connect, $sql);

	while($q = mysqli_fetch_assoc($get_teams)){
		$team_name = $q['navn'];
		$team_tag = $q['tag'];
		$captain_id = $q['captain_id']; //Upgrade to captain name
		$tournament_id = $q['tournament_id'];
		$team_id = $q['team_id'];

		?>
		<tr>
			<td><?php echo $team_name; ?></td>
			<td><?php echo $team_tag; ?></td>
			<td><?php echo $captain_id; ?></td>
			<td><?php if($tournament_id == '1'){
				echo "CSGO";
				} elseif ($tournament_id == '2') {
					echo "LoL";
				} ?></td>
			<td><?php echo $team_id; ?></td>
			<td><a href="editteams.php?tid=<?php echo $team_id; ?>">Edit</a></td>
		</tr>

		<?php
	}



?>