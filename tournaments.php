<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HCØ LAN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
	include_once 'functions/connect.php';
	include_once 'functions/functions.php';
	include_once 'temps/header.php';
?>
<div class="body">
	<div class="container">
		<?php

			$sql = "SELECT *
					FROM tournaments
					WHERE open = '1'
					ORDER BY tournament_id";

			$get_tournaments = mysqli_query($connect, $sql);
			
			while($r = mysqli_fetch_assoc($get_tournaments)){

				$navn = $r['navn'];
				$spillere = $r['spillere'];
				$t_id = $r['tournament_id'];
				$desc = $r['description'];
				$open = $r['open'];
				$img = $r['img'];

				?>

				<a href="<?php if($r['tournament_id'] == '1'){ 
						echo 'csgo';
					} else if($r['tournament_id'] == '2'){
						echo "lol";
					}?>" style="float:left;">
					<div>
						<img src="assets/<?php echo $img;?>" class="t_logo">
						<p class="t_name"><?php echo $navn?></p>
					</div>
				</a>


			<?php
			}

		?>
	</div>
</div>








</body>
</html>