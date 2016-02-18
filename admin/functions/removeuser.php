<?php
  include_once '../../functions/connect.php';
  include_once '../../functions/functions.php';

  $user_id = $_GET['uid'];

  $sql = "DELETE FROM users WHERE user_id = " . $user_id;
  $delete_user = mysqli_query($connect, $sql);
  header('location: ../users.php');
?>
