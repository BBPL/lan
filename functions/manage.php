<?php 
	include_once 'connect.php';
	include_once 'functions.php';
	$sql = "SELECT captain_id FROM teams WHERE captain_id = " . $_SESSION['userID'];
	$get_capid = mysqli_query($connect,$sql);
	$rows = mysqli_num_rows($get_capid);

	$capid = mysqli_fetch_assoc($get_capid)['captain_id'];

?>
	<table>
		<tr>
			<th>Navn</th>
			<th>Tag</th>
			<th>Spillere</th>
			<th>Manage</th>
			<th>Fjern</th>
		</tr>
<?php
		$sql = "SELECT * FROM teams WHERE captain_id = " . $capid;
		$get_teaminfo = mysqli_query($connect,$sql);

		while($q = mysqli_fetch_assoc($get_teaminfo)){
			$team_name = $q['navn'];
			$team_tag = $q['tag'];
			$team_id = $q['team_id'];
			$team_spillere = $q['spillere'];

			?>
				<tr>
					<td><?php echo $team_name;?></td>
					<td><?php echo $team_tag?></td>
					<td><?php echo $team_spillere;?>/5</td>
					<td><a href="manageteam.php?teamid=<?php echo $team_id; ?>" class="link-manage">Redigér</a></td>
					<td><a href="functions/removeteam.php?teamid=<?php echo $team_id; ?>" class="link-remove">Fjern</a></td>
				</tr>
			<?php
					

		}
		?>
	
	</table>
<?php



?>