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
			<th>Manage</th>
		</tr>
<?php
		$sql = "SELECT * FROM teams WHERE captain_id = " . $capid;
		$get_teaminfo = mysqli_query($connect,$sql);

		while($q = mysqli_fetch_assoc($get_teaminfo)){
			$team_name = $q['navn'];
			$team_tag = $q['tag'];
			$team_id = $q['team_id']

			?>
				<tr>
					<th><?php echo $team_name;?></th>
					<th><?php echo $team_tag?></th>
					<th><a href="manageteam.php?teamid=<?php echo $team_id; ?>">Manage</a></th>
				</tr>
			<?php
					

		}
		?>
	
	</table>
<?php



?>