<?php
  include_once 'connect.php';
  include_once 'functions.php';

  $tid = $_GET['tid'];
  $uid = $_GET['uid'];

  $sql = "DELETE FROM players WHERE (user_id = '$uid') AND (team_id='$tid')";
  echo $sql;
  mysqli_query($connect,$sql);

  $sql = "UPDATE teams SET spillere = spillere-1 WHERE team_id='$tid'";
  mysqli_query($connect,$sql);
  header("location: ../manageteam.php?teamid=$tid");

?>
