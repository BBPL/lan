<?php

  include_once 'connect.php';
  include_once 'functions.php';

  $uid = $_GET['uid'];
  $tid = $_GET['tid'];

  $sql = "SELECT spillere FROM teams WHERE team_id = ".$tid;
  $get_info = mysqli_query($connect,$sql);
  $spillere = mysqli_fetch_assoc($get_info)['spillere'];

  if($spillere < 5){

    if(isset($_GET['uid']) && isset($_GET['tid'])){

      $sql = "SELECT * FROM players WHERE (user_id = '$uid') AND (team_id = '$tid')";
      $already_in_team = mysqli_query($connect,$sql);
      $rows = mysqli_num_rows($already_in_team);

      if($rows >= 1){
        header("location: ../manageteam.php?teamid=$tid");
      } else {
        $sql = "INSERT INTO players (team_id,user_id)
                VALUES ('$tid','$uid')";
        mysqli_query($connect,$sql);
        $sql = "UPDATE
                  teams
                SET
                  spillere = spillere+1
                WHERE
                  team_id = '".$tid."'";
        mysqli_query($connect,$sql);
        header("location: ../manageteam.php?teamid=$tid");
      }
    }

  } else {
    header("../manageteam.php?teamid=$tid");
  }
?>
