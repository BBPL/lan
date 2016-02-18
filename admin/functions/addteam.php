<?php


  if (isset($_POST['submit_admin_add_team'])) {
    $navn = $_POST['navn'];
    $tag = $_POST['tag'];
    $captain_id = $_POST['captain_id'];
    $tournament_id = $_POST['tournament_id'];

    $sql = "INSERT INTO teams (navn,tag,captain_id,tournament_id)
            VALUES ('$navn','$tag','$captain_id','$tournament_id')";
    echo $sql;
    $add_team = mysqli_query($connect,$sql);
    header('location: teams.php');
  }


?>
