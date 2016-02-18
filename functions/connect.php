<?php

	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'ltglan';

	$connect = mysqli_connect($servername, $username, $password, $dbname);

	if(!$connect)die('No connection to database ' . mysqli_error());

?>