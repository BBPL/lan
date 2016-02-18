<?php


  if (isset($_POST['submit_admin_add_user'])) {
    $navn = $_POST['navn'];
    $klasse = $_POST['klasse'];
    $bordnr = $_POST['bordnr'];
    $billetnr = $_POST['billetnr'];
    $password = $_POST['password'];
    $mail = $_POST['mail'];
    $type = $_POST['type'];

    $sql = "INSERT INTO users (navn,klasse,bordnr,billetnr,password,mail,type)
            VALUES ('$navn','$klasse','$bordnr','$billetnr','$password', '$mail','$type')";
    echo $sql;
    $add_user = mysqli_query($connect,$sql);
    header('location: users.php');
  }


?>
