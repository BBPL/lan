
<div id="header">
	<div id="logo">
		<a href="/lan/admin"><img src="assets/img/logo.png" class="logo" align="middle">
</a>
	</div>
	<div class="nav">
		<?php


			if(admin_loggedin()){?>
				<div class="navbar">
					<a href="users.php" class="index-button btn-one">Bruger</a>
					<a href="teams.php" class="index-button btn-one">Hold</a>
					<a href="tournaments.php" class="index-button btn-one">Turneringer</a>
					<a href="tickets.php" class="index-button btn-one">Billetter</a>
					<a href="../functions/logout.php" class="index-button btn-one">Log ud</a>
				</div>
				
			<?php
			} else {
				
			}
		?>
	</div>
</div>

