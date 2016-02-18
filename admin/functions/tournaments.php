<?php

	$sql = "SELECT * FROM tournaments";
	$get_tournaments = mysqli_query($connect, $sql);

	while ($q = mysqli_fetch_assoc($get_tournaments)) {
		$tourn_name = $q['navn'];
		$players = $q['spillere'];
		$status = $q['open'];
		$description = $q['description'];
		$img = $q['img'];
		$tournament_id = $q['tournament_id'];

		?>
		<tr>
			<td><?php echo $tourn_name?></td>
			<td><?php echo $players?></td>
			<td>
				<?php
				if($status == '1'){
					echo "Open";
				} elseif ($status == '0'){
					echo "Closed";
				}
				?>
			</td>
			<td><?php echo $description; ?></td>
			<td><?php echo $img	 ?></td>
			<td><a href="edittournaments.php?tid=<?php echo $tournament_id ?>">Edit</a></td>
		</tr>


		<?php
	}

?>
