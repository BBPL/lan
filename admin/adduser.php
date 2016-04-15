<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  	<script src="assets/scripts/scripts.js"></script>
  	<title>Admin Panel</title>
  	<?php
  		include_once '../functions/connect.php';
  		include_once '../functions/functions.php';
      include_once 'functions/adduser.php';
  	?>
  </head>
  <body>
    <?php if (admin_loggedin()): ?>
      <?php
        include_once 'templates/header.php';
      ?>
      <div class="container">
        <form method="post">
          <table>
            <tr>
              <td class="e_info">Navn:</td>
              <td><input type="text" name="navn" placeholder="Navn"></td>
            </tr>
            <tr>
              <td>Klasse:</td>
              <td><input type="text" name="klasse" placeholder="Klasse"></td>
            </tr>
            <tr>
              <td>Bordnr:</td>
              <td><input type="text" name="bordnr" placeholder="bordnr"></td>
            </tr>
            <tr>
              <td>Billetnr:</td>
              <td><input type="text" name="billetnr" placeholder="Billetnr"></td>
            </tr>
            <tr>
              <td>Password:</td>
              <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
              <td>Mail:</td>
              <td><input type="text" name="mail" placeholder="Mail"></td>
            </tr>
            <tr>
              <td>Type:</td>
              <td><input type="text" name="type" placeholder="Type"></td>
            </tr>
          </table>
        <input type="submit" name="submit_admin_add_user" value="Tilføj">
      </form>
      </div>
    <?php endif; ?>
  </body>
</html>
