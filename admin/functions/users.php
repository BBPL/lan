<?php

	//Admin show all users and edit
	$sql = "SELECT * FROM users";
	$get_users = mysqli_query($connect, $sql);

	while($q = mysqli_fetch_assoc($get_users)){
		$navn = $q['navn'];
		$klasse = $q['klasse'];
		$user_id = $q['user_id'];
		$bordnr = $q['bordnr'];
		$billetnr = $q['billetnr'];
		$password = $q['password'];
		$mail = $q['mail'];
		$type = $q['type'];
		?>

		<tr>
			<td><?php echo $navn; ?></td>
			<td><?php echo $klasse; ?></td>
			<td><?php echo $user_id; ?></td>
			<td><?php echo $bordnr; ?></td>
			<td><?php echo $billetnr; ?></td>
			<td><?php echo $password; ?></td>
			<td><?php echo $mail; ?></td>
			<td><?php echo $type; ?></td>
			<td><a href="edituser.php?uid=<?php echo $user_id; ?>">Edit</a></td>
			<td><a href="functions/removeuser.php?uid=<?php echo $user_id; ?>">Fjern</a></td>
		</tr>




		<?php
	}
?>
