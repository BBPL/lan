<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  	<title>Admin Panel</title>
  	<?php
  		include_once '../functions/connect.php';
  		include_once '../functions/functions.php';
      include_once 'functions/addteam.php';
  	?>
  </head>
  <body> 
    <?php if (admin_loggedin()):  ?>
      <?php
        include_once 'templates/header.php';
      ?>
      <div class="container">
        <form method="post">
        <table>
          <tr>
            <td class="e_info">Team Navn:</td>
            <td><input type="text" name="navn" placeholder="Team Navn"></td>
          </tr>
          <tr>
            <td>Tag:</td>
            <td><input type="text" name="tag" placeholder="TAG"></td>
          </tr>
          <tr>
            <td>Captain_id:</td>
            <td><input type="text" name="captain_id" placeholder="Captain_id"></td>
          </tr>
          <tr>
            <td>Tournament:</td>
            <td><input type="text" name="tournament_id" placeholder="Tournament ID"></td>
          </tr>
        </table>
        <input type="submit" name="submit_admin_add_team" value="Tiløfj Holdet">
      </form>
      </div>
    <?php endif; ?>
  </body>
</html>
