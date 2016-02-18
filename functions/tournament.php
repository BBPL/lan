<?php
	include_once 'connect.php';
	include_once 'functions.php';


	if(isset($_GET['id'])){
		$t_id = $_GET['id'];
		$sql = "SELECT * FROM tournaments WHERE tournament_id = '" . $t_id ."'";
		$get_tournament_info = mysqli_query($connect,$sql);
		$tournament_rows = mysqli_num_rows($get_tournament_info);

		if($tournament_rows == 1){
			while($q = mysqli_fetch_assoc($get_tournament_info)){
				$t_navn = $q['navn'];
				?>
				<h1><?php echo $t_navn;?></h1>
			<?php

			display_teams();

			if (loggedin()) {
				if(check_user_avai() == true){
					?><a href="rediger" class="index-button btn-one">Rediger dit hold</a>
					<?php
				} else {
					?>
					<a href="createTeam.php?tid=<?php echo $t_id; ?>">Opret et hold</a>
					<?php

				}
				
			}

			}
		}
	} else {
		echo "nope!";
	}



	
?>