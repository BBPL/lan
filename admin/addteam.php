<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
  	<script src="assets/scripts/scripts.js"></script>
  	<title>Admin Panel</title>
  	<?php
  		include_once '../functions/connect.php';
  		include_once '../functions/functions.php';
      include_once 'functions/addteam.php';
  	?>
  </head>
  <body>
    <?php if (admin_loggedin()): ?>
      <form method="post">
        Team Navn: <input type="text" name="navn" placeholder="Team Navn"><br>
        Tag: <input type="text" name="tag" placeholder="TAG"><br>
        Captain_id: <input type="text" name="captain_id" placeholder="Captain_id"><br>
        Tournament: <input type="text" name="tournament_id" placeholder="Tournament ID"><br>
        <input type="submit" name="submit_admin_add_team" value="Tiløfj Holdet">
      </form>
    <?php endif; ?>
  </body>
</html>
