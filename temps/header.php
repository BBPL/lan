
<div id="header">
	<div id="logo">
		<a href="/lan"><img src="assets/logo.png" class="logo" align="middle">
</a>
	</div>
	<div class="nav">
		<?php


			if(isset($_SESSION['userID'])){?>
				<div class="navbar">
					<a href="turneringer" class="index-button btn-one">Turneringer</a>
					<?php
						check_captain();
					?>
					<a href="functions/logout.php" class="index-button btn-one">Log ud</a>
				</div>
				
			<?php
			} else {
				?>
				<div class="navbar">
					<a href="login" class="index-button btn-one">Log ind</a>
					<a href="registrering" class="index-button btn-one">Tilmeld dig</a>
					<a href="turneringer" class="index-button btn-one">Turneringer</a>
				</div>
			<?php
			}
		?>
	</div>
</div>

