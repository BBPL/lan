<?php 
	include_once 'connect.php';
	include_once 'functions.php';

	$key = $_GET['key'];
	$array = array();

	$sql = "SELECT navn, user_id FROM users WHERE navn LIKE '%$key%'";
	$get_navn = mysqli_query($connect,$sql);
	while($q = mysqli_fetch_assoc($get_navn)){
		$array[] = $q['navn'];
	}

	echo json_encode($array);


?>