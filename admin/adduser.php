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
      include_once 'functions/adduser.php';
  	?>
  </head>
  <body>
    <?php if (admin_loggedin()): ?>
      <form method="post">
        Navn:<input type="text" name="navn" placeholder="Navn"><br>
        Klasse:<input type="text" name="klasse" placeholder="Klasse"><br>
        Bordnr: <input type="text" name="bordnr" placeholder="bordnr"><br>
        Billetnr: <input type="text" name="billetnr" placeholder="Billetnr"><br>
        Password: <input type="password" name="password" placeholder="Password"><br>
        Mail: <input type="text" name="mail" placeholder="Mail"><br>
        Type: <input type="text" name="type" placeholder="Type"><br>
        <input type="submit" name="submit_admin_add_user" value="Tilføj">
      </form>
    <?php endif; ?>
  </body>
</html>
