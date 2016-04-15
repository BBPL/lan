<?php
	include_once 'connect.php';

		session_start();

		function loggedin(){
			if(isset($_SESSION['userID'])){
				return true;
				echo "gooddie";
		} else {
				return false;
				echo 'falsie';
			}
		}

		if (loggedin()) { //Hvis kunden er logget ind
			$my_id = $_SESSION['userID'];
			$user_query = mysqli_query($connect, "SELECT navn FROM users WHERE user_id ='$my_id' ");
			$run_userInfo = mysqli_fetch_assoc($user_query);

			$navn = $run_userInfo['navn'];


		}

		function admin_loggedin(){
			if(isset($_SESSION['adminID'])){
				return true;
			} else {
				return false;
			}
		}

		function display_teams(){
			global $connect;

			$sql = "SELECT * FROM teams WHERE tournament_id = " . $_GET['id'];
			$get_allteams = mysqli_query($connect,$sql);
			?>
			<table>
				<tr>
					<th>Holdets	Navn</th>
					<th>Holdets Tag</th>
					<th>Antal spillere</th>
				</tr>
					
			<?php
			while($q = mysqli_fetch_assoc($get_allteams)){
				$team_id = $q['team_id'];
				$team_name = $q['navn'];
				$team_tag = $q['tag'];
				$team_spillere = $q['spillere'];
				$team_captain = $q['captain_id'];

				?>

				
				<tr>
					<td><?php echo $team_name; ?></td>
					<td><?php echo $team_tag;  ?></td>
					<td><?php echo $team_spillere;  ?>/5</td>
				</tr>
						
			


				<?php


				////////////////////////////////////////
				$sql = "SELECT
						  team_id,
						  users.navn,
						  users.bordnr
						FROM
						  players
						INNER JOIN
						  users ON users.user_id = players.user_id
						WHERE
						  team_id = " . $team_id;

				$get_teammembers = mysqli_query($connect,$sql);
				while($r = mysqli_fetch_assoc($get_teammembers)){
					$player_navn = $r['navn'];
					$player_table = $r['bordnr'];

				}

			}
			?>
			</table>

			<?php



		}


		function check_captain(){
			global $connect;

			$sql = "SELECT captain_id FROM teams WHERE captain_id = " . $_SESSION['userID'];
			$get_capid = mysqli_query($connect,$sql);
			$rows = mysqli_num_rows($get_capid);

			$capid = mysqli_fetch_assoc($get_capid)['captain_id'];

			if($rows >= 1){
				?>
					<a href="rediger" class="index-button btn-one">Redigér dine hold</a>
				<?php
			}


		}

		function invite(){

		}

		function check_user_avai(){
			global $connect;

			if(loggedin()){
				$sql = "SELECT captain_id FROM teams WHERE captain_id = " . $_SESSION['userID'];
				$get_capid = mysqli_query($connect,$sql);
				$rows = mysqli_num_rows($get_capid);

				$capid = mysqli_fetch_assoc($get_capid)['captain_id'];

				if($rows >= 1){
					return true;
				}
			} else {
				return false;
			}


		}



?>
